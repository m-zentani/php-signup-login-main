-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2024 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'sss', 'gg@gg.me', '$2y$10$Se2zqlWz575Sa4KdkHf/d.2JfiSiLkATsyz/BZwzxoCSxusiiKQsC'),
(16, 'osama', 'osama@gg.me', '$2y$10$oNVCs3t.FH/Iib4yoXrkQeXCBvOlm2WpynmydTkHoybXsh5jQQqzi'),
(27, 'yaha', 'yahya@gg.me', '$2y$10$1mJnBeTByQkL9YNuhR/p7.6iqJoBxRY9/zIl3nC8E8SWeK8xNFFP2'),
(30, 'khaled', 'khaled@gg.me', '$2y$10$Iw3TP/.egAZdTuE504M.1erW10bMY8V6dRvS7a/xfmcNiZ37TMJ1u'),
(31, 'aya', 'aya@gg.me', '$2y$10$/9PCZWXNzZCD6hQ15QHH.OIuQqCE6fqCIj8IMHYBcQp1Cs/2pOtC2'),
(32, 'maryam', 'maryam@gg.me', '$2y$10$96/l8Wsa79KuovoPSeJaKO2EY.bpeuCZPNPn8PcEdOZ2iHzC4HQ1a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
