<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$username = $_GET['username'];


// menghapus data dari database
mysqli_query($koneksi, "DELETE FROM login WHERE username='$username'");

// mengalihkan halaman kembali ke index.php
header("location:tables.php");
echo "<script>alert('Data user sukses dihapus');</script>";
