-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220511.c3fb567b13
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2022 at 03:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football_club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` varchar(40) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `last_activity` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`, `last_activity`) VALUES
('admin', '1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_license_no` varchar(40) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `manager_nationality` varchar(40) NOT NULL,
  `manager_age` int(11) NOT NULL,
  `manager_type` varchar(25) NOT NULL,
  `manager_matches` int(11) NOT NULL,
  `manager_wins` int(11) NOT NULL,
  `manager_draws` int(11) NOT NULL,
  `manager_loses` int(11) NOT NULL,
  `manager_weekly_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_license_no`, `manager_name`, `manager_nationality`, `manager_age`, `manager_type`, `manager_matches`, `manager_wins`, `manager_draws`, `manager_loses`, `manager_weekly_salary`) VALUES
('123456789', 'Mahir Sahriar Nihal', 'Bangladesh', 40, 'Head Coach', 774, 0, 165, 198, 485000),
('987654321', 'Tamzidul Islam Nion', 'Bangladesh', 45, 'Assistant Coach', 455, 0, 135, 95, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `match_details`
--

CREATE TABLE `match_details` (
  `match_id` int(11) NOT NULL,
  `match_date` varchar(20) NOT NULL,
  `match_time` varchar(20) NOT NULL,
  `match_venue` varchar(20) NOT NULL,
  `league_name` varchar(20) NOT NULL,
  `match_format` varchar(20) NOT NULL,
  `opponent_team_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_details`
--

INSERT INTO `match_details` (`match_id`, `match_date`, `match_time`, `match_venue`, `league_name`, `match_format`, `opponent_team_name`) VALUES
(1, '10 Feb 2022', '10:00 AM', 'UIU Play Ground', 'IUFL', 'Round 16', 'ULAB FC'),
(2, '15 Feb 2022', '10:00 AM', 'UIU Play Ground', 'IUFL', 'Round 16', 'NSU FC');

-- --------------------------------------------------------

--
-- Table structure for table `match_result`
--

CREATE TABLE `match_result` (
  `match_id` int(11) NOT NULL,
  `match_date` varchar(50) NOT NULL,
  `opponent_team_name` varchar(50) NOT NULL,
  `match_venue` varchar(50) NOT NULL,
  `match_format` varchar(50) NOT NULL,
  `match_result` varchar(50) NOT NULL,
  `uiu_goal` int(11) DEFAULT NULL,
  `opp_goal` int(11) DEFAULT NULL,
  `tournament_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_result`
--

INSERT INTO `match_result` (`match_id`, `match_date`, `opponent_team_name`, `match_venue`, `match_format`, `match_result`, `uiu_goal`, `opp_goal`, `tournament_name`) VALUES
(1, '10 Feb 2022', 'NSU_fc', 'UIU Play Ground', 'Round 16', 'WIN', 3, 1, 'IUFC'),
(2, '15 Feb 2022', 'ULAB_fc', 'UIU Play Ground', 'Round 16', 'not played', NULL, NULL, 'IUFL'),
(3, '15 Feb 2022', 'ULAB_fc', 'UIU Play Ground', 'Round 16', 'LOST', NULL, NULL, 'IUFL');

-- --------------------------------------------------------

--
-- Table structure for table `opponent_playing_11`
--

CREATE TABLE `opponent_playing_11` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(50) DEFAULT NULL,
  `player_rating` double DEFAULT NULL,
  `uiu_playing_11_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opponent_playing_11`
--

INSERT INTO `opponent_playing_11` (`player_id`, `player_name`, `player_rating`, `uiu_playing_11_id`) VALUES
(1, 'Rakibul  Islam', 8.5, 1),
(2, 'Sazzad Hasan', 7.5, 2),
(3, 'mahir', 7.5, 3),
(4, 'sakib', 8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` varchar(15) NOT NULL,
  `player_name` varchar(40) NOT NULL,
  `player_position` varchar(40) NOT NULL,
  `player_age` int(11) NOT NULL,
  `player_nationality` varchar(40) NOT NULL,
  `player_goals` int(11) NOT NULL,
  `player_assists` int(11) NOT NULL,
  `player_wages` int(11) NOT NULL,
  `player_contract` date NOT NULL,
  `player_value` int(11) NOT NULL,
  `player_rating` double NOT NULL,
  `player_dept` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `player_name`, `player_position`, `player_age`, `player_nationality`, `player_goals`, `player_assists`, `player_wages`, `player_contract`, `player_value`, `player_rating`, `player_dept`) VALUES
('1', 'Rakib Islam Sumon', 'st', 0, 'Bangladesh', 2, 4, 100000000, '2022-01-09', 420000, 7.5, 'CSE'),
('11', 'Shawon Paul', 'RW', 22, 'Bangladesh', 87, 43, 17000, '2021-06-24', 750000, 7.5, 'CSE'),
('13', 'Eram Bin Tanbir', 'GK', 30, 'Bangladesh', 0, 0, 18000, '2027-01-01', 250000, 7.3, 'CSE'),
('15', 'Nihal Roy', 'CB', 24, 'Bangladesh', 7, 8, 15000, '2026-06-30', 350000, 7.7, 'EEE'),
('16', 'Nion Talukdar', 'RB', 21, 'Bangladesh', 0, 1, 15000, '2021-06-30', 500000, 6.2, 'CE'),
('17', 'Sazzad Hasan', 'ST', 28, 'Bangladesh', 189, 59, 45000, '2024-06-30', 1000000, 8.7, 'CSE'),
('18', 'Rakib Shaha', 'LB', 30, 'Bangladesh', 27, 65, 25000, '2025-06-18', 450000, 7.8, 'CSE'),
('19', 'Noyon Kanti', 'CM', 21, 'Bangladesh', 1, 1, 15000, '2023-06-30', 150000, 6.6, 'BBA'),
('20', 'Imran Hasan', 'RB', 27, 'Bangladesh', 29, 74, 17000, '2023-06-30', 500000, 8, 'EEE'),
('21', 'Al Amin Khan', 'CM', 22, 'Bangladesh', 6, 67, 25000, '2024-06-30', 850000, 8.4, 'EEE'),
('22', 'Miraz Khan', 'CM', 32, 'Bangladesh', 89, 124, 21000, '2024-06-25', 500000, 7.9, 'EEE'),
('23', 'Osman', 'CB', 26, 'Philistine', 8, 4, 19000, '2025-06-23', 500000, 8.1, 'EEE'),
('2333', 'Adnan Ahmed', 'GK', 23, 'Somalia', 1, 1, 4500, '2026-01-01', 100000, 5.2, 'CE'),
('24', 'Ashraf Mondol', 'CB', 23, 'Bangladesh', 3, 12, 5400, '2026-06-02', 150000, 6.4, 'BBA'),
('26', 'Niloy Kumar', 'CM', 20, 'Bangladesh', 1, 4, 8500, '2025-06-30', 100000, 6.1, 'CSE'),
('27', 'Aminul Islam', 'RW', 21, 'Bangladesh', 11, 23, 7000, '2024-06-24', 300000, 6.7, 'CSE'),
('3', 'Arifin Shuvo', 'CB', 32, 'Bangladesh', 35, 64, 4700, '2021-06-30', 85000, 7.7, 'CE'),
('31', 'Ansu Fati', 'LW', 17, 'Ghana', 7, 13, 7500, '2024-06-30', 300000, 8.1, 'BBA'),
('33', 'Ajad Mondol', 'CB', 20, 'Bangladesh', 0, 0, 2500, '2026-06-18', 220000, 6.4, 'BBA'),
('4', 'Asad Mondol', 'CM', 31, 'Bangladesh', 67, 125, 30000, '2023-06-14', 800000, 8.1, 'BBA'),
('5', 'Burhaan', 'CDM', 31, 'Somalia', 14, 27, 35000, '2024-06-30', 450000, 8.2, 'CE'),
('6', 'Abdirahim', 'CB', 19, 'Somalia', 0, 1, 4500, '2027-06-30', 100000, 6.4, 'EEE'),
('8', 'Shah Alam', 'CM', 23, 'Bangladesh', 23, 97, 20000, '2025-06-30', 650000, 7.9, 'BBA'),
('9', 'Sumon N', 'ST', 25, 'Bangladesh', 254, 126, 45000, '2024-06-25', 800000, 8.1, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `uiu_playing_11`
--

CREATE TABLE `uiu_playing_11` (
  `player_id` int(11) NOT NULL,
  `player_name` varchar(50) NOT NULL,
  `player_rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uiu_playing_11`
--

INSERT INTO `uiu_playing_11` (`player_id`, `player_name`, `player_rating`) VALUES
(1, 'Shaown Paul', 8.5),
(2, 'Mahmudul Hasan', 7.5),
(3, 'eram', 8),
(4, 'Nion', 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `last_activity` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fullname`, `user_username`, `user_password`, `user_email`, `last_activity`) VALUES
(21, 'Bakku', 'bakku', 'bakku', 'bakku@gmail.com', NULL),
(23, 'eram', 'eee', '1234', 'e@gmail.com', NULL),
(24, 'ttt', 'ttt', 'ttt', 'ttt', NULL),
(25, 'jayed', 'hassan', '1234', 'dsfadsfsaf', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_name`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_license_no`);

--
-- Indexes for table `match_details`
--
ALTER TABLE `match_details`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `match_result`
--
ALTER TABLE `match_result`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `opponent_playing_11`
--
ALTER TABLE `opponent_playing_11`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `uiu_playing_11_id` (`uiu_playing_11_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `uiu_playing_11`
--
ALTER TABLE `uiu_playing_11`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `opponent_playing_11`
--
ALTER TABLE `opponent_playing_11`
  ADD CONSTRAINT `opponent_playing_11_ibfk_1` FOREIGN KEY (`uiu_playing_11_id`) REFERENCES `uiu_playing_11` (`player_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



