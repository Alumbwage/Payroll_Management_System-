-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 11:42 AM
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
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `Emp_id` int(4) NOT NULL,
  `Basic_sal` int(5) NOT NULL,
  `Allowance` int(5) NOT NULL,
  `DRA` int(5) NOT NULL,
  `Advance` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`Emp_id`, `Basic_sal`, `Allowance`, `DRA`, `Advance`) VALUES
(2, 1000, 250, 100, 500),
(3, 4000, 1000, 500, 2000),
(4, 3000, 750, 350, 1500),
(5, 2000, 500, 250, 1000),
(6, 1500, 300, 200, 750),
(7, 1000, 100, 100, 500),
(8, 3000, 750, 350, 1500),
(9, 4000, 1000, 500, 2000),
(10, 2000, 500, 250, 1000),
(11, 4000, 1000, 500, 2000),
(12, 1000, 250, 100, 500),
(13, 4000, 1000, 500, 2000),
(14, 3000, 750, 350, 1500),
(15, 2000, 500, 250, 1000),
(16, 1500, 300, 200, 750),
(17, 1000, 100, 100, 500),
(18, 3000, 750, 350, 1500),
(19, 4000, 1000, 500, 2000),
(20, 2000, 500, 250, 1000),
(21, 4000, 1000, 500, 2000),
(22, 1000, 250, 100, 500),
(23, 4000, 1000, 500, 2000),
(24, 3000, 750, 350, 1500),
(25, 2000, 500, 250, 1000),
(26, 1500, 300, 200, 750),
(27, 1000, 100, 100, 500),
(28, 3000, 750, 350, 1500),
(29, 4000, 1000, 500, 2000),
(30, 2000, 500, 250, 1000);



--
-- Indexes for dumped tables
--

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
 ADD PRIMARY KEY (`Emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
