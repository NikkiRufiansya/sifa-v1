-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2021 at 09:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sifa-v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(250) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telepone` varchar(20) DEFAULT NULL,
  `gelar` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `foto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `users_id`, `nama`, `nik`, `agama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `email`, `telepone`, `gelar`, `jenis_kelamin`, `foto`) VALUES
(3, 12, 'Dosen IT', '39722908475832', 'islam', 'banyuwangi', 'Malang', '1992-02-02', 'dosen1@mail.com', '0812345678', 'S2 Ilmu Komputer', 'pria', 'default_profile.png'),
(4, 24, 'Dosen Kecantikan', '0348293749327', 'islam', 'Malang', 'Banyuwangi', '2021-07-06', 'dosen2@gmail.com', '08123332434234', 'S2', 'wanita', 'default_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_institusi`
--

CREATE TABLE `identitas_institusi` (
  `id` int(11) NOT NULL,
  `kode_hukum` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama_identitas` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telepone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `no_akta` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `no_sah` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_sah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `identitas_institusi`
--

INSERT INTO `identitas_institusi` (`id`, `kode_hukum`, `nama_identitas`, `tanggal_mulai`, `alamat`, `kota`, `kode_pos`, `telepone`, `fax`, `email`, `website`, `no_akta`, `no_sah`, `tanggal_sah`) VALUES
(2, '58/KPT/I/2019', 'AK Darussalam Blokagung', '2010-02-09', 'Jl. Ponpes Darussalam Blokagung Karangdoro Tegalsari', 'Banyuwangi', '68495', '(0333) 12345678', '(0333) 12345678', 'info@akd.ac.id', 'http://akd.ac.id/', '58/KPT/I/2019', '58/KPT/I/2019', '2019-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kuliah`
--

CREATE TABLE `jadwal_kuliah` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `matkul_id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `jadwal_masuk` time NOT NULL,
  `jadwal_selesai` time NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `kampus_id` varchar(100) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kuliah`
--

INSERT INTO `jadwal_kuliah` (`id`, `prodi_id`, `program_id`, `matkul_id`, `tahun`, `hari`, `jadwal_masuk`, `jadwal_selesai`, `nama_kelas`, `kampus_id`, `ruangan`, `dosen`) VALUES
(1, 3, 2, 1, 2021, 'kamis', '13:00:00', '15:24:00', 'Pemprograman Dasar 1', '2', 'TI1', 'Dosen IT'),
(2, 2, 2, 5, 2021, 'rabu', '14:31:00', '15:31:00', 'Kecantikan Kulit Pada Wajah Wanita', '3', 'KA2', 'Dosen Kecantikan');

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nama_kalender` varchar(100) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `krs_mulai` date NOT NULL,
  `krs_selesai` date NOT NULL,
  `uts_mulai` date NOT NULL,
  `uts_selesai` date NOT NULL,
  `uas_mulai` date NOT NULL,
  `uas_selesai` date NOT NULL,
  `input_nilai_mulai` date NOT NULL,
  `input_nilai_selesai` date NOT NULL,
  `cetak_khs` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kalender_akademik`
--

INSERT INTO `kalender_akademik` (`id`, `tahun`, `nama_kalender`, `prodi_id`, `program_id`, `krs_mulai`, `krs_selesai`, `uts_mulai`, `uts_selesai`, `uas_mulai`, `uas_selesai`, `input_nilai_mulai`, `input_nilai_selesai`, `cetak_khs`) VALUES
(3, 2021, 'Tahun Ajaran 2021', 3, 2, '2021-07-26', '2021-08-06', '2021-08-30', '2021-08-30', '2021-09-27', '2021-10-05', '2021-12-28', '2021-12-28', '2022-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `kode_kampus` varchar(50) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `alamat_kampus` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `kode_kampus`, `nama_kampus`, `alamat_kampus`) VALUES
(2, 'K1', 'Kampus 1', ''),
(3, 'K2', 'Kampus 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kode_kurikulum` varchar(50) NOT NULL,
  `nama_kurikulum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `prodi_id`, `kode_kurikulum`, `nama_kurikulum`) VALUES
(2, 3, 'K-2019 IT', 'Kurikulum 2019 IT'),
(3, 3, 'K-2020 IT', 'Kurikulum 2020 IT'),
(4, 2, 'K-2020 Kesehatan Kulit', 'Kurikulum Kesehatan Kulit 2020'),
(5, 4, 'K-2020 Tekstil', 'Kurikulum Tekstil 2020');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kurikulum_id` int(11) NOT NULL,
  `program` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(150) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telepone` varchar(15) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_sipil` varchar(50) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `status_awal` varchar(50) NOT NULL,
  `ka_prodi` varchar(150) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `users_id`, `prodi_id`, `kurikulum_id`, `program`, `nama`, `nim`, `angkatan`, `email`, `telepone`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_sipil`, `alamat`, `status_awal`, `ka_prodi`, `foto`) VALUES
(1, 25, 3, 2, 'REGULER', 'Nikky Rufiansya', '151111035', '3', '151111035@mhs.stiki.ac.id', '08123456789', 'Banjarmasin', '1997-02-13', 'pria', 'islam', 'belum_menikah', 'Banjarmasin', 'baru', 'Ashlih QA', 'default_profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `prodi_id` int(11) NOT NULL,
  `kurikulum_id` int(11) NOT NULL,
  `kelompok_matkul` varchar(50) NOT NULL,
  `jenis_matkul` varchar(50) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `sks` varchar(10) NOT NULL,
  `penanggung_jawab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `prodi_id`, `kurikulum_id`, `kelompok_matkul`, `jenis_matkul`, `kode_matkul`, `nama_matkul`, `semester`, `sks`, `penanggung_jawab`) VALUES
(1, 3, 2, 'khusus', 'wajib', 'PD1', 'Pemprograman Dasar 1', '3', '3', 'Dosen Pertama'),
(5, 2, 4, 'umum', 'wajib', 'KC0001', 'Kecantikan Kulit Pada Wajah', '2', '3', 'Dosen Kecantikan');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `kode_program` varchar(50) NOT NULL,
  `nama_program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `kode_program`, `nama_program`) VALUES
(2, 'R', 'REGULER');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id` int(11) NOT NULL,
  `kode_prodi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_prodi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jenjang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `akreditasi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`id`, `kode_prodi`, `nama_prodi`, `jenjang`, `akreditasi`) VALUES
(2, '43653', 'Kesehatan Kulit dan Rambut', 'D1', 'A'),
(3, '56572', 'Administrasi Jaringan Komputer', 'D2', 'A'),
(4, '24503', 'Produksi Tekstil', 'D2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id` int(11) NOT NULL,
  `kampus_id` varchar(11) NOT NULL,
  `kode_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `kampus_id`, `kode_ruangan`, `nama_ruangan`, `lantai`, `kapasitas`) VALUES
(2, '2', 'TI001', 'TI1', 1, 30),
(3, '3', 'KA02', 'KA2', 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepone` varchar(15) NOT NULL,
  `level` enum('admin','dosen','akademik','mahasiswa','marketing','keuangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `telepone`, `level`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'admin@admin.com', '08123456789', 'admin'),
(12, 'dosen1', '0192023a7bbd73250516f069df18b500', 'Dosen IT', 'dosen1@mail.com', '0812345678', 'dosen'),
(15, 'akademik', '0192023a7bbd73250516f069df18b500', 'akademik', 'akademik@mail.com', '08123456789', 'akademik'),
(16, 'marketing', '0192023a7bbd73250516f069df18b500', 'marketing', 'marketing@mail.com', '08123456789', 'marketing'),
(17, 'keuangan', '0192023a7bbd73250516f069df18b500', 'keuangan', 'keuangan@mail.com', '0812345677', 'keuangan'),
(24, 'dosen2', '0192023a7bbd73250516f069df18b500', 'Dosen Kecantikan', 'dosen2@gmail.com', '08123332434234', 'dosen'),
(25, 'nikkirufiansya', '0192023a7bbd73250516f069df18b500', 'Nikky Rufiansya', '151111035@mhs.stiki.ac.id', '08123456789', 'mahasiswa'),
(27, 'admin2', '0192023a7bbd73250516f069df18b500', 'Nikky', 'admin2@mail.com', '0812312321', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas_institusi`
--
ALTER TABLE `identitas_institusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
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
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `identitas_institusi`
--
ALTER TABLE `identitas_institusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
