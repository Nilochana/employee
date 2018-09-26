-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 01:57 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', 'adm'),
('test1', 'tst'),
('login1', 'log');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `usrnm` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `nm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`usrnm`, `psw`, `nm`) VALUES
('', '', ''),
('nnn', 'nn', 'nnn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usrnm` varchar(25) NOT NULL,
  `psw` varchar(25) NOT NULL,
  `cpsw` varchar(25) NOT NULL,
  `nm` varchar(25) NOT NULL,
  `snm` varchar(25) NOT NULL,
  `dt` date NOT NULL,
  `gen` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `addr` varchar(25) NOT NULL,
  `typ` varchar(25) NOT NULL,
  `account` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usrnm`, `psw`, `cpsw`, `nm`, `snm`, `dt`, `gen`, `email`, `addr`, `typ`, `account`) VALUES
('nnnn', '123', '123', 'nnn', 'nnn', '2018-09-11', 'female', 'nn@nn', 'nnn', 'student', 'normal'),
('nnn', '123', '123', 'nnn', 'nnn', '2018-09-11', 'female', 'nn@nn', 'nnn', 'student', 'normal'),
('vvvvvv', 'bv', '', 'vbc', '', '2018-09-11', 'female', 'v@fcd', 'vfc', 'student', 'normal'),
('sdnv ', 'n n', ' n', 'nm', 'nm', '2018-09-12', 'female', 'n@n', 'nm', 'student', 'normal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
