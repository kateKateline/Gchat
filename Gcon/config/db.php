<?php
$host = "localhost";   // server database
$user = "root";        // username MySQL (default: root)
$pass = "";            // password MySQL (isi jika ada)
$db   = "gcon";        // nama database

// buat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// opsional: set charset ke utf8 biar aman untuk karakter spesial
$conn->set_charset("utf8");
