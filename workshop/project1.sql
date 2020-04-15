-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2019 at 08:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(23) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `image1` blob NOT NULL,
  `image2` blob NOT NULL,
  `events` varchar(30) NOT NULL,
  `name` varchar(70) NOT NULL,
  `year` varchar(50) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `guestname1` varchar(50) NOT NULL,
  `guestname2` varchar(50) NOT NULL,
  `fcod1` varchar(50) NOT NULL,
  `fcod2` varchar(60) NOT NULL,
  `target_audi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `image1`, `image2`, `events`, `name`, `year`, `start_date`, `end_date`, `guestname1`, `guestname2`, `fcod1`, `fcod2`, `target_audi`) VALUES
(1, 0x75706c6f61642f4e657720446f6320323031392d30332d31342031322e32312e34355f32202831292e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31342031322e32312e34355f33202831292e6a7067, 'workshop', 'PHP & JQUERY', '2017-2018', '2017-08-01', '2017-08-02', 'D.J RAJESH', '', 'CHALLA.YALLAMANDA', 'V.GOPINATH', '4/4 BTECH'),
(9, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33342e34325f322e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33342e34325f312e6a7067, 'workshop', 'DATA SCIENCE WITH R', '2017-2018', '2017-10-30', '2017-10-30', 'Ganesh Naga Doddi', '', 'CH.Yallamanda', 'K.Purna Prakash', '4/4 B.Tech.students '),
(10, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33382e30315f32202831292e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33382e30315f312e6a7067, 'workshop', 'DESIGN & BUILD INTERNET OF THINGS', '2017-2018', '2017-11-06', '2017-11-07', 'Ganesh Naga Doddi,founder', 'N.Mohan Reddy,trainer', 'G.Krishnaveni', 'P.Ramaiah chowdary', '3/4 B.Tech.students '),
(11, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33382e30315f34202831292e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031352e33382e30315f332e6a7067, 'workshop', 'WEB DESIGNING WITH BOOTSTRAP & ANGULAR-JS', '2017-2018', '2018-01-03', '2018-01-05', 'Vijay.B, Technical Head', 'Santosh.P,  Trainer-Bootstrap', 'A.M.K.Kannababu', 'P.Ramaiah Chowdary', '2/4 B.Tech.students '),
(12, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e30352e32345f32202831292e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e30352e32345f31202834292e6a7067, 'workshop', 'CROSS PLATFORM MOBILE APP DEVELOPMENT', '2017-2018', '2018-03-19', '2018-03-20', 'Venu Tadipatri(IT specialist)', 'Rahmat Md(Director)', 'G.Pavan', 'P.Ramaiah chowdary', '2/4 B.Tech.students '),
(13, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e31302e32325f31202832292e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e31302e32325f322e6a7067, 'workshop', 'CYBER SECURITY & ETHICAL HACKING', '2017-2018', '2018-02-26', '2018-02-28', 'Prameel Arjun(CEO)', 'G.Bharath Kumar', 'T.Satya Nagamani', 'D.Srinivas Rao', '3/4 B.Tech.students '),
(14, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e31382e32385f312e6a7067, 0x75706c6f61642f4e657720446f6320323031392d30332d31352031362e31382e32385f32202831292e6a7067, 'guestlectures', 'BIG DATA ANALYTICS', '2017-2018', '2017-08-21', '2017-08-21', 'Sathya Kondapalli', '', '', '', '2nd and 3rd year students'),
(15, '', '', 'workshop', 'IOT AND ITS APPLICATIONS', '2018-2019', '19/09/2018', '20/09/2018', '', '', '', '', '4/4 B,TECH STUDENTS'),
(16, '', '', 'workshop', 'CYBER SECURITY', '2018-2019', '2018-09-22', '2018-09-22', 'SRINIVAS PISUPATI', '', '', '', '4/4,3/4,2/4 B,TECH Students'),
(17, '', '', 'workshop', 'GOOGLE ANDRIOD DEVELOPER', '2018-2019', '2018-10-09', '2018-10-11', '', '', '', '', '3/4 B.TECH Students'),
(18, '', '', 'workshop', 'CLOUD COMPUTING', '2018-2019', '2018-12-19', '2018-12-22', '', '', '', '', '2/4 B.TECH Students'),
(19, '', '', 'conferences', 'COMPUTER VISION AND MACHINE LEARNING', '2018-2019', '2018-12-27', '2018-12-28', '', '', '', '', 'IT & CSE students'),
(20, '', '', 'Fdp', 'JAVA ', '2018-2019', '2019-01-21', '2019-01-25', '', '', '', '', ''),
(26, '', '', 'workshop', 'INTERNET OF THINGS', '2016-2017', '2016-09-16', '2016-09-16', 'D.Rama krishna', '', '', '', 'IT & CSE STUDENTS'),
(28, '', '', 'workshop', 'CAREER & SKILL DEVELOPMENT', '2016-2017', '2016-12-08', '2016-12-11', 'SREEDHAR', 'VAMSI KRISHNA', '', '', 'STUDENTS'),
(29, '', '', 'workshop', 'CYBER SECURITY', '2016-2017', '2017-02-28', '2017-03-01', 'PRAMEEL ARJUN', '', 'J.Malathi', 'N.sameera', '3/4 B.tech students'),
(30, '', '', 'guestlectures', 'RECENT TRENDS IN DATA SCIENTIST', '2016-2017', '2017-03-29', '2017-03-29', 'DR.P.Suresh Varma', '', '', '', ''),
(31, '', '', 'workshop', 'PHP', '2016-2017', '2017-01-31', '2017-01-31', 'D.janaki Rajesh', '', '', '', '2/4 B.tech students'),
(32, '', '', 'workshop', 'PHOTOSHOP', '2016-2017', '2017-03-11', '2017-03-11', 'P.Preetham Babu', '', '', '', '2/4 B.Tech Students');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
