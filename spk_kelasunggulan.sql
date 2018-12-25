-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Des 2018 pada 09.29
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
(170, 25, 3, 88),
(171, 25, 4, 90),
(172, 27, 7, 90),
(173, 27, 5, 1),
(174, 27, 4, 100),
(176, 27, 3, 88),
(179, 26, 7, 50),
(180, 26, 5, 1),
(181, 26, 4, 50),
(182, 28, 4, 50),
(183, 26, 3, 50),
(184, 28, 7, 80),
(185, 28, 5, 1),
(186, 28, 3, 90);

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
(11, 70, 1);

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
(3, 'X IPA 3');

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
(3, 'Rata-Rata Nilai Akademik', 14, 'Benefit'),
(4, 'Nilai Psikotes', 3, 'Benefit'),
(5, 'Sertifikat Prestasi', 2, 'Benefit'),
(7, 'Nilai UN', 1, 'Benefit');

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
-- Struktur dari tabel `nilaiakademik`
--

CREATE TABLE `nilaiakademik` (
  `id_nilai_akademik` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `ratanilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(7, 69, 80, 80, 80, 80, 80, 80, 80, 80);

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
(79, 'Tatitjana Indah', 'tea@gmail.com', 'tea', '202cb962ac59075b964b07152d234b70', 2);

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
(41, 'Anjas', 25, 0.17038461538462, 0.17961538461538, -0.0092307692307692),
(42, 'Jack Komboy', 26, 0.22083333333333, 0.22083333333333, 0),
(43, 'Diana', 27, 0.16583333333333, 0.15916666666667, 0.0066666666666667),
(44, 'Fenita', 28, 0.21794871794872, 0.21538461538462, 0.0025641025641026);

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
(22, 69, 'satu_ser', 'bf.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `submit_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id`, `nama`, `jenis_kelamin`, `kecamatan`, `id_kelas`, `submit_by`) VALUES
(25, 65, 'Anjas', 'Laki - Laki', 'sukahilir', 3, NULL),
(26, 67, 'Jack Komboy', 'Laki - Laki', 'aaa', 3, NULL),
(27, 68, 'Diana', 'Perempuan', 'sukasuka', 1, NULL),
(28, 69, 'Fenita', 'Perempuan', 'sukasuka', 1, NULL),
(30, 74, 'Ahmad Jeri', 'Laki - Laki', 'sukasuka', 3, NULL),
(31, 75, 'Yunita', 'Perempuan', 'aaa', 1, NULL),
(32, 76, 'Gouza Zou ', 'Laki - Laki', 'ccc', 2, NULL),
(33, 77, 'Alisia Septa', 'Perempuan', 'sukasuka', 3, NULL),
(34, 78, 'Mauro Zarate', 'Laki - Laki', 'sukasuka', 2, NULL),
(35, 79, 'Tatitjana Indah', 'Perempuan', 'sukahilir', 1, NULL);

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
-- Indexes for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  ADD PRIMARY KEY (`id_nilai_akademik`),
  ADD KEY `id` (`id`);

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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilaiakademik`
--
ALTER TABLE `nilaiakademik`
  MODIFY `id_nilai_akademik` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilaiun`
--
ALTER TABLE `nilaiun`
  MODIFY `id_nilai_un` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `psikotes`
--
ALTER TABLE `psikotes`
  MODIFY `id_psikotes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
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
  ADD CONSTRAINT `nilaiakademik_ibfk_1` FOREIGN KEY (`id_nilai_akademik`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
