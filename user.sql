-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 05:16 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `nim` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`nim`, `foto`, `post`) VALUES
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj'),
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj'),
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj'),
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj'),
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj'),
('6701174088', '', 'diem jdnrj ne3jej njnend jned4d 3je4ir 4rj4rn 4rn4jr dj4jdn jjj jj jj jj jj jj jj jj jj jj jj jjj jj jjj jjj jjj jj jjj jjj jjj jjj jjj jjj jjjj jjjj jjjjj jjjjjj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(35) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `password` varchar(32) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `hobi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `nim`, `password`, `kelas`, `jenis_kelamin`, `hobi`, `fakultas`, `alamat`) VALUES
('faizal', '1212121212', 'c8837b23ff8aaa8a2dde915473ce0991', 'D3MI-41-02', 'LAKI-LAKI', 'Ngisi', 'Fakultas Ilmu Terapan', 'fhdvkbvka'),
('Faizal Triandik', '6701174086', '202cb962ac59075b964b07152d234b70', 'D3MI-41-03', 'laki-laki', 'Menggambar', 'Fakultas Industri Kreatif', 'check again.'),
('uwes', '6701174088', '202cb962ac59075b964b07152d234b70', 'D3MI-41-02', 'LAKI-LAKI', 'Desain', 'Fakultas Ilmu Terapan', 'wait hdud');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posting`
--
ALTER TABLE `posting`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `users` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
