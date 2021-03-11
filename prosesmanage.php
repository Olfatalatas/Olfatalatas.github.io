<?php

include 'koneksi.php';
if (isset($_POST["send"])) {
    $nama = $_POST["nama"];
    $jasa = $_POST["jasa"];
    $bayar = $_POST["bayar"];
    $status = $_POST["status"];

    $koneksi->query("UPDATE pemesanan SET status='$status' WHERE nama='$nama'");
    echo "<script>alert('Data pemesanan sukses di update');</script>";
    echo "<script>location='tables.php';</script>";
}
