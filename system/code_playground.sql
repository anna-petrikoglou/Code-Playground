-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3308
-- Χρόνος δημιουργίας: 06 Ιουν 2018 στις 17:14:08
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
  `project_php` text NOT NULL,
  `project_sql` text NOT NULL,
  `project_name` varchar(70) NOT NULL,
  `project_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `projects`
--

INSERT INTO `projects` (`project_id`, `project_html`, `project_css`, `project_javascript`, `project_php`, `project_sql`, `project_name`, `project_date`, `user_id`) VALUES
(1, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', '', '2018-05-13 21:30:46', 26),
(2, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'George', '2018-05-13 22:30:31', 26),
(3, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'George', '2018-05-13 22:31:21', 26),
(4, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Anna', '2018-05-13 22:33:23', 26),
(5, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Anna', '2018-05-13 22:34:15', 26),
(6, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Rocky', '2018-05-13 22:38:40', 26),
(7, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Rocky', '2018-05-13 22:39:22', 26),
(8, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Trial', '2018-05-13 23:08:56', 26),
(9, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Project 1', '2018-05-15 16:44:47', 1),
(10, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Project 1', '2018-05-15 16:46:45', 1),
(11, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Entry Level', '2018-05-16 15:09:54', 1),
(12, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Entry Level', '2018-05-16 15:40:41', 1),
(13, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-16 16:31:46', 28),
(14, '<h1>Press \"Ctrl + Shift + i\"!</h1>\r\n<p>hi</p>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-16 16:32:25', 28),
(15, '', '', '', '', '', 'Untitled', '2018-05-26 17:53:41', 1),
(16, '', '', '', '', '', 'Untitled', '2018-05-28 13:32:11', 1),
(17, '', '', '', 'echo \"You are learning really fast!\";\r\n$variable = 5+5;\r\necho \"<br>\".$variable;', 'SELECT * FROM projects WHERE project_id = \'', 'Untitled', '2018-05-28 15:21:01', 1),
(18, '', '', '', 'echo \"You are learning really fast!\";\r\n$variable = 5+5;\r\necho \"<br>\".$variable;', '', 'First php project', '2018-05-28 15:23:40', 1),
(19, '', '', '', 'echo \"You are learning really fast!\";\r\n$variable = 5+5;\r\necho \"<br>\".$variable.\"<br>\";\r\n$list = [\'anna\', \'john\', \'mike\'];\r\nvar_dump($list);', '', 'First php project', '2018-05-28 15:26:08', 1),
(20, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test Test', '2018-05-28 20:55:00', 29),
(21, '', '', '', 'echo date(\'m/d/Y h:i:s a\', time());', '', 'Current Time', '2018-05-28 20:57:48', 29),
(22, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 3', '2018-05-28 21:01:49', 29),
(23, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:20:12', 29),
(24, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:20:43', 29),
(25, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:24:19', 29),
(26, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:24:39', 29),
(27, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:25:06', 29),
(28, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:25:19', 29),
(29, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:26:30', 29),
(30, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:27:09', 29),
(31, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:27:52', 29),
(32, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:30:15', 29),
(33, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:31:10', 29),
(34, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:32:12', 29),
(35, '<h1>Hello!</h1>', 'h1 {color: #62c9ba;}', '', '', '', 'Test 7', '2018-05-28 22:11:01', 1),
(36, '', '', '', 'echo 5;', '', 'Number', '2018-05-28 22:27:18', 1),
(37, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-29 00:08:05', 30),
(38, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:08:33', 30),
(39, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:15:26', 30),
(40, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:15:55', 30),
(41, '', '', '', 'echo \"You are learning really fast Anna!\";', '', 'Retry', '2018-06-06 01:16:51', 7),
(42, '', '', '', 'echo \"You are learning really fast Anna!\";', '', 'Retry', '2018-06-06 01:19:18', 7),
(43, '<h1>Press \"ESC\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Let\'s see', '2018-06-06 01:19:54', 7),
(44, '', '', '', 'echo \"You are NOT learning fast!\";', '', 'Done', '2018-06-06 01:22:37', 7),
(45, '', '', '', 'echo \"You are learning really fast!\";', '', 'Not done', '2018-06-06 01:22:53', 7),
(46, '', '', '', 'echo \"You are learning really SLOW!\";', '', 'NOT done', '2018-06-06 01:33:31', 7);

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
  `user_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_username`, `user_password`, `user_date`) VALUES
(8, 'Administrator', 'Administrator', 'mai1550@uom.edu.gr', 'root', '$2y$10$.PrtT7WDGCZp5PE9F0Pdx.O0N08YrYJVX9I2.dcctrA/AwHlUwMeO', '2018-05-16 15:12:22'),
(2, 'Christos', 'Petrikoglou', 'petrouskagia@gmail.com', 'chris', '$2y$10$aH2AEQLvI8/JJj.qeKdOtOakvmrgDfG8nWVXspYaWfoIyu6Df4/5y', '2018-05-16 15:12:22'),
(1, 'Anna', 'Petrikoglou', 'anna28989@gmail.com', 'admin', '$2y$10$3sBH/gzE5r7ZEbhyt/ND2ONZqnbIy5Sq3A.c/bTEUqU0tVPkf0.ni', '2018-05-16 15:12:22'),
(9, 'John', 'Smith', 'anna28989@yahoo.gr', 'john', '$2y$10$zKKl8bsa1LBC.06R8ie3zunrLksE7Q3tdnJJZuoWR6dtmzgHKa1Ky', '2018-05-16 15:12:22'),
(10, 'Annie', 'Peterson', 'anna28989@hotmail.com', 'annie', '$2y$10$W0LscQ76bSkTo81UspILpu1XfEYb5yPgQtnNnlq5qWykpD5QcKFI2', '2018-05-16 15:12:22'),
(11, 'Mark', 'Brown', 'anna@anamo.work', 'mark', '$2y$10$UdQEJcW23DXIV1KYGxi3gOmzIo5MMWW8OHJRyJKrjHVyrld4T/zUW', '2018-05-16 15:12:22'),
(12, 'Edgar', 'Roberts', 'petrikoglou@gmail.com', 'edgar', '$2y$10$AVuy21pS4PDB6I4EnQSWl.pbT8LhYDo3VkUYbvYK8RKXc3w9LJVfG', '2018-05-16 15:12:22'),
(7, 'Anna', 'Petrikoglou', 'a.petrikoglou@gmail.com', 'anna', '$2y$10$dnTRJeLcTFo7Eg8PevcwH.gXusgYIeO3oeHxwPOGPeoux.Oq2AUOq', '2018-05-16 15:12:22'),
(14, 'Martha', 'Papadopoulou', 'marpap67@gmail.com', 'martha', '$2y$10$jT6vBkk4dM4zT8VmKnN2xOg6K0eiVAr7GqmCmeZUEeAsvgXcTitk6', '2018-05-16 15:12:22'),
(15, 'Michelle', 'Richmond', 'michrich@gmail.com', 'cat', '$2y$10$K3L.1abrAgwNgEb2yEJpBOUaJ8VaY/No1nRPVIPr2rPZyYFbNvzHe', '2018-05-16 15:12:22'),
(16, 'Alice', 'Simpson', 'alice@gmail.com', 'alice', '$2y$10$k8L6MwGtFpL1RVmtjAfr5.MXOFSKkbW1Tu3Kij6VecbYlfnPs1WTy', '2018-05-16 15:12:22'),
(17, 'Marie', 'Curie', 'curie@gmail.com', 'curia', '$2y$10$Qa0dT1uokQO9vC73fUdDLOpzN40SGCigXjZbznb6M27.gsUHeKSM6', '2018-05-16 15:12:22'),
(18, 'Eros', 'Ramazzotti', 'eros@gmail.com', 'eros', '$2y$10$6mJHdvdwmso.C35WKKI1P.lm/r9nq5JnzFgLx30Hsit13hkDf9L/C', '2018-05-16 15:12:22'),
(19, 'Bob', 'Marley', 'bob@gmail.com', 'bob', '$2y$10$RgZJtWBuewlqPsgbCdmlg.awKlFvxsi8.GdI9xz0heE6xiV12lT5.', '2018-05-16 15:12:22'),
(20, 'Eddie', 'Murphy', 'eddie@gmail.com', 'eddie', '$2y$10$IAm8rtOPqXee62LNkU6LvuZZv1obzrJWpbfKfONcLOsLzANdqtPYG', '2018-05-16 15:12:22'),
(21, 'Bon', 'Jovi', 'bon@gmail.com', 'bon', '$2y$10$kqo02N7PXa/QIInTwPY0b.TclMLpVTlsVAnIkYyoazhsG8D1aO35W', '2018-05-16 15:12:22'),
(22, 'Bill', 'Gates', 'bill@gmail.com', 'bill', '$2y$10$y/zUhWOQZkHLso7SLlUKL.ltmPTDFB8G8bzoUsibml.KnqyTplzfq', '2018-05-16 15:12:22'),
(23, 'Albert', 'Einstein', 'albert@gmail.com', 'albert', '$2y$10$3kHOPX79sQRVS8OcSaBije8UXdGbwA2BkCPEUfOOcxLwCLR0B2TBC', '2018-05-16 15:12:22'),
(24, 'Will', 'Smith', 'will@gmail.com', 'will', '$2y$10$RE6WTTgvIyDQs8DJt47MceX.ozPFyoGdxVynPi7Yi5qYqMf0mQWou', '2018-05-16 15:12:22'),
(25, 'Adam', 'Smith', 'adam@gmail.com', 'adam', '$2y$10$PfWpqwDOCJbOIVY/JP8Qyea6uKeBZGI/8vKk5.MpWDRFIqsQoyn2m', '2018-05-16 15:12:22'),
(26, 'Isaac', 'Newton', 'isaac@gmail.com', 'isaac', '$2y$10$gQoUZO9PwMDXB7PgqGQT5On8wIRpXVJTmUj87WMkc72KsKQ8/UP5C', '2018-05-16 15:12:22'),
(27, 'anna', 'anna', 'anna@gmail.com', 'ann', '$2y$10$Dft68y/EQNM60UUCqbSRSe7FojLB1yDmwz2/mTXHVduFNmB5VZgfq', '2018-05-16 15:12:22'),
(28, 'Steve', 'Jobs', 'steve@gmail.com', 'steve', '$2y$10$oMhpVC/jbLKu5hZ0/h3BmOH0XxnWin1f2JPBHqE5d4p0ZEyXbe.SW', '2018-05-16 15:43:04'),
(29, 'Alan', 'Turing', 'alan@gmail.com', 'alan', '$2y$10$Pwl2IRCnvb2q6DwLXnSTgexxlVXIRKG7NquiJDh3hp6NcKogyOzbO', '2018-05-28 20:48:50'),
(30, 'Aliki', 'Vougiouklaki', 'aliki@gmail.com', 'aliki', '$2y$10$9auR8G7ezi1ek0x6umOUb.AD4lvdDKBaEjC1oiNqHYuB2MyEGCtb2', '2018-05-29 00:07:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
