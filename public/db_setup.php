<?php
/**
 * Setup database lokal BAPENDA
 * Akses sekali via browser: http://bapenda.test/db_setup.php
 * Hapus file ini setelah selesai!
 */

$host = 'localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = file_get_contents(__DIR__ . '/../setup_local.sql');

    // Jalankan tiap statement satu per satu
    $statements = array_filter(
        array_map('trim', explode(';', $sql)),
        function($s) { return $s !== '' && !preg_match('/^--/', $s); }
    );

    $ok = 0; $fail = 0; $errors = [];
    foreach ($statements as $stmt) {
        if (trim($stmt) === '') continue;
        try {
            $pdo->exec($stmt);
            $ok++;
        } catch (PDOException $e) {
            $fail++;
            $errors[] = '<li><code>' . htmlspecialchars(substr($stmt, 0, 80)) . '...</code><br><b>' . htmlspecialchars($e->getMessage()) . '</b></li>';
        }
    }

    echo '<h2 style="font-family:sans-serif;color:green">Setup Selesai</h2>';
    echo "<p>Berhasil: <b>$ok</b> | Gagal: <b>$fail</b></p>";
    if ($errors) {
        echo '<ul style="color:red">' . implode('', $errors) . '</ul>';
    }

    // Verifikasi tabel user
    $tables = $pdo->query("SHOW TABLES FROM bapenda")->fetchAll(PDO::FETCH_COLUMN);
    echo '<h3 style="font-family:sans-serif">Tabel di database <em>bapenda</em>:</h3>';
    echo '<ul style="font-family:monospace">';
    foreach ($tables as $t) echo "<li>$t</li>";
    echo '</ul>';

    // Verifikasi user admin
    $u = $pdo->query("SELECT username, role_id FROM bapenda.user LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
    echo '<h3 style="font-family:sans-serif">User tersedia:</h3>';
    echo '<table border=1 cellpadding=6 style="font-family:monospace;border-collapse:collapse">';
    echo '<tr><th>username</th><th>role_id</th></tr>';
    foreach ($u as $row) echo "<tr><td>{$row['username']}</td><td>{$row['role_id']}</td></tr>";
    echo '</table>';
    echo '<p style="font-family:sans-serif;color:#555">Password default: <b>password</b></p>';
    echo '<p style="font-family:sans-serif;color:red"><b>Hapus file db_setup.php setelah ini!</b></p>';

} catch (PDOException $e) {
    echo '<h2 style="color:red;font-family:sans-serif">Koneksi Gagal</h2>';
    echo '<pre>' . htmlspecialchars($e->getMessage()) . '</pre>';
    echo '<p style="font-family:sans-serif">Pastikan MySQL Laragon sudah berjalan (klik Start di Laragon).</p>';
}
