<?php
/**
 * site/api/git-deploy.php
 * 「主機端自動 pull 部署」—— 由 Cloudways Cron(Type php,每 5 分)在主機上跑:
 *   從 GitHub pull 最新 repo,把 site/ 同步進 webroot(public_html)。
 *
 * 為什麼(2026-06-27):Cloudways 對 GitHub 機房 IP「HTTP 415 + SSH timeout」兩條路都會偶擋,
 *   害 workflow 自己的 rsync 部署失敗、書沒上線。但「主機自己 → GitHub」是乾淨連線、永遠不被擋。
 *   所以改成主機自己 pull:workflow 只要 git push 成功(這條從沒被擋),最遲 5 分鐘主機就把它同步上線,
 *   不論 workflow 自己的部署成不成功。徹底繞過 415 / SSH ban。
 *
 * 安全/相容:
 *   - 只准 CLI(擋 web 直接打)。
 *   - clone 放 private_html/repo(不在 webroot、不會被爬)。用 config-tg.php 的 PAT 認證私有 repo。
 *   - rsync 不帶 --delete:只更新 repo 有的檔,主機獨有的(config.php / config-tg.php / 上傳資產 /
 *     private_html 的 tg-queue.json)一律保留不動。與 deploy.sh 行為一致。
 *   - 寫 deploy 心跳到隊列狀態,可用 ?action=status 的 deploy_ago_secs / deploy_commit / deploy_rc 遠端驗證。
 */

if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    echo "git-deploy: CLI only\n";
    exit(1);
}

require_once __DIR__ . '/tg-queue-lib.php';   // 內含 config-tg.php → $GH_DISPATCH_PAT、heartbeat 函式

$appDir  = dirname(__DIR__, 2);                       // ~/applications/<app>
$clone   = $appDir . '/private_html/repo';            // 私有區放 clone
$webroot = dirname(__DIR__);                          // public_html(= site/ 部署目標)
$pat     = isset($GH_DISPATCH_PAT) ? $GH_DISPATCH_PAT : '';
// /lens 已搬到公開 repo painpoint-lens(網站原始碼也在那)→ 主機自動部署改從這裡拉。
// 公開 repo 用不用 PAT 都能 clone;PAT 留著無害。
$repoUrl = 'https://x-access-token:' . $pat . '@github.com/icasinotw/painpoint-lens.git';

$note = '';
$rc   = -1;

if ($pat === '') {
    q_deploy_heartbeat('', 1, 'no-PAT');
    echo "git-deploy: 沒有 PAT,略過\n";
    exit(1);
}

// 自癒:若既有 clone 的來源 repo 換了(例:從 pain-point-book 搬到公開的 painpoint-lens)→ 砍掉重 clone。
// 由「擁有此 clone 的 cron 使用者」執行才有刪除權限;砍掉後下面就走「首次 clone」分支拉新 repo。
if (is_dir($clone . '/.git')) {
    $curOrigin = trim((string)@shell_exec('cd ' . escapeshellarg($clone) . ' && git remote get-url origin 2>/dev/null'));
    if ($curOrigin !== '' && strpos($curOrigin, 'painpoint-lens') === false) {
        @exec('rm -rf ' . escapeshellarg($clone) . ' 2>&1');
        $note = 'repoint→painpoint-lens;';
    }
}

if (!is_dir($clone . '/.git')) {
    // 首次:淺層 clone(只要最新)
    @mkdir($clone, 0755, true);
    @exec('git clone --quiet --depth 1 ' . escapeshellarg($repoUrl) . ' ' . escapeshellarg($clone) . ' 2>&1', $o1, $rc);
    $note .= 'clone';
} else {
    // 之後:fetch + hard reset 到 origin/main(部署用 clone,永遠對齊遠端、不會有合併衝突)
    @exec('cd ' . escapeshellarg($clone)
        . ' && git fetch --quiet --depth 1 origin main 2>&1'
        . ' && git reset --hard --quiet origin/main 2>&1', $o2, $rc);
    $note = 'pull';
}

$commit = trim((string)@shell_exec('cd ' . escapeshellarg($clone) . ' && git rev-parse --short HEAD 2>/dev/null'));

// 診斷:cron 是哪個身分、webroot 既有檔是誰擁有(權限撞車就靠這判斷怎麼修)
$me = function_exists('posix_geteuid') ? (posix_getpwuid(posix_geteuid())['name'] ?? (string)posix_geteuid()) : trim((string)@shell_exec('whoami'));
$sample = $webroot . '/index.php';
$owner = (file_exists($sample) && function_exists('posix_getpwuid'))
    ? (posix_getpwuid(@fileowner($sample))['name'] ?? (string)@fileowner($sample)) : '?';
$diag = "me={$me},owner={$owner} ";

// git 成功 + clone 的 site/ 在 → 同步進 webroot(不 --delete)
$rsyncRc = -1;
if ($rc === 0 && is_dir($clone . '/site')) {
    @exec('rsync -rt --no-perms --omit-dir-times --exclude=' . escapeshellarg('.DS_Store') . ' '
        . escapeshellarg($clone . '/site/') . ' ' . escapeshellarg($webroot . '/') . ' 2>&1', $o3, $rsyncRc);
    if ($rsyncRc === 0) {
        $note .= '+sync';
    } else {
        // 把 rsync 的退出碼 + 最後幾行錯誤塞進 note,方便遠端從 status 看出為什麼失敗
        $errTail = substr(trim(implode(' / ', array_slice($o3, -4))), -200);
        $note .= '+sync-fail(rc' . $rsyncRc . ':' . $errTail . ')';
    }
} else {
    $note .= '+git-fail';
}

q_deploy_heartbeat($commit, ($rc === 0 && $rsyncRc === 0) ? 0 : 1, $diag . $note);
echo date('c') . " git-deploy commit={$commit} git_rc={$rc} rsync_rc={$rsyncRc} note={$note}\n";
