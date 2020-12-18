-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Des 2020 pada 12.49
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finabil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporangood_receipt`
--

CREATE TABLE `laporangood_receipt` (
  `id` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ammount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporangood_receipt`
--

INSERT INTO `laporangood_receipt` (`id`, `tanggal`, `nama`, `ammount`) VALUES
(1, '2020-11-25', 'Fatin', 3000000),
(2, '2020-11-26', 'fatin', 6000000),
(5, '2020-11-27', 'jojo', 80000),
(6, '2020-11-27', 'gigi', 70000),
(7, '2020-11-01', '', 20000),
(8, '2020-11-01', 'Xixi', 35000),
(9, '2020-11-01', '', 35000),
(10, '2020-12-17', 'Fatin', 78000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpengeluaran_gaji`
--

CREATE TABLE `laporanpengeluaran_gaji` (
  `id` int(20) NOT NULL,
  `tanggal` date NOT NULL,
  `namadivisi` varchar(100) NOT NULL,
  `ammount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporanpengeluaran_gaji`
--

INSERT INTO `laporanpengeluaran_gaji` (`id`, `tanggal`, `namadivisi`, `ammount`) VALUES
(1, '2020-11-26', 'SDM', 1300000),
(2, '2020-11-28', 'SDM', 90000),
(3, '2020-11-27', 'SDM', 90000),
(4, '2020-12-03', 'IT', 90000),
(6, '2020-11-23', 'production', 80000),
(7, '2020-11-23', 'production', 80000),
(8, '2020-11-23', 'production', 80000),
(10, '2020-11-23', 'production', 80000),
(11, '2020-11-01', 'procurement', 20000),
(12, '2020-11-01', '', 35000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanpengeluaran_reimbursment`
--

CREATE TABLE `laporanpengeluaran_reimbursment` (
  `id` int(11) NOT NULL,
  `idpegawai` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `namapegawai` varchar(100) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL,
  `ammount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporanpengeluaran_reimbursment`
--

INSERT INTO `laporanpengeluaran_reimbursment` (`id`, `idpegawai`, `tanggal`, `namapegawai`, `kebutuhan`, `ammount`) VALUES
(1, 0, '2020-11-25', 'kiki', 'blabla', 7000),
(2, 923202, '2020-12-05', 'baba', 'yeye', 200000),
(3, 0, '2020-11-01', '', '', 35000),
(4, 192, '2020-11-01', 'Aji', 'BU', 35000),
(5, 192, '2020-11-01', 'Aji', 'BU', 35000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `laporangood_receipt`
--
ALTER TABLE `laporangood_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanpengeluaran_gaji`
--
ALTER TABLE `laporanpengeluaran_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanpengeluaran_reimbursment`
--
ALTER TABLE `laporanpengeluaran_reimbursment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporangood_receipt`
--
ALTER TABLE `laporangood_receipt`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporanpengeluaran_gaji`
--
ALTER TABLE `laporanpengeluaran_gaji`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `laporanpengeluaran_reimbursment`
--
ALTER TABLE `laporanpengeluaran_reimbursment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
