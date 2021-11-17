-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Nov 2021 pada 09.05
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
  `target_down` float NOT NULL,
  `type_m` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `merk_m` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `no_m` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `tahun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mesin`
--

INSERT INTO `tb_mesin` (`id_mesin`, `jam_op`, `target_down`, `type_m`, `merk_m`, `no_m`, `tahun`) VALUES
('A1', 525, 1.5, 'Jacquard Rapier', 'Somet', 'SM000124', 1998),
('A2', 525, 1.5, 'Jacquard Rapier', 'Somet', 'SM000125', 1998),
('A3', 525, 1.5, 'Jacquard Rapier', 'Somet', 'SM000126', 1998),
('A4', 525, 1.5, 'Jacquard Rapier', 'Somet', 'SM000127', 1998),
('A5', 525, 1.5, 'Jacquard Rapier', 'Somet', 'SM234566', 2000),
('B1', 525, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324244', 2017),
('B2', 525, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324245', 2017),
('B3', 525, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324246', 2017),
('B4', 525, 1.5, 'Jacquard Rapier', 'Optimax', 'OX324247', 2017),
('B5', 525, 1.5, 'Jacquard Rapier', 'Optimax', 'OX444532', 2018),
('C1', 525, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 0092123', 2004),
('C2', 525, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 0092124', 2004),
('C3', 525, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 123339', 2005),
('C4', 525, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC 2138742', 2006),
('C5', 525, 1.5, 'Jacquard Air Jet', 'Picanol', 'PC333353T', 2007),
('D1', 525, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111343', 2009),
('D2', 525, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111345', 2009),
('D3', 525, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111348', 2009),
('D4', 525, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111349', 2009),
('D5', 525, 1.5, 'Jacquard Rapier', 'Gama', 'GM 1111356', 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perbaikan1`
--

CREATE TABLE `tb_perbaikan1` (
  `no` int(11) NOT NULL,
  `id_mesin` char(3) NOT NULL,
  `merk_m` varchar(30) NOT NULL,
  `kd_part` char(7) NOT NULL,
  `type` varchar(30) NOT NULL,
  `jml_part` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `perbaikan` varchar(30) NOT NULL,
  `hasil` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `oleh` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `d_time` float NOT NULL,
  `penyetuju` varchar(30) NOT NULL,
  `pelaksana` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perbaikan1`
--

INSERT INTO `tb_perbaikan1` (`no`, `id_mesin`, `merk_m`, `kd_part`, `type`, `jml_part`, `deskripsi`, `deskripsi2`, `perbaikan`, `hasil`, `lokasi`, `oleh`, `tgl`, `mulai`, `selesai`, `d_time`, `penyetuju`, `pelaksana`) VALUES
(57, 'A1', 'Somet', 'MOD-001', 'Mo 3442', 1, 'Modul jaquard error', 'Program error', 'MOD 001 Ganti', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-02', '10:30:00', '15:45:00', 5.25, 'Mat Rohim', 'Sutrisno'),
(58, 'A2', 'Somet', 'BER-001', '6203zz', 1, 'Bearing bersuara', 'Bearing Aus', 'Ganti Bearing', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-06', '10:30:00', '17:30:00', 7, 'Mat Rohim', 'Sutrisno'),
(59, 'B4', 'Optimax', 'GRP-001', 'GT0321', 1, 'Lusi Sering Putus', 'Gripper Aus', 'Ganti Gripper', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-08', '10:00:00', '12:00:00', 2, 'Mat Rohim', 'Sutrisno'),
(60, 'B4', 'Optimax', 'VBL-001', 'VBL 023', 1, 'Van Belt Slip', 'Van Belt Aus', 'Ganti Van Belt', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-10', '10:00:00', '00:00:00', 14, 'Mat Rohim', 'Sutrisno'),
(61, 'C2', 'Picanol', 'WBC-002', 'Wtc8i12', 1, 'Pinggiran Kain tak rata', 'Cutter Tumpul', 'Ganti waste cutter blade', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-12', '15:00:00', '17:30:00', 2.5, 'Mat Rohim', 'Sutrisno'),
(62, 'B5', 'Optimax', 'CRD-001', 'R00012', 1, 'Pisau potong tumpul', 'Cutter tumpul', 'Ganti Waste Cutter Blade', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-12', '11:20:00', '00:20:00', 13, 'Mat Rohim', 'Sutrisno'),
(63, 'A3', 'Picanol', 'BER-001', '6203zz', 1, 'Bearing Rusak', 'Bearing Aus', 'Ganti Bearing', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-11', '10:00:00', '15:00:00', 5, 'Mat Rohim', 'Sutrisno'),
(64, 'A4', 'Somet', 'OGB-001', 'SAE 40', 1, 'Gear Macet', 'Kurang Oli', 'Beri Oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-13', '15:15:00', '15:25:00', 0.166667, 'Mat Rohim', 'Sutrisno'),
(65, 'A5', 'Somet', 'OMC-001', 'SAE 20', 1, 'Suara mesin keras', 'Kurang Oli', 'Ganti Oli', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-15', '09:20:00', '10:30:00', 1.16667, 'Mat Rohim', 'Sutrisno'),
(66, 'B1', 'Optimax', 'RED-001', 'EX45re', 1, 'Kain tidak simetris', 'Reed Patah', 'Ganti Reed', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-19', '13:40:00', '19:00:00', 5.33333, 'Mat Rohim', 'Sutrisno'),
(67, 'B2', 'Optimax', 'PUL-001', 'LX342', 1, 'Program tidak jalan', 'Puley modul berkarat', 'gantu puley modul', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-20', '09:05:00', '15:12:00', 6.11667, 'Mat Rohim', 'Sutrisno'),
(68, 'B3', 'Optimax', 'RPT-001', 'R02124', 1, 'Badan mesin mengelupas', 'Baut lepas', 'Pasang tape sementara', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-17', '08:00:00', '17:00:00', 9, 'Mat Rohim', 'Sutrisno'),
(69, 'C1', 'Picanol', 'WBC-002', 'Wtc8i12', 1, 'Kain tidak terpotong', 'cutter tumpul', 'ganti cutter', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-16', '09:40:00', '00:30:00', 14.8333, 'Mat Rohim', 'Sutrisno'),
(70, 'C2', 'Picanol', 'VBL-001', 'VBL 023', 1, 'Van Belt Slip', 'Van Belt Aus', 'Ganti van Belt', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-18', '13:00:00', '15:00:00', 2, 'Mat Rohim', 'Sutrisno'),
(71, 'C3', 'Picanol', 'HRS-001', 'H00021', 1, 'mesin berjalan pelan', 'tali aus', 'ganti tali harness', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-20', '08:35:00', '00:01:00', 15.4333, 'Mat Rohim', 'Sutrisno'),
(72, 'C4', 'Picanol', 'OGB-001', 'SAE 40', 10, 'gear bersuara', 'oli berdebu', 'ganti oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-17', '00:00:00', '16:00:00', 16, 'Mat Rohim', 'Sutrisno'),
(73, 'D5', 'Gama', 'OGB-001', 'SAE 40', 12, 'Gear Bersuara', 'Oli gear berdebu', 'beri oli', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-15', '09:40:00', '11:59:00', 2.31667, 'Mat Rohim', 'Sutrisno'),
(74, 'C5', 'Picanol', 'GRP-001', 'GT0321', 1, 'Lusi sering putus ', 'Gripper aus\r\n', 'Ganti Gripper', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-20', '11:20:00', '15:10:00', 3.83333, 'Mat Rohim', 'Sutrisno'),
(75, 'D3', 'Gama', 'MOD-001', 'Mo 3442', 1, 'Program Error', 'Modul Jaquard Error', 'MOD 001 Ganti', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-22', '10:00:00', '16:00:00', 6, 'Mat Rohim', 'Sutrisno'),
(76, 'D1', 'Gama', 'RRO-001', 'Rb 1342', 1, 'mesin konslet', 'kabel konslet', 'solatip kabel', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-23', '13:50:00', '16:02:00', 2.2, 'Mat Rohim', 'Sutrisno'),
(77, 'D2', 'Gama', 'RED-001', 'EX45re', 1, 'Kain berantakan', 'Reed rusak', 'ganti reed', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-26', '11:00:00', '15:00:00', 4, 'Mat Rohim', 'Sutrisno'),
(78, 'D4', 'Gama', 'PUL-001', 'LX342', 1, 'pulley rusak', 'pulley rusak', 'ganti pulley', 'OK', 'Weaving 1B', 'Tarmiji', '2021-11-29', '13:00:00', '15:00:00', 2, 'Mat Rohim', 'Sutrisno'),
(79, 'A1', 'Somet', 'RED-001', 'EX45re', 1, 'Kain tidak rapih', 'reed lecet', 'ganti reed', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-02', '11:00:00', '15:25:00', 4.41667, 'Mat Rohim', 'Sutrisno'),
(80, 'A2', 'Somet', 'RED-001', 'EX45re', 1, 'Kain tidak rapih ', 'reed lecet ', 'ganti reed', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-04', '09:23:00', '10:00:00', 0.616667, 'Mat Rohim', 'Sutrisno'),
(81, 'A3', 'Somet', 'BER-001', '6203zz', 1, 'Bearing rusak', 'bearing aus', 'ganti bearing', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-05', '22:45:00', '17:00:00', 18.25, 'Mat Rohim', 'Sutrisno'),
(82, 'A3', 'Somet', 'HRS-001', 'H00021', 1, 'kurang tali', 'tali harness habis ', 'tambah tali harness', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-07', '11:45:00', '15:00:00', 3.25, 'Mat Rohim', 'Sutrisno'),
(83, 'B1', 'Optimax', 'DRP-001', 'G453t', 10, 'Dropper Rusak', 'Dropper Rusak', 'Ganti dropper', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-16', '09:40:00', '00:00:00', 14.3333, 'Mat Rohim', 'Sutrisno'),
(84, 'A4', 'Somet', 'OGB-001', 'SAE 40', 1, 'oli bocor ', 'baut kurang pas', 'isi ulang oli', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-30', '11:00:00', '00:00:00', 13, 'Mat Rohim', 'Sutrisno'),
(85, 'A5', 'Somet', 'DRP-001', 'G453t', 1, 'Dropper lepas', 'bagian dropper rusak', 'ganti dropper', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-26', '13:00:00', '15:00:00', 2, 'Mat Rohim', 'Sutrisno'),
(86, 'B2', 'Optimax', 'OMC-001', 'SAE 20', 1, 'mesin macet', 'oli habis', 'isi ulang oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-15', '17:00:00', '21:00:00', 4, 'Mat Rohim', 'Sutrisno'),
(87, 'B3', 'Optimax', 'OMC-001', 'SAE 20', 1, 'mesin lambat', 'kurang oli', 'tambah oli mesin', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-29', '11:45:00', '13:00:00', 1.25, 'Mat Rohim', 'Sutrisno'),
(88, 'B4', 'Optimax', 'VBL-001', 'VBL 023', 1, 'Lusi Sering putus', 'Vanbelt lepas', 'Ganti vanbelt', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-23', '11:00:00', '14:30:00', 3.5, 'Mat Rohim', 'Sutrisno'),
(89, 'B5', 'Optimax', 'RRO-001', 'Rb 1342', 1, 'kabel tertukar', 'karet roll hilang', 'ganti karet roll', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-30', '09:00:00', '10:00:00', 1, 'Mat Rohim', 'Sutrisno'),
(90, 'C1', 'Picanol', 'OGB-001', 'SAE 40', 1, 'gear macet', 'oli gear kurang', 'tambah oli gear', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-15', '09:33:00', '13:20:00', 3.78333, 'Mat Rohim', 'Sutrisno'),
(91, 'C2', 'Picanol', 'DRP-001', 'G453t', 1, 'Dropper lepas', 'dropper rusak', 'ganti dropper', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-25', '10:00:00', '00:00:00', 14, 'Mat Rohim', 'Sutrisno'),
(92, 'C3', 'Picanol', 'CRD-001', 'R00012', 1, 'kurang kabel rebound', 'kurang kabel rebound', 'tambah kabel', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-17', '09:00:00', '10:40:00', 1.66667, 'Mat Rohim', 'Sutrisno'),
(93, 'C4', 'Picanol', 'OGB-001', 'SAE 40', 1, 'mesin lambat', 'kurang oli mesin', 'tambah oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-16', '11:09:00', '17:00:00', 5.85, 'Mat Rohim', 'Sutrisno'),
(94, 'C5', 'Picanol', 'OMC-001', 'SAE 20', 1, 'gear macet', 'kurang oli', 'tambah oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-05', '10:12:00', '11:00:00', 0.8, 'Mat Rohim', 'Sutrisno'),
(95, 'D1', 'Gama', 'OMC-001', 'SAE 20', 1, 'kurang oli', 'kurang oli', 'tambah oli', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-01', '10:00:00', '00:00:00', 14, 'Mat Rohim', 'Sutrisno'),
(96, 'D2', 'Gama', 'DRP-001', 'G453t', 1, 'Gripper patah', 'gripper rusak', 'ganti gripper', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-19', '10:40:00', '13:43:00', 3.05, 'Mat Rohim', 'Sutrisno'),
(97, 'D3', 'Gama', 'OMC-001', 'SAE 20', 1, 'kurang oli', 'kurang oli', 'tambah oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-11-08', '10:00:00', '11:00:00', 1, 'Mat Rohim', 'Sutrisno'),
(98, 'D3', 'Gama', 'OMC-001', 'SAE 20', 1, 'Kurang oli', 'kurang oli', 'tambah oli', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-06', '10:00:00', '11:00:00', 1, 'Mat Rohim', 'Sutrisno'),
(99, 'D4', 'Gama', 'HRS-001', 'H00021', 1, 'tali harness kurang', 'tali kurang', 'tambah tali', 'OK', 'Weaving 1B', 'Tarmiji', '2021-10-27', '13:00:00', '13:00:00', 24, 'Mat Rohim', 'Sutrisno'),
(100, 'D5', 'Gama', 'OMC-001', 'SAE 20', 1, 'kurang oli', 'kurang oli', 'tambah oli', 'OK', 'Weaving 1B', 'Suhenda', '2021-10-23', '13:55:00', '17:00:00', 3.08333, 'Mat Rohim', 'Sutrisno');

--
-- Trigger `tb_perbaikan1`
--
DELIMITER $$
CREATE TRIGGER `perbaikan1` AFTER INSERT ON `tb_perbaikan1` FOR EACH ROW BEGIN
   UPDATE tb_sparepart
   SET saldo_akhir = saldo_akhir - NEW.jml_part
   WHERE kd_part = NEW.kd_part;
   
   UPDATE tb_sparepart
   SET keluar = keluar + NEW.jml_part
   WHERE kd_part = NEW.kd_part;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perbaikan2`
--

CREATE TABLE `tb_perbaikan2` (
  `no` int(11) NOT NULL,
  `id_mesin` char(3) NOT NULL,
  `merk_m` varchar(30) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `d_kerusakan` varchar(30) NOT NULL,
  `d_penyebab` varchar(30) NOT NULL,
  `d_perbaikan` varchar(30) NOT NULL,
  `pengaju` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `penyetuju` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perbaikan2`
--

INSERT INTO `tb_perbaikan2` (`no`, `id_mesin`, `merk_m`, `instansi`, `d_kerusakan`, `d_penyebab`, `d_perbaikan`, `pengaju`, `tanggal`, `penyetuju`) VALUES
(21, 'A3', 'Somet', 'Hydropower Abadi', 'banyak lubang di kain', 'sensor error', 'ganti sensor', 'Suhenda', '2021-11-13', 'Mat Rohim'),
(22, 'B4', 'Optimax', 'Toko Tiga', 'mesin tidak jalan', 'Gear utama rusak', 'ganti gear  utama', 'Suhenda', '2021-11-19', 'Mat Rohim'),
(23, 'D3', 'Gama', 'Jati Mandiri', 'tombol tidak jalan', 'Monitor pecah', 'ganti monitor', 'Tarmiji', '2021-11-15', 'Mat Rohim'),
(24, 'C1', 'Picanol', 'Denpoo', 'kain tidak simetris', 'Besi Pengaman bengkok', 'las besi pengaman', 'Tarmiji', '2021-11-29', 'Mat Rohim'),
(25, 'B2', 'Optimax', 'Hydropower Abadi', 'mesin tidak jalan', 'roller meleleh', 'ganti roller', 'Suhenda', '2021-10-15', 'Mat Rohim'),
(26, 'C2', 'Picanol', 'Denpoo', 'Sorter tidak berfungsi', 'dalaman sorter berkarat', 'ganti sorter', 'Tarmiji', '2021-09-10', 'Mat Rohim'),
(27, 'B5', 'Optimax', 'Toko Tiga', 'mesin jatuh', 'Kerangka mesin patah', 'pasang kerangka kembali', 'Suhenda', '2021-09-27', 'Mat Rohim'),
(28, 'D1', 'Gama', 'Jati Mandiri', 'Mesin tidak jalan', 'Grip rusak', 'ganti grip', 'Tarmiji', '2021-10-09', 'Mat Rohim'),
(29, 'A4', 'Somet', 'Jati Mandiri', 'kain tidak simetris', 'Stabillizer miring', 'perbaikan stabillizer', 'Suhenda', '2021-08-13', 'Mat Rohim'),
(30, 'C3', 'Picanol', 'Denpoo', 'Program error', 'badan mesin penyok', 'dempul badan mesin', 'Suhenda', '2021-10-31', 'Mat Rohim');

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
('ACC-001', 'Accumulator', 'AT00354', 10, 60, 52, 18, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Accumulator1.png'),
('BER-001', 'Bearing', '6203zz', 12, 15, 27, 0, 3, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Bearing1.png'),
('CRD-001', 'Cable rebound', 'R00012', 10, 10, 9, 11, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Cable_rebound2.png'),
('DRP-001', 'Gun / Dropper', 'G453t', 100, 120, 181, 39, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Gun_Dropper.png'),
('GRP-001', 'Gripper', 'GT0321', 15, 12, 23, 4, 3, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Gripper1.png'),
('HRS-001', 'Tali harness', 'H00021', 150, 200, 232, 118, 25, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Tali_harness1.png'),
('MOD-001', 'MODUL', 'Mo 3442', 17, 12, 20, 9, 8, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/MODUL1.png'),
('OGB-001', 'Oli gear box', 'SAE 40', 200, 200, 146, 254, 50, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Oli_gear_box1.png'),
('OMC-001', 'Oli mesin', 'SAE 20', 200, 200, 300, 100, 50, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Oli_mesin.png'),
('PUL-001', 'Pulley modul', 'LX342', 20, 10, 30, 0, 4, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Pulley_modul1.png'),
('RED-001', 'Reed (Sisir)', 'EX45re', 13, 10, 22, 1, 10, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/3.png'),
('RPT-001', 'Rapier tape', 'R02124', 12, 21, 23, 10, 10, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Rapier_tape.png'),
('RRO-001', 'Rubber band ( karet roll)', 'Rb 1342', 15, 15, 19, 11, 10, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Rubber_band_(_karet_roll).png'),
('SPR-001', 'Spring (peer) gun', 'Sp7773', 21, 10, 27, 4, 5, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Spring_(peer)_gun1.png'),
('VBL-001', 'Vanbelt', 'VBL 023', 15, 17, 25, 7, 5, 'OK', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Vanbelt.png'),
('WBC-002', 'Waste cutter blade', 'Wtc8i12', 13, 10, 20, 3, 5, 'PESAN ULANG', 'http://[::1]/KP-Sparepart/assets/image/sparepart/Waste_cutter_blade1.png');

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
  ADD KEY `id_mesin` (`id_mesin`) USING BTREE,
  ADD KEY `merk_m` (`merk_m`);

--
-- Indexes for table `tb_sparepart`
--
ALTER TABLE `tb_sparepart`
  ADD PRIMARY KEY (`kd_part`),
  ADD KEY `type` (`type`);

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `tb_perbaikan2`
--
ALTER TABLE `tb_perbaikan2`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
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
