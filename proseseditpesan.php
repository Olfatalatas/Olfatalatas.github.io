<?php

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$lokasi = $_POST['lokasi'];
$tujuan = $_POST['tujuan'];
$jasa = $_POST['jasa'];
$bayar = $_POST['bayar'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];

mysqli_query($koneksi, "UPDATE pemesanan SET nama='$nama', telepon='$telepon', lokasi='$lokasi', tujuan='$tujuan', jasa='$jasa', bayar='$bayar', tanggal='$tanggal', waktu='$waktu' WHERE id_pemesanan='$id'");

echo "<script>alert('Data pemesanan sukses di update');</script>";
header("location:tables.php");
