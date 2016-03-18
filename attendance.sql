-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 11:31 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `Emp_id` int(4) NOT NULL,
  `Month_name` varchar(10) NOT NULL,
  `Total_Working_Days` int(2) NOT NULL,
  `Worked_Days` int(2) NOT NULL,
  `Leaves` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`Emp_id`, `Month_name`, `Total_Working_Days`, `Worked_Days`, `Leaves`) VALUES
(1, 'January', 25, 23, 2),
(2, 'January', 25, 22, 3),
(3, 'January', 25, 21, 4),
(4, 'January', 25, 24, 1),
(5, 'January', 25, 25, 0),
(6, 'January', 25, 24, 1),
(7, 'January', 25, 22, 3),
(8, 'January', 25, 23, 2),
(9, 'January', 25, 24, 1),
(10, 'January', 25, 25, 0),
(11, 'January', 25, 23, 2),
(12, 'January', 25, 20, 5),
(13, 'January', 25, 24, 1),
(14, 'January', 25, 22, 3),
(15, 'January', 25, 21, 4),
(16, 'January', 25, 23, 2),
(17, 'January', 25, 22, 3),
(18, 'January', 25, 20, 5),
(19, 'January', 25, 25, 0),
(20, 'January', 25, 24, 1),
(21, 'January', 25, 22, 3),
(22, 'January', 25, 21, 4),
(23, 'January', 25, 23, 2),
(24, 'January', 25, 25, 0),
(25, 'January', 25, 25, 0),
(26, 'January', 25, 24, 1),
(27, 'January', 25, 23, 2),
(28, 'January', 25, 24, 1),
(29, 'January', 25, 24, 1),
(30, 'January', 25, 24, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
 ADD PRIMARY KEY (`Emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
