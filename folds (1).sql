-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 09:47 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vamanship`
--

-- --------------------------------------------------------

--
-- Table structure for table `folds`
--

CREATE TABLE `folds` (
  `id` int(6) NOT NULL,
  `fname` varchar(160) NOT NULL,
  `paths` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folds`
--

INSERT INTO `folds` (`id`, `fname`, `paths`) VALUES
(1, 'D:\\xampp\\htdocs\\vamanshipgit\\vamanship\\vamanship\\Folders', '{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\",\"depth\":1,\"1\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\\/1\",\"depth\":2,\"1.1\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\\/1\\/1.1\",\"depth\":3,\"1.1.1\":[]},\"1.2\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\\/1\\/1.2\",\"depth\":3,\"1.2.1\":[]}},\"2\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\\/2\",\"depth\":2,\"2.1\":[],\"2.2\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\vamanshipgit\\\\vamanship\\\\vamanship\\\\Folders\\/2\\/2.2\",\"depth\":3,\"2.2.1\":[]}}}'),
(2, 'D:\\xampp\\htdocs\\form-sub', '{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\form-sub\",\"depth\":1,\"photos\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\form-sub\\/photos\",\"depth\":2,\"certificate\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\form-sub\\/photos\\/certificate\"},\"logo\":{\"parent\":\"D:\\\\xampp\\\\htdocs\\\\form-sub\\/photos\\/logo\"}}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folds`
--
ALTER TABLE `folds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folds`
--
ALTER TABLE `folds`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
