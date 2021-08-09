-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2020 pada 06.59
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_kuyang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_buah`
--

CREATE TABLE `tab_buah` (
  `id_buah` int(10) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `kode_warna` varchar(100) NOT NULL,
  `warna_monokromatik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_buah`
--

INSERT INTO `tab_buah` (`id_buah`, `nama_buah`, `gambar`, `kode_warna`, `warna_monokromatik`) VALUES
(1, 'Jeruk', 'marker.jpg', '#bf7d7d', '#ffdfde,#f3adac,#bf7d7d,#8d5051,#5d2629'),
(2, 'Durian', 'tlfon.png', '#615d98', '#c2bafc,#908ac9,#615d98,#34336a,#030e3e'),
(3, 'Mangga', 'lokasi.png', '#c84537', '#ffa890,#ff7662,#c84537,#910a10,#5d0000'),
(4, 'Pisang', '26731.jpg', '#47c24b', '#b4ffab,#7ef67a,#47c24b,#00901a,#006100'),
(5, 'Pepaya', 'mob.jpg', '#c6a55d', '#ffffbc,#fbd68c,#c6a55d,#937631,#624b01'),
(6, 'Salak', 'icons8-lamborghini-50.png', '#618bc2', '#c6edff,#93bbf5,#618bc2,#2d5e91,#003563');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_hasil_buah`
--

CREATE TABLE `tab_hasil_buah` (
  `id_hasil_buah` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `id_buah` int(10) NOT NULL,
  `jumlah` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_hasil_buah`
--

INSERT INTO `tab_hasil_buah` (`id_hasil_buah`, `id_kecamatan`, `id_buah`, `jumlah`) VALUES
(2, 7, 2, 94),
(3, 7, 1, 1),
(5, 7, 3, 153),
(6, 15, 2, 869),
(7, 8, 3, 14),
(8, 8, 2, 133),
(9, 8, 1, 30),
(10, 8, 4, 551),
(11, 8, 5, 60),
(12, 8, 6, 7),
(13, 10, 3, 163),
(14, 10, 2, 283),
(15, 10, 1, 73),
(16, 10, 4, 668),
(17, 10, 5, 115),
(18, 10, 6, 13),
(19, 25, 3, 135),
(20, 25, 2, 43),
(21, 25, 4, 738),
(22, 25, 5, 694),
(23, 13, 5, 195),
(24, 13, 1, 2460),
(25, 13, 3, 272),
(26, 13, 2, 231),
(27, 13, 4, 3756),
(28, 12, 3, 412),
(29, 12, 2, 649),
(30, 12, 1, 42),
(31, 12, 4, 726),
(32, 12, 5, 413),
(33, 12, 6, 60),
(34, 16, 3, 31),
(35, 16, 2, 4959),
(36, 16, 1, 22),
(37, 16, 4, 911),
(38, 16, 5, 137),
(39, 16, 6, 2),
(40, 27, 5, 151),
(41, 27, 1, 1),
(42, 27, 4, 354),
(43, 27, 3, 112),
(44, 27, 2, 763),
(45, 26, 3, 533),
(46, 26, 2, 1790),
(47, 26, 4, 978),
(48, 26, 5, 41),
(49, 26, 6, 7),
(50, 14, 5, 136),
(51, 14, 1, 59),
(52, 14, 4, 1042),
(53, 14, 2, 2657),
(54, 9, 3, 86),
(55, 9, 2, 237),
(56, 9, 1, 1),
(57, 9, 4, 116),
(58, 9, 5, 475),
(59, 9, 6, 8),
(60, 15, 5, 245),
(61, 15, 6, 1),
(62, 15, 1, 10),
(63, 15, 4, 42),
(64, 15, 3, 114),
(65, 24, 3, 113),
(66, 24, 2, 156),
(67, 24, 4, 184),
(68, 24, 5, 27),
(69, 24, 6, 6),
(70, 11, 5, 67),
(71, 11, 6, 15),
(72, 11, 1, 116),
(73, 11, 4, 506),
(74, 11, 3, 3754),
(75, 11, 2, 631),
(76, 7, 4, 1590),
(77, 7, 5, 118),
(78, 7, 6, 42),
(79, 6, 5, 29),
(80, 6, 6, 17),
(81, 6, 1, 3),
(82, 6, 4, 9958),
(83, 6, 3, 78),
(84, 6, 2, 103),
(85, 17, 3, 26),
(86, 17, 2, 666),
(87, 17, 1, 3),
(88, 17, 4, 669),
(89, 17, 5, 164),
(90, 17, 6, 163),
(91, 1, 5, 121),
(92, 1, 4, 1895),
(93, 1, 2, 445),
(94, 5, 3, 30),
(95, 5, 2, 223),
(96, 5, 1, 5),
(97, 5, 4, 2068),
(98, 5, 5, 120),
(99, 5, 6, 32),
(100, 4, 3, 723),
(101, 4, 2, 492),
(102, 4, 4, 705),
(103, 4, 5, 306),
(104, 4, 6, 23),
(105, 3, 5, 68),
(106, 3, 6, 51),
(107, 3, 4, 1145),
(108, 3, 3, 26),
(109, 3, 2, 30),
(110, 2, 3, 22),
(111, 2, 2, 102),
(112, 2, 1, 3),
(113, 2, 4, 958),
(114, 2, 5, 111),
(115, 2, 6, 7),
(116, 19, 5, 223),
(117, 19, 6, 11),
(118, 19, 4, 894),
(119, 19, 3, 278),
(120, 19, 2, 135),
(121, 22, 3, 80),
(122, 22, 2, 167),
(123, 22, 4, 80),
(124, 22, 5, 8),
(125, 22, 6, 7),
(126, 23, 5, 38),
(127, 23, 2, 150),
(128, 23, 3, 19),
(129, 23, 4, 150),
(130, 21, 3, 273),
(131, 21, 2, 22),
(132, 21, 4, 26),
(133, 21, 5, 34),
(134, 20, 3, 20),
(135, 20, 2, 24),
(136, 20, 1, 1),
(137, 20, 4, 26),
(138, 20, 5, 11),
(139, 18, 5, 19),
(140, 18, 1, 7),
(141, 18, 4, 47),
(142, 18, 3, 40),
(143, 18, 2, 46);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_kecamatan`
--

CREATE TABLE `tab_kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `data_geojson` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_kecamatan`
--

INSERT INTO `tab_kecamatan` (`id_kecamatan`, `kode_kecamatan`, `nama_kecamatan`, `data_geojson`, `deskripsi`) VALUES
(1, '3302170', 'Cilongok', 'cilongok.geojson', ''),
(2, '3302210', 'Sumbang', 'sumbang.geojson', ''),
(3, '3302200', 'Baturaden', 'baturaden.geojson', ''),
(4, '3302190', 'Kedung Banteng', 'kedung_banteng.geojson', ''),
(5, '3302180', 'Karanglewas', 'karanglewas.geojson', ''),
(6, '3302150', 'Gumelar', 'gumelar.geojson', ''),
(7, '3302140', 'Ajibarang', 'ajibarang.geojson', 'Kecamatan yang sangat bagus'),
(8, '3302010', 'Lumbir', 'lumbir.geojson', ''),
(9, '3302100', 'Kalibagor', 'kalibagor.geojson', ''),
(10, '3302020', 'Wangon', 'wangon.geojson', ''),
(11, '3302130', 'Purwojati', 'purwojati.geojson', ''),
(12, '3302050', 'Kebasen', 'kebasen.geojson', ''),
(13, '3302040', 'Rawalo', 'kec_rawalo.geojson', ''),
(14, '3302090', 'Somagede', 'somagede.geojson', ''),
(15, '3302110', 'Banyumas', 'banyumas.geojson', ''),
(16, '3302060', 'Kemranjen', 'kemranjen.geojson', ''),
(17, '3302160', 'Pekuncen', 'pekuncen.geojson', ''),
(18, '3302740', 'Purwokerto Utara', 'purwokerto_utara.geojson', ''),
(19, '3302220', 'Kembaran', 'kembaran.geojson', ''),
(20, '3302730', 'Purwokerto Timur', 'purwokerto_timur.geojson', ''),
(21, '3302720', 'Purwokerto Barat', 'purwokerto_barat.geojson', ''),
(22, '3302230', 'Sokaraja', 'sokaraja.geojson', ''),
(23, '3302710', 'Purwokerto Selatan', 'purwokerto_selatan.geojson', ''),
(24, '3302120', 'Patikraja', 'patikraja.geojson', ''),
(25, '3302030', 'Jatilawang', 'jatilawang.geojson', ''),
(26, '3302080', 'Tambak', 'tambak.geojson', ''),
(27, '3302070', 'Sumpiuh', 'sumpiuh.geojson', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_laporan_buah`
--

CREATE TABLE `tab_laporan_buah` (
  `id_laporan_buah` int(10) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_laporan_buah`
--

INSERT INTO `tab_laporan_buah` (`id_laporan_buah`, `nama_buah`, `tahun`) VALUES
(1, 'Jeruk', 2019),
(2, 'Durian', 2019),
(3, 'Mangga', 2019),
(4, 'Pisang', 2019),
(5, 'Pepaya', 2019),
(6, 'Salak', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_laporan_hasil_buah`
--

CREATE TABLE `tab_laporan_hasil_buah` (
  `id_laporan` int(10) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `nama_buah` varchar(100) NOT NULL,
  `jumlah` float NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_laporan_hasil_buah`
--

INSERT INTO `tab_laporan_hasil_buah` (`id_laporan`, `id_kecamatan`, `nama_buah`, `jumlah`, `tahun`) VALUES
(1, 1, 'Durian', 445, 2019),
(2, 1, 'Pisang', 1895, 2019),
(3, 1, 'Pepaya', 121, 2019),
(4, 2, 'Mangga', 22, 2019),
(5, 2, 'Durian', 102, 2019),
(6, 2, 'Jeruk', 3, 2019),
(7, 2, 'Salak', 7, 2019),
(8, 2, 'Pepaya', 111, 2019),
(9, 2, 'Pisang', 958, 2019),
(10, 3, 'Durian', 30, 2019),
(11, 3, 'Mangga', 26, 2019),
(12, 3, 'Pisang', 1145, 2019),
(13, 3, 'Salak', 51, 2019),
(14, 3, 'Pepaya', 68, 2019),
(15, 4, 'Pisang', 705, 2019),
(16, 4, 'Mangga', 723, 2019),
(17, 4, 'Pepaya', 306, 2019),
(18, 4, 'Salak', 23, 2019),
(19, 4, 'Durian', 492, 2019),
(20, 5, 'Pepaya', 120, 2019),
(21, 5, 'Salak', 32, 2019),
(22, 5, 'Durian', 223, 2019),
(23, 5, 'Jeruk', 5, 2019),
(24, 5, 'Pisang', 2068, 2019),
(25, 5, 'Mangga', 30, 2019),
(26, 6, 'Pepaya', 29, 2019),
(27, 6, 'Durian', 103, 2019),
(28, 6, 'Jeruk', 3, 2019),
(29, 6, 'Pisang', 9958, 2019),
(30, 6, 'Mangga', 78, 2019),
(31, 6, 'Salak', 17, 2019),
(32, 7, 'Durian', 94, 2019),
(33, 7, 'Pisang', 1590, 2019),
(34, 7, 'Salak', 42, 2019),
(35, 7, 'Mangga', 153, 2019),
(36, 7, 'Jeruk', 1, 2019),
(37, 7, 'Pepaya', 118, 2019),
(38, 8, 'Mangga', 14, 2019),
(39, 8, 'Durian', 133, 2019),
(40, 8, 'Pisang', 551, 2019),
(41, 8, 'Pepaya', 60, 2019),
(42, 8, 'Salak', 7, 2019),
(43, 8, 'Jeruk', 30, 2019),
(44, 9, 'Durian', 237, 2019),
(45, 9, 'Salak', 8, 2019),
(46, 9, 'Pepaya', 475, 2019),
(47, 9, 'Pisang', 116, 2019),
(48, 9, 'Jeruk', 1, 2019),
(49, 9, 'Mangga', 86, 2019),
(50, 10, 'Salak', 13, 2019),
(51, 10, 'Durian', 283, 2019),
(52, 10, 'Jeruk', 73, 2019),
(53, 10, 'Pisang', 668, 2019),
(54, 10, 'Mangga', 163, 2019),
(55, 10, 'Pepaya', 115, 2019),
(56, 11, 'Jeruk', 116, 2019),
(57, 11, 'Durian', 631, 2019),
(58, 11, 'Salak', 15, 2019),
(59, 11, 'Pisang', 506, 2019),
(60, 11, 'Mangga', 3754, 2019),
(61, 11, 'Pepaya', 67, 2019),
(62, 12, 'Jeruk', 42, 2019),
(63, 12, 'Durian', 649, 2019),
(64, 12, 'Mangga', 412, 2019),
(65, 12, 'Pisang', 726, 2019),
(66, 12, 'Pepaya', 413, 2019),
(67, 12, 'Salak', 60, 2019),
(68, 13, 'Jeruk', 2460, 2019),
(69, 13, 'Mangga', 272, 2019),
(70, 13, 'Pisang', 3756, 2019),
(71, 13, 'Pepaya', 195, 2019),
(72, 13, 'Durian', 231, 2019),
(73, 14, 'Pisang', 1042, 2019),
(74, 14, 'Durian', 2657, 2019),
(75, 14, 'Jeruk', 59, 2019),
(76, 14, 'Pepaya', 136, 2019),
(77, 15, 'Pepaya', 245, 2019),
(78, 15, 'Salak', 1, 2019),
(79, 15, 'Jeruk', 10, 2019),
(80, 15, 'Pisang', 42, 2019),
(81, 15, 'Durian', 869, 2019),
(82, 15, 'Mangga', 114, 2019),
(83, 16, 'Durian', 4959, 2019),
(84, 16, 'Jeruk', 22, 2019),
(85, 16, 'Mangga', 31, 2019),
(86, 16, 'Pepaya', 137, 2019),
(87, 16, 'Salak', 2, 2019),
(88, 16, 'Pisang', 911, 2019),
(89, 17, 'Mangga', 26, 2019),
(90, 17, 'Salak', 163, 2019),
(91, 17, 'Pisang', 669, 2019),
(92, 17, 'Jeruk', 3, 2019),
(93, 17, 'Pepaya', 164, 2019),
(94, 17, 'Durian', 666, 2019),
(95, 18, 'Jeruk', 7, 2019),
(96, 18, 'Pisang', 47, 2019),
(97, 18, 'Durian', 46, 2019),
(98, 18, 'Mangga', 40, 2019),
(99, 18, 'Pepaya', 19, 2019),
(100, 19, 'Durian', 135, 2019),
(101, 19, 'Pepaya', 223, 2019),
(102, 19, 'Salak', 11, 2019),
(103, 19, 'Pisang', 894, 2019),
(104, 19, 'Mangga', 278, 2019),
(105, 20, 'Jeruk', 1, 2019),
(106, 20, 'Mangga', 20, 2019),
(107, 20, 'Durian', 24, 2019),
(108, 20, 'Pisang', 26, 2019),
(109, 20, 'Pepaya', 11, 2019),
(110, 21, 'Pepaya', 34, 2019),
(111, 21, 'Mangga', 273, 2019),
(112, 21, 'Durian', 22, 2019),
(113, 21, 'Pisang', 26, 2019),
(114, 22, 'Durian', 167, 2019),
(115, 22, 'Pepaya', 8, 2019),
(116, 22, 'Mangga', 80, 2019),
(117, 22, 'Pisang', 80, 2019),
(118, 22, 'Salak', 7, 2019),
(119, 23, 'Pepaya', 38, 2019),
(120, 23, 'Durian', 150, 2019),
(121, 23, 'Mangga', 19, 2019),
(122, 23, 'Pisang', 150, 2019),
(123, 24, 'Pepaya', 27, 2019),
(124, 24, 'Pisang', 184, 2019),
(125, 24, 'Durian', 156, 2019),
(126, 24, 'Mangga', 113, 2019),
(127, 24, 'Salak', 6, 2019),
(128, 25, 'Pisang', 738, 2019),
(129, 25, 'Mangga', 135, 2019),
(130, 25, 'Pepaya', 694, 2019),
(131, 25, 'Durian', 43, 2019),
(132, 26, 'Mangga', 533, 2019),
(133, 26, 'Salak', 7, 2019),
(134, 26, 'Pepaya', 41, 2019),
(135, 26, 'Pisang', 978, 2019),
(136, 26, 'Durian', 1790, 2019),
(137, 27, 'Pepaya', 151, 2019),
(138, 27, 'Jeruk', 1, 2019),
(139, 27, 'Durian', 763, 2019),
(140, 27, 'Mangga', 112, 2019),
(141, 27, 'Pisang', 354, 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_tipe_penilaian`
--

CREATE TABLE `tab_tipe_penilaian` (
  `id_tipe` int(10) NOT NULL,
  `tipe` int(10) NOT NULL,
  `batas_bawah` float NOT NULL,
  `batas_atas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_tipe_penilaian`
--

INSERT INTO `tab_tipe_penilaian` (`id_tipe`, `tipe`, `batas_bawah`, `batas_atas`) VALUES
(1, 1, 1, 20),
(2, 1, 20, 40),
(3, 1, 40, 60),
(4, 1, 60, 80),
(5, 1, 80, 100),
(6, 2, 1, 100),
(7, 2, 100, 200),
(8, 2, 200, 300),
(9, 2, 300, 400),
(10, 2, 400, 500),
(11, 3, 1, 200),
(12, 3, 200, 400),
(13, 3, 400, 600),
(14, 3, 600, 800),
(15, 3, 800, 1000),
(16, 4, 1, 400),
(17, 4, 400, 800),
(18, 4, 800, 1200),
(19, 4, 1200, 1600),
(20, 4, 1600, 2000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_user`
--

CREATE TABLE `tab_user` (
  `id_pengguna` int(10) NOT NULL,
  `nama_pengguna` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tab_user`
--

INSERT INTO `tab_user` (`id_pengguna`, `nama_pengguna`, `password`) VALUES
(5, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_buah`
--
ALTER TABLE `tab_buah`
  ADD PRIMARY KEY (`id_buah`);

--
-- Indexes for table `tab_hasil_buah`
--
ALTER TABLE `tab_hasil_buah`
  ADD PRIMARY KEY (`id_hasil_buah`);

--
-- Indexes for table `tab_kecamatan`
--
ALTER TABLE `tab_kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tab_laporan_buah`
--
ALTER TABLE `tab_laporan_buah`
  ADD PRIMARY KEY (`id_laporan_buah`);

--
-- Indexes for table `tab_laporan_hasil_buah`
--
ALTER TABLE `tab_laporan_hasil_buah`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tab_tipe_penilaian`
--
ALTER TABLE `tab_tipe_penilaian`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_buah`
--
ALTER TABLE `tab_buah`
  MODIFY `id_buah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tab_hasil_buah`
--
ALTER TABLE `tab_hasil_buah`
  MODIFY `id_hasil_buah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
--
-- AUTO_INCREMENT for table `tab_kecamatan`
--
ALTER TABLE `tab_kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tab_laporan_buah`
--
ALTER TABLE `tab_laporan_buah`
  MODIFY `id_laporan_buah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tab_laporan_hasil_buah`
--
ALTER TABLE `tab_laporan_hasil_buah`
  MODIFY `id_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `tab_tipe_penilaian`
--
ALTER TABLE `tab_tipe_penilaian`
  MODIFY `id_tipe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
