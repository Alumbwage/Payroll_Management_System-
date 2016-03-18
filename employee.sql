-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 11:02 AM
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
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_id` int(4) NOT NULL,
  `Emp_name` varchar(25) NOT NULL,
  `Dept_name` varchar(10) NOT NULL,
  `Desgn` varchar(15) NOT NULL,
  `Branch_name` varchar(10) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `City_addr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Employee Table that stores id, name, dept &designation. ';

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Emp_name`, `Dept_name`, `Desgn`, `Branch_name`, `Contact`, `City_addr`) VALUES
(1, 'Deepam Patel', 'HR', 'HR Manager', 'Borivali', '9112345678', 'Andheri'),
(2, 'Dhara Patel', 'HR', 'HR Consultant', 'Borivali', '9287456321', 'Borivali'),
(3, 'Nrupesh Patel', 'RnD', 'Project Head', 'Borivali', '9887456321', 'Andheri'),
(4, 'Chhaya Patil', 'RnD', 'Team Head', 'Borivali', '9963258741', 'Kandivali'),
(5, 'Komal Patil', 'RnD', 'SE 1', 'Borivali', '9896325741', 'Bandra'),
(6, 'Krupa Patel', 'RnD', 'SE 2', 'Borivali', '9798563214', 'Andheri'),
(7, 'Nakul Patil', 'RnD', 'SE 3', 'Borivali', '7789654123', 'DADAR'),
(8, 'Sayali Pednekar', 'Sales', 'Sales Executive', 'Borivali', '7789658593', 'Malad'),
(9, 'Sushan Poojary', 'Sales', 'Sales Manager', 'Borivali', '8896565623', 'Mira Road'),
(10, 'Rakesh Prabhu', 'Sales', 'Sales Admin', 'Borivali', '7789658962', 'Malad'),
(11, 'Nitin Patil', 'HR', 'HR Manager', 'Jogeshwari', '7789653214', 'DADAR'),
(12, 'Niharika Prasad', 'HR', 'HR Consultant', 'Jogeshwari', '7741258963', 'Andheri'),
(13, 'Pranay Rambade', 'RnD', 'Project Head', 'Jogeshwari', '7789546123', 'Santa Cruz'),
(14, 'Ganesh Rane', 'RnD', 'Team Head', 'Jogeshwari', '7745858596', 'Dadar'),
(15, 'Riddhish Rane', 'RnD', 'SE 1', 'Jogeshwari', '9963636352', 'Borivali'),
(16, 'Gaurav Raul', 'RnD', 'SE 2', 'Jogeshwari', '996363528', 'Borivali'),
(17, 'Shital Satpute', 'RnD', 'SE 3', 'Jogeshwari', '8895623147', 'Goregaon'),
(18, 'Rutweek Sawant', 'Sales', 'Sales Executive', 'Jogeshwari', '7785445691', 'Andheri'),
(19, 'Pritesh shalecha', 'Sales', 'Sales Manager', 'Jogeshwari', '9945678945', 'Goregaon'),
(20, 'Dinesh Sharma', 'Sales', 'Sales Admin', 'Jogeshwari', '9969696325', 'Bhayandar'),
(21, 'Tanushree Shetty', 'HR', 'HR Manager', 'Goregaon', '9965858587', 'Andheri'),
(22, 'Ashwini Shinde', 'HR', 'HR Consultant', 'Goregaon', '7789898955', 'Borivali'),
(23, 'Harsh Shinde', 'RnD', 'Project Head', 'Goregaon', '9989898585', 'Goregaon'),
(24, 'Sagar Shirke', 'RnD', 'Team Head', 'Goregaon', '7787874545', 'Jogeshwari'),
(25, 'Manoj Shukla', 'RnD', 'SE 1', 'Goregaon', '8898789879', 'Andheri'),
(26, 'Sindu Kripa', 'RnD', 'SE 2', 'Goregaon', '8897898745', 'Malad'),
(27, 'Devang Somani', 'RnD', 'SE 3', 'Goregaon', '8858582563', 'Borivali'),
(28, 'Chetan Soni', 'Sales', 'Sales Executive', 'Goregaon', '8854747414', 'Dadar'),
(29, 'Chetali Surti', 'Sales', 'Sales Manager', 'Goregaon', '8859696935', 'Dadar'),
(30, 'Toshal Tambave', 'Sales', 'Sales Admin', 'Goregaon', '9999696969', 'Andheri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`Emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
