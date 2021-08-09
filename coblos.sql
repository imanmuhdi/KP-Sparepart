-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 12:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coblos`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE `calon` (
  `id_calon` int(2) NOT NULL,
  `nama_calon` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `suara` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id_calon`, `nama_calon`, `foto`, `visi`, `misi`, `suara`) VALUES
(5, 'Nurhadi - Aldo', 'http://[::1]/Teknologi-web/assets/image/calon/Nurhadi_-_Aldo.png', 'Tranjal', 'Tronjol', 5),
(6, 'Prabowo Subianto - Sandiaga Uno', 'http://[::1]/Teknologi-web/assets/image/calon/Prabowo_Subianto_-_Sandiaga_Uno.jpg', 'Terwujudnya Bangsa dan Negara Republik Indonesia yang adil, makmur, religius, dan bermartabat dalam bingkai persatuan berdasarkan Pancasila dan UUD 1945.', '1. Membangun perekonimian nasional yang adil, makmur, berwawasan lingkungan melalui jalan politik-ekonomi sesuai amanat konstitusi.\r\n2. Membangun masyarakat Indonesia yang sehat, cerdas, produktif dan unggul dalam kehidupan yang aman dan terlindungi jaminan sosial.\r\n3. Membangun keadilan dan HAM, memberantas korupsi, serta memperkuat persatuan bangsa melalui penegakkan hukum dan jalan demokrasi yang berkualitas.\r\n4. Membangun sistem keselamatan, keamanan, dan pertahanan nasional, untuk menjaga keutuhan NKRI dan melindungi segenap warga Indonesia, baik di dalam negeri maupun di luar negeri.\r\n5. Membangun kembali dan memperkuat nilai-nilai luhur kepribadian bangsa yang beradab, religius dan dirahmati Tuhan Yang Maha Esa.', 7),
(7, 'Joko Widodo - Maruf Amin', 'http://[::1]/Teknologi-web/assets/image/calon/Joko_Widodo_-_Maruf_Amin.jpg', 'Terwujudnya Indonesia maju yang berdaulat, mandiri, dan berkepribadian, berlandaskan gotong-royong', '1. Peningkatan Kualitas Manusia Indonesia\r\n2. Struktur Ekonomi Yang Produktif, Mandiri, dan Berdaya Saing\r\n3. Pembangunan Yang Merata dan Berkeadilan\r\n4. Mencapai Lingkungan Hidup Yang Berkelanjutan\r\n5. Kemajuan Budaya yang Mencerminkan Kepribadian Bangsa\r\n6. Penegakan Sistem Hukum yang Bebas Korupsi, Bermartabat, dan Terpercaya\r\n7. Perlindungan Bagi Segenap Bangsa dan Memberikan Rasa Aman pada Seluruh Warga\r\n8. Pengelolaan Pemerintahan yang Bersih, Efektif, dan Terpercaya\r\n9. Sinergi Pemerintah Daerah dalam Kerangka Negara Kesatuan', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NIK` char(16) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` text NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `Akses` tinyint(1) NOT NULL,
  `Vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NIK`, `Nama`, `Email`, `Password`, `Foto`, `admin`, `Akses`, `Vote`) VALUES
('1234123412341234', 'Fulan Vulkan', 'reza@gmail.com', 'f91e15dbec69fc40f81f0876e7009648', 'http://[::1]/Teknologi-web/assets/image/ktp/1234123412341234_Fulan_Vulkan.jpg', 0, 1, 5),
('1234567890123456', 'Muhammad Reza Azzahrawan', 'muhamadreza_2@yahoo.com', '8dd43ae0638e1ce2690e2e3cfa653923', 'http://[::1]/tekweb/assets/image/1234567890123456_Muhammad_Reza_Azzahrawan.jpg', 1, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
  ADD PRIMARY KEY (`id_calon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon`
--
ALTER TABLE `calon`
  MODIFY `id_calon` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
