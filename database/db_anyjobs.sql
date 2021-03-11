-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2021 pada 09.23
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anyjobs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bioadmin`
--

CREATE TABLE `bioadmin` (
  `nama` varchar(500) NOT NULL,
  `tingkat` varchar(500) NOT NULL,
  `umur` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` varchar(200) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `bahasa` varchar(500) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bioadmin`
--

INSERT INTO `bioadmin` (`nama`, `tingkat`, `umur`, `email`, `telepon`, `alamat`, `bahasa`, `about`) VALUES
('Olfat Alatas', 'Web Developer/Student', '18', 'olfatalatas@gmail.com', '+6289683586173', 'Jl.Raya Langsep 25, Malang, Indonesia', 'Indonesian, Javanese, English', 'Hai my name is Olfat Harits Alatas. Im a Student and a Web Developer at SMKN 4 Malang.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(12) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`) VALUES
(7, 'profil.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subjek`, `pesan`, `tanggal`) VALUES
(1, 'Olfat Harits Alatas', 'olfatharits@gmail.com', 'Reaksi', 'B aja', '2021-01-28 03:29:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak_admin`
--

CREATE TABLE `kontak_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak_admin`
--

INSERT INTO `kontak_admin` (`id`, `nama`, `subjek`, `email`, `pesan`, `tanggal`) VALUES
(1, 'Olfat Harits Alatas', 'Reaksi', 'olfatharits@gmail.com', 'Bodoh', '2021-01-28 13:08:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `email`, `password`) VALUES
('Olfatalatas', 'olfatalatas@gmail.com', '9dc713a1771b70122d1661e7b582db55e13d7d3a'),
('ridhok', 'rrr@gmail.com', 'b7b975da6a95a9e891efad76d30b43b75a267911');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`username`, `password`) VALUES
('Olfatharits', 'olfatharits');

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `newsletter`
--

INSERT INTO `newsletter` (`email`, `tanggal`) VALUES
('olfatharits@gmail.co', '2021-01-18 07:56:08'),
('olfatharits@gmail.com', '2021-01-28 03:29:08'),
('olfthrts@gmail.com', '2021-01-18 07:56:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jasa` varchar(500) NOT NULL,
  `bayar` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `opsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pemesanan`, `nama`, `jasa`, `bayar`, `tanggal`, `waktu`, `opsi`) VALUES
(5, 'Olfat', 'Membelikan Kue', '100.000', '2021-01-27', '12:10:00', 'DANA'),
(7, 'Jono', 'Mengantar Paket', '100.000', '2021-01-27', '12:00:00', 'OVO'),
(12, 'Olfat James', 'Membersihkan garasi', '200.000', '2021-01-28', '09:00:00', 'BCA'),
(13, 'Bayu', 'Membelikan Kue', '100.000', '2021-01-29', '10:20:00', 'OVO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email_pemesan` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `tujuan` varchar(200) NOT NULL,
  `jasa` text NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `acc` varchar(100) NOT NULL DEFAULT 'Pending',
  `selesai` varchar(200) NOT NULL DEFAULT 'Pending',
  `bukti` varchar(200) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama`, `email_pemesan`, `telepon`, `lokasi`, `tujuan`, `jasa`, `bayar`, `tanggal`, `waktu`, `status`, `acc`, `selesai`, `bukti`) VALUES
(5, 'Olfat', 'rrr@gmail.com', '089683586173', 'Jl. Ijen', 'Jl. Raya Langsep 25', 'Membelikan Kue', '100.000', '2021-01-27', '12:10:00', 'Lunas', 'olfatalatas@gmail.com', 'Selesai', 'pic2.jpg.jpg'),
(7, 'Jono', 'olfatalatas@gmail.com', '087676523986', 'Jl. Ijen', 'Jl. Raya Langsep 25', 'Mengantar Paket', '100.000', '2021-01-27', '12:00:00', 'Lunas', 'rrr@gmail.com', 'Selesai', 'pic3.jpg.jpg'),
(12, 'Olfat James', 'olfatalatas@gmail.com', '089264924728', 'Jl. Ijen', 'Jl. Raya Langsep 25', 'Membersihkan garasi', '200.000', '2021-01-28', '09:00:00', 'Lunas', 'rrr@gmail.com', 'Dibatalkan', ''),
(13, 'Bayu', 'olfatalatas@gmail.com', '087676523986', 'Jl. Galunggung', 'Jl. Jakarta', 'Membelikan Kue', '100.000', '2021-01-29', '10:20:00', 'Lunas', 'rrr@gmail.com', 'Selesai', 'pic1.jpg.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`username`, `fullname`, `telepon`, `mobile`, `email`, `alamat`) VALUES
('Olfatalatas', 'Olfat Harits Alatas', '+6289683586173', '089683586173', 'olfatalatas@gmail.com', 'Jl.Raya Langsep 25, Malang, Indonesia'),
('ridhok', 'Ridhok tolol', '+6289683586173', '089683586173', 'rrr@gmail.com', 'Jl.Raya Langsep');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak_admin`
--
ALTER TABLE `kontak_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kontak_admin`
--
ALTER TABLE `kontak_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
