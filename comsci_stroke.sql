-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2022 at 05:42 AM
-- Server version: 5.6.43
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comsci_stroke`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Addess` varchar(100) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`, `Firstname`, `Lastname`, `Addess`, `Phone`, `Status`) VALUES
(1, 'aaa', '11111', 'klo', 'rtu', '22/78', '0986588330', 'กำลังใช้งาน'),
(13, 'wawawa', '12587', 'wanida', 'rungung', '15/52', '0965875555', 'กำลังใช้งาน'),
(17, 'ailada', '859756', 'ailada', 'surin', '253/455', '0985658523', 'กำลังใช้งาน'),
(18, 'saruncana', '58552', 'fatat', 'rewsa', '2582/58', '0869985533', 'กำลังใช้งาน');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `ID` int(50) NOT NULL,
  `AdminID` int(50) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`ID`, `AdminID`, `Date`, `Name`, `status`) VALUES
(8, 1, '2022-05-26 04:52:12', 'wwwwww.csv', 0),
(10, 1, '2022-05-26 05:06:04', 'exceltest.csv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID` int(50) NOT NULL,
  `Adminid` int(50) NOT NULL,
  `Date` date NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`ID`, `Adminid`, `Date`, `Topic`, `Detail`) VALUES
(2, 1, '2022-05-26', 'สงกรานต์หยุดยาว กาชาดขาดโลหิตสำรอง รพ. หวั่นกระทบผู้ป่วย', 'ยหยหรืรืฟงืาิปิาทปยิรืปิาปทมิวหาดงฟยเฟลรปมิฟยริ่'),
(3, 1, '2022-05-26', 'ด่วน! รพ.ศิริราชวอนบริจาคโลหิต ขาดแคลนทุกหมู่ โดยเฉพาะหมู่ A และ B', 'รศ. พญ.ปาริชาติ เพิ่มพิกุล หัวหน้าภาควิชาเวชศาสตร์การธนาคารเลือด คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล เปิดเผยว่า ขณะนี้ (26 พ.ย.64) โรงพยาบาลศิริราช ขาดแคลนเลือดสำรองทุกหมู่เลือด โดยเฉพาะเลือดหมู่ A และ B มากเป็นพิเศษ อาจทำให้ไม่สามารถให้บริการผู้ป่วยได้อย่างต่อเนื่อง ทางโรงพยาบาลศิริราชจึงขอเชิญชวนผู้ใจบุญทุกท่านร่วมบริจาคเลือดช่วยผู้ป่วยฉุกเฉิน ผู้ป่วยที่รอการผ่าตัด รวมถึงผู้ป่วยโรคเลือดที่จำเป็นต้องใช้เลือด หากท่านมีสุขภาพดี และไม่มีความเสี่ยง มาร่วมช่วยชีวิตคนไทยด้วยกัน'),
(4, 13, '2022-05-26', 'เตรียมความพร้อมก่อนการผ่าตัด “โรคเนื้องอกมดลูก” ฟรี', 'ภาควิชาสูติศาสตร์-นรีเวชวิทยา คณะแพทยศาสตร์ศิริราชพยาบาล มหาวิทยาลัยมหิดล จัดกิจกรรมให้ความรู้ความเข้าใจและเตรียมความพร้อมก่อนการผ่าตัดผ่านกล้องทางนรีเวชวิทยา เรื่อง “โรคเนื้องอกมดลูก” ในวันที่ 21 กุมภาพันธ์ 2561 เวลา 12.00-16.00 น. ณ ศูนย์ฝึกอบรมการผ่าตัดสหสาขาผ่านกล้องไทย-เยอรมันฯ  ตึกจุฑาธุช ชั้น 8 รพ.ศิริราช  ขอเชิญผู้ป่วย ญาติ และผู้สนใจร่วมงาน โดยไม่เสียค่าใช้จ่าย สอบถามเพิ่มเติมและลงทะเบียนได้ที่ ศูนย์ฝึกอบรมการผ่าตัดสหสาขาผ่านกล้องไทย-เยอรมันฯ โทร. 0 2419 4772, 08 3542 3237 (ในวันเวลาราชการ)');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `ID` int(50) NOT NULL,
  `Sex` int(5) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `career` int(5) DEFAULT NULL,
  `Smoking` int(5) DEFAULT NULL,
  `alcohol` int(5) DEFAULT NULL,
  `Exercise` int(5) DEFAULT NULL,
  `cholesterol` int(5) DEFAULT NULL,
  `BP` int(5) DEFAULT NULL,
  `Class` varchar(2) DEFAULT NULL,
  `modelid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`ID`, `Sex`, `status`, `career`, `Smoking`, `alcohol`, `Exercise`, `cholesterol`, `BP`, `Class`, `modelid`) VALUES
(26, 10, 0, 702, 40, 0, 0, 0, 0, 'n', 8),
(27, 10, 0, 702, 42, 0, 0, 0, 0, 'y', 8),
(28, 11, 0, 702, 0, 0, 0, 0, 0, 'y', 8),
(29, 0, 21, 700, 0, 0, 0, 0, 0, 'y', 8),
(30, 0, 20, 700, 0, 0, 0, 0, 0, 'n', 8),
(31, 0, 0, 701, 0, 0, 0, 0, 0, 'n', 8),
(32, 0, 0, 713, 0, 0, 0, 0, 0, 'y', 8),
(33, 0, 21, 700, 0, 0, 0, 0, 81, 'n', 10),
(34, 0, 21, 700, 0, 0, 0, 0, 80, 'y', 10),
(35, 0, 20, 700, 0, 0, 0, 0, 0, 'n', 10),
(36, 0, 20, 702, 0, 0, 0, 0, 0, 'n', 10),
(37, 10, 21, 702, 40, 0, 0, 0, 0, 'n', 10),
(38, 10, 21, 702, 42, 0, 0, 0, 0, 'y', 10),
(39, 11, 21, 702, 0, 0, 0, 0, 0, 'y', 10),
(40, 0, 21, 701, 0, 0, 0, 0, 0, 'n', 10),
(41, 0, 20, 701, 0, 0, 0, 0, 0, 'y', 10),
(42, 0, 0, 713, 0, 0, 0, 0, 0, 'y', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ad_fk` (`AdminID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ad_new_fk` (`Adminid`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `md_fk` (`modelid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`AdminID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`Adminid`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rule`
--
ALTER TABLE `rule`
  ADD CONSTRAINT `rule_ibfk_1` FOREIGN KEY (`modelid`) REFERENCES `model` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
