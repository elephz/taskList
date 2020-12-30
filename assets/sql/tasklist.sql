-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 09:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasklist`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_task`
--

CREATE TABLE `tb_task` (
  `task_id` int(11) NOT NULL,
  `task_detail` varchar(255) NOT NULL,
  `task_status` varchar(1) NOT NULL DEFAULT '1',
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_task`
--

INSERT INTO `tb_task` (`task_id`, `task_detail`, `task_status`, `time`) VALUES
(1, 'จัดที่นอน', '2', '2020-12-30 08:01:59'),
(5, 'กวาดบ้านถูกบ้านซักผ้า', '2', '2020-12-30 08:02:04'),
(6, 'ล้างห้องน้ำ', '1', '2020-12-30 08:00:29'),
(7, 'รดน้ำต้นไม้', '1', '2020-12-30 08:01:11'),
(8, 'เก็บขยะ', '1', '2020-12-30 08:01:40'),
(9, 'เช็ดกระจก', '1', '2020-12-30 08:02:56'),
(10, 'ทาสีบ้าน', '2', '2020-12-30 08:04:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_task`
--
ALTER TABLE `tb_task`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_task`
--
ALTER TABLE `tb_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
