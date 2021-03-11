<?php

include 'koneksi.php';
$nama = $_POST['nama'];
$tingkat = $_POST['tingkat'];
$umur = $_POST['umur'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];
$bahasa = $_POST['bahasa'];
$about = $_POST['about'];

mysqli_query($koneksi, "UPDATE bioadmin SET nama='$nama', tingkat='$tingkat', umur='$umur', email='$email', telepon='$telepon', alamat='$alamat', bahasa='$bahasa', about='$about'");

echo "<script>alert('Data admin sukses di update');</script>";
header("location:updateprofiladmin.php");
