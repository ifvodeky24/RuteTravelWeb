-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 11:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `angkutan_rute`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `authKey` varchar(30) NOT NULL,
  `accesToken` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `foto`, `authKey`, `accesToken`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'foto.jpg', 'dsd3sFadaD', 'dsd3sFadaD', '2021-03-02 11:43:14', '2021-03-02 11:43:14'),
(2, 'rio', 'admin', 'Rio Aja', 'naruto.jpg', 'dggfhhg', 'ghfgdfferefdfdf', '2021-03-02 13:09:54', '2021-03-02 13:09:54'),
(3, 'doi', '123456', 'Rio Aja', 'dew.jpg', '', 'ghfgdfferefdfdf', '2021-03-02 15:28:58', '2021-03-02 15:28:58'),
(4, 'bobo', '$2y$13$RMv4kUIz2Qx3dQ.rGqfCAuADLLS0D/pclrvuNClHGDKbFUdjlodUq', 'Bobo Loh', 'naruto.jpg', 'wXdSIxvU5iljemV_NmLQ7Yqw9r3YXa', 'lHThpx2trai43MnhB4RfqhPlJvFD_W', '2021-03-02 15:37:54', '2021-03-02 15:37:54'),
(5, 'bibi', '$2y$13$RzpvQ5T5MIDokxcyTpYEKOlemeJxoH3/OuNmFmzURvK6w7dYPCKMu', 'Bibi Aja', 'naruto.jpg', 'dggfhhg', 'ghfgdfferefdfdf', '2021-03-02 15:51:21', '2021-03-02 15:51:21'),
(6, 'dulu', '$2y$13$xrRQbOFAGc26gAA2CwzPdez1VB8orkK81pwTh6RgjmZpkRERpihgy', 'Dulu Yuk', 'dew.jpg', 'gCdQS6DgYiE6w761BGcb5iWeyhuB9y', 'ghfgdfferefdfdf', '2021-03-02 16:43:28', '2021-03-02 16:43:28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jam` enum('7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22') NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `jam`, `hari`, `created_at`, `updated_at`) VALUES
(1, '9', 'Senin', '2021-03-02 11:45:14', '2021-03-02 11:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kondisi_jalan`
--

CREATE TABLE `tb_kondisi_jalan` (
  `id_kondisi_jalan` int(11) NOT NULL,
  `nama_lokasi` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kondisi_jalan`
--

INSERT INTO `tb_kondisi_jalan` (`id_kondisi_jalan`, `nama_lokasi`, `foto`, `tanggal`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Kebaoran', 'jalan-berlubang.jpg', '2021-03-10', -6.260675593817946, 106.79361533946157, 'heiii rawan', '2021-03-02 11:46:23', '2021-03-02 11:46:23'),
(2, 'paris', 'jalan-berlubang.jpg', '2021-03-02', -6.261065587154393, 106.79444147228647, 'heu', '2021-03-12 08:01:34', '2021-03-12 08:01:34'),
(3, 'tesss', 'paper-plane.png', '2021-03-25', -6.2604568169406996, 106.79443190318038, 'heu', '2021-03-12 08:37:35', '2021-03-12 08:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `id_trayek` int(11) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `pimpinan` varchar(30) NOT NULL,
  `nomor_handphone` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `website` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `id_trayek`, `nama_perusahaan`, `foto`, `pimpinan`, `nomor_handphone`, `alamat_perusahaan`, `website`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 1, 'heis', 'perusahaan.jpg', 'hei loh yaaa', '08323233', 'jalan narasina', 'ssfd', 'dfdf', 'dfdfdf', '2021-03-02 12:17:47', '2021-03-02 12:17:47'),
(2, 1, 'perusahan beras', 'perusahaan.jpg', 'naaa', '2434', 'sdfdf', 'ssfsfsfsfsf', 'sfsfsfsfsf', 'sfsfsfsfsf', '2021-03-02 12:50:21', '2021-03-02 12:50:21'),
(3, 1, 'perusahan beras', 'perusahaan.jpg', 'naaa', '082383396914', 'Jalan Kuantan Timur No 215', 'ssfsfsfsfsf', 'sfsfsfsfsf', 'sfsfsfsfsf', '2021-03-12 07:52:13', '2021-03-12 07:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trayek`
--

CREATE TABLE `tb_trayek` (
  `id_trayek` int(11) NOT NULL,
  `nama_trayek` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `grid_rute` varchar(30) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_trayek`
--

INSERT INTO `tb_trayek` (`id_trayek`, `nama_trayek`, `asal`, `tujuan`, `id_jadwal`, `grid_rute`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jalan 1', 'surabaya', 'makassar', 1, 'tes', 'Aktif', '2021-03-02 12:16:32', '2021-03-02 12:16:32'),
(2, 'jalan jalan', 'bangkinang', 'pekanbaru', 1, 'rute trans', 'Aktif', '2021-03-02 12:59:52', '2021-03-02 12:59:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_kondisi_jalan`
--
ALTER TABLE `tb_kondisi_jalan`
  ADD PRIMARY KEY (`id_kondisi_jalan`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `id_trayek` (`id_trayek`);

--
-- Indexes for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  ADD PRIMARY KEY (`id_trayek`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kondisi_jalan`
--
ALTER TABLE `tb_kondisi_jalan`
  MODIFY `id_kondisi_jalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  MODIFY `id_trayek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD CONSTRAINT `tb_perusahaan_ibfk_1` FOREIGN KEY (`id_trayek`) REFERENCES `tb_trayek` (`id_trayek`);

--
-- Constraints for table `tb_trayek`
--
ALTER TABLE `tb_trayek`
  ADD CONSTRAINT `tb_trayek_ibfk_1` FOREIGN KEY (`id_jadwal`) REFERENCES `tb_jadwal` (`id_jadwal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
