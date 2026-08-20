<?php
/**
 * Test koneksi MySQL + setup database bapenda
 * Akses: http://bapenda.test/db_test.php
 * HAPUS setelah selesai!
 */
$host = 'localhost';

// Coba beberapa kombinasi password umum Laragon
$credentials = [
    ['root', ''],
    ['root', 'root'],
    ['root', '123123123'],
    ['root', 'laragon'],
];

$pdo = null;
$usedPass = '';

foreach ($credentials as [$user, $pass]) {
    try {
        $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $usedPass = $pass === '' ? '(kosong)' : $pass;
        break;
    } catch (PDOException $e) {
        $pdo = null;
    }
}

if (!$pdo) {
    echo '<h2 style="color:red;font-family:sans-serif">Semua koneksi gagal</h2>';
    echo '<p>Pastikan MySQL Laragon sudah berjalan dan coba restart Laragon.</p>';
    exit;
}

echo "<h2 style='font-family:sans-serif;color:green'>Koneksi berhasil! Password: <b>$usedPass</b></h2>";

// Baca dan jalankan SQL
$sqlFile = __DIR__ . '/../setup_local.sql';
if (!file_exists($sqlFile)) {
    echo "<p style='color:red'>File setup_local.sql tidak ditemukan di: $sqlFile</p>";
    exit;
}

$sql = file_get_contents($sqlFile);

// Split per statement
$statements = [];
$current = '';
foreach (explode("\n", $sql) as $line) {
    $trimmed = trim($line);
    if (strpos($trimmed, '--') === 0 || $trimmed === '') continue;
    $current .= $line . "\n";
    if (substr(rtrim($line), -1) === ';') {
        $stmt = trim($current);
        if ($stmt !== '') $statements[] = $stmt;
        $current = '';
    }
}

$ok = 0; $fail = 0; $errors = [];
foreach ($statements as $stmt) {
    try {
        $pdo->exec($stmt);
        $ok++;
    } catch (PDOException $e) {
        // Abaikan "already exists" errors
        $msg = $e->getMessage();
        if (strpos($msg, 'already exists') !== false || strpos($msg, 'Duplicate entry') !== false) {
            $ok++; // sudah ada = tidak apa-apa
        } else {
            $fail++;
            $errors[] = '<li><b style="color:red">' . htmlspecialchars($msg) . '</b><br><small>' . htmlspecialchars(substr($stmt, 0, 100)) . '</small></li>';
        }
    }
}

echo "<p style='font-family:sans-serif'>Statements dijalankan: <b>$ok</b> | Error: <b>$fail</b></p>";
if ($errors) echo '<ul>' . implode('', $errors) . '</ul>';

// Tampilkan tabel yang ada
try {
    $tables = $pdo->query("SHOW TABLES FROM bapenda")->fetchAll(PDO::FETCH_COLUMN);
    echo '<h3 style="font-family:sans-serif">Tabel di database <em>bapenda</em> (' . count($tables) . ' tabel):</h3>';
    echo '<ul style="font-family:monospace">' . implode('', array_map(fn($t) => "<li>$t</li>", $tables)) . '</ul>';

    // Tampilkan user
    $users = $pdo->query("SELECT username, role_id FROM bapenda.user")->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3 style="font-family:sans-serif">User login tersedia:</h3>';
    echo '<table border=1 cellpadding=8 style="font-family:monospace;border-collapse:collapse">';
    echo '<tr style="background:#eee"><th>username</th><th>role_id</th><th>password</th></tr>';
    foreach ($users as $u) {
        echo "<tr><td>{$u['username']}</td><td>{$u['role_id']}</td><td>password</td></tr>";
    }
    echo '</table>';
} catch (PDOException $e) {
    echo '<p style="color:red">' . htmlspecialchars($e->getMessage()) . '</p>';
}

// Tampilkan password yang berhasil untuk update config
echo "<hr><h3 style='font-family:sans-serif'>Update config jika perlu:</h3>";
echo "<pre style='background:#f0f0f0;padding:10px'>Password MySQL root: <b>$usedPass</b>

Sesuaikan di:
- public/application/config/database.php  → 'password' => '$usedPass'
- public/loginwebsite/app/config/database.php → sudah benar jika password kosong
</pre>";

echo "<p style='font-family:sans-serif;color:red'><b>PENTING: Hapus file db_test.php setelah selesai!</b></p>";
?>
