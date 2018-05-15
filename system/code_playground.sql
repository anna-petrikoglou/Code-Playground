-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3308
-- Χρόνος δημιουργίας: 15 Μάη 2018 στις 18:36:51
-- Έκδοση διακομιστή: 5.7.19
-- Έκδοση PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `code_playground`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(10) NOT NULL AUTO_INCREMENT,
  `project_html` text NOT NULL,
  `project_css` text NOT NULL,
  `project_javascript` text NOT NULL,
  `project_name` varchar(70) NOT NULL,
  `project_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `projects`
--

INSERT INTO `projects` (`project_id`, `project_html`, `project_css`, `project_javascript`, `project_name`, `project_date`, `user_id`) VALUES
(1, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '2018-05-13 21:30:46', 26),
(2, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'George', '2018-05-13 22:30:31', 26),
(3, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'George', '2018-05-13 22:31:21', 26),
(4, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Anna', '2018-05-13 22:33:23', 26),
(5, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Anna', '2018-05-13 22:34:15', 26),
(6, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Rocky', '2018-05-13 22:38:40', 26),
(7, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Rocky', '2018-05-13 22:39:22', 26),
(8, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Trial', '2018-05-13 23:08:56', 26),
(9, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Project 1', '2018-05-15 16:44:47', 1),
(10, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', 'Project 1', '2018-05-15 16:46:45', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(70) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(256) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_username`, `user_password`) VALUES
(8, 'Administrator', 'Administrator', 'mai1550@uom.edu.gr', 'root', '$2y$10$.PrtT7WDGCZp5PE9F0Pdx.O0N08YrYJVX9I2.dcctrA/AwHlUwMeO'),
(2, 'Christos', 'Petrikoglou', 'petrouskagia@gmail.com', 'chris', '$2y$10$aH2AEQLvI8/JJj.qeKdOtOakvmrgDfG8nWVXspYaWfoIyu6Df4/5y'),
(1, 'Anna', 'Petrikoglou', 'anna28989@gmail.com', 'admin', '$2y$10$3sBH/gzE5r7ZEbhyt/ND2ONZqnbIy5Sq3A.c/bTEUqU0tVPkf0.ni'),
(9, 'John', 'Smith', 'anna28989@yahoo.gr', 'john', '$2y$10$zKKl8bsa1LBC.06R8ie3zunrLksE7Q3tdnJJZuoWR6dtmzgHKa1Ky'),
(10, 'Annie', 'Peterson', 'anna28989@hotmail.com', 'annie', '$2y$10$W0LscQ76bSkTo81UspILpu1XfEYb5yPgQtnNnlq5qWykpD5QcKFI2'),
(11, 'Mark', 'Brown', 'anna@anamo.work', 'mark', '$2y$10$UdQEJcW23DXIV1KYGxi3gOmzIo5MMWW8OHJRyJKrjHVyrld4T/zUW'),
(12, 'Edgar', 'Roberts', 'petrikoglou@gmail.com', 'edgar', '$2y$10$AVuy21pS4PDB6I4EnQSWl.pbT8LhYDo3VkUYbvYK8RKXc3w9LJVfG'),
(7, 'Anna', 'Petrikoglou', 'a.petrikoglou@gmail.com', 'anna', '$2y$10$dnTRJeLcTFo7Eg8PevcwH.gXusgYIeO3oeHxwPOGPeoux.Oq2AUOq'),
(14, 'Martha', 'Papadopoulou', 'marpap67@gmail.com', 'martha', '$2y$10$jT6vBkk4dM4zT8VmKnN2xOg6K0eiVAr7GqmCmeZUEeAsvgXcTitk6'),
(15, 'Michelle', 'Richmond', 'michrich@gmail.com', 'cat', '$2y$10$K3L.1abrAgwNgEb2yEJpBOUaJ8VaY/No1nRPVIPr2rPZyYFbNvzHe'),
(16, 'Alice', 'Simpson', 'alice@gmail.com', 'alice', '$2y$10$k8L6MwGtFpL1RVmtjAfr5.MXOFSKkbW1Tu3Kij6VecbYlfnPs1WTy'),
(17, 'Marie', 'Curie', 'curie@gmail.com', 'curia', '$2y$10$Qa0dT1uokQO9vC73fUdDLOpzN40SGCigXjZbznb6M27.gsUHeKSM6'),
(18, 'Eros', 'Ramazzotti', 'eros@gmail.com', 'eros', '$2y$10$6mJHdvdwmso.C35WKKI1P.lm/r9nq5JnzFgLx30Hsit13hkDf9L/C'),
(19, 'Bob', 'Marley', 'bob@gmail.com', 'bob', '$2y$10$RgZJtWBuewlqPsgbCdmlg.awKlFvxsi8.GdI9xz0heE6xiV12lT5.'),
(20, 'Eddie', 'Murphy', 'eddie@gmail.com', 'eddie', '$2y$10$IAm8rtOPqXee62LNkU6LvuZZv1obzrJWpbfKfONcLOsLzANdqtPYG'),
(21, 'Bon', 'Jovi', 'bon@gmail.com', 'bon', '$2y$10$kqo02N7PXa/QIInTwPY0b.TclMLpVTlsVAnIkYyoazhsG8D1aO35W'),
(22, 'Bill', 'Gates', 'bill@gmail.com', 'bill', '$2y$10$y/zUhWOQZkHLso7SLlUKL.ltmPTDFB8G8bzoUsibml.KnqyTplzfq'),
(23, 'Albert', 'Einstein', 'albert@gmail.com', 'albert', '$2y$10$3kHOPX79sQRVS8OcSaBije8UXdGbwA2BkCPEUfOOcxLwCLR0B2TBC'),
(24, 'Will', 'Smith', 'will@gmail.com', 'will', '$2y$10$RE6WTTgvIyDQs8DJt47MceX.ozPFyoGdxVynPi7Yi5qYqMf0mQWou'),
(25, 'Adam', 'Smith', 'adam@gmail.com', 'adam', '$2y$10$PfWpqwDOCJbOIVY/JP8Qyea6uKeBZGI/8vKk5.MpWDRFIqsQoyn2m'),
(26, 'Isaac', 'Newton', 'isaac@gmail.com', 'isaac', '$2y$10$gQoUZO9PwMDXB7PgqGQT5On8wIRpXVJTmUj87WMkc72KsKQ8/UP5C'),
(27, 'anna', 'anna', 'anna@gmail.com', 'ann', '$2y$10$Dft68y/EQNM60UUCqbSRSe7FojLB1yDmwz2/mTXHVduFNmB5VZgfq');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
