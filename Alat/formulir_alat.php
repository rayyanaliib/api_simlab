<?php
$koneksi = new mysqli('localhost', 'root', '', 'peminjaman_db');

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

$nama_alat = $_POST['nama_alat'];
$jumlah_alat = $_POST['jumlah_alat'];
$kondisi_alat = $_POST['kondisi_alat'];


$sql = "INSERT INTO alat (nama_alat, jumlah_alat, kondisi_alat) 
        VALUES ('$nama_alat', '$jumlah_alat', '$kondisi_alat')";

if ($koneksi->query($sql) === TRUE) {
    echo json_encode(['pesan' => 'Sukses']);
} else {
    echo json_encode(['pesan' => 'Gagal']);
}

$koneksi->close();
?>
