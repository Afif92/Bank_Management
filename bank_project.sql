-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 10:28 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `date` varchar(20) NOT NULL,
  `Id` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ammount` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`date`, `Id`, `type`, `ammount`) VALUES
('12/2/2018', '15', 'withdraw', '200'),
('1/11/2017', '15', 'Diposit', '200'),
('1/2/2014', '11', 'Diposit', '500');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Name` varchar(20) NOT NULL,
  `FatherName` varchar(20) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `DOB` varchar(10) NOT NULL,
  `Phone` varchar(11) NOT NULL,
  `Balance` int(100) NOT NULL,
  `ID` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Name`, `FatherName`, `Email`, `DOB`, `Phone`, `Balance`, `ID`, `password`, `status`) VALUES
('', '', '', '', '', 1, 1, '1', 3),
('Aftab hossain', 'karim hossain', 'asajdsh995@yahoo.com', '10/07/2014', '01874512369', 708, 8, '', 1),
('MD ABS', 'Md Abcs', 'ad@gmail.com', '14/11/1996', '01773733974', 520, 9, '', 1),
('Afif Rahman', 'Aziz Rahman', 'afifdata2@gmail.com', '11/11/1993', '01750045130', 1300, 11, '', 1),
('Afif Rahman', 'Aziz Rahmana', 'afifdata2@gmail.com', '1/1/1993', '01750045130', 2000, 12, '', 1),
('Afif Rahman', 'Aziz Rahman', 'afifdata2@gmail.com', '11/1/1993', '01750045130', 2000, 13, '', 0),
('Afif Rahman', 'Aziz Rahman', 'afifdata2@gmail.com', '11/11/1993', '01750045130', 2000, 14, '', 0),
('Afif Rahman', 'Aziz Rahman', 'afifdata2@gmail.com', '1/1/1993', '01750045130', 6000, 15, 'A123a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `TYPE` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `PASSWORD`, `TYPE`) VALUES
('jewel sikder', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
