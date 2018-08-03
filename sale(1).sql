-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 30 Jul 2018 pada 04.19
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(5) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat_cust` varchar(50) NOT NULL,
  `noktp_cust` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `noktp_cust`) VALUES
(12, 'Diana Avriani', 'Jl Mawar no 23 Depok Sleman', 2147483647),
(13, 'Arya Budiono', 'Jl Anggrek no 26  Sleman', 2147483647),
(16, 'Muhammad Hidayat', 'Jl Bakung No 34 jogja', 2147483647),
(17, 'Harya Bima', 'Jl Teratai no 41 Sleman', 34098754);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `id_jual` int(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `id_cust` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id_jual`, `id_produk`, `nama_produk`, `qty`, `harga_produk`, `id_cust`, `tanggal`) VALUES
(34, 'MYM', 'Migicom Yong Ma', 1, 600000, 13, '2018-07-29'),
(35, 'MCS', 'Mesin Cuci Sharp', 1, 2000000, 12, '2018-07-29'),
(37, 'KAM', 'Kipas Angin Miyako', 1, 500000, 16, '2018-07-29'),
(38, 'MYM', 'Migicom Yong Ma', 1, 600000, 17, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tersedia`
--

CREATE TABLE `tersedia` (
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `stok_produk` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tersedia`
--

INSERT INTO `tersedia` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`) VALUES
('KAM', 'Kipas Angin Miyako', 500000, 9),
('KLG', 'Kulkas LG', 3000000, 10),
('MCS', 'Mesin Cuci Sharp', 2000000, 10),
('MYM', 'Migicom Yong Ma', 600000, 9),
('TS', 'Televisi Sharp', 2500000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tersedia`
--
ALTER TABLE `tersedia`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `id_jual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
