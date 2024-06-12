<?php
$koneksi = new mysqli('localhost', 'root', '', 'peminjaman_db');

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

$kategori = $_POST['kategori'];
$detail_peminjaman = $_POST['detail_peminjaman'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$keperluan = $_POST['keperluan'];
$status_peminjaman = $_POST['status_peminjaman'];

$sql = "INSERT INTO formulir (kategori, detail_peminjaman, tanggal_peminjaman, tanggal_pengembalian, keperluan, status_peminjaman) 
        VALUES ('$kategori', '$detail_peminjaman', '$tanggal_peminjaman', '$tanggal_pengembalian', '$keperluan', '$status_peminjaman')";

if ($koneksi->query($sql) === TRUE) {
    echo json_encode(['pesan' => 'Sukses']);
} else {
    echo json_encode(['pesan' => 'Gagal']);
}

$koneksi->close();
?>
