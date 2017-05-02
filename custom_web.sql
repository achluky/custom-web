-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 01:40 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `custom_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama`, `alamat`) VALUES
(1, 'PT. Sumatera Multimedia Solusi', '<p>Jalan Pulau Antasari Perum Bukit Kencana Blok i No 2 Bandar Lampung.</p>'),
(2, 'CV Sumber Sejahtera', '<p>Jalan Pangeran Antasari No.89 Bandar Lampung 35131.</p>'),
(3, 'PT Globalindo Abadi Sentosa', '<p>Jalan. Jenderal Soeprapto No. 113C Tanjung Karang Pusat, Bandar Lampung.</p>\r\n<p>&nbsp;</p>'),
(4, 'PT. Peregrine Lampung', '<p>Jalan Teuku Umar No.56 Kedaton Bandar Lampung.</p>'),
(5, 'PT. Great Giant Livestock', '<p>Jalan Lintas Timur Km 77 Terbanggi Besar Lampung Tengah 34165.</p>\r\n<p>&nbsp;</p>'),
(6, 'PT. Sinar Setia Mulia', '<p>Jalan. Hasanudin No 60 Teluk Betung, Bandar Lampung.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_web`
--

CREATE TABLE IF NOT EXISTS `deskripsi_web` (
  `id_deskripsi` int(3) NOT NULL,
  `judul_web` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_web`
--

INSERT INTO `deskripsi_web` (`id_deskripsi`, `judul_web`, `deskripsi`) VALUES
(1, 'Custom Web', 'Custom web'),
(2, 'Custom Webs', 'Custom webs'),
(3, 'Custom Web', 'Custom webs'),
(4, 'Custom Webss', 'Custom webs'),
(5, 'Custom Web', 'Custom webs'),
(6, 'Custom Web', '<meta charset="utf-8">\r\n    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n    <meta name="description" content="Custom Web">\r\n    <meta name="author" content="">'),
(7, 'Custom Web', '<meta charset="utf-8">\r\n    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n    <meta name="description" content="Custom Web">\r\n    <meta name="author" content=""> s'),
(8, 'Custom Web', '<meta charset="utf-8">\r\n    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n    <meta name="description" content="Custom Web">\r\n    <meta name="author" content="">'),
(9, 'Custom Web', '<meta charset="utf-8">\r\n<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n<meta name="description" content="Custom Web">\r\n<meta name="author" content="">'),
(10, 'Custom Webzx', '<meta charset="utf-8">\r\n<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n<meta name="description" content="Custom Web">\r\n<meta name="author" content="">z'),
(11, 'Custom Web', '<meta charset="utf-8">\r\n<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">\r\n<meta name="description" content="Custom Web">\r\n<meta name="author" content="">');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(3) NOT NULL,
  `foto` varchar(120) NOT NULL,
  `slider` enum('0','1') NOT NULL DEFAULT '0',
  `keterangan` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `slider`, `keterangan`) VALUES
(11, '4ca8e87180ed97493f8f17092c00dcc1.jpg', '0', ''),
(12, '4333e1957db52b5ab0bcb09cf8072c7a.jpg', '0', ''),
(13, '584477a43276a5a22eb05c1f765de88b.jpg', '0', ''),
(14, 'e50f88fcffca485d9f72711d2e8c81cc.jpg', '0', ''),
(15, '74be09e7ae49a075f9d53c9833cea25b.jpg', '0', ''),
(16, 'c6517c995273538f990e683ad4c7f837.png', '1', ''),
(17, '2134a28d81a0cdd64cbf9d92206257e8.png', '1', ''),
(19, 'c1861a23dac0172ea4dbfd5f19a43554.jpg', '0', 'R'),
(21, '1aabdbcf4e548ece82784aa3ca7d46f1.jpg', '1', 'Guitar');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id_kontak` int(3) NOT NULL,
  `kontak` text NOT NULL,
  `maps` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(64) NOT NULL,
  `google` varchar(255) NOT NULL,
  `instagram` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `kontak`, `maps`, `facebook`, `twitter`, `google`, `instagram`) VALUES
(9, '<p>Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 <br /> Labuhan Dalam Tanjung Senang <br /> Bandar Lampung 35142.<br /> Telp : 085377528233 / 085101400060</p>', '<p><iframe class="img-rounded" class="img-rounded" style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.3773424128985!2d105.26081711476498!3d-5.359259896112551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c528a740f285%3A0xb978557697fb5d2a!2sPerumahan+Panorama+Alam!5e0!3m2!1sen!2sid!4v1491218006815" width="600" height="450" frameborder="0" allowfullscreen="">					\r\n				</iframe></p>', 'https://www.facebook.com/pagename', 'page_name', 'https://plus.google.com/pagename', 'page_name');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id_pelayanan` int(3) NOT NULL,
  `pelayanan1` varchar(64) NOT NULL,
  `pelayanan2` varchar(64) NOT NULL,
  `pelayanan3` varchar(64) NOT NULL,
  `pelayanan4` varchar(64) NOT NULL,
  `pelayanan5` varchar(64) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `pelayanan1`, `pelayanan2`, `pelayanan3`, `pelayanan4`, `pelayanan5`, `video`) VALUES
(1, 'Lorem ipsum dolor sit atmet sit dolor 1', 'Lorem ipsum dolor sit atmet sit dolor 2', 'Lorem ipsum dolor sit atmet sit dolor 3', 'Lorem ipsum dolor sit atmet sit dolor 4', 'Lorem ipsum dolor sit atmet sit dolor 5', '<iframe class="img-rounded" class="img-rounded" width="560" height="400" src="https://www.youtube.com/embed/yaowjxs2K0g" frameborder="0" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(3) NOT NULL,
  `detail_profil` text,
  `visi` text,
  `misi` text,
  `foto_profil` varchar(120) NOT NULL,
  `foto_visi` varchar(120) NOT NULL,
  `foto_misi` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `detail_profil`, `visi`, `misi`, `foto_profil`, `foto_visi`, `foto_misi`) VALUES
(5, 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione. In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, uam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.', '1. Suspendisse orci quam.\r\n<br>2.  Lorem ipsum dolor sit ametconsectetur adipiscing elit.\r\n<br>3.  Quae qui non vident\r\n<br>4.  Scien tiam pollicentur', 'afa434908ba9ffd7e2449a1d6f4317d7.jpg', 'e8d9b6173647e255178e410e2b1f5c15.jpg', '307f68d9cb765c062ec9b32e8e6fac28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `deskripsi_web`
--
ALTER TABLE `deskripsi_web`
  ADD PRIMARY KEY (`id_deskripsi`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `deskripsi_web`
--
ALTER TABLE `deskripsi_web`
  MODIFY `id_deskripsi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
