-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 04:28 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acn`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `foto`, `keterangan`) VALUES
(1, 'kolam renang kjbsdjkfbkjsd sdsdfsd sdfsdf', '2018-01-253.PNG', 'di dalam');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `foto`, `keterangan`) VALUES
(7, 'wasdas', '2018-01-25_wasdas_6.PNG', 'sdasdada'),
(5, 'asdasd', '2018-01-24_asdasd_download.png', 'asdasdasdsa'),
(6, 'teguh', '2018-01-24_teguh_download.png', 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `kesan`
--

CREATE TABLE `kesan` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesan`
--

INSERT INTO `kesan` (`id`, `email`, `nama`, `pekerjaan`, `foto`, `komentar`) VALUES
(1, 'teguhputra48@gmail.com', 'teguh', 'pro grammer', '2020-02-20teguh2cd17b322dc65b04e82e3fb6a86c65c4--tokyo-ghoul-scavenger.jpg', 'mantap gan'),
(2, 'pn210898@gmail.com', 'putra nugraha', 'programmer', '2020-02-20putra nugraha76fdca7ddd437c285f30700b720d87a71370042351_full.jpg', 'Mantap Jiwa');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`id`, `judul`, `alamat`, `foto`, `tipe`) VALUES
(4, 'adsasda', 'asdasda', '2018-01-24_adsasda_download.png', 'asdadas'),
(3, 'asdasdas', 'asdadas', '2018-01-24_asdasdas_download.png', 'sdada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`, `keterangan`, `title`) VALUES
(4, 'https://www.youtube.com/watch?v=ITBgljMH4ow&spfreload=10', 'asdasdsa', 'boysandi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesan`
--
ALTER TABLE `kesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kesan`
--
ALTER TABLE `kesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
