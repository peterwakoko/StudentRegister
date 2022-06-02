-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2022 at 09:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ClassRegister`
--

-- --------------------------------------------------------

--
-- Table structure for table `Student`
--

CREATE TABLE `Student` (
  `id` int(11) NOT NULL,
  `sNo` varchar(20) NOT NULL,
  `regNo` varchar(35) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `emailAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Student`
--

INSERT INTO `Student` (`id`, `sNo`, `regNo`, `fName`, `lName`, `emailAddress`) VALUES
(1, '2000703012', '20/U/3012/PS', 'Sarah', 'emilly', 'saranakato@gmail.com'),
(2, '2000703112', '20/U/3133', 'Jude', 'Opolot', 'judeopolot@gmail.com'),
(3, '2000706666', '20/U/6666/PS', 'John', 'Katumba', 'johnkatumba@gmail.com'),
(4, '2000702314', '20/U/2314/PS', 'Alex', 'Kisakye', 'alexkisakye@outlook.com'),
(5, '2000705421', '20/U/5421PS', 'Esther', 'Nakayi', 'esthernakayi@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Student`
--
ALTER TABLE `Student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Student`
--
ALTER TABLE `Student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
