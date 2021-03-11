<?php

include 'koneksi.php';
$nama = $_POST['name'];
$telepon = $_POST['phone'];
$lokasi = $_POST['location'];
$tujuan = $_POST['destination'];
$jasa = $_POST['service'];
$bayar = $_POST['price'];
$tanggal = $_POST['date'];
$waktu = $_POST['time'];

mysqli_query($koneksi, "UPDATE pemesanan SET nama='$nama', telepon='$telepon', lokasi='$lokasi', tujuan='$tujuan', jasa='$jasa', bayar='$bayar', tanggal='$tanggal', waktu='$waktu' WHERE nama='$nama'");

header("location:riwayatpesan.php");
echo "<script>alert('Data pemesanan sukses di update');</script>";
