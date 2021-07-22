-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2021 at 06:30 AM
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
-- Table structure for table `absensi_dosen`
--

CREATE TABLE `absensi_dosen` (
  `id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `status` enum('Hadir','Izin','Alpha','Sakit') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi_dosen`
--

INSERT INTO `absensi_dosen` (`id`, `dosen_id`, `status`, `tanggal`) VALUES
(1, 7, 'Hadir', '2021-07-19'),
(2, 8, 'Hadir', '2021-07-19'),
(3, 3, 'Hadir', '2021-07-19'),
(4, 4, 'Hadir', '2021-07-19'),
(5, 6, 'Hadir', '2021-07-19'),
(6, 10, 'Hadir', '2021-07-19'),
(7, 5, 'Hadir', '2021-07-19'),
(8, 9, 'Hadir', '2021-07-19'),
(9, 11, 'Hadir', '2021-07-19'),
(10, 7, 'Sakit', '2021-07-20'),
(11, 8, 'Hadir', '2021-07-20'),
(12, 3, 'Hadir', '2021-07-20'),
(13, 4, 'Hadir', '2021-07-20'),
(14, 6, 'Hadir', '2021-07-20'),
(15, 10, 'Sakit', '2021-07-20'),
(16, 5, 'Izin', '2021-07-20'),
(17, 9, 'Hadir', '2021-07-20'),
(18, 11, 'Hadir', '2021-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `absensi_mahasiswa`
--

CREATE TABLE `absensi_mahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `status` enum('Hadir','Sakit','Izin','Alpa') NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `tanggal_kahadiran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi_mahasiswa`
--

INSERT INTO `absensi_mahasiswa` (`id`, `mahasiswa_id`, `jadwal_id`, `status`, `pertemuan`, `tanggal_kahadiran`) VALUES
(35, 1, 5, 'Hadir', 1, '2021-07-17'),
(36, 4, 5, 'Hadir', 1, '2021-07-17'),
(37, 1, 5, 'Hadir', 2, '2021-07-24'),
(38, 4, 5, 'Sakit', 2, '2021-07-24'),
(39, 1, 6, 'Hadir', 1, '2021-07-17'),
(40, 4, 6, 'Hadir', 1, '2021-07-17'),
(41, 1, 8, 'Sakit', 1, '2021-07-17'),
(42, 4, 8, 'Hadir', 1, '2021-07-17'),
(43, 1, 5, 'Hadir', 3, '2021-07-26'),
(44, 4, 5, 'Hadir', 3, '2021-07-26'),
(45, 1, 5, 'Hadir', 4, '2021-08-02'),
(46, 4, 5, 'Hadir', 4, '2021-08-02');

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
(3, 12, 'Dosen Teknik Infromatika', '39722908475832', 'islam', 'banyuwangi', 'Malang', '1992-02-02', 'dosen1@mail.com', '0812345678', 'S2 Ilmu Komputer', 'pria', 'images.jpeg'),
(4, 24, 'Dosen Kecantikan', '0348293749327', 'islam', 'Malang', 'Banyuwangi', '2021-07-06', 'dosen2@gmail.com', '08123332434234', 'S2', 'wanita', 'default_profile.png'),
(5, 29, 'MOH IMRON DIMYATHI', '58001', 'islam', 'Banyuwangi', 'Nganjuk', '1984-11-08', 'imron@sifa.ac.id', '08000000', 'S.Kom', 'pria', 'default_profile.png'),
(6, 30, 'IMRON HAMZAH, S.Kom', '58002', 'islam', 'banyuwangi', 'Banyuwangi', '2021-06-29', 'hamzah@sifa.ac.id', '080000', 'S.Kom', 'pria', 'default_profile.png'),
(7, 31, 'ABDULLAH AZWAR ANAS', '101193', 'islam', 'Banyuwangi', 'Banyuwangi', '1993-11-10', 'azwar@sifa.ac.id', '08000', 'S.Kep', 'pria', 'default_profile.png'),
(8, 32, 'ANIK WINARNI', '58004', 'islam', 'banyuwangi', 'Banyuwangi', '1992-02-20', 'anik@sifa.ac.id', '08000', 'ST', 'wanita', 'default_profile.png'),
(9, 33, 'NIZA FARIKI, M.Pd', '58005', 'islam', 'Banyuwangi', '-', '2021-07-16', 'niza@sifa.ac.id', '08000', ' M.Pd', 'pria', 'default_profile.png'),
(10, 34, 'M LUQMAN HADI, S.Kom', '58006', 'islam', '-', '-', '1989-07-12', 'lukman@sifa.ac.id', '-', 'S.Kom', 'pria', 'default_profile.png'),
(11, 35, 'Siti Khomsatin, S.Pt, M.Si', '58007', 'islam', '-', '-', '0000-00-00', 'siti@sifa.ac.id', '-', ' S.Pt, M.Si', 'wanita', 'default_profile.png');

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
(4, 3, 2, 6, 2021, 'senin', '08:00:00', '10:00:00', 'Fisika', '2', 'TI1', '8'),
(5, 3, 2, 7, 2021, 'selasa', '08:00:00', '10:45:00', 'Bahasa Inggris 1', '2', 'TI1', '9'),
(6, 3, 2, 8, 2021, 'rabu', '08:46:00', '10:46:00', 'K3LH', '2', 'TI1', '5'),
(7, 3, 2, 9, 2021, 'kamis', '08:49:00', '08:49:00', 'ELEKTRONIKA', '2', 'TI1', '10'),
(8, 3, 2, 11, 2021, 'rabu', '15:06:00', '17:06:00', 'Pemprograman Dasar 2', '2', 'TI1', '6'),
(9, 2, 2, 12, 2021, 'senin', '08:50:00', '10:53:00', 'Kecantikan Kulit Pada Wajah', '3', 'KA2', '11'),
(10, 3, 2, 13, 2021, 'selasa', '10:10:00', '00:12:00', 'Basis Data 1', '2', 'TI1', '3'),
(11, 3, 2, 14, 2021, 'senin', '10:13:00', '00:15:00', 'Pemprograman Web', '2', 'TI1', '10');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matkul_mahasiswa`
--

CREATE TABLE `jadwal_matkul_mahasiswa` (
  `id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `grade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_matkul_mahasiswa`
--

INSERT INTO `jadwal_matkul_mahasiswa` (`id`, `mahasiswa_id`, `jadwal_id`, `grade`) VALUES
(48, 4, 5, 'A'),
(49, 4, 6, 'A'),
(50, 4, 4, 'A'),
(51, 4, 7, 'A'),
(52, 1, 5, 'A'),
(53, 1, 6, 'B'),
(54, 1, 4, 'A'),
(55, 1, 7, 'A'),
(56, 4, 8, 'A'),
(57, 1, 8, 'C'),
(58, 5, 9, NULL),
(59, 6, 5, NULL),
(60, 6, 6, NULL),
(61, 6, 4, NULL),
(62, 6, 7, NULL);

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
  `foto` text NOT NULL,
  `nama_ayah` varchar(150) DEFAULT NULL,
  `nik_ayah` varchar(250) DEFAULT NULL,
  `nama_ibu` varchar(150) DEFAULT NULL,
  `nik_ibu` varchar(250) DEFAULT NULL,
  `no_tlpn_ortu` varchar(20) DEFAULT NULL,
  `alamat_ortu` varchar(500) DEFAULT NULL,
  `nama_sekolah` varchar(500) DEFAULT NULL,
  `alamat_sekolah` varchar(500) DEFAULT NULL,
  `kota_sekolah` varchar(100) DEFAULT NULL,
  `tlpn_sekolah` varchar(20) DEFAULT NULL,
  `email_sekolah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `users_id`, `prodi_id`, `kurikulum_id`, `program`, `nama`, `nim`, `angkatan`, `email`, `telepone`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_sipil`, `alamat`, `status_awal`, `ka_prodi`, `foto`, `nama_ayah`, `nik_ayah`, `nama_ibu`, `nik_ibu`, `no_tlpn_ortu`, `alamat_ortu`, `nama_sekolah`, `alamat_sekolah`, `kota_sekolah`, `tlpn_sekolah`, `email_sekolah`) VALUES
(1, 25, 3, 2, 'REGULER', 'Nikky Rufiansya', '151111035', '1', '151111035@mhs.stiki.ac.id', '081234567892', 'Banjarmasin', '1997-02-13', 'pria', 'islam', 'belum_menikah', 'Banjarmasin', 'baru', 'Maulidi S.Kom,. M.Kom', 'profile.jpg', 'SUKARNO', '64050201017110013', 'NATANIA', '640502008790002', '081250415637', 'JL TEUKU UMAR RT.13 NUNUKAN', 'Madrasah Aliyah Al Iklhas', 'Kecamatan Nunukan Tengah', 'Nunukan', '-', 'alikhlasnnk@gmail.com'),
(4, 36, 3, 2, 'REGULER', 'Yanti Yulianti', '151111000', '1', 'aa@aa', '-', '-', '0000-00-00', 'wanita', 'islam', 'belum_menikah', '-', 'baru', 'Maulidi S.Kom,. M.Kom', 'default_profile.png', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', ''),
(5, 37, 2, 4, 'REGULER', 'Siska', '151000111', '1', 'siska@sifa.ac.id', '-', '-', '0000-00-00', 'wanita', 'islam', 'belum_menikah', '-', 'baru', '-', 'default_profile.png', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', ''),
(6, 38, 3, 2, 'REGULER', 'Ashlih QA', '151111097', '1', '151111097@mhs.sifa.ac.id', '-', 'Banyuwangi', '2021-07-13', 'wanita', 'islam', 'belum_menikah', '-', 'baru', 'Maulidi S.Kom, M.Kom', 'default_profile.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(6, 3, 2, 'umum', 'wajib', 'AKD.1.009', 'FISIKA', '1', '4', 'ANIK WINARNI'),
(7, 3, 2, 'umum', 'wajib', 'AKD.1.001 ', 'BAHASA INGGRIS 1', '1', '4', 'NIZA FARIKI, M.Pd'),
(8, 3, 2, 'keahlian', 'wajib', 'AKD.1.003 ', 'K3LH', '1', '2', 'ABDULLAH AZWAR ANAS'),
(9, 3, 2, 'keahlian', 'pilihan', 'TI.30801 ', 'ELEKTRONIKA (Kelistrikan)', '1', '2', 'M LUQMAN HADI, S.Kom'),
(11, 3, 2, 'keahlian', 'wajib', 'PD002', 'Pemprograman Dasar 2', '2', '4', 'IMRON HAMZAH, S.Kom'),
(12, 2, 4, 'umum', 'wajib', 'KC0001', 'Kecantikan Kulit Pada Wajah', '1', '3', 'Siti Khomsatin, S.Pt, M.Si'),
(13, 3, 2, 'umum', 'wajib', 'DB001', 'Basis Data 1', '2', '3', 'Dosen Teknik Infromatika'),
(14, 3, 2, 'umum', 'wajib', 'PGW1', 'Pemprograman Web', '2', '3', 'M LUQMAN HADI, S.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `isi`, `tanggal`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', '<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus mi pretium arcu ultrices mollis. Sed in auctor lorem, nec vestibulum velit. Duis cursus odio ac massa consectetur, eu congue urna egestas. Nulla facilisi. In fringilla magna ac facilisis pellentesque. Phasellus ligula justo, placerat sed viverra vel, tristique non nisl. In dapibus malesuada luctus.</p>\r\n<p>Praesent dolor diam, tempus id metus nec, ullamcorper venenatis nisl. Proin sit amet libero ultrices, pharetra ligula volutpat, posuere enim. Morbi eu tellus non ipsum vulputate sollicitudin ac a nisi. Suspendisse dignissim id neque vitae ullamcorper. Donec fringilla molestie ligula sed sollicitudin. Cras et neque ornare quam iaculis laoreet. Vivamus bibendum lobortis magna, at tristique libero porta vel. Nunc iaculis eget arcu ac aliquam. Aenean fringilla tempus lacus, sed rhoncus ex mollis eleifend. Phasellus sagittis arcu et dictum lacinia.</p>\r\n<p>Sed quis mauris erat. Cras imperdiet nibh ut urna elementum, in congue lectus ultrices. Nullam in justo consectetur nisl hendrerit lobortis. Cras placerat, tellus vitae lobortis hendrerit, enim nulla dignissim nibh, nec suscipit urna lorem quis nisl. Praesent imperdiet mi ullamcorper elit ultricies placerat. Integer ullamcorper convallis dui, lobortis malesuada massa sollicitudin lacinia. Cras at venenatis arcu. Cras turpis libero, condimentum sit amet mi quis, venenatis dictum felis. Duis diam sapien, tempor at varius vel, efficitur id nulla. Sed laoreet lacus gravida dolor consectetur bibendum. Sed quis felis suscipit, pretium dolor sed, eleifend tellus. Mauris purus nibh, laoreet eu tempor sit amet, luctus ut lectus. Pellentesque condimentum lectus vel diam cursus malesuada. Quisque tincidunt gravida consequat. Maecenas viverra, eros id ornare cursus, diam arcu bibendum quam, ac lobortis est metus nec dolor.</p>\r\n<p>Curabitur vitae quam sapien. Quisque ornare elit sed nisl convallis luctus. Pellentesque vehicula purus at ullamcorper ullamcorper. Donec porttitor est diam, et luctus nulla auctor vitae. Nulla eget lacinia tortor. Sed lacinia gravida lectus, non ornare justo sollicitudin et. Quisque scelerisque, felis non rhoncus faucibus, tortor magna placerat orci, eget ullamcorper justo risus mattis ex. Phasellus semper, odio at cursus tincidunt, eros eros auctor tortor, hendrerit porta tortor risus at nisl. Donec rutrum leo et ante pellentesque, at ornare metus rutrum. Integer dolor tellus, maximus sit amet justo vel, imperdiet faucibus odio. Donec id mauris sollicitudin enim tincidunt mollis non nec justo. Donec sit amet dui ac risus interdum blandit. Pellentesque tempor felis nec nibh accumsan hendrerit. Sed dignissim dignissim neque ut laoreet. Aenean porta mauris tellus, sit amet mattis ipsum finibus ac.</p>\r\n<p>Suspendisse in nisi sagittis, ultrices justo vitae, euismod velit. Cras placerat viverra tincidunt. Etiam scelerisque a orci ut viverra. Sed at vehicula erat. Nam et volutpat nunc, sit amet iaculis enim. Nullam lobortis orci erat, eu pharetra lacus fermentum vestibulum. Cras quis porttitor nisl. Sed mi urna, sagittis nec iaculis at, dignissim nec risus. Mauris consequat tellus sit amet turpis tempus rhoncus. Maecenas quis ullamcorper erat.</p>\r\n</div>\r\n<div id=\"generated\">Generated 5 paragraphs, 464 words, 3194 bytes of&nbsp;<a title=\"Lorem Ipsum\" href=\"https://www.lipsum.com/\">Lorem Ipsum</a></div>', '2021-07-19');

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
(12, 'dosen1', '0192023a7bbd73250516f069df18b500', 'Dosen Teknik Infromatika', 'dosen1@mail.com', '0812345678', 'dosen'),
(15, 'akademik', '0192023a7bbd73250516f069df18b500', 'akademik', 'akademik@mail.com', '08123456789', 'akademik'),
(16, 'marketing', '0192023a7bbd73250516f069df18b500', 'marketing', 'marketing@mail.com', '08123456789', 'marketing'),
(17, 'keuangan', '0192023a7bbd73250516f069df18b500', 'keuangan', 'keuangan@mail.com', '0812345677', 'keuangan'),
(24, 'dosen2', '0192023a7bbd73250516f069df18b500', 'Dosen Kecantikan', 'dosen2@gmail.com', '08123332434234', 'dosen'),
(25, '151111035', '0192023a7bbd73250516f069df18b500', 'Nikky Rufiansya', '151111035@mhs.stiki.ac.id', '081234567892', 'mahasiswa'),
(27, 'admin2', '0192023a7bbd73250516f069df18b500', 'Nikky', 'admin2@mail.com', '0812312321', 'admin'),
(29, '58001', '0192023a7bbd73250516f069df18b500', 'MOH IMRON DIMYATHI', 'imron@sifa.ac.id', '08000000', 'dosen'),
(30, '58002', '0192023a7bbd73250516f069df18b500', 'IMRON HAMZAH, S.Kom', 'hamzah@sifa.ac.id', '080000', 'dosen'),
(31, '101193', '0192023a7bbd73250516f069df18b500', 'ABDULLAH AZWAR ANAS', 'azwar@sifa.ac.id', '08000', 'dosen'),
(32, '58004', '0192023a7bbd73250516f069df18b500', 'ANIK WINARNI', 'anik@sifa.ac.id', '08000', 'dosen'),
(33, '58005', '0192023a7bbd73250516f069df18b500', 'NIZA FARIKI, M.Pd', 'niza@sifa.ac.id', '08000', 'dosen'),
(34, '58006', '0192023a7bbd73250516f069df18b500', 'M LUQMAN HADI, S.Kom', 'lukman@sifa.ac.id', '-', 'dosen'),
(35, '58007', 'b19eed7dd2015d5bb3c2f5b82a4f431c', 'Siti Khomsatin, S.Pt, M.Si', 'siti@sifa.ac.id', '-', 'dosen'),
(36, 'yanti', '0192023a7bbd73250516f069df18b500', 'Yanti Yulianti', 'aa@aa', '-', 'mahasiswa'),
(37, 'siska', '0192023a7bbd73250516f069df18b500', 'Siska', 'siska@sifa.ac.id', '-', 'mahasiswa'),
(38, '151111097', '0192023a7bbd73250516f069df18b500', 'Ashlih QA', '151111097@mhs.sifa.ac.id', '-', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_dosen`
--
ALTER TABLE `absensi_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absensi_mahasiswa`
--
ALTER TABLE `absensi_mahasiswa`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `jadwal_matkul_mahasiswa`
--
ALTER TABLE `jadwal_matkul_mahasiswa`
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
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
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
-- AUTO_INCREMENT for table `absensi_dosen`
--
ALTER TABLE `absensi_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `absensi_mahasiswa`
--
ALTER TABLE `absensi_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `identitas_institusi`
--
ALTER TABLE `identitas_institusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal_kuliah`
--
ALTER TABLE `jadwal_kuliah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jadwal_matkul_mahasiswa`
--
ALTER TABLE `jadwal_matkul_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
