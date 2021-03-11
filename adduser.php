<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$pengacak = "p3ng4c4k";

$passmd = md5($pengacak . md5($password));

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO login VALUES('$username','$email','$passmd')");

// mengalihkan halaman kembali ke index.php
echo "<script>alert('Data user sukses ditambahkan');</script>";
header("location:tables.php");
