-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Agu 2021 pada 09.10
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id_mesin` char(3) CHARACTER SET utf8mb4 NOT NULL,
  `jam_op` float NOT NULL,
  `down_time` float NOT NULL,
  `target_down` float NOT NULL,
  `type_m` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `merk_m` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `no_m` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mesin`
--

INSERT INTO `tb_mesin` (`id_mesin`, `jam_op`, `down_time`, `target_down`, `type_m`, `merk_m`, `no_m`, `tahun`) VALUES
('A1', 525, 2, 1.5, 'Jacquard Rapier', 'Somet', 'SM000124', 1998),
('A2', 525, 3, 1.5, 'Jacquard Rapier', 'Somet', 'SM000125', 1998),
('A3', 525, 3, 1.5, 'Jacquard Rapier', 'Somet', 'SM000126', 1998),
('A4', 525, 2, 1.5, 'Jacquard Rapier', 'Somet', 'SM000127', 1998),
('A5', 525, 1.5, 1.5, 'Jacquard Rapier', 'Somet', 'SM234566', 2000),
('B1', 525, 2.5, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324244', 2017),
('B2', 525, 2, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324245', 2017),
('B3', 525, 2, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324246', 2017),
('B4', 525, 4, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324247', 2017),
('B5', 525, 3, 1.5, 'Jacquard Rapier', 'Optimax', 'OX444532', 2018),
('C1', 525, 1.5, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 0092123', 2004),
('C2', 525, 2, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 0092124', 2004),
('C3', 525, 2, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 123339', 2005),
('C4', 525, 3, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 2138742', 2006),
('C5', 525, 4.5, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC333353T', 2007),
('D1', 525, 3, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111343', 2009),
('D2', 525, 2.5, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111345', 2009),
('D3', 525, 2, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111348', 2009),
('D4', 525, 2.5, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111349', 2009),
('D5', 525, 3, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111356', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perbaikan1`
--

CREATE TABLE `tb_perbaikan1` (
  `no` int(11) NOT NULL,
  `id_mesin` char(3) NOT NULL,
  `kd_part` char(7) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perbaikan1`
--

INSERT INTO `tb_perbaikan1` (`no`, `id_mesin`, `kd_part`, `deskripsi`) VALUES
(1, 'A3', 'BER-001', 'perbaikan tanggal ...');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perbaikan2`
--

CREATE TABLE `tb_perbaikan2` (
  `no` int(11) NOT NULL,
  `id_mesin` char(3) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perbaikan2`
--

INSERT INTO `tb_perbaikan2` (`no`, `id_mesin`, `instansi`, `deskripsi`) VALUES
(1, 'B1', '42324', 'sdsdasd');

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
  `keterangan` char(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sparepart`
--

INSERT INTO `tb_sparepart` (`kd_part`, `nama_part`, `type`, `saldo_awal`, `masuk`, `keluar`, `saldo_akhir`, `stock_minimal`, `keterangan`, `foto`) VALUES
('ACC-001', 'Accumulator', 'AT00354', 10, 16, 12, 13, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/1.png'),
('BER-001', 'Bearing', '6203zz', 12, 12, 15, 9, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/2.png'),
('CRD-001', 'Cable rebound', 'R00012', 10, 5, 5, 10, 3, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Cable_rebound.png'),
('DRP-001', 'Gun / Dropper', 'G453t', 100, 120, 145, 75, 3, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Gun_Dropper.png'),
('GRP-001', 'Gripper', 'GT0321', 15, 12, 18, 9, 3, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Gripper.png'),
('HRS-001', 'Tali harness', 'H00021', 150, 100, 220, 30, 25, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Tali_harness.png'),
('MOD-001', 'MODUL', 'Mo 3442', 17, 12, 18, 11, 8, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/MODUL.png'),
('OGB-001', 'Oli gear box', 'SAE 40', 200, 200, 120, 280, 50, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Oli_gear_box.png'),
('OMC-001', 'Oli mesin', 'SAE 20', 200, 200, 250, 150, 50, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Oli_mesin.png'),
('PUL-001', 'Pulley modul', 'LX342', 20, 10, 25, 5, 4, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Pulley_modul.png'),
('RED-001', 'Reed (Sisir)', 'EX45re', 13, 10, 15, 8, 10, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/3.png'),
('RPT-001', 'Rapier tape', 'R02124', 12, 21, 20, 13, 10, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Rapier_tape.png'),
('RRO-001', 'Rubber band ( karet roll)', 'Rb 1342', 15, 15, 15, 15, 10, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Rubber_band_(_karet_roll).png'),
('SPR-001', 'Spring (peer) gun', 'Sp7773', 21, 2, 23, 0, 5, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Spring_(peer)_gun1.png'),
('VBL-001', 'Vanbelt', 'VBL 023', 15, 17, 20, 12, 5, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Vanbelt.png'),
('WBC-002', 'Waste cutter blade', 'Wtc8i12', 13, 4, 10, 7, 5, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Waste_cutter_blade.png');

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
-- Indexes for table `tb_mesin`
--
ALTER TABLE `tb_mesin`
  ADD PRIMARY KEY (`id_mesin`);

--
-- Indexes for table `tb_perbaikan1`
--
ALTER TABLE `tb_perbaikan1`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_mesin` (`id_mesin`) USING BTREE,
  ADD KEY `kd_part` (`kd_part`) USING BTREE;

--
-- Indexes for table `tb_perbaikan2`
--
ALTER TABLE `tb_perbaikan2`
  ADD PRIMARY KEY (`no`),
  ADD KEY `id_mesin` (`id_mesin`) USING BTREE;

--
-- Indexes for table `tb_sparepart`
--
ALTER TABLE `tb_sparepart`
  ADD PRIMARY KEY (`kd_part`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_perbaikan1`
--
ALTER TABLE `tb_perbaikan1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_perbaikan2`
--
ALTER TABLE `tb_perbaikan2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_perbaikan1`
--
ALTER TABLE `tb_perbaikan1`
  ADD CONSTRAINT `tb_perbaikan1_ibfk_1` FOREIGN KEY (`kd_part`) REFERENCES `tb_sparepart` (`kd_part`),
  ADD CONSTRAINT `tb_perbaikan1_ibfk_2` FOREIGN KEY (`id_mesin`) REFERENCES `tb_mesin` (`id_mesin`);

--
-- Ketidakleluasaan untuk tabel `tb_perbaikan2`
--
ALTER TABLE `tb_perbaikan2`
  ADD CONSTRAINT `tb_perbaikan2_ibfk_1` FOREIGN KEY (`id_mesin`) REFERENCES `tb_mesin` (`id_mesin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
