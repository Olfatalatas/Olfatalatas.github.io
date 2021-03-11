<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM login_admin WHERE username='$username' ";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($hasil);


if ($passmd == $data['password']) {
	$_SESSION['username'] = $data['username'];


	echo "<script type='text/javascript'>
					 alert('Username/Password Salah');
					 document.location.href='loginadmin.php';
					</script>";
} else {
	echo "<script type='text/javascript'>
					alert('Login Sukses');
					document.location.href='dashboard.php';
				   </script>";
}
