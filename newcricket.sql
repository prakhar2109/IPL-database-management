
CREATE TABLE `player` (
  `age` decimal(2,0) NOT NULL,
  `runs` decimal(5,0) NOT NULL,
  `wickets` decimal(3,0) NOT NULL,
  `type` varchar(20) NOT NULL,
  `no_of_matches` decimal(3,0) NOT NULL,
  `rank` decimal(3,0) NOT NULL,
  `batting_best` varchar(10) NOT NULL,
  `bowling_best` varchar(10) NOT NULL,
  `playername` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `avg` varchar(30) NOT NULL,
  `100s` decimal(5,0) NOT NULL,
  `50s` decimal(5,0) NOT NULL,
  `6s` decimal(5,0) NOT NULL,
  `4s` decimal(5,0) NOT NULL
);
INSERT INTO `player` (`age`, `runs`, `wickets`, `type`, `no_of_matches`, `rank`, `batting_best`, `bowling_best`, `playername`, `name`,`avg`,
`100s`,`50s`,`6s`,`4s`) VALUES
('32',  '1200', '59', 'Allrounder', '98', '12', '77', '32/5', 'Vinay kumar R','srh','13.6','10','5','45','22'),
('32',  '1200', '59', 'Allrounder', '98', '13', '77', '32/5', 'Navdeep Saini', 'rcb','13.2','13','3','33','11'),
('34',  '1203', '58', 'bowler', '98', '5', '95', '23/4', 'Mohammad Siraj', 'srh','11.2','11','2','12','11'),
('33',  '3542', '22', 'batsman', '113', '19', '115*', '18/9', 'Suresh Raina', 'csk','11.2','11','2','12','11');


CREATE TABLE `schedules` (
  `team1` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `match_no` decimal(3,0) NOT NULL,
  `team2` varchar(20) NOT NULL
);

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`team1`, `date`, `match_no`, `team2`) VALUES
('csk', '2018-12-27', '3', 'rcb'),
('mi', '2018-12-26', '2', 'csk'),
('mi', '2019-01-01', '5', 'csk'),
('RCB', '2018-12-20', '1', 'SRH'),
('SRH', '2018-12-28', '4', 'MI');


CREATE TABLE `team` (
  `rank` decimal(5,0) NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
);

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`rank`, `rating`, `name`) VALUES
('3', 119, 'csk'),
('4', 116, 'mi'),
('2', 120, 'RCB'),
('1', 122, 'srh');


CREATE TABLE `result`(
  `Match No` decimal(2,0) NOT NULL,
  `Winning Team` varchar(30) NOT NULL,
  `Man of The match` varchar(30) NOT NULL,
  PRIMARY KEY (`Match No`),
  CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`Man of The match`) REFERENCES `player` (`playername`) ON DELETE CASCADE
 
);

INSERT INTO `result` VALUES
('1','csk','Suresh Raina'),
('2','csk','Suresh Raina'),
('3','RCB','Navdeep Saini'),
('4','SRH','Mohammad Siraj'),
('5','csk','Suresh Raina')
;




