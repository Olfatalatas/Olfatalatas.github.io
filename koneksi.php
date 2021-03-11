<?php
$host = "localhost";
$user = "root";
$password = "123";
$database = "db_anyjobs";
$koneksi = mysqli_connect($host, $user, $password);
$db_koneksi = mysqli_select_db($koneksi, $database);
if (!$koneksi) {
	echo "KONEKSI DATABASE GAGAL!!!";
}
