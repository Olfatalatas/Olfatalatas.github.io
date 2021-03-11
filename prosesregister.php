<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];


if ($password === $password2) {
    include "koneksi.php";

    $passmd = sha1($password2);

    $query = "INSERT INTO login VALUES ('$username','$email','$passmd')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {

        echo "<script type='text/javascript'>
					 alert('Akun berhasil terdaftar');
					 document.location.href='login.php';
					</script>";
    } else {
        echo "<script type='text/javascript'>
					 alert('Username sudah ada yang memiliki');
					 document.location.href='register.php';
					</script>";
    }
} else {
    echo "<script type='text/javascript'>
					 alert('Password yang anda masukkan tidak sama');
					 document.location.href='register.php';
					</script>";
}
