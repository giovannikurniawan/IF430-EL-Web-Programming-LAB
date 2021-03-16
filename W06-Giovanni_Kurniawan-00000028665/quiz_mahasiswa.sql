-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2017 at 11:20 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Student_Id` varchar(255) NOT NULL,
  `Student_Name` varchar(255) NOT NULL,
  `Student_Nim` varchar(255) NOT NULL,
  `Student_Angkatan` varchar(255) NOT NULL,
  `Student_Jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Student_Id`, `Student_Name`, `Student_Nim`, `Student_Angkatan`, `Student_Jurusan`) VALUES
('SD001', 'Ryan Willy', '14110110140', '2014', 'Teknik Informatika'),
('SD004', 'Johanes Immanuel', '14110110139', '2015', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `salt`) VALUES
('admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin'),
('admin2', 'f6fdffe48c908deb0f4c3bd36c032e72', 'admin'),
('johanes001', '7464ce95aebb7f2bde5661129da2a4cc', 'johan'),
('johanesimm95', '289078c28b41b060b72b20f401312258', 'immanuel'),
('johanesimm96', '91aa6cbbe184a29c8edcbe39cea75b20', 'johanes'),
('johanes_immanuel', '35683856a0825b281d83a24ddd037ddf', 'johanes'),
('ryanwilly', '082823eeebdf3bb494c14ab92722f103', 'ryan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Student_Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
