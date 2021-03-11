<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM login WHERE username='$username' ";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($hasil);
$passmd = sha1($password);
if ($passmd == $data['password']) {
	$_SESSION['username'] = $data['username'];
	$_SESSION['email'] = $data['email'];

	echo "<script type='text/javascript'>
					 alert('Login Sukses');
					 document.location.href='home.php';
					</script>";
} else {
	echo "<script type='text/javascript'>
					 alert('Username/Password salah');
					 document.location.href='login.php';
					</script>";
}
