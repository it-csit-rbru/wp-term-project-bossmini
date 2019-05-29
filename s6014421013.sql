-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 12:31 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `dataprizemoney_detall_detall`
-- (See below for the actual view)
--
CREATE TABLE `dataprizemoney_detall_detall` (
`data_id` int(11)
,`data_en` varchar(120)
,`data_th` varchar(120)
,`Money_name` varchar(120)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `datascoretable_detall_detall`
-- (See below for the actual view)
--
CREATE TABLE `datascoretable_detall_detall` (
`data_id` int(11)
,`data_en` varchar(120)
,`data_th` varchar(120)
,`table_match` int(100)
,`table_win` int(100)
,`table_draw` int(100)
,`table_lose` int(100)
,`table_f` int(100)
,`table_a` int(100)
,`table_d` int(100)
,`table_p` int(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `datateam`
--

CREATE TABLE `datateam` (
  `data_id` int(11) NOT NULL,
  `data_en` varchar(120) NOT NULL,
  `data_th` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `datateam`
--

INSERT INTO `datateam` (`data_id`, `data_en`, `data_th`) VALUES
(1, 'Man City', 'แมนเชสเตอร์ ซิตี้'),
(2, 'Liverpool', 'ลิเวอร์พูล'),
(3, 'Chelsea', 'เชลซี'),
(4, 'Tottenham', 'ท็อตแน่ม ฮ็อตสเปอร์'),
(5, 'Arsenal', 'อาร์เซน่อล'),
(6, 'Man Utd', 'แมนเชสเตอร์ ยูไนเต็ด'),
(7, 'Wolves', 'วูฟส์แฮมป์ตัน วันเดอเรอส์'),
(8, 'Everton', 'เอฟเวอร์ตัน'),
(9, 'Leicester city', 'เลสเตอร์ ซิตี้'),
(10, 'West Ham', 'เวสต์แฮม ยูไนเต็ด');

-- --------------------------------------------------------

--
-- Table structure for table `prizemoney`
--

CREATE TABLE `prizemoney` (
  `Money_id` int(11) NOT NULL,
  `Money_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prizemoney`
--

INSERT INTO `prizemoney` (`Money_id`, `Money_name`) VALUES
(1, '£38.4M'),
(2, '£36.5M'),
(3, '£34.6M'),
(4, '£32.6M'),
(5, '£30.7M'),
(6, '£28.8M'),
(7, '£26.9M'),
(8, '£25M'),
(9, '£23.1M'),
(10, '£19.2M');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(120) NOT NULL,
  `player_club` varchar(120) NOT NULL,
  `player_score` int(30) NOT NULL,
  `player_title_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`player_id`, `player_name`, `player_club`, `player_score`, `player_title_id`) VALUES
(1, 'Pierre-Emerick Aubameyang', 'อาร์เซน่อล', 22, 1),
(2, 'Mohamed Salah', 'ลิเวอร์พูล', 22, 1),
(3, 'Sadio Mané ', 'ลิเวอร์พูล', 22, 1),
(4, 'Sergio Kun Agüero', 'แมนฯ ซิตี้', 21, 1),
(5, 'Jamie Vardy ', 'เลสเตอร์', 18, 1),
(6, 'Raheem Sterling', 'แมนฯ ซิตี้', 17, 1),
(7, 'Harry Kane', 'ท็อตแน่ม', 17, 1),
(8, 'Eden Hazard', 'เชลซี', 16, 1),
(9, 'Callum Wilson', 'บอร์นมัท', 14, 1),
(10, 'Alexandre Lacazette ', 'อาร์เซน่อล', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `scoretable`
--

CREATE TABLE `scoretable` (
  `table_id` int(11) NOT NULL,
  `table_match` int(100) NOT NULL,
  `table_win` int(100) NOT NULL,
  `table_draw` int(100) NOT NULL,
  `table_lose` int(100) NOT NULL,
  `table_f` int(100) NOT NULL,
  `table_a` int(100) NOT NULL,
  `table_d` int(100) NOT NULL,
  `table_p` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scoretable`
--

INSERT INTO `scoretable` (`table_id`, `table_match`, `table_win`, `table_draw`, `table_lose`, `table_f`, `table_a`, `table_d`, `table_p`) VALUES
(1, 38, 32, 2, 4, 95, 23, 72, 98),
(2, 38, 30, 7, 1, 89, 22, 67, 97),
(3, 38, 21, 9, 8, 63, 39, 24, 72),
(4, 38, 23, 2, 13, 67, 39, 28, 71),
(5, 38, 21, 7, 10, 73, 51, 22, 70),
(6, 38, 19, 9, 10, 65, 54, 11, 66),
(7, 38, 16, 9, 13, 47, 46, 1, 57),
(8, 38, 15, 9, 14, 54, 46, 8, 54),
(9, 38, 15, 7, 16, 51, 48, 3, 52),
(10, 38, 15, 7, 16, 52, 55, -3, 52);

-- --------------------------------------------------------

--
-- Table structure for table `titlescore`
--

CREATE TABLE `titlescore` (
  `title_id` int(11) NOT NULL,
  `title_name` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titlescore`
--

INSERT INTO `titlescore` (`title_id`, `title_name`) VALUES
(1, 'Mr.'),
(2, 'Mrs.'),
(3, 'Miss.'),
(4, 'Ms.');

-- --------------------------------------------------------

--
-- Stand-in structure for view `topscore_detall`
-- (See below for the actual view)
--
CREATE TABLE `topscore_detall` (
`player_id` int(11)
,`title_name` varchar(120)
,`player_name` varchar(120)
,`player_club` varchar(120)
,`player_score` int(30)
);

-- --------------------------------------------------------

--
-- Structure for view `dataprizemoney_detall_detall`
--
DROP TABLE IF EXISTS `dataprizemoney_detall_detall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dataprizemoney_detall_detall`  AS  select `datateam`.`data_id` AS `data_id`,`datateam`.`data_en` AS `data_en`,`datateam`.`data_th` AS `data_th`,`prizemoney`.`Money_name` AS `Money_name` from (`datateam` join `prizemoney` on((`datateam`.`data_id` = `prizemoney`.`Money_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `datascoretable_detall_detall`
--
DROP TABLE IF EXISTS `datascoretable_detall_detall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datascoretable_detall_detall`  AS  select `datateam`.`data_id` AS `data_id`,`datateam`.`data_en` AS `data_en`,`datateam`.`data_th` AS `data_th`,`scoretable`.`table_match` AS `table_match`,`scoretable`.`table_win` AS `table_win`,`scoretable`.`table_draw` AS `table_draw`,`scoretable`.`table_lose` AS `table_lose`,`scoretable`.`table_f` AS `table_f`,`scoretable`.`table_a` AS `table_a`,`scoretable`.`table_d` AS `table_d`,`scoretable`.`table_p` AS `table_p` from (`datateam` join `scoretable` on((`datateam`.`data_id` = `scoretable`.`table_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `topscore_detall`
--
DROP TABLE IF EXISTS `topscore_detall`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `topscore_detall`  AS  select `score`.`player_id` AS `player_id`,`titlescore`.`title_name` AS `title_name`,`score`.`player_name` AS `player_name`,`score`.`player_club` AS `player_club`,`score`.`player_score` AS `player_score` from (`score` join `titlescore` on((`score`.`player_title_id` = `titlescore`.`title_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datateam`
--
ALTER TABLE `datateam`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `prizemoney`
--
ALTER TABLE `prizemoney`
  ADD PRIMARY KEY (`Money_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `scoretable`
--
ALTER TABLE `scoretable`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `titlescore`
--
ALTER TABLE `titlescore`
  ADD PRIMARY KEY (`title_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datateam`
--
ALTER TABLE `datateam`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prizemoney`
--
ALTER TABLE `prizemoney`
  MODIFY `Money_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `scoretable`
--
ALTER TABLE `scoretable`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `titlescore`
--
ALTER TABLE `titlescore`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
