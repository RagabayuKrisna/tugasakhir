-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 10:30 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbratujawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `no_hp`, `nama`, `username`, `email`, `alamat`, `password`, `status_aktif`) VALUES
(1, 22, 'rizajg', 'sad', 'w@gmail.com', 'cangak', '123', 0),
(2, 10, 'Rizal', 'member', 'rizal@gmail.com', 'rrrr', '202cb962ac59075b964b07152d234b70', 0),
(3, 98, 'Rizal', 'qq', 'aaa@gmail.com', 'cangak', '202cb962ac59075b964b07152d234b70', 0),
(11, 209480, 'bayu', 'ubay', 'bay@gmail.com', 'bubak', '123', 0),
(12, 12, 'aaaaasadfds', 'asf', 'w@gmail.com', 'w', '123', 0),
(13, 98765432, 'asw', 'saw', 'w@gmail.com', 'Tegalontar', 'dd0ee4aa584f539800e1443fdf250d38', 0),
(16, 877, 'rizal123', 'sad123', 'w@gmail.com', 'cangak', '202cb962ac59075b964b07152d234b70', 0),
(17, 1, 'Rizal', 'hasan1', 'hasan@gmail.com', 'Tegalontar', 'caf1a3dfb505ffed0d024130f58c5cfa', 0),
(18, 877, 'hasan', 'hasan', 'hasan@gmail.com', 'Tegalontar', '202cb962ac59075b964b07152d234b70', 0),
(19, 877, 'joni', 'joni', 'joni@gmail.com', 'kene', '202cb962ac59075b964b07152d234b70', 0),
(20, 2147483647, 'Aldisi', 'aldisi', 'aldisi@gmail.com', 'Sragi', '202cb962ac59075b964b07152d234b70', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nama`, `username`, `password`) VALUES
('123', 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3'),
('321', 'Admin', 'admin', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_boking`
--

CREATE TABLE `tb_boking` (
  `id_boking` char(12) NOT NULL,
  `tanggal` date NOT NULL,
  `id_member` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `keterangan_item` varchar(50) NOT NULL,
  `status_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_boking`
--

INSERT INTO `tb_boking` (`id_boking`, `tanggal`, `id_member`, `nama_lengkap`, `alamat`, `no_hp`, `email`, `keterangan_item`, `status_aktif`) VALUES
('201908050001', '2019-08-31', 2, 'Rizal', 'cangak', 2147483647, 'gadss@gmail.com', 'kuburan', 0),
('201908050002', '2019-08-30', 2, 'Rizal', 'cangak', 2147483647, 'hasan@gmail.com', 'kuburan', 0),
('201908050003', '2019-08-28', 2, 'rizal', 'cangak', 2147483647, 'simbah@gmail.com', 'tidak ada', 0),
('201908050004', '2019-08-29', 2, 'Siembah', 'Kuburan', 897878, 'aaa@gmail.com', 'tidak ada', 0),
('201908050005', '2019-08-05', 2, 'Siembah', 'Tegalontar', 0, '', '', 0),
('201908050006', '2019-08-16', 2, 'Hasan', '', 0, '', '', 0),
('201908050007', '2019-08-16', 2, 'Hasan', '', 0, '', '', 0),
('201908050008', '2019-08-05', 2, '', '', 0, '', '', 0),
('201908050009', '2019-08-05', 2, '', '', 0, '', '', 0),
('201908050010', '2019-08-05', 2, 'rizal', 'cangak', 2147483647, 'aaa@gmail.com', 'kuburan', 0),
('201908050011', '2019-08-05', 2, 'rizal', 'cangak', 2147483647, 'aaa@gmail.com', 'kuburan', 0),
('201908050012', '2019-08-23', 2, 'rizal', '', 0, '', '', 0),
('201908050013', '2019-08-23', 2, 'rizal', '', 0, '', '', 0),
('201908050014', '2019-08-23', 2, 'rizal', '', 0, '', '', 0),
('201908050015', '2019-08-16', 2, 'rizal', 'Tegalontar', 0, '', '', 0),
('201908050016', '2019-08-16', 2, 'rizal', 'Tegalontar', 0, '', '', 0),
('201908070001', '2019-08-10', 20, 'Aldisi', 'Sragi', 2147483647, 'aldisi@gmail.com', 'Tidak ada', 2),
('201908070002', '2019-08-10', 20, 'Aldisi', 'Sragi', 2147483647, 'aldisi@gmail.com', 'tidak ada', 2),
('201908070003', '2019-08-06', 20, 'Rizal', 'cangak', 2147483647, 'gadss@gmail.com', 'tidak ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_booking`
--

CREATE TABLE `tb_detail_booking` (
  `id_detail` int(11) NOT NULL,
  `id_booking` char(12) NOT NULL,
  `id_item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_booking`
--

INSERT INTO `tb_detail_booking` (`id_detail`, `id_booking`, `id_item`) VALUES
(38, '201908050004', 43),
(39, '201908050005', 43),
(40, '201908050006', 42),
(41, '201908050007', 42),
(42, '201908050008', 43),
(43, '201908050010', 43),
(44, '201908050012', 42),
(45, '201908050015', 42),
(46, '201908070001', 42),
(47, '201908070002', 42),
(48, '201908070002', 45),
(49, '201908070003', 42),
(50, '201908070003', 44);

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(4) NOT NULL,
  `judul_galeri` varchar(32) NOT NULL,
  `keterangan` text NOT NULL,
  `foto_galeri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul_galeri`, `keterangan`, `foto_galeri`) VALUES
(20, 'Gaun Biru', '', '1112890243.jpg'),
(21, 'Rias', '', '474764256.jpg'),
(22, 'Couple Putih', '', '410009375.jpg'),
(23, 'Couple Hitam', '', '151364122.jpg'),
(25, 'Couple Hitam', '', '1138144151.jpg'),
(26, 'Contoh Rias', '', '202027751.jpg'),
(27, 'Contoh Rias', '', '553285845.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_item`
--

CREATE TABLE `tb_item` (
  `id_item` int(11) NOT NULL,
  `nama_pelayanan` varchar(50) NOT NULL,
  `nama_item` varchar(50) NOT NULL,
  `harga_item` double NOT NULL,
  `deskripsi` text NOT NULL,
  `cover_item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_item`
--

INSERT INTO `tb_item` (`id_item`, `nama_pelayanan`, `nama_item`, `harga_item`, `deskripsi`, `cover_item`) VALUES
(42, 'Paket', 'Silver A', 17500000, 'Make Up 2 mempelai,\r\nRias Jilbab, resepsi,\r\nMake up kedua orang tua mempelai,\r\n2x ganti baju resepsi,\r\nMake up domas 4 dan baju,\r\nPaket baju ratu jawa untuk kedua mempelai,\r\nPelamian luar panjang 9 meter sd 12 meter,\r\nDekorasi dalam rumah,\r\nDekorasi kamar pengantin,\r\nDekorasi pintu masuk,\r\nPranoto coro,\r\nPaket foto album,\r\nVidio shoting exclusiv 1 camera,\r\n2 sett layos SBY VIP+1 sett layos,\r\nSound system,\r\nHiburan lesehan single,\r\ndll', '18231229.jpg'),
(43, 'Paket', 'Gold A', 25800000, 'Make Up 2 mempelai,\r\nRias midodareni, Ijab, resepsi dan balek kloso,\r\nMake up kedua orang tua mempelai,\r\n2x ganti baju resepsi,\r\nMake up domas 4 dan baju,\r\nPaket baju ratu jawa untuk kedua mempelai,\r\nPelamian luar panjang 9 meter sd 12 meter,\r\nDekorasi dalam rumah,\r\nDekorasi kamar pengantin,\r\nDekorasi pintu masuk,\r\nPranoto coro,\r\nPaket foto album,\r\nVidio shoting exclusiv 1 camera,\r\n3 sett layos SBY VIP+1 sett layos,\r\nSound system 2 hari 2 malam,\r\nHiburan lesehan single,\r\ndll', '1994425892.jpg'),
(44, 'Tambahan', 'Layos/Tenda', 500000, 'Model luar', '366814284.jpg'),
(45, 'Tambahan', 'Dekorasi Pelaminan', 500000, 'Eropa', '927656333.jpg'),
(46, 'Tambahan', 'Alat catering', 800000, 'Umum', '742898086.jpg'),
(47, 'Tambahan', 'Rias', 200000, '', '585870547.jpg'),
(48, 'Paket', 'Silver B', 0, '', '45172620.jpg'),
(49, 'Paket', 'Silver B', 500000, '', '2005674755.jpg'),
(50, 'Tambahan', 'Rias', 200000, '', '1515293446.jpg'),
(51, 'Tambahan', 'Bunga', 100000, '', '1066195655.jpg'),
(52, 'Tambahan', 'Bunga', 100000, '', '1694618080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status_aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `ig` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_perusahaan`, `nama_pemilik`, `alamat`, `email`, `no_telepon`, `fb`, `ig`, `deskripsi`) VALUES
(1, 'RATU JAWA Wedding Organizer', 'LIA FAULINA', 'DESA SUKOSARI KECAMATAN KARANGANYAR KABUPATEN PEKALONGAN (Gang Sebelah Timur Pom Bensin Karanganyar )', 'ratujawa@gmail.com', 2147483647, 'Ratu Jawa', 'ratu_jawa_wedding_decoration', 'Ratu Jawa adalah ....');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD PRIMARY KEY (`id_boking`),
  ADD KEY `id_member` (`id_member`);

--
-- Indexes for table `tb_detail_booking`
--
ALTER TABLE `tb_detail_booking`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_item_cetak` (`id_item`),
  ADD KEY `fk_boking` (`id_booking`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `fk_barang` (`id_item`),
  ADD KEY `fk_member` (`id_member`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_detail_booking`
--
ALTER TABLE `tb_detail_booking`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_boking`
--
ALTER TABLE `tb_boking`
  ADD CONSTRAINT `fk_memberzz` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_detail_booking`
--
ALTER TABLE `tb_detail_booking`
  ADD CONSTRAINT `fk_boking` FOREIGN KEY (`id_booking`) REFERENCES `tb_boking` (`id_boking`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_item_cetak` FOREIGN KEY (`id_item`) REFERENCES `tb_item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_item`) REFERENCES `tb_item` (`id_item`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
