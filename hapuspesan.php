<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");

// mengalihkan halaman kembali ke index.php
header("location:riwayatpesan.php");
echo "<script>alert('Data pemesanan sukses dihapus');</script>";
