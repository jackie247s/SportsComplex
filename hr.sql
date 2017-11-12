-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2017 at 03:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(20) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `uid`, `pwd`) VALUES
(1, 'usman', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ApplicantID` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `SportID` int(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `applicant`
--
DELIMITER $$
CREATE TRIGGER `move_applicant` BEFORE DELETE ON `applicant` FOR EACH ROW INSERT INTO player (firstname,lastname,age,dob,address,SportID,phonenumber,uid,pwd)
VALUES
(OLD.firstname,OLD.lastname,OLD.age,OLD.dob,OLD.address,OLD.SportID,OLD.phonenumber,OLD.uid,OLD.pwd)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `ENAME` varchar(10) DEFAULT NULL,
  `JOB` varchar(9) DEFAULT NULL,
  `SAL` int(11) DEFAULT NULL,
  `COMM` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `IDCUSTOMER` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`IDCUSTOMER`, `firstname`, `lastname`, `phonenumber`, `address`) VALUES
(14, 'Ali', 'Usman', '0321', 'D-117 Block 7'),
(20, 'Junaid', 'Shakeel', '0123', 'DDDD'),
(21, 'Waleed', 'Khalid', '12345', 'aaaa'),
(22, 'Luqman', 'Ahmed', '03320827920', 'C-15, PIA Co-operative Housing Society, Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DepartmentID` int(20) NOT NULL,
  `DName` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DepartmentID`, `DName`) VALUES
(1, 'Cleaning'),
(2, 'Maintanence'),
(3, 'Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `Dummy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DepartmentID` int(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `firstname`, `lastname`, `age`, `dob`, `address`, `DepartmentID`, `phonenumber`) VALUES
(2000, 'Johny', 'Depp', 51, '6 August', '45 Beverly Hills', 2, '5555555');

--
-- Triggers `employee`
--
DELIMITER $$
CREATE TRIGGER `move_employee` BEFORE DELETE ON `employee` FOR EACH ROW INSERT INTO history_left_employee (EmployeeID,firstname,lastname,age,dob,address,DepartmentID,phonenumber)
VALUES
(OLD.EmployeeID,OLD.firstname,OLD.lastname,OLD.age,OLD.dob,OLD.address,OLD.DepartmentID,OLD.phonenumber)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `EquipmentID` int(20) NOT NULL,
  `E_Name` varchar(50) NOT NULL,
  `SportID` int(20) NOT NULL,
  `PriceID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`EquipmentID`, `E_Name`, `SportID`, `PriceID`) VALUES
(1, 'Cricket Bat', 1, 1),
(2, 'Cricket Bat', 1, 1),
(3, 'Cricket Bat', 1, 1),
(4, 'Cricket Bat', 1, 1),
(5, 'Cricket Bat', 1, 1),
(6, 'Cricket Bat', 1, 1),
(7, 'Cricket Ball', 1, 2),
(8, 'Cricket Ball', 1, 2),
(9, 'Cricket Ball', 1, 2),
(10, 'Tennis Racket', 3, 3),
(11, 'Tennis Racket', 3, 3),
(12, 'Tennis Racket', 3, 3),
(13, 'Tennis Racket', 3, 3),
(14, 'Tennis Ball', 3, 4),
(15, 'Tennis Ball', 3, 4),
(16, 'Tennis Ball', 3, 4),
(17, 'Tennis Ball', 3, 4),
(18, 'Football', 2, 5),
(19, 'Football', 2, 5),
(20, 'Football', 2, 5),
(21, 'Football', 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_price`
--

CREATE TABLE `equipment_price` (
  `PriceID` int(20) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_price`
--

INSERT INTO `equipment_price` (`PriceID`, `price`) VALUES
(1, 100),
(2, 50),
(3, 150),
(4, 100),
(5, 200),
(6, 150);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_reservation`
--

CREATE TABLE `equipment_reservation` (
  `ReservationID` int(20) NOT NULL,
  `CustomerID` int(20) NOT NULL,
  `EquipmentID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_reservation`
--

INSERT INTO `equipment_reservation` (`ReservationID`, `CustomerID`, `EquipmentID`) VALUES
(11, 20, 19),
(12, 1002, 1),
(13, 22, 18);

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `GroundID` int(20) NOT NULL,
  `groundname` varchar(10) NOT NULL,
  `reservation_amount` int(20) NOT NULL,
  `manager_name` varchar(10) NOT NULL,
  `SportID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`GroundID`, `groundname`, `reservation_amount`, `manager_name`, `SportID`) VALUES
(1, 'Shakeel', 10000, 'Junaid', 1),
(2, 'Rasheed', 20000, 'Usman', 1),
(3, 'Waleed', 15000, 'Khalid', 1),
(4, 'Gaddafi', 10000, 'Luqman', 2),
(5, 'Hitler', 30000, 'Farhan', 2),
(6, 'Sharapova', 5000, 'Ahmed', 3),
(7, 'Williams', 8000, 'Zia', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ground_reservation`
--

CREATE TABLE `ground_reservation` (
  `ReservationID` int(20) NOT NULL,
  `CustomerID` int(20) NOT NULL,
  `R_Date` date NOT NULL,
  `Expiry_Date` date NOT NULL,
  `GroundID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_reservation`
--

INSERT INTO `ground_reservation` (`ReservationID`, `CustomerID`, `R_Date`, `Expiry_Date`, `GroundID`) VALUES
(21, 1002, '2017-01-02', '2017-01-03', 1),
(22, 22, '2017-01-02', '2017-01-03', 3),
(23, 1014, '2017-01-02', '2017-01-03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `history_left_employee`
--

CREATE TABLE `history_left_employee` (
  `EmployeeID` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `DepartmentID` int(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_left_employee`
--

INSERT INTO `history_left_employee` (`EmployeeID`, `firstname`, `lastname`, `age`, `dob`, `address`, `DepartmentID`, `phonenumber`) VALUES
(2002, 'Will', 'Smith', 48, '20 August', '46 Beverly Hills', 3, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `league`
--

CREATE TABLE `league` (
  `LeagueID` int(20) NOT NULL,
  `League_Name` varchar(50) NOT NULL,
  `Season` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `league`
--

INSERT INTO `league` (`LeagueID`, `League_Name`, `Season`) VALUES
(1, 'The International', 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `league_sport`
--

CREATE TABLE `league_sport` (
  `LeagueID` int(20) NOT NULL,
  `SportID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `league_sport`
--

INSERT INTO `league_sport` (`LeagueID`, `SportID`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `PlayerID` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `SportID` int(20) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `TeamID` int(20) DEFAULT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PlayerID`, `firstname`, `lastname`, `age`, `dob`, `address`, `SportID`, `phonenumber`, `TeamID`, `uid`, `pwd`) VALUES
(1002, 'Ali', 'Usman', 20, '6 Feb', 'D-117 Block 7', 1, '03214567894', 1, 'usman', '1234'),
(1003, 'junaid', 'shakeel', 20, '10-jan', 'karachi', 1, '0300213251', 1, 'junaid', 'champ'),
(1004, 'luqman ', 'ladies', 21, '11-sep', 'nazimabad', 1, '030025487', 1, 'luqman', 'champ'),
(1005, 'waleed', 'khalid', 25, '14-feb', 'malir', 1, '03008796', 1, 'waleed', 'champ'),
(1006, 'nasir', 'khan', 19, '16-dec', 'ayesha manzil', 1, '03664897', 1, 'nasir', 'champ'),
(1007, 'bilawal', 'shiekh', 23, '19-jan', 'waterpump', 1, '14900314', 2, 'biawla', 'champ'),
(1008, 'ahmed', 'suleman', 28, '16-march', 'liaquatabad', 1, '0301648952', 2, 'ahmed', 'champ'),
(1009, 'luqman', 'junaid', 20, '6 August', 'Dddd', 1, '0300213251', 2, 'noob', '1234'),
(1010, 'hghg', 'hghg', 6, '767556', 'hfgfh', 1, '8866', 2, 'ali_7', '77'),
(1011, 'Farhan', 'Behram', 20, '6 August', 'ffffff', 2, '54120', NULL, 'farhan', '1234'),
(1012, 'Funny', 'Bunny', 21, '3 Jun', 'gggggg', 2, '3456', 5, 'bonbon', '1234'),
(1013, 'Asfand', 'Khan', 21, '6 Jan', 'Peshawar', 1, '123456', 2, 'asfand', '1234'),
(1014, 'Luqman', 'Ahmed', 21, '18-12-1995', 'C-15, PIA Co-operative Housing Society Gate # 3,Gulistane-e-Jauhar, Karachi', 1, '03320827920', 3, 'lucky', 'iseeyouwanna1');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `SponsorID` int(20) NOT NULL,
  `Sponsor_Name` varchar(50) NOT NULL,
  `LeagueID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`SponsorID`, `Sponsor_Name`, `LeagueID`) VALUES
(1, 'Imran Khan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `SportID` int(20) NOT NULL,
  `Sport_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`SportID`, `Sport_Name`) VALUES
(1, 'cricket'),
(2, 'football'),
(3, 'tennis');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(20) NOT NULL,
  `Team_Name` varchar(50) NOT NULL,
  `LeagueID` int(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `Team_Name`, `LeagueID`) VALUES
(1, 'Invictus', 1),
(2, 'Aces', 1),
(3, 'Blades', 1),
(5, 'Starks', NULL),
(6, 'Kings in the North', NULL),
(7, 'Megas', NULL),
(11, 'Anarchy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_sport`
--

CREATE TABLE `team_sport` (
  `TeamID` int(20) NOT NULL,
  `SportID` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_sport`
--

INSERT INTO `team_sport` (`TeamID`, `SportID`) VALUES
(1, 1),
(1, 2),
(2, 1),
(3, 1),
(5, 2),
(6, 1),
(6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ApplicantID`),
  ADD KEY `SportID` (`SportID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`IDCUSTOMER`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DepartmentID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `DepartmentID` (`DepartmentID`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`EquipmentID`),
  ADD KEY `PriceID` (`PriceID`),
  ADD KEY `SportID` (`SportID`);

--
-- Indexes for table `equipment_reservation`
--
ALTER TABLE `equipment_reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `EquipmentID` (`EquipmentID`),
  ADD KEY `CustomerID` (`CustomerID`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`GroundID`),
  ADD KEY `SportID` (`SportID`);

--
-- Indexes for table `ground_reservation`
--
ALTER TABLE `ground_reservation`
  ADD PRIMARY KEY (`ReservationID`),
  ADD KEY `GroundID` (`GroundID`);

--
-- Indexes for table `history_left_employee`
--
ALTER TABLE `history_left_employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `league`
--
ALTER TABLE `league`
  ADD PRIMARY KEY (`LeagueID`);

--
-- Indexes for table `league_sport`
--
ALTER TABLE `league_sport`
  ADD PRIMARY KEY (`LeagueID`,`SportID`),
  ADD KEY `SportID` (`SportID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`PlayerID`),
  ADD UNIQUE KEY `uid` (`uid`),
  ADD KEY `TeamID` (`TeamID`),
  ADD KEY `SportID` (`SportID`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`SponsorID`),
  ADD UNIQUE KEY `LeagueID` (`LeagueID`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`SportID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`),
  ADD UNIQUE KEY `Team_Name` (`Team_Name`),
  ADD KEY `LeagueID` (`LeagueID`);

--
-- Indexes for table `team_sport`
--
ALTER TABLE `team_sport`
  ADD PRIMARY KEY (`TeamID`,`SportID`),
  ADD KEY `SportID` (`SportID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ApplicantID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `IDCUSTOMER` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `EquipmentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `equipment_reservation`
--
ALTER TABLE `equipment_reservation`
  MODIFY `ReservationID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `GroundID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ground_reservation`
--
ALTER TABLE `ground_reservation`
  MODIFY `ReservationID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `league`
--
ALTER TABLE `league`
  MODIFY `LeagueID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `PlayerID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1015;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `TeamID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
