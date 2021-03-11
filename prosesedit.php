<?php

include 'koneksi.php';
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$passmd = sha1($password);


mysqli_query($koneksi, "UPDATE login SET username='$username', email='$email', password='$passmd' WHERE username='$username'");

echo "<script>alert('Data user sukses di update');</script>";
header("location:tables.php");
