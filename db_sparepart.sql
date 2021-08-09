-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 08.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sparepart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mesin`
--

CREATE TABLE `tb_mesin` (
  `id_mesin` varchar(3) NOT NULL,
  `jam_op` float NOT NULL,
  `down_time` float NOT NULL,
  `target_down` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mesin`
--

INSERT INTO `tb_mesin` (`id_mesin`, `jam_op`, `down_time`, `target_down`) VALUES
('A1', 525, 2, 1.5),
('A2', 525, 3, 1.5),
('A3', 525, 3, 1.5),
('A4', 525, 2, 1.5),
('A5', 525, 1.5, 1.5),
('B1', 525, 2.5, 1.5),
('B2', 525, 2, 1.5),
('B3', 525, 2, 1.5),
('B4', 525, 4, 1.5),
('B5', 525, 3, 1.5),
('C1', 525, 1.5, 1.5),
('C2', 525, 2, 1.5),
('C3', 525, 2, 1.5),
('C4', 525, 3, 1.5),
('C5', 525, 4.5, 1.5),
('D1', 525, 3, 1.5),
('D2', 525, 2.5, 1.5),
('D3', 525, 2, 1.5),
('D4', 525, 2.5, 1.5),
('D5', 525, 3, 1.5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sparepart`
--

CREATE TABLE `tb_sparepart` (
  `kd_part` char(7) NOT NULL,
  `nama_part` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `saldo_awal` int(4) NOT NULL,
  `masuk` int(4) NOT NULL,
  `keluar` int(4) NOT NULL,
  `saldo_akhir` int(4) NOT NULL,
  `stock_minimal` int(4) NOT NULL,
  `keterangan` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sparepart`
--

INSERT INTO `tb_sparepart` (`kd_part`, `nama_part`, `type`, `saldo_awal`, `masuk`, `keluar`, `saldo_akhir`, `stock_minimal`, `keterangan`) VALUES
('ACC 001', 'Accumulator', 'AT00354', 10, 15, 12, 13, 3, 'OK'),
('BER 001', 'Bearing', '6203zz', 12, 12, 15, 9, 3, 'OK'),
('RED 001', 'Reed (Sisir)', 'EX45re', 13, 10, 15, 8, 10, 'PESAN ULANG'),
('SPR 001', 'Spring (peer) gun', 'Sp7773', 21, 2, 23, 0, 5, 'PESAN ULANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `admin`, `user`) VALUES
('Alexander Tommy Kurniawan', 'alex', '534b44a19bf18d20b71ecc4eb77c572f', 1, 0),
('Iman Muhdi', 'iman', '5be9a68073f66a56554e25614e9f1c9a', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_sparepart`
--
ALTER TABLE `tb_sparepart`
  ADD PRIMARY KEY (`kd_part`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
