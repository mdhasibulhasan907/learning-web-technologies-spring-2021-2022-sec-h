-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 10:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erphospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountofficer`
--

CREATE TABLE `accountofficer` (
  `username` text NOT NULL,
  `password` int(100) NOT NULL,
  `address` text NOT NULL,
  `gender` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountofficer`
--

INSERT INTO `accountofficer` (`username`, `password`, `address`, `gender`, `phone`, `email`, `image`) VALUES
('Dola', 123456, 'bashundhara,dhaka', 'female', '017947869048', 'dola@gmail.com', '../files/dola.jpg'),
('Dola', 123456, 'bashundhara,dhaka', 'female', '017947869048', 'dola@gmail.com', '../asset/dola.jpg'),
('kajol', 12345, '  Bashundhara R/A,B block', 'male', '01923847456547', 'kajol@gmail.com', '../asset/Thankyou.jpg'),
('abir', 1234567, ' mirpur,dhaka ', 'male', '0178474', 'abirhasan@gmail.com', '../asset/3.jpg'),
('abir', 1234567, ' mirpur,dhaka ', 'male', '0178474', 'abirhasan@gmail.com', '../asset/3.jpg'),
('abir', 1234567, ' mirpur,dhaka ', 'male', '0178474', 'abirhasan@gmail.com', '../asset/3.jpg'),
('abrar', 12345678, 'Bashundhara,dhaka', 'male', '018374645643', 'abrar@gmail.com', '../asset/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `addnotice`
--

CREATE TABLE `addnotice` (
  `notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addnotice`
--

INSERT INTO `addnotice` (`notice`) VALUES
('abcdefghijklmn');

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `userId` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`userId`, `password`) VALUES
('Admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentinfo`
--

CREATE TABLE `appointmentinfo` (
  `Asl` int(10) NOT NULL,
  `PatientID` int(10) NOT NULL,
  `DoctorName` varchar(15) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentinfo`
--

INSERT INTO `appointmentinfo` (`Asl`, `PatientID`, `DoctorName`, `Time`) VALUES
(4, 11345, 'Dr mahe', 'sunday 2pm'),
(48, 4455, 'Dr mahe', 'Sunday 10 pm'),
(99, 23, 'Dr. rashed', 'sunday 2pm');

-- --------------------------------------------------------

--
-- Table structure for table `communicatingwithclients`
--

CREATE TABLE `communicatingwithclients` (
  `clientname` text NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `emailaddress` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communicatingwithclients`
--

INSERT INTO `communicatingwithclients` (`clientname`, `phonenumber`, `emailaddress`, `Date`) VALUES
('Dola', 137364221, 'dola@gmail.com', '0000-00-00'),
('Eshrat', 137364221, 'eshrat@gmail.com', '2022-04-04'),
('Dola', 0, 'xyz', '0000-00-00'),
('kajol', 0, 'xyz', '0000-00-00'),
('kajol', 0, 'xyz', '0000-00-00'),
('kajol', 0, 'xyz', '0000-00-00'),
('dola', 0, 'xyz', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contactwithhelpline`
--

CREATE TABLE `contactwithhelpline` (
  `number` int(255) NOT NULL,
  `email` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactwithhelpline`
--

INSERT INTO `contactwithhelpline` (`number`, `email`, `date`) VALUES
(1796430058, 'dola@gmail.com', ''),
(1796430084, 'eshrat@gmail.com', '2022-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `sl` int(5) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`sl`, `userid`, `username`, `email`, `date`, `gender`, `address`, `password`) VALUES
(1, '234', 'kajol', 'kajol@gmail.com', '2010-11-11', 'Female', 'uttora', '123');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlist`
--

CREATE TABLE `doctorlist` (
  `sl` int(15) NOT NULL,
  `userid` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(29) NOT NULL,
  `add` varchar(29) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctormeetingschedule`
--

CREATE TABLE `doctormeetingschedule` (
  `Asl` int(38) NOT NULL,
  `DoctorID` int(40) NOT NULL,
  `DoctorName` varchar(40) NOT NULL,
  `Time` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctormeetingschedule`
--

INSERT INTO `doctormeetingschedule` (`Asl`, `DoctorID`, `DoctorName`, `Time`) VALUES
(1, 0, '', ''),
(2, 0, '', ''),
(3, 23, 'Dr. sijan', 'Monday 10 pm'),
(4, 21, 'Dr. sijan', 'Tuesday 10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `enteringdataintothehospital`
--

CREATE TABLE `enteringdataintothehospital` (
  `inputdata` text NOT NULL,
  `date` date NOT NULL,
  `totalpatient` int(255) NOT NULL,
  `totaltest` int(200) NOT NULL,
  `totalamount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enteringdataintothehospital`
--

INSERT INTO `enteringdataintothehospital` (`inputdata`, `date`, `totalpatient`, `totaltest`, `totalamount`) VALUES
('xyz', '2022-04-01', 120, 300, 105000);

-- --------------------------------------------------------

--
-- Table structure for table `generatingbills`
--

CREATE TABLE `generatingbills` (
  `paitentname` text NOT NULL,
  `diseasedetails` text NOT NULL,
  `totalbill` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generatingbills`
--

INSERT INTO `generatingbills` (`paitentname`, `diseasedetails`, `totalbill`) VALUES
('', '', 0),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', '', 4000),
('', 'covid-19', 1500),
('Dola', 'covid-19', 1500),
('Eshrat', 'abcde', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Username` varchar(20) NOT NULL,
  `Password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`) VALUES
('CEOlogin', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `manageruser`
--

CREATE TABLE `manageruser` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manageruser`
--

INSERT INTO `manageruser` (`Username`, `Password`) VALUES
('Mahe', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `Pserial` int(5) NOT NULL,
  `Userid` int(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`Pserial`, `Userid`, `username`, `email`, `dateofbirth`, `gender`, `address`, `password`) VALUES
(1, 11234, 'samim', 'm@email.com', '2022-03-30', 'Male', '123', '123'),
(2, 11347, 'masum', 'm@email.com', '1003-10-10', 'Male', 'Dhanmondi', ''),
(3, 11354, 'mahe', 'mahe@gmail.com', '1999-09-30', 'Female', 'voirob', '098'),
(16, 11669, 'kajol', 'kajol112@gmail.com', '2022-05-07', 'Female', 'Dhanmondi', '980');

-- --------------------------------------------------------

--
-- Table structure for table `paydoctor`
--

CREATE TABLE `paydoctor` (
  `doctorpayment` int(255) NOT NULL,
  `doctorname` text NOT NULL,
  `paymentamount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paydoctor`
--

INSERT INTO `paydoctor` (`doctorpayment`, `doctorname`, `paymentamount`) VALUES
(566, 'Dr.ramiz azad', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `prepairbankdepositsandgeneralledger`
--

CREATE TABLE `prepairbankdepositsandgeneralledger` (
  `bankdeposit` text NOT NULL,
  `billid` text NOT NULL,
  `accountnumber` int(255) NOT NULL,
  `depositamount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prepairbankdepositsandgeneralledger`
--

INSERT INTO `prepairbankdepositsandgeneralledger` (`bankdeposit`, `billid`, `accountnumber`, `depositamount`) VALUES
('12345', '1212', 162362, 0),
('503940', '17627', 1827, 5900);

-- --------------------------------------------------------

--
-- Table structure for table `processingrefunds`
--

CREATE TABLE `processingrefunds` (
  `name` text NOT NULL,
  `details` text NOT NULL,
  `refund` text NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `processingrefunds`
--

INSERT INTO `processingrefunds` (`name`, `details`, `refund`, `amount`) VALUES
('dola', 'Covid -19 positive', 'xyz', 5000),
('Dola', 'Covid -19 positive', 'xyzab', 5000),
('Eshrat jahan', 'dengue', 'xyzab', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Serial` int(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` int(200) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Cost` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Serial`, `Date`, `Time`, `Name`, `Cost`) VALUES
(2, '0000-00-00', 0, '', 0),
(3, '0000-00-00', 0, '', 0),
(4, '0000-00-00', 0, '', 0),
(5, '0000-00-00', 0, '', 0),
(6, '0000-00-00', 0, '', 0),
(8, '2022-04-14', 12, 'sdfsd', 12),
(9, '2022-04-07', 12, 'mahe', 12);

-- --------------------------------------------------------

--
-- Table structure for table `reporttoceo`
--

CREATE TABLE `reporttoceo` (
  `report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reporttoceo`
--

INSERT INTO `reporttoceo` (`report`) VALUES
('abcdefghijklmnopqrstuvwxyz');

-- --------------------------------------------------------

--
-- Table structure for table `takingpatientpaymentforservice`
--

CREATE TABLE `takingpatientpaymentforservice` (
  `receivepatientpayment` text NOT NULL,
  `patientname` text NOT NULL,
  `totalbill` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `takingpatientpaymentforservice`
--

INSERT INTO `takingpatientpaymentforservice` (`receivepatientpayment`, `patientname`, `totalbill`) VALUES
('', '', 15000),
('15000', 'Eshrat', 15000),
('20000', 'Dola', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentinfo`
--
ALTER TABLE `appointmentinfo`
  ADD PRIMARY KEY (`Asl`),
  ADD UNIQUE KEY `PatientID` (`PatientID`);

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `doctorlist`
--
ALTER TABLE `doctorlist`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `doctormeetingschedule`
--
ALTER TABLE `doctormeetingschedule`
  ADD PRIMARY KEY (`Asl`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`Pserial`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentinfo`
--
ALTER TABLE `appointmentinfo`
  MODIFY `Asl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  MODIFY `sl` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctorlist`
--
ALTER TABLE `doctorlist`
  MODIFY `sl` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctormeetingschedule`
--
ALTER TABLE `doctormeetingschedule`
  MODIFY `Asl` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `Pserial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Serial` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
