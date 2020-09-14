-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 08:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4897078_onlinetestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `queid` int(5) NOT NULL,
  `que` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionb` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optionc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `optiond` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans` enum('a','b','c','d') COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`queid`, `que`, `optiona`, `optionb`, `optionc`, `optiond`, `ans`, `subject`) VALUES
(1, ' What was the 2016 theme of ‘World Water Day’ celebrated on 22nd March 2016?', 'Water and Jobs\r\n', 'Water and Sustainable Development\r\n', 'Safe Drinking Water for all\r\n', 'Inclusive Water Safety', 'a', 'Current Affairs'),
(2, ' Name the Indian student who has won the first Noor Inayat Khan Prize 2016 for her dissertation on “Goddess Myths in Graphic Novels: Reimagining Indian Feminity”\r\n', 'Sonakshi Arora', 'Geetakshi Arora', 'Sonakshi Ahuja', 'Geetakshi Ahuja', 'b', 'Current Affairs'),
(3, 'Who won the Women’s Singles title at Australian Open 2016?', 'Angelique Kerber', 'Serena Williams', 'FlaviaPennetta', 'Maria Sharapova', 'a', 'Current Affairs'),
(4, 'The first smart tribal model village ‘Hubbi’ was inaugurated in:', 'Jammu & Kashmir', 'Gujrat', 'karnataka', 'Odisha', 'a', 'Current Affairs'),
(5, 'Bollywood Star Salman Khan will launch his own brand of android phones under the name:\r\n', '‘Being Talky’', '‘Being Mobile’\r\n', '‘Being Connected’\r\n', '‘Being Smart’', 'd', 'Current Affairs'),
(6, ' A team of researchers working at which company have created the world’s smallest magnet using a solitary atom\r\n', 'Microsoft\r\n', 'IBM', 'DuPont\r\n', 'Toshiba', 'b', 'Current Affairs'),
(7, '‘Bhagoria Haat Festival’ is celebrated by tribal people of:', 'Andaman & Nicobar Islands\r\n', 'Chhattisgarh', 'Madhya Pradesh', 'Rajasthan', 'c', 'Current Affairs'),
(8, '‘International Women’s Day (IWD)’ is celebrated on which date every year?', '7th March', '8th March', '9th March', '10th March', 'b', 'Current Affairs'),
(9, 'Indias first underwater metro will be constructed in which city?', 'Delhi', 'Mumbai', 'Kolkata', 'Surat', 'c', 'Current Affairs'),
(10, 'Who is the author of \"The Ministry of Utmost Happiness\"?', 'Jumpa Lahiri', 'Chetan Bhagat', 'Arundhati Roy', 'Shoba De', 'b', 'Current Affairs'),
(11, 'The product of 2 numbers is 1575 and their quotient is 9/7. Then the sum of the numbers is –', '74', '78', '80', '90', 'c', 'Maths'),
(12, 'The value of (81)3.6 * (9)2.7/ (81)4.2 * (3) is ', '3', '6', '8.2', '9', 'd', 'Maths'),
(13, ' √6+√6+√6+… is equal to –', '3', '2', '5', '4', 'a', 'Maths'),
(14, 'The sum of the squares of two natural consecutive odd numbers is 394. The sum of the numbers is –', '24', '28', '32', '40', 'b', 'Maths'),
(15, 'If 738 A6A is divisible by 11, then the value of A is-', '6', '3', '9', '1', 'c', 'Maths'),
(16, ' A can do a piece of work in 24 day, B in 32 days and C in 64 days. All begin to do it together, but A leaves after 6 days and B leaves 6 days before the completion of the work. How many days did the work last?', '15', '20', '18', '30', 'b', 'Maths'),
(17, 'The square root of (0.75)3 /1-0.75 + [0.75 + 90.75)2 +1] is-', '1', '2', '3', '4', 'b', 'Maths'),
(18, 'By selling an article at 3/4th of the marked price, there is a gain of 25%. The ratio of the marked price and the cost price is-', '5:3', '3:5', '4:3', '3:4', 'a', 'Maths'),
(19, 'Given that √4096 = 64, the value of √4096 + √40.96 +√0.004096 is-', '70.4', '70.464', '71.4', '71.104', 'b', 'Maths'),
(20, 'A and B earn in the ratio 2:1. They spend in the ratio 5:3 and save in the ratio 4:1. If the total monthly savings of both A and B are Rs.5,000, the monthly income of B is-', '14000', '10000', '7000', '5000', 'c', 'Maths');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `testid` int(100) DEFAULT NULL,
  `percentage` int(100) DEFAULT NULL,
  `subject` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testid` int(5) NOT NULL,
  `subject` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `duration` int(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testid`, `subject`, `duration`) VALUES
(1, 'Current Affairs', 180),
(2, 'Maths', 600);

-- --------------------------------------------------------

--
-- Table structure for table `test_question`
--

CREATE TABLE `test_question` (
  `testid` int(5) DEFAULT NULL,
  `queid` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `test_question`
--

INSERT INTO `test_question` (`testid`, `queid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `status`) VALUES
('admin', 'admin', NULL, 1),
('test', 'test', 'test@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`queid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testid`);

--
-- Indexes for table `test_question`
--
ALTER TABLE `test_question`
  ADD KEY `testid` (`testid`),
  ADD KEY `queid` (`queid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `queid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `testid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `test_question`
--
ALTER TABLE `test_question`
  ADD CONSTRAINT `test_question_ibfk_1` FOREIGN KEY (`testid`) REFERENCES `test` (`testid`),
  ADD CONSTRAINT `test_question_ibfk_2` FOREIGN KEY (`queid`) REFERENCES `question` (`queid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
