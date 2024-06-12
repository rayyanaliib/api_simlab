<?php
$koneksi = new mysqli('localhost', 'root', '', 'peminjaman_db');

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

$nama_ruangan = $_POST['nama_ruangan'];
$kapasitas = $_POST['kapasitas'];


$sql = "INSERT INTO ruangan (nama_ruangan, kapasitas) 
        VALUES ('$nama_ruangan', '$kapasitas')";

if ($koneksi->query($sql) === TRUE) {
    echo json_encode(['pesan' => 'Sukses']);
} else {
    echo json_encode(['pesan' => 'Gagal']);
}

$koneksi->close();
?>
