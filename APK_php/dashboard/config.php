
<?php
// Konfigurasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'akademik_db');

// Konfigurasi Aplikasi
define('SITE_NAME', 'Dashboard Akademik');
define('BASE_URL', 'http://localhost/dashboard/');
define('TAHUN_AKADEMIK', 'GENAP 2025/2026');

// Koneksi Database (jika diperlukan)
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>