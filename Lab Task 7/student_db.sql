-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 12:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_details`
--

CREATE TABLE `add_details` (
  `ID` int(20) NOT NULL,
  `LOCATION` varchar(20) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `FLOOR` varchar(20) NOT NULL,
  `DETAILS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_details`
--

INSERT INTO `add_details` (`ID`, `LOCATION`, `ADDRESS`, `FLOOR`, `DETAILS`) VALUES
(1, 'Gulshan', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(2, 'Banani', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(3, 'Dhanmondi', 'Road:02,House no:09', '3rd floor', 'single bed, 1 bath'),
(4, 'Mohammadpur', 'Road:02,House no:09', '3rd floor', 'single bed, 1 bath'),
(5, 'Uttara', 'Road:02,House no:09', '3rd floor', 'single bed, 1 bath'),
(6, 'Farmgate', 'Road:05,House no:10', '5th floor', 'single bed, 1 bath'),
(8, 'Mirpur', 'Road:11,House no:05', '1st floor floor', 'single bed, 1 bath'),
(9, 'Bashundhara', 'Block:C,Road No:05', '2nd floor', 'single bed, 1 bath'),
(10, 'Banani', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(11, 'Banani1', 'Road:05,House no:10', '5th floor', 'single bed, 1 bath,k'),
(12, 'Mohammadpur1', 'Road:07,House No:08', '5th floor', 'single bed,1 bath');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor_info`
--

CREATE TABLE `bachelor_info` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE NO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bachelor_info`
--

INSERT INTO `bachelor_info` (`ID`, `NAME`, `ADDRESS`, `EMAIL`, `PHONE NO`) VALUES
(1, 'Turin', 'Rajshahi', 'turin34@gmail.com', 9864322),
(2, 'Rakhi', 'Dhaka', 'gtguuj34@gmail.com', 9864322);

-- --------------------------------------------------------

--
-- Table structure for table `data_table`
--

CREATE TABLE `data_table` (
  `Username` varchar(20) NOT NULL,
  `Full_Name` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Phone` int(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_table`
--

INSERT INTO `data_table` (`Username`, `Full_Name`, `Email`, `Phone`, `Address`, `Password`) VALUES
('Fahmida', 'Fahmida Rashid', 'fahmidaturin748@gmail.com', 1567896532, 'Rajshahi', '1234567@'),
('Keya', 'Keya Chowdhury', 'keya94@gmail.com', 1719401875, 'Rajshahi', '1234567@#$%'),
('Turin', 'Keya Rahman', 'fahmidaturin94@gmail.com', 2147483647, 'Bogura', '34567891@'),
('Faiza', 'Fahmida Rashid', 'fahmidaturin34@gmail.com', 1719401875, 'Rajshahi', '1234567@');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Phone No` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `Email`, `Address`, `Phone No`) VALUES
(1, 'Fahmida Rashid', ' Fahmida', 'fahmida@gmail.com', 'Rajshahi', 5564467),
(2, 'Mehedi  Hasan', ' Mishal', 'mish@gmail.com', 'Dhaka', 1864467),
(3, 'Ariyan Jahangir', ' Ariyanl', 'ariyan@gmail.com', 'Chittagong', 6447767),
(4, 'Sabiha Natasha', ' Natasha', 'nats@gmail.com', 'Chittagong', 5788967);

-- --------------------------------------------------------

--
-- Table structure for table `flatowners_info`
--

CREATE TABLE `flatowners_info` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE NO` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flatowners_info`
--

INSERT INTO `flatowners_info` (`ID`, `NAME`, `ADDRESS`, `EMAIL`, `PHONE NO`) VALUES
(1, 'Nuri', 'Rajshahi', 'nu455@gmail.com', 86433333),
(2, 'Rakhi', 'Rajshahi', 'rakh55@gmail.com', 86433333);

-- --------------------------------------------------------

--
-- Table structure for table `pendingadd`
--

CREATE TABLE `pendingadd` (
  `ID` int(20) NOT NULL,
  `LOCATION` varchar(20) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `FLOOR` varchar(20) NOT NULL,
  `DETAILS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendingadd`
--

INSERT INTO `pendingadd` (`ID`, `LOCATION`, `ADDRESS`, `FLOOR`, `DETAILS`) VALUES
(1, 'Banani', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(2, 'Banani', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(3, 'Gulshan', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath');

-- --------------------------------------------------------

--
-- Table structure for table `sortedadd`
--

CREATE TABLE `sortedadd` (
  `ID` int(20) NOT NULL,
  `LOCATION` varchar(100) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `FLOOR` varchar(100) NOT NULL,
  `DETAILS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sortedadd`
--

INSERT INTO `sortedadd` (`ID`, `LOCATION`, `ADDRESS`, `FLOOR`, `DETAILS`) VALUES
(1, 'Gulshan', 'Road:07,House no:11', '3rd floor', 'single bed, 1 bath'),
(2, 'Banani', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath'),
(3, 'Gulshan', 'Road:02,House no:09', '2nd floor', 'single bed, 1 bath');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_details`
--
ALTER TABLE `add_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bachelor_info`
--
ALTER TABLE `bachelor_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flatowners_info`
--
ALTER TABLE `flatowners_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pendingadd`
--
ALTER TABLE `pendingadd`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sortedadd`
--
ALTER TABLE `sortedadd`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
