-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 09:12 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
(1, 'folders', '{\"parent\":\"folders\",\"depth\":1,\"1\":{\"parent\":\"folders\\/1\",\"depth\":2,\"1.1\":{\"parent\":\"folders\\/1\\/1.1\",\"depth\":3,\"1.1.1\":[]},\"1.2\":{\"parent\":\"folders\\/1\\/1.2\",\"depth\":3,\"1.2.1\":[]}},\"2\":{\"parent\":\"folders\\/2\",\"depth\":2,\"2.1\":[],\"2.2\":{\"parent\":\"folders\\/2\\/2.2\",\"depth\":3,\"2.2.1\":[]}}}'),
(2, 'D:\\tax', '{\"parent\":\"D:\\\\tax\",\"depth\":1,\"sal\":{\"parent\":\"D:\\\\tax\\/sal\"}}');

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
