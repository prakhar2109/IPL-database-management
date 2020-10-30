-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 03:19 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `City_Id` tinyint(4) NOT NULL,
  `City_Name` varchar(14) DEFAULT NULL,
  `Country_id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_Id`, `City_Name`, `Country_id`) VALUES
(1, 'Bangalore', 1),
(2, 'Chandigarh', 1),
(3, 'Delhi', 1),
(4, 'Mumbai', 1),
(5, 'Kolkata', 1),
(6, 'Jaipur', 1),
(7, 'Hyderabad', 1),
(8, 'Chennai', 1),
(9, 'Cape Town', 2),
(10, 'Port Elizabeth', 2),
(11, 'Durban', 2),
(12, 'Centurion', 2),
(13, 'East London', 2),
(14, 'Johannesburg', 2),
(15, 'Kimberley', 2),
(16, 'Bloemfontein', 2),
(17, 'Ahmedabad', 1),
(18, 'Cuttack', 1),
(19, 'Nagpur', 1),
(20, 'Dharamsala', 1),
(21, 'Kochi', 1),
(22, 'Indore', 1),
(23, 'Visakhapatnam', 1),
(24, 'Pune', 1),
(25, 'Raipur', 1),
(26, 'Ranchi', 1),
(27, 'Abu Dhabi', 3),
(28, 'Rajkot', 1),
(29, 'Kanpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `Country_Id` tinyint(4) NOT NULL,
  `Country_Name` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_Id`, `Country_Name`) VALUES
(1, 'India'),
(2, 'South Africa'),
(3, 'U.A.E'),
(4, 'New Zealand'),
(5, 'Australia'),
(6, 'Pakistan'),
(7, 'Sri Lanka'),
(8, 'West Indies'),
(9, 'Zimbabwea'),
(10, 'England'),
(11, 'Bangladesh'),
(12, 'Netherlands');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` int(11) NOT NULL,
  `age` decimal(2,0) NOT NULL,
  `runs` decimal(5,0) NOT NULL,
  `wickets` decimal(3,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `no_of_matches` decimal(3,0) NOT NULL,
  `rank` decimal(3,0) NOT NULL,
  `batting_best` varchar(10) NOT NULL,
  `bowling_best` varchar(10) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `avg` varchar(30) NOT NULL,
  `100s` decimal(5,0) NOT NULL,
  `50s` decimal(5,0) NOT NULL,
  `6s` decimal(5,0) NOT NULL,
  `4s` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `age`, `runs`, `wickets`, `type`, `no_of_matches`, `rank`, `batting_best`, `bowling_best`, `playername`, `team_id`, `avg`, `100s`, `50s`, `6s`, `4s`) VALUES
(1, '40', '1203', '18', 'bowler', '98', '5', '95', '23/4', 'Dhoni', 1, '11.2', '11', '12', '12', '11'),
(2, '32', '1200', '29', 'Allrounder', '98', '13', '77', '32/5', 'Suresh Raina', 1, '11.2', '12', '3', '33', '1'),
(3, '33', '3542', '32', 'batsman', '113', '19', '115*', '18/9', 'Rohit Sharma', 2, '18.2', '11', '2', '48', '12'),
(4, '32', '1100', '9', 'Allrounder', '48', '12', '77', '32/5', 'Ishan kishan', 2, '17.6', '16', '5', '47', '22'),
(5, '32', '1400', '19', 'Allrounder', '38', '12', '77', '32/5', 'Virat Kohli', 3, '16.6', '15', '4', '46', '24'),
(6, '22', '1440', '29', 'Allrounder', '28', '12', '77', '32/5', 'AB DEVELLERS', 3, '15.6', '50', '1', '4', '26'),
(7, '34', '1300', '39', 'Allrounder', '18', '12', '77', '32/5', 'Shreyas Iyer', 4, '14.6', '40', '4', '44', '27'),
(8, '22', '1412', '19', 'Allrounder', '8', '12', '77', '32/5', 'Shikhar Dhawan', 4, '11.6', '30', '7', '42', '27'),
(9, '32', '1210', '29', 'Allrounder', '8', '12', '77', '32/5', 'KL Rahul', 5, '12.6', '20', '7', '41', '28'),
(10, '12', '1100', '29', 'Allrounder', '98', '12', '77', '32/5', 'Vinay kumar', 5, '19.6', '10', '1', '45', '29');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Match_no` varchar(20) NOT NULL,
  `Winning Team` varchar(30) NOT NULL,
  `Man of The match` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Match_no`, `Winning Team`, `Man of The match`) VALUES
('1', 'RCB', 'Suresh Raina'),
('2', 'CSK', 'Suresh Raina'),
('3', 'RCB', 'Navdeep Saini'),
('4', 'SRH', 'Mohammad Siraj'),
('5', 'CSK', 'Suresh Raina');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `team1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `Match_no` varchar(20) NOT NULL,
  `team2` varchar(20) NOT NULL,
  `Venue_Id` int(11) NOT NULL,
  `schedules_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`team1`, `date`, `Match_no`, `team2`, `Venue_Id`, `schedules_id`) VALUES
('RR', '2020-10-08', '1', 'CSK', 1, 1),
('CSK', '2020-10-09', '2', 'SRH', 2, 2),
('CSK', '2018-12-27', '3', 'RCB', 3, 3),
('SRH', '2018-12-28', '4', 'MI', 4, 4),
('MI', '2019-01-01', '5', 'csk', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(11) NOT NULL,
  `rank` decimal(5,0) NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `rank`, `rating`, `name`) VALUES
(1, '1', 142, 'Chennai Super Kings'),
(2, '2', 141, 'Mumbai Indians'),
(3, '5', 116, 'Royal Challengers Bangalore'),
(4, '3', 120, 'Delhi Capitals'),
(5, '6', 110, 'Kings XI Punjab'),
(6, '4', 120, 'Kolkata Knight Riders'),
(7, '7', 110, 'Sunrisers Hyderabad'),
(8, '8', 100, 'Rajasthan Royals');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `Venue_Id` tinyint(4) NOT NULL,
  `Venue_Name` varchar(52) DEFAULT NULL,
  `City_Id` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`Venue_Id`, `Venue_Name`, `City_Id`) VALUES
(1, 'M Chinnaswamy Stadium', 1),
(2, 'Punjab Cricket Association Stadium, Mohali', 2),
(3, 'Feroz Shah Kotla', 3),
(4, 'Wankhede Stadium', 4),
(5, 'Eden Gardens', 5),
(6, 'Sawai Mansingh Stadium', 6),
(7, 'Rajiv Gandhi International Stadium, Uppal', 7),
(8, 'MA Chidambaram Stadium, Chepauk', 8),
(9, 'Dr DY Patil Sports Academy', 4),
(10, 'Newlands', 9),
(11, 'St George\'s Park', 10),
(12, 'Kingsmead', 11),
(13, 'SuperSport Park', 12),
(14, 'Buffalo Park', 13),
(15, 'New Wanderers Stadium', 14),
(16, 'De Beers Diamond Oval', 15),
(17, 'OUTsurance Oval', 16),
(18, 'Brabourne Stadium', 4),
(19, 'Sardar Patel Stadium, Motera', 17),
(20, 'Barabati Stadium', 18),
(21, 'Vidarbha Cricket Association Stadium, Jamtha', 19),
(22, 'Himachal Pradesh Cricket Association Stadium', 20),
(23, 'Nehru Stadium', 21),
(24, 'Holkar Cricket Stadium', 22),
(25, 'Dr. Y.S. Rajasekhara Reddy ACA-VDCA Cricket Stadium', 23),
(26, 'Subrata Roy Sahara Stadium', 24),
(27, 'Shaheed Veer Narayan Singh International Stadium', 25),
(28, 'JSCA International Stadium Complex', 26),
(29, 'Sheikh Zayed Stadium', 27),
(30, 'Sharjah Cricket Stadium', 27),
(31, 'Dubai International Cricket Stadium', 27),
(32, 'Maharashtra Cricket Association Stadium', 24),
(33, 'Punjab Cricket Association IS Bindra Stadium, Mohali', 2),
(34, 'Saurashtra Cricket Association Stadium', 28),
(35, 'Green Park', 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`City_Id`),
  ADD KEY `FK_country_order` (`Country_id`) USING BTREE;

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`Country_Id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `FK_PersonOrder` (`team_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`Match_no`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`schedules_id`),
  ADD KEY `FK_Match_no_Order` (`Match_no`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`Venue_Id`),
  ADD KEY `FK_Cit_order` (`City_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `schedules_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `FK_city_order` FOREIGN KEY (`Country_id`) REFERENCES `country` (`Country_Id`);

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`);

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `FK_Match_no_Order` FOREIGN KEY (`Match_no`) REFERENCES `result` (`Match_no`);

--
-- Constraints for table `venue`
--
ALTER TABLE `venue`
  ADD CONSTRAINT `FK_Cit_order` FOREIGN KEY (`City_Id`) REFERENCES `city` (`City_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
