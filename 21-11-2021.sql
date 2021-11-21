-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 08:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nip_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `tanggal`, `id_siswa`, `nip_guru`) VALUES
(2, '2021-11-21', 3, 45213);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `nip`, `alamat`, `email`, `no_hp`) VALUES
(1, 'Fiersa besari', '20013434534', 'Jakarta', 'fiersa@gmail.com', '851235567112'),
(2, 'Tiara Andini', '20013434432', 'Bandung', 'tiara@gmail.com', '851235567332'),
(6, 'sasuke', '45213', 'jalan imam bonjol gang mimbar no.72 singaraja, bali', 'sadfeaf@afd', '081246504639'),
(7, 'naruto', '5123', 'jalan imam bonjol gang mimbar no.72 singaraja, bali', 'naruto@gmail.com', '081246504639'),
(8, 'anang', '231', 'bogor', 'anang@gmail.com', '089999999'),
(9, 'Bagas', '200513246656', 'Jl. Melati', 'bag12dwi.s@gmail.com', '082233664451');

--
-- Triggers `guru`
--
DELIMITER $$
CREATE TRIGGER `add_user_guru` AFTER INSERT ON `guru` FOR EACH ROW INSERT INTO users (username, nama, password, level)

SELECT nip, nama, nip, 'guru' FROM guru ORDER BY id DESC LIMIT 1
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_user_guru` BEFORE DELETE ON `guru` FOR EACH ROW DELETE FROM users WHERE users.username = OLD.nip
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `wali_kelas` varchar(100) NOT NULL,
  `jumlah_murid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`, `wali_kelas`, `jumlah_murid`) VALUES
(1, '6', 'Endank Nurhayati', '30'),
(2, '2', 'Juhairi Wong', '24'),
(3, '3', 'sasuke', '32'),
(4, '5', 'Budiwati', '32'),
(5, '1', 'Tiara Andini', '52'),
(6, '4', 'anang', '11');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'PPKn'),
(5, 'olahraga'),
(7, 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `jenis_penilaian` varchar(255) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `jenis_penilaian`, `id_siswa`, `nama_siswa`, `id_kelas`, `id_guru`, `semester`, `id_mapel`, `nilai`) VALUES
(7, 'Ulangan Harian', 3, 'bagas', 3, 45213, 'Ganjil', 1, 70),
(8, 'UAS', 3, 'bagas', 3, 45213, 'Ganjil', 2, 90),
(9, 'UTS', 3, 'bagas', 3, 45213, 'Ganjil', 1, 70),
(10, 'Ulangan Harian', 5, 'M. Kahfi Djardjani', 3, 45213, 'Ganjil', 2, 90),
(11, 'Ulangan Harian', 3, 'bagas', 3, 45213, 'Ganjil', 1, 80),
(12, 'Ulangan Harian', 3, 'bagas', 3, 45213, 'Ganjil', 2, 80),
(13, 'Ulangan Harian', 3, 'bagas', 3, 45213, 'Ganjil', 2, 90),
(14, 'UTS', 5, 'M. Kahfi Djardjani', 3, 45213, 'Ganjil', 1, 90),
(15, 'UAS', 3, 'bagas', 3, 45213, 'Ganjil', 7, 80);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `kelas`, `alamat`, `no_hp`) VALUES
(1, 'andre', '54321', '4', 'kenjeran', '0897777'),
(2, 'kholiqul', '54213', '2', 'ponorogo', '0986524567'),
(3, 'bagas', '4567', '3', 'rungkut', '145656'),
(5, 'M. Kahfi Djardjani', '20001322034', '3', 'jl. Mawar, Jakarta ', '0822342324934'),
(6, 'Fairuz', '5000352', '3', 'jl. Mawar, Jakarta ', '08555466565');

--
-- Triggers `siswa`
--
DELIMITER $$
CREATE TRIGGER `add_user_siswa` AFTER INSERT ON `siswa` FOR EACH ROW INSERT INTO users (username, nama, password, level)

SELECT siswa.nis, siswa.nama, siswa.nis, 'siswa' FROM siswa
ORDER BY id DESC LIMIT 1
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_user_siswa` BEFORE DELETE ON `siswa` FOR EACH ROW DELETE FROM users WHERE users.username = OLD.nis
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `level`) VALUES
(1, '20013434534', 'Fiersa besari', '20013434534', 'guru'),
(2, '20013434432', 'Tiara Andini', '20013434432', 'guru'),
(4, 'admin', 'admin1', 'admin123', 'admin'),
(7, '45213', 'sasuke', '45213', 'guru'),
(8, '5123', 'naruto', '5123', 'guru'),
(9, '231', 'anang', '231', 'guru'),
(12, '20001322034', 'M. Kahfi Djardjani', '20001322034', 'siswa'),
(13, '200513246656', 'Bagas', '200513246656', 'guru'),
(14, '5000352', 'Fairuz', '5000352', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kelas` (`kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
