-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 21, 2018 at 01:13 PM
-- Server version: 10.0.35-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codetrip_gr_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(10) NOT NULL,
  `GroupName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TimePeriod` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Notes` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`, `TimePeriod`, `Notes`) VALUES
(1, 'Baby Boomer Generation', '1946-1964', 'Born after World War II.'),
(2, 'Generation X', '1965-1979', 'Smaller birth rates, but higher education.'),
(3, 'Generation Y', '1980-1994', 'Attached to technology more than ever.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `Company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `YearOfBirth` year(4) NOT NULL,
  `InterestingFact` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `GroupID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Company`, `Country`, `YearOfBirth`, `InterestingFact`, `GroupID`) VALUES
(1, 'Steve', 'Jobs', 'Apple', 'USA', 1955, 'Steven Paul Jobs was a pioneer entrepreneur. He and Steven Wozniak founded Apple in the 1970s. He remained the CEO and the president of the administrative council (Board of Directors) of the company until his death and was responsible for Apple\'s success in a big part of the story. He grew up with adoptive parents. He had four children and he was a Buddhist. Steve Jobs died of pancreatic cancer at the age of 56, one day after the launch of the iPhone 4s, which took place in his absence. He was honored with many awards. His contribution to technology and its presence in people\'s everyday lives has undoubtfully been a great legacy for us.', 1),
(2, 'Mark', 'Zuckerberg', 'Facebook', 'USA', 1984, 'Mark Elliot Zuckerberg', 3),
(3, 'Bill', 'Gates', 'Microsoft', 'USA', 1955, 'William Henry \"Bill\" Gates III', 1),
(4, 'Larry', 'Page', 'Google', 'USA', 1973, '', 2),
(5, 'Elon', 'Musk', 'PayPal', 'USA', 1971, 'Elon Reeve Musk', 2),
(6, 'Jeff', 'Bezos', 'Amazon', 'USA', 1964, 'Jeffrey Preston Bezos', 1),
(7, 'Ginni', 'Rometty', 'IBM', 'USA', 1957, 'Virginia Marie \"Ginni\" Rometty', 1),
(8, 'Del', 'Harvey', 'Twitter', 'USA', 1982, '', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`),
  ADD KEY `GroupID` (`GroupID`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `GroupID` FOREIGN KEY (`GroupID`) REFERENCES `users` (`GroupID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
