<?php
// Pengaturan koneksi database
$host = 'localhost';  // Nama host server (biasanya localhost untuk XAMPP)
$user = 'root';       // Username default XAMPP
$password = '';       // Password kosong jika belum diubah
$database = 'tekom_2b';  // Nama database yang ingin dihubungkan

try {
    // Membuat koneksi dengan PDO
    $dsn = "mysql:host=$host;dbname=$database";  // Data Source Name (DSN)
    $db = new PDO($dsn, $user, $password);
    
    // Menyiapkan pengaturan untuk menangani error
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi berhasil!";
} catch (PDOException $e) {
    // Menangani error jika koneksi gagal
    die("Koneksi gagal: " . $e->getMessage());
}
?>
