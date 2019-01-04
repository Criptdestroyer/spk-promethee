-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Des 2018 pada 01.06
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_kelasunggulan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_kriteria`
--

CREATE TABLE `calon_kriteria` (
  `id_nilai` int(11) NOT NULL,
  `calon_id` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_kriteria`
--

INSERT INTO `calon_kriteria` (`id_nilai`, `calon_id`, `id_kriteria`, `value`) VALUES
(168, 25, 7, 77),
(169, 25, 5, 3),
(171, 25, 4, 90),
(172, 27, 7, 90),
(173, 27, 5, 1),
(174, 27, 4, 100),
(179, 26, 7, 50),
(180, 26, 5, 1),
(181, 26, 4, 50),
(182, 28, 4, 50),
(184, 28, 7, 80),
(185, 28, 5, 1),
(190, 41, 7, 87),
(192, 41, 5, 2),
(193, 41, 4, 77),
(194, 41, 3, 80),
(195, 25, 3, 84),
(196, 26, 3, 71),
(197, 27, 3, 90),
(198, 28, 3, 84);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `id`, `id_kelas`) VALUES
(10, 66, 3),
(11, 70, 1),
(13, 82, 5),
(14, 80, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(50) NOT NULL,
  `NamaKelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `NamaKelas`) VALUES
(1, 'XI IPA 1'),
(2, 'X IPA 2'),
(3, 'X IPA 3'),
(4, 'XII IPA 2'),
(5, 'XII IPS 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `bobot` double NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `bobot`, `jenis`) VALUES
(3, 'Rata-Rata Nilai Akademik', 0.7, 'Benefit'),
(4, 'Nilai Psikotes', 0.15, 'Benefit'),
(5, 'Sertifikat Prestasi', 0.1, 'Benefit'),
(7, 'Nilai UN', 0.05, 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leveling`
--

CREATE TABLE `leveling` (
  `id_leveling` int(200) NOT NULL,
  `leveling` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `leveling`
--

INSERT INTO `leveling` (`id_leveling`, `leveling`) VALUES
(1, 'Admin'),
(2, 'Siswa'),
(3, 'Guru'),
(4, 'Kepala _sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mp` int(11) NOT NULL,
  `nama_mp` varchar(100) NOT NULL,
  `jurusan_mp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mp`, `nama_mp`, `jurusan_mp`) VALUES
(1, 'Pendidikan Agama dan Budi Pekerti', 'IPA'),
(2, 'Bahasa Indonesia', 'IPA'),
(3, 'Fisika', 'IPA'),
(4, 'Prakarya', 'IPA'),
(5, 'Ekonomi lintas minat', 'IPA'),
(6, 'Geografi lintas minat', 'IPA'),
(7, 'Matematika wajib', 'IPA'),
(8, 'Bahasa inggris', 'IPA'),
(9, 'Matematika peminatan', 'IPA'),
(10, 'Kimia peminatan', 'IPA'),
(11, 'Sejarah Indonesia', 'IPA'),
(12, 'Ekonomi Peminatan', 'IPS'),
(13, 'Kimia lintas Minat', 'IPS'),
(14, 'PKN', 'IPS'),
(15, 'Fisika', 'IPS'),
(16, 'Prakarya', 'IPS'),
(17, 'Geografi peminatan', 'IPS'),
(18, 'Pendidikan agama dan budi pekerti', 'IPS'),
(19, 'Bahasa Indonesia', 'IPS'),
(20, 'Sosiologi', 'IPS'),
(21, 'Senibudaya', 'IPS'),
(22, 'Sejarah Indonesia', 'IPS'),
(23, 'Bahasa inggris', 'IPS'),
(24, 'Penjaskes', 'IPS'),
(25, 'Sejarah peminatan', 'IPS'),
(26, 'Matematika wajib', 'IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiakademik`
--

CREATE TABLE `nilaiakademik` (
  `id_nilai_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mp` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiakademik`
--

INSERT INTO `nilaiakademik` (`id_nilai_akademik`, `id_siswa`, `id_mp`, `nilai`) VALUES
(1, 41, 12, 80),
(2, 41, 13, 70),
(3, 41, 14, 60),
(4, 41, 15, 50),
(5, 41, 16, 80),
(6, 41, 17, 78),
(7, 41, 18, 80),
(8, 41, 19, 90),
(9, 41, 20, 95),
(10, 41, 21, 80),
(11, 41, 22, 77),
(12, 41, 23, 89),
(13, 41, 24, 86),
(14, 41, 25, 90),
(15, 41, 26, 98),
(16, 25, 1, 90),
(17, 25, 2, 80),
(18, 25, 3, 90),
(19, 25, 4, 88),
(20, 25, 5, 70),
(21, 25, 6, 70),
(22, 25, 7, 88),
(23, 25, 8, 90),
(24, 25, 9, 90),
(25, 25, 10, 90),
(26, 25, 11, 77),
(27, 26, 1, 50),
(28, 26, 2, 70),
(29, 26, 3, 70),
(30, 26, 4, 80),
(31, 26, 5, 90),
(32, 26, 6, 88),
(33, 26, 7, 60),
(34, 26, 8, 70),
(35, 26, 9, 50),
(36, 26, 10, 77),
(37, 26, 11, 80),
(38, 27, 1, 90),
(39, 27, 2, 90),
(40, 27, 3, 90),
(41, 27, 4, 90),
(42, 27, 5, 88),
(43, 27, 6, 89),
(44, 27, 7, 95),
(45, 27, 8, 97),
(46, 27, 9, 89),
(47, 27, 10, 88),
(48, 27, 11, 87),
(49, 28, 1, 90),
(50, 28, 2, 90),
(51, 28, 3, 70),
(52, 28, 4, 88),
(53, 28, 5, 80),
(54, 28, 6, 88),
(55, 28, 7, 85),
(56, 28, 8, 90),
(57, 28, 9, 90),
(58, 28, 10, 86),
(59, 28, 11, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilaiun`
--

CREATE TABLE `nilaiun` (
  `id_nilai_un` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `mtk` double NOT NULL,
  `b_ind` double NOT NULL,
  `b_ing` double NOT NULL,
  `ipa` double NOT NULL,
  `ips` double NOT NULL,
  `agama` double NOT NULL,
  `pkn` double NOT NULL,
  `rata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilaiun`
--

INSERT INTO `nilaiun` (`id_nilai_un`, `id`, `mtk`, `b_ind`, `b_ing`, `ipa`, `ips`, `agama`, `pkn`, `rata`) VALUES
(4, 65, 80, 70, 80, 80, 70, 90, 70, 77.142857142857),
(5, 68, 90, 90, 90, 90, 90, 90, 90, 90),
(6, 67, 50, 50, 50, 50, 50, 50, 50, 50),
(7, 69, 80, 80, 80, 80, 80, 80, 80, 80),
(8, 87, 90, 100, 78, 80, 0, 0, 0, 87);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_leveling` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `username`, `password`, `id_leveling`) VALUES
(45, 'Admin', 'admin@gmail.com', 'mhakim', '202cb962ac59075b964b07152d234b70', 1),
(65, 'Anjas', 'anjas@gmail.com', 'anjas', '202cb962ac59075b964b07152d234b70', 2),
(66, 'Pak Rifki', 'rifki@gmail.com', 'rifki', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(67, 'Jack Komboy', 'jack@gmail.com', 'jack', '202cb962ac59075b964b07152d234b70', 2),
(68, 'Diana', 'diana@gmail.com', 'diana', '202cb962ac59075b964b07152d234b70', 2),
(69, 'Fenita', 'fenita@gmail.com', 'fenita', '202cb962ac59075b964b07152d234b70', 2),
(70, 'Bu rika', 'rika@gmail.com', 'rika', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(71, 'Cadi', 'cadi@gmail.com', 'cadi', '202cb962ac59075b964b07152d234b70', 2),
(72, 'Salim', 'salim@gmail.com', 'salim', '202cb962ac59075b964b07152d234b70', 4),
(74, 'Ahmad Jeri', 'jeri@gmail.com', 'jeri_x', '202cb962ac59075b964b07152d234b70', 2),
(75, 'Yunita', 'yunita@gmail.com', 'yunita', '202cb962ac59075b964b07152d234b70', 2),
(76, 'Gouza Zou ', 'go@gmail.com', 'gou', '202cb962ac59075b964b07152d234b70', 2),
(77, 'Alisia Septa', 'alisia@gmail.com', 'alis', '202cb962ac59075b964b07152d234b70', 2),
(78, 'Mauro Zarate', 'zarate@gmail.com', 'zarate', '202cb962ac59075b964b07152d234b70', 2),
(79, 'Tatitjana Indah', 'tea@gmail.com', 'tea', '202cb962ac59075b964b07152d234b70', 2),
(80, 'Dwi Z', 'dwi@gmail.com', 'dwi', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(81, 'Jojo', 'jojo@gmail.com', 'jojo', '202cb962ac59075b964b07152d234b70', 2),
(82, 'Ineke', 'ineke@gmail.com', 'ineke', '827ccb0eea8a706c4c34a16891f84e7b', 3),
(84, 'Debris ', 'debris@gmail.com', 'debris', '202cb962ac59075b964b07152d234b70', 2),
(85, 'Axel Rose', 'axl@gmail.com', 'axel_rose', '202cb962ac59075b964b07152d234b70', 2),
(87, 'Sri Xendarina', 'sri@gmail.com', 'sriX', '202cb962ac59075b964b07152d234b70', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `psikotes`
--

CREATE TABLE `psikotes` (
  `id_psikotes` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rangking`
--

CREATE TABLE `rangking` (
  `No` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Id_Siswa` int(11) NOT NULL,
  `Leaving_flow` double NOT NULL,
  `Entering_flow` double NOT NULL,
  `Net_Flow` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rangking`
--

INSERT INTO `rangking` (`No`, `Nama`, `Id_Siswa`, `Leaving_flow`, `Entering_flow`, `Net_Flow`) VALUES
(70, 'Anjas', 25, 0.077265625, 0.060234375, 0.01703125),
(71, 'Jack Komboy', 26, 0.183515625, 0.222734375, -0.03921875),
(72, 'Diana', 27, 0.192109375, 0.045390625, 0.14671875),
(73, 'Fenita', 28, 0.027746394230769, 0.097253605769231, -0.069507211538462),
(74, 'Sri Xendarina', 41, 0.063112980769231, 0.11813701923077, -0.055024038461538);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `NamaSertifikat` varchar(500) NOT NULL,
  `FileSertifikat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `id`, `NamaSertifikat`, `FileSertifikat`) VALUES
(17, 65, 'Sertifikat_saya', 'bg21.jpg'),
(18, 65, 'Sertifikat_saya_dua', 'aroma-jeruk1.jpg'),
(19, 65, 'Sertifikat_saya_tiga', 'batman1.jpg'),
(20, 68, 'satu_ser', 'aroma-jeruk2.jpg'),
(21, 67, 'Sertifikat_saya', 'aroma-jeruk3.jpg'),
(22, 69, 'satu_ser', 'bf.jpg'),
(23, 87, 'Sertifikat_saya', 'family.jpg'),
(24, 87, 'satu_ser', 'shutterstock-252338818.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL DEFAULT 'kosong',
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `submit_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id`, `nama`, `asal_sekolah`, `ttl`, `alamat`, `no_hp`, `nis`, `jenis_kelamin`, `kecamatan`, `id_kelas`, `status`, `submit_by`) VALUES
(25, 65, 'Anjas', 'SMP N 42 Palembang', 'Palembang, 02-01-2018', 'Jln. Karya Sepakat', '0812121212', '123456789', 'Laki - Laki', 'sukahilir', 3, 'Diterima', NULL),
(26, 67, 'Jack Komboy', 'SMP XAVERIUS 8 PAPUA', 'Papua, 02-05-1999', 'Jln. Jalan Ke Papua', '08129395', '987654321', 'Laki - Laki', 'aaa', 3, 'Ditolak', NULL),
(27, 68, 'Diana', '0', '0000-00-00', '', '', '', 'Perempuan', 'sukasuka', 1, 'Diterima', NULL),
(28, 69, 'Fenita', '0', '0000-00-00', '', '', '', 'Perempuan', 'sukasuka', 1, 'Ditolak', NULL),
(30, 74, 'Ahmad Jeri', '0', '0000-00-00', '', '', '', 'Laki - Laki', 'sukasuka', 3, 'Belom', NULL),
(31, 75, 'Yunita', '0', '0000-00-00', '', '', '', 'Perempuan', 'aaa', 1, 'Belom', NULL),
(32, 76, 'Gouza Zou ', '0', '0000-00-00', '', '', '', 'Laki - Laki', 'ccc', 2, 'Belom', NULL),
(33, 77, 'Alisia Septa', '0', '0000-00-00', '', '', '', 'Perempuan', 'sukasuka', 3, 'Belom', NULL),
(34, 78, 'Mauro Zarate', '0', '0000-00-00', '', '', '', 'Laki - Laki', 'sukasuka', 2, 'Belom', NULL),
(35, 79, 'Tatitjana Indah', '0', '0000-00-00', '', '', '', 'Perempuan', 'sukahilir', 1, 'Belom', NULL),
(36, 81, 'Jojo', '0', '0000-00-00', '', '', '', 'Laki - Laki', 'sukasuka', 2, 'Belom', NULL),
(38, 84, 'Debris ', '0', '0000-00-00', '', '', '', 'Perempuan', 'sukasuka', 5, 'Belom', NULL),
(39, 85, 'Axel Rose', '0', '0000-00-00', '', '', '', 'Laki - Laki', 'sukasuka', 5, 'Belom', NULL),
(41, 87, 'Sri Xendarina', 'Smp N 4 Palembang', 'Palembang, 02-02-1998', 'Jln. Jalan No. 2', '0812121212', '987654321', 'Perempuan', 'sukasuka', 5, 'Ditolak', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` int(11) NOT NULL,
  `kriteria_id` int(11) DEFAULT '0',
  `nama` varchar(50) DEFAULT '0',
  `bobot` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `calon_id` (`calon_id`),
  ADD KEY `subkriteria_id` (`id_kriteria`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `leveling`
--
ALTER TABLE `leveling`
  ADD PRIMARY KEY (`id_leveling`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indexes for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD PRIMARY KEY (`id_nilai_akademik`),
  ADD KEY `id` (`id_siswa`),
  ADD KEY `id_mp` (`id_mp`);

--
-- Indexes for table `nilaiun`
--
ALTER TABLE `nilaiun`
  ADD PRIMARY KEY (`id_nilai_un`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_leveling` (`id_leveling`);

--
-- Indexes for table `psikotes`
--
ALTER TABLE `psikotes`
  ADD PRIMARY KEY (`id_psikotes`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`No`),
  ADD KEY `Id_Siswa` (`Id_Siswa`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`),
  ADD KEY `id_pengguna` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `submit_by` (`submit_by`),
  ADD KEY `id` (`id`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kriteria_id` (`kriteria_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  MODIFY `id_nilai_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `nilaiun`
--
ALTER TABLE `nilaiun`
  MODIFY `id_nilai_un` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `calon_kriteria`
--
ALTER TABLE `calon_kriteria`
  ADD CONSTRAINT `FK__calon` FOREIGN KEY (`calon_id`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calon_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `guru_ibfk_2` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD CONSTRAINT `nilaiakademik_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilaiakademik_ibfk_3` FOREIGN KEY (`id_mp`) REFERENCES `mata_pelajaran` (`id_mp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilaiun`
--
ALTER TABLE `nilaiun`
  ADD CONSTRAINT `nilaiun_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_leveling`) REFERENCES `leveling` (`id_leveling`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `psikotes`
--
ALTER TABLE `psikotes`
  ADD CONSTRAINT `psikotes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `relasi_1` FOREIGN KEY (`Id_Siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD CONSTRAINT `sertifikat_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`submit_by`) REFERENCES `pengguna` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
