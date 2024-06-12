<?php
$koneksi = new mysqli('localhost', 'root', '', 'peminjaman_db');

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}

$peminjaman_id = $_POST['peminjaman_id'];
$kapasitas = $_POST['kapasitas'];

$sql = "UPDATE ruangan SET kapasitas='$kapasitas' WHERE id='$peminjaman_id'";

if ($koneksi->query($sql) === TRUE) {
    echo json_encode(['pesan' => 'Sukses']);
} else {
    echo json_encode(['pesan' => 'Gagal', 'error' => $koneksi->error]);
}

$koneksi->close();
?>
