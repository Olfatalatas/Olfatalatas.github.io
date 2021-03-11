<?php
$koneksi = mysqli_connect("localhost", "root", "123", "db_anyjobs");
$ambil = $koneksi->query("SELECT * FROM galeri WHERE id_galeri='$_GET[id_galeri]'");
$pecah = $ambil->fetch_assoc();
$profil_admin = $pecah['foto'];
if (file_exists("profil_admin/$profil_admin")) {
    unlink("profil_admin/$profil_admin");
}

$koneksi->query("DELETE FROM galeri WHERE id_galeri='$_GET[id_galeri]'");

echo "<script>alert('Data terhapus');</script>";
echo "<script>location='tables.php'</script>";
