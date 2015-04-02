-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2015 at 04:02 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hidden_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$bM8bP0EXbMykKKVF9k8JhO71uz2Oyn8G6JyIKKI5HZlW2ZaIBoHKe'),
('valen', 'asdfad');

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE IF NOT EXISTS `park` (
`idpark` int(11) NOT NULL,
  `nama_park` varchar(45) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`idpark`, `nama_park`, `alamat`, `latitude`, `longitude`, `deskripsi`) VALUES
(1, 'tugu muda', 'semarang', '12341324134', '234525', 'tugu muda'),
(3, 'simpang lima', 'semarang, citraland', NULL, NULL, 'hehehehe'),
(5, 'test', 'test', NULL, NULL, 'asdfasdf'),
(6, 'test', 'test', NULL, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
`idphoto` int(11) NOT NULL,
  `idpark` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_park_liked`
--

CREATE TABLE IF NOT EXISTS `tbl_park_liked` (
`idlike` int(10) NOT NULL,
  `idpark` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_park_visited`
--

CREATE TABLE IF NOT EXISTS `tbl_park_visited` (
`idvisited` int(10) NOT NULL,
  `idpark` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `contact` varchar(70) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama_lengkap`, `username`, `email`, `password`, `contact`, `bio`, `role`) VALUES
(17, 'test', 'test', 'agus@gmail.com', 'test', 'adsf', 'asdf', NULL),
(20, 'test', 'ananana', 've.febrian@gmail.com', 'asdf', 'adsf', 'adf', NULL),
(21, 'valentino febrian', 'valent', 've.febrian@gmail.com', 'hehe', '20394', 'alsdkfjadsf', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `park`
--
ALTER TABLE `park`
 ADD PRIMARY KEY (`idpark`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
 ADD PRIMARY KEY (`idphoto`);

--
-- Indexes for table `tbl_park_liked`
--
ALTER TABLE `tbl_park_liked`
 ADD PRIMARY KEY (`idlike`);

--
-- Indexes for table `tbl_park_visited`
--
ALTER TABLE `tbl_park_visited`
 ADD PRIMARY KEY (`idvisited`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `park`
--
ALTER TABLE `park`
MODIFY `idpark` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_park_liked`
--
ALTER TABLE `tbl_park_liked`
MODIFY `idlike` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_park_visited`
--
ALTER TABLE `tbl_park_visited`
MODIFY `idvisited` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
