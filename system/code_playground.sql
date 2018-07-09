-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1:3308
-- Χρόνος δημιουργίας: 09 Ιουλ 2018 στις 19:39:14
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
  `project_type` varchar(5) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `projects`
--

INSERT INTO `projects` (`project_id`, `project_html`, `project_css`, `project_javascript`, `project_php`, `project_sql`, `project_name`, `project_date`, `user_id`, `project_type`) VALUES
(1, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', '', '2018-05-13 21:30:46', 26, 'web'),
(2, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'George', '2018-05-13 22:30:31', 26, 'web'),
(3, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'George', '2018-05-13 22:31:21', 26, 'web'),
(4, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Anna', '2018-05-13 22:33:23', 26, 'web'),
(5, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Anna', '2018-05-13 22:34:15', 26, 'web'),
(6, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Rocky', '2018-05-13 22:38:40', 26, 'web'),
(7, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Rocky', '2018-05-13 22:39:22', 26, 'web'),
(8, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Trial', '2018-05-13 23:08:56', 26, 'web'),
(9, '', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Project 1', '2018-05-15 16:44:47', 1, 'web'),
(66, '', '', '', '', 'SELECT * FROM users;', 'someSQL', '2018-07-06 01:52:01', 32, 'sql'),
(64, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'someWeb', '2018-07-06 01:51:39', 32, 'web'),
(12, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Entry Level', '2018-05-16 15:40:41', 1, 'web'),
(13, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-16 16:31:46', 28, 'web'),
(14, '<h1>Press \"Ctrl + Shift + i\"!</h1>\r\n<p>hi</p>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-16 16:32:25', 28, 'web'),
(15, '', '', '', '', '', 'Untitled', '2018-05-26 17:53:41', 1, ''),
(16, '', '', '', '', '', 'Untitled', '2018-05-28 13:32:11', 1, ''),
(17, '', '', '', 'echo \"You are learning really fast!\";\r\n$variable = 5+5;\r\necho \"<br>\".$variable;', 'SELECT * FROM projects WHERE project_id = \'', 'Untitled', '2018-05-28 15:21:01', 1, ''),
(65, '', '', '', 'echo \"You are learning really fast!\";', '', 'somePHP', '2018-07-06 01:51:52', 32, 'php'),
(19, '', '', '', 'echo \"You are learning really fast!\";\r\n$variable = 5+5;\r\necho \"<br>\".$variable.\"<br>\";\r\n$list = [\'anna\', \'john\', \'mike\'];\r\nvar_dump($list);', '', 'First php project', '2018-05-28 15:26:08', 1, 'php'),
(20, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test Test', '2018-05-28 20:55:00', 29, 'web'),
(21, '', '', '', 'echo date(\'m/d/Y h:i:s a\', time());', '', 'Current Time', '2018-05-28 20:57:48', 29, 'php'),
(22, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 3', '2018-05-28 21:01:49', 29, 'web'),
(23, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:20:12', 29, 'web'),
(24, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:20:43', 29, 'web'),
(25, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:24:19', 29, 'web'),
(26, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:24:39', 29, 'web'),
(27, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:25:06', 29, 'web'),
(28, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:25:19', 29, 'web'),
(29, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:26:30', 29, 'web'),
(30, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 4', '2018-05-28 21:27:09', 29, 'web'),
(31, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:27:52', 29, 'web'),
(32, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:30:15', 29, 'web'),
(33, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:31:10', 29, 'web'),
(34, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Test 5', '2018-05-28 21:32:12', 29, 'web'),
(35, '<h1>Hello!</h1>', 'h1 {color: #62c9ba;}', '', '', '', 'Test 7', '2018-05-28 22:11:01', 1, 'web'),
(36, '', '', '', 'echo 5;', '', 'Number', '2018-05-28 22:27:18', 1, 'php'),
(37, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Untitled', '2018-05-29 00:08:05', 30, 'web'),
(38, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:08:33', 30, 'php'),
(39, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:15:26', 30, 'php'),
(40, '', '', '', 'echo \"You are learning really fast!\"', '', 'Untitled', '2018-05-29 00:15:55', 30, 'php'),
(41, '', '', '', 'echo \"You are learning really fast Anna!\";', '', 'Retry', '2018-06-06 01:16:51', 7, 'php'),
(42, '', '', '', 'echo \"You are learning really fast Anna!\";', '', 'Retry', '2018-06-06 01:19:18', 7, 'php'),
(43, '<h1>Press \"ESC\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Let\'s see', '2018-06-06 01:19:54', 7, 'web'),
(44, '', '', '', 'echo \"You are NOT learning fast!\";', '', 'Done', '2018-06-06 01:22:37', 7, 'php'),
(45, '', '', '', 'echo \"You are learning really fast!\";', '', 'Not done', '2018-06-06 01:22:53', 7, 'php'),
(46, '', '', '', 'echo \"You are learning really SLOW!\";', '', 'NOT done', '2018-06-06 01:33:31', 7, 'php'),
(47, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'Martha\'s Game', '2018-06-18 15:16:15', 14, 'web'),
(48, '<!DOCTYPE html>\r\n<html>\r\n  <head>\r\n    <meta charset=\"utf-8\">\r\n    <link data-require=\"bootstrap-css@3.3.6\" data-semver=\"3.3.6\" rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css\" />\r\n    <link rel=\"stylesheet\" href=\"style.css\">\r\n  </head>\r\n\r\n  <body>\r\n    <div class=\"container\">\r\n  		<p class=\"spaced\">This demo is loading AMD, CommonJS and ES6 modules in the browser using SystemJS</p>\r\n  		\r\n  		<table border=\"1\" class=\"table\" id=\"articles\">\r\n        <thead>\r\n          <tr>\r\n            <th>Title</th>\r\n            <th>A glimpse...</th>\r\n            <th>View Snippet</th>\r\n          </tr>\r\n        </thead>\r\n        <tbody></tbody>\r\n      </table>\r\n    </div>\r\n    <div aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" id=\"snippetModal\" class=\"modal fade\">\r\n      <div role=\"document\" class=\"modal-dialog\">\r\n        <div class=\"modal-content\">\r\n          <div class=\"modal-header\">\r\n            <button aria-label=\"Close\" data-dismiss=\"modal\" class=\"close\" type=\"button\">\r\n              <span aria-hidden=\"true\">Ã—</span>\r\n            </button>\r\n            <h4 id=\"myModalLabel\" class=\"modal-title\">Snippet</h4>\r\n          </div>\r\n          <div class=\"modal-body\"></div>\r\n          <div class=\"modal-footer\">\r\n            <button data-dismiss=\"modal\" class=\"btn btn-default\" type=\"button\">Close</button>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  \r\n     \r\n  </body>\r\n</html>\r\n', '', '', '', '', 'Plunker Example', '2018-06-20 15:14:00', 14, 'web'),
(49, '', '', '', '', '', 'PLEASE 2', '2018-06-26 18:04:51', 1, ''),
(50, '', '', '', '', 'ANNAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 'PLEASEEEE', '2018-06-26 18:16:15', 1, 'sql'),
(51, '', '', '', 'PLEASE!', '', 'TEST TEST', '2018-06-26 18:17:22', 1, 'php'),
(52, 'dlgfjlsjdfvglslvflksdflv;', 'dfvfffffffffffffffffffffffffff', 'b bbbb bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '', '', 'NEW beginning', '2018-07-01 15:02:09', 1, 'web'),
(53, 'aaaaaaaaaaaaaaa', 'bbbbbbbbbbbbbbbbbbbbb', 'ccccccccccccccccccccccccccc', '', '', 'abc', '2018-07-01 15:20:52', 1, 'web'),
(69, '', '', '', '', 'SELECT * FROM users;', '1', '2018-07-09 01:17:37', 2, 'sql'),
(79, '', '', '', 'echo \"You are learning really fast!\";', '', '55', '2018-07-09 01:37:15', 22, 'php'),
(78, '', '', '', '', 'SELECT * FROM users;', '44', '2018-07-09 01:37:00', 22, 'sql'),
(61, '111111111111111111', '22222222222222222222222', '33333333333333333333333333', '', '', '123', '2018-07-04 02:13:33', 1, 'web'),
(57, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'box', '2018-07-01 16:02:48', 1, 'web'),
(58, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', 'line', '2018-07-01 16:07:48', 1, 'web'),
(75, '', '', '', 'echo \"You are learning really fast!\";mk;m?<;.', '', '1321.1', '2018-07-09 01:23:41', 22, 'php'),
(60, '', '', '', '', 'SELECT * FROM users;', 'vfckmvlxk', '2018-07-04 01:35:46', 1, 'sql'),
(70, '', '', '', 'echo \"You are learning really fast!\";', '', '2', '2018-07-09 01:17:52', 2, 'php'),
(71, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', '3', '2018-07-09 01:18:41', 2, 'web'),
(76, '<h1>Press \"Ctrl + Shift + i\"!</h1>', 'h1 {color: #62c9ba;}', 'console.log(\"Welcome computer ninja!\");', '', '', '75', '2018-07-09 01:31:29', 22, 'web'),
(77, '', '', '', 'echo \"You are learning really fast!\";', '', '11', '2018-07-09 01:31:45', 22, 'php'),
(80, '', '', '', '', 'SELECT * FROM users;', '7', '2018-07-09 01:40:05', 22, 'sql');

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

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
(30, 'Aliki', 'Vougiouklaki', 'aliki@gmail.com', 'aliki', '$2y$10$9auR8G7ezi1ek0x6umOUb.AD4lvdDKBaEjC1oiNqHYuB2MyEGCtb2', '2018-05-29 00:07:16'),
(32, 'some', 'one', 'some@gmail.com', 'some', '$2y$10$ErOVS1vTBVyOtV.kVFBA2u3kSToP5pEXgeXz9CjcSYg98VOloOw1K', '2018-07-06 01:10:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
