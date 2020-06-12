-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 04:08 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_passport`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_details_2`
--

CREATE TABLE IF NOT EXISTS `applicant_details_2` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `state_ut` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `marital_status` varchar(15) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `pan` varchar(15) NOT NULL,
  `voter_id` varchar(15) NOT NULL,
  `employment_type` varchar(50) NOT NULL,
  `gov_servent` varchar(10) NOT NULL,
  `qual` varchar(50) NOT NULL,
  `adhar_no` varchar(15) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_details_2`
--

INSERT INTO `applicant_details_2` (`id`, `name`, `lname`, `gender`, `dob`, `place_of_birth`, `state_ut`, `district`, `marital_status`, `citizenship`, `pan`, `voter_id`, `employment_type`, `gov_servent`, `qual`, `adhar_no`, `app_id`) VALUES
(1, 'Bibek', 'kumar', 'male', '2017-02-01', 'nepal', '18', '11', 'SINGLE', 'registration/ naturalization', '20660', '10501', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '10901', ''),
(2, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', ''),
(3, 'Bibek', 'kumar', 'male', '2017-03-17', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '', '', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '1000', ''),
(4, 'Bibek', 'kumar', 'male', '2017-03-17', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '', '', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '1000', ''),
(5, 'Bibek', 'kumar', 'male', '0000-00-00', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '', '', 'GOVERNMENT', 'no', 'GRADUATE AND ABOVE', '', '1214165958'),
(6, 'Bibek', 'kumar', 'male', '2017-03-02', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '101010', '202020', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '303030', '1323614595'),
(7, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1244087379'),
(8, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1317155471'),
(9, 'Bibek', 'kumar', 'male', '2017-03-15', 'BENGALURU', '2', '2', 'SINGLE', 'registration/ naturalization', '56465456', '246546', 'GOVERNMENT', 'no', 'GRADUATE AND ABOVE', '3545645', '1314885847'),
(10, 'ankit', 'VERMA', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1024402215'),
(11, 'ankit', 'VERMA', 'male', '1111-12-12', 'bangalore', '18', '2', 'SINGLE', 'birth', '23456789', '98765432DF', 'GOVERNMENT', 'yes', 'BETWEEN 6TH AND 9TH STANDARD', '', '1024402215'),
(12, 'Bibek', 'kumar', 'male', '2017-03-06', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'descent', '87678698', '7698698', 'STUDENT', 'yes', 'GRADUATE AND ABOVE', '87087097', '1329398154'),
(13, 'Bibek', 'kumar', 'male', '0000-00-00', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '87987', '98789789', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '8798798', '1286392868'),
(14, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1331624290'),
(15, 'Bibek', 'kumar', 'male', '0000-00-00', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'birth', '87698', '986986', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '869689', '1383463441'),
(16, 'Bibek', 'kumar', 'male', '2017-03-12', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '87696', '898698', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '698698698', '1293799453'),
(17, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1339193219'),
(18, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1375556543'),
(19, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1080477970'),
(20, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1205631249'),
(21, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1060487585'),
(22, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1126464185'),
(23, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1126464185'),
(24, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1126464185'),
(25, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1173199348'),
(26, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1037234031'),
(27, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1219117481'),
(28, '', '', '', '0000-00-00', '', '2', '2', 'WIDOW/ WIDOWER', '', '', '', 'GOVERNMENT', '', 'GRADUATE AND ABOVE', '', '1285284233'),
(29, 'Bibek', 'kumar', 'male', '2017-03-06', 'BENGALURU', '2', '2', 'WIDOW/ WIDOWER', 'registration/ naturalization', '798070', '09709709', 'GOVERNMENT', 'yes', 'GRADUATE AND ABOVE', '879878', '1152795880'),
(30, 'Ankit', 'Verma', 'male', '1995-10-04', 'Patna', '6', '6', 'SINGLE', 'birth', '265418r', '16589451461', 'STUDENT', 'yes', 'GRADUATE AND ABOVE', '16549498416519', '1025151237'),
(31, 'tabish', 'shaikh', 'male', '1996-01-30', 'up', '34', '34', 'SINGLE', 'birth', '8759798', '7659689', 'STUDENT', 'no', 'GRADUATE AND ABOVE', '545425', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `id_proof` text NOT NULL,
  `address` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `app_id`, `id_proof`, `address`, `picture`) VALUES
(1, 1314885848, '', '', ''),
(2, 1314885848, '5th sem marks card.jpg', 'resume_bibek_new.txt', ''),
(3, 1314885848, '5th sem marks card.jpg', 'resume_bibek_new.txt', ''),
(4, 1314885848, '5th sem marks card.jpg', 'resume_bibek_new.txt', ''),
(5, 1314885848, '5th sem marks card.jpg', 'resume_bibek_new.txt', ''),
(6, 1314885848, '', '', ''),
(7, 1314885847, '', '', ''),
(8, 1314885847, '', '', ''),
(9, 1314885848, 'bibek.jpg', 'Resume.docx', ''),
(10, 1314885847, 'resume_bibek.docx', 'resume_bibek_new.txt', 'bibek.jpg'),
(11, 1314885848, 'DSC_0568.JPG', 'Resume_Bibek_new.pdf', 'bibek.jpg'),
(12, 1383463441, 'contacts.txt', 'resume_bibek_new.docx', 'bibek.jpg'),
(13, 1383463441, 'Resume_Bibek_new.pdf', 'DSC_0568.JPG', 'bibek.jpg'),
(14, 1383463441, '', '', ''),
(15, 1025151237, '', '', ''),
(16, 1025151237, 'resume_bibek_new.odt', 'resume_bibek.docx', 'DSC_0568.JPG'),
(17, 1115323484, '5th sem marks card.jpg', 'Resume.docx', 'bibek.jpg'),
(18, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact_6`
--

CREATE TABLE IF NOT EXISTS `emergency_contact_6` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emergency_contact_6`
--

INSERT INTO `emergency_contact_6` (`id`, `name`, `address`, `contact`, `email`, `app_id`) VALUES
(1, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '', 'kumar.bee014@gmail.com', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, 'Niranjan Yadav', 'india', '08892739936', 'nyniranjanraju@gmail.com', '1323614595'),
(5, '', '', '', '', '1244087379'),
(6, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1314885847'),
(7, '', '', '', '', '1024402215'),
(8, 'Niranjan Yadav', 'india', '7086953473', 'niranjany74@gmail.com', '1329398154'),
(9, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1286392868'),
(10, '', '', '', '', '1331624290'),
(11, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1383463441'),
(12, '', '', '', '', '1205631249'),
(13, '', '', '', '', '1060487585'),
(14, '', '', '', '', '1126464185'),
(15, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1173199348'),
(16, '', '', '', '', '1037234031'),
(17, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1152795880'),
(18, 'Niranjan', 'no 181,1st main,1st cross', '26549651984', 'niranjany74@gmail.com', '1025151237'),
(19, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'kumar.bee014@gmail.com', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `family_details_3`
--

CREATE TABLE IF NOT EXISTS `family_details_3` (
  `id` int(11) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_surname` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `mother_surname` varchar(100) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `parent_surname` varchar(100) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details_3`
--

INSERT INTO `family_details_3` (`id`, `father_name`, `father_surname`, `mother_name`, `mother_surname`, `parent_name`, `parent_surname`, `app_id`) VALUES
(1, 'hghjgk', 'kgkgkhgk', 'jhgkhg', 'gkgkgk', 'kgkgk', 'kgkghk', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, 'aaaa', 'bbb', 'ccc', 'ddd', 'eee', 'fff', '1323614595'),
(5, '', '', '', '', '', '', '1244087379'),
(6, '', '', '', '', '', '', '1317155471'),
(7, 'kjgkjgjk', 'jkgjkg', 'kjkgjkgkj', 'kgkjgjk', 'kjgkjg', 'kjgkjg', '1314885847'),
(8, '', '', '', '', '', '', '1024402215'),
(9, 'bbbbb', 'bbhh', 'hhhhh', 'hhhhh', 'hhfhhff', 'hghfghh', '1329398154'),
(10, 'jhgj', 'jhgkjg', 'kgkjg', 'kjgkjg', 'jkgkjg', 'kgkj', '1286392868'),
(11, '', '', '', '', '', '', '1331624290'),
(12, 'Bibek', 'kumar', 'bjgjkg', 'kjgkjg', 'hghjg', 'jhgjhg', '1383463441'),
(13, '', '', '', '', '', '', '1205631249'),
(14, '', '', '', '', '', '', '1060487585'),
(15, '', '', '', '', '', '', '1126464185'),
(16, '', '', '', '', '', '', '1126464185'),
(17, '', 'gsd', '', '', '', '', '1173199348'),
(18, '', '', '', '', '', '', '1037234031'),
(19, '', '', '', '', '', '', '1219117481'),
(20, 'Bibek', 'kumar', 'bjgjkg', 'fdgs', 'sfs', 'sfsf', '1152795880'),
(21, 'A. K', 'Verma', 'B', 'Verma', 'A. K', 'Verma', '1025151237'),
(22, 'furquan', 'ahmad', 'bbbbb', 'ahmad', 'furquan', 'ahmad', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `paid_users`
--

CREATE TABLE IF NOT EXISTS `paid_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_users`
--

INSERT INTO `paid_users` (`id`, `user_id`, `app_id`) VALUES
(1, 1, 1314885847),
(2, 1, 1314885848),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 1331624290),
(7, 0, 1383463441),
(8, 0, 1152795880),
(9, 0, 1152795880),
(10, 0, 1025151237),
(11, 0, 1115323484);

-- --------------------------------------------------------

--
-- Table structure for table `passport_type_1`
--

CREATE TABLE IF NOT EXISTS `passport_type_1` (
  `id` int(11) NOT NULL,
  `applying_for` varchar(25) NOT NULL,
  `type_of_application` varchar(10) NOT NULL,
  `type_of_passport_booklet` varchar(10) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passport_type_1`
--

INSERT INTO `passport_type_1` (`id`, `applying_for`, `type_of_application`, `type_of_passport_booklet`, `app_id`) VALUES
(26, 'fresh_passport', 'normal', '36pages', '1375556543'),
(27, 'fresh_passport', 'normal', '60pages', '1080477970'),
(28, 'fresh_passport', 'tatkal', '36pages', '1205631249'),
(29, '', '', '', '1060487585'),
(30, '', '', '', '1278406601'),
(31, '', '', '', '1248854305'),
(32, '', '', '', '1126464185'),
(33, '', 'normal', '36pages', '1173199348'),
(34, '', '', '', '1037234031'),
(35, '', '', '', '1099925446'),
(36, 'fresh_passport', 'tatkal', '36pages', '1219117481'),
(37, '', '', '', '1285284233'),
(38, '', '', '', '1062644180'),
(39, 'fresh_passport', 'tatkal', '60pages', '1152795880'),
(40, 'fresh_passport', 'tatkal', '36pages', '1025151237'),
(41, 'fresh_passport', 'normal', '60pages', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `permanent_address_5`
--

CREATE TABLE IF NOT EXISTS `permanent_address_5` (
  `id` int(11) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `state_ut` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `police_station` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permanent_address_5`
--

INSERT INTO `permanent_address_5` (`id`, `house_no`, `village`, `state_ut`, `district`, `police_station`, `pin`, `mobile`, `email`, `app_id`) VALUES
(1, 'bbb', 'bb', 'b', 'b', 'b', 'bbbb', '255455', 'jhgjh', ''),
(2, 'bbb', 'bb', 'b', 'b', 'b', 'bbbb', '255455', 'jhgjh', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'karnataka', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1323614595'),
(6, '', '', '', '', '', '', '', '', '1244087379'),
(7, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'jhghg', 'kjgkjg', '560090', '7086953473', 'kumar.bee014@gmail.com', '1314885847'),
(8, '', '', '', '', '', '', '', '', '1024402215'),
(9, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1329398154'),
(10, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1286392868'),
(11, '', '', '', '', '', '', '', '', '1331624290'),
(12, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1383463441'),
(13, '', '', '', '', '', '', '', '', '1205631249'),
(14, '', '', '', '', '', '', '', '', '1060487585'),
(15, '', '', '', '', '', '', '', '', '1060487585'),
(16, '', '', '', '', '', '', '', '', '1126464185'),
(17, '', '', '', '', '', '', '', '', '1126464185'),
(18, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', '', '', '560090', '7086953473', 'kumar.bee014@gmail.com', '1173199348'),
(19, '', '', '', '', '', '', '', '', '1037234031'),
(20, '', '', '', '', '', '', '', '', '1219117481'),
(21, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'vfgfsgs', '560090', '7086953473', 'kumar.bee014@gmail.com', '1152795880'),
(22, 'no 181,1st main,1st cross', 'BENGALURU', 'Karnataka', 'bangalore', 'Jalahalli', '560090', '7086953473', 'ankit4@gmail.com', '1025151237'),
(23, '5th cross, Hesaraghatta Main Road, Chikkasandra, B', 'bangalore', 'up', 'up', 'chikkabanbara', '560090', '2514587521', 'ter@rew.jjh', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `police_verification`
--

CREATE TABLE IF NOT EXISTS `police_verification` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `police_verification` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_verification`
--

INSERT INTO `police_verification` (`id`, `app_id`, `police_verification`) VALUES
(7, 1314885847, 'on'),
(9, 1383463441, 'on'),
(10, 1383463441, ''),
(11, 1025151237, 'on'),
(12, 1115323484, 'on'),
(13, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `present_residential_address_4`
--

CREATE TABLE IF NOT EXISTS `present_residential_address_4` (
  `id` int(11) NOT NULL,
  `house_no` varchar(50) NOT NULL,
  `village` varchar(50) NOT NULL,
  `state_ut` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `police_station` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `present_residential_address_4`
--

INSERT INTO `present_residential_address_4` (`id`, `house_no`, `village`, `state_ut`, `district`, `police_station`, `pin`, `mobile`, `email`, `app_id`) VALUES
(1, 'hkfjkfjhkfkjf', 'kfkkjhfkfkf', 'kjfkfk', 'fk', 'fkjfkf', 'k', '354566', 'fjk', ''),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'karnateka', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1323614595'),
(5, '', '', '', '', '', '', '', '', '1244087379'),
(6, '', '', '', '', '', '', '', '', '1317155471'),
(7, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'jhgjhg', 'hjghg', '560090', '7086953473', 'kumar.bee014@gmail.com', '1314885847'),
(8, '', '', '', '', '', '', '', '', '1024402215'),
(9, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1329398154'),
(10, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1286392868'),
(11, '', '', '', '', '', '', '', '', '1331624290'),
(12, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'chikkabanbara', '560090', '7086953473', 'kumar.bee014@gmail.com', '1383463441'),
(13, '', '', '', '', '', '', '', '', '1205631249'),
(14, '', '', '', '', '', '', '', '', '1060487585'),
(15, '', '', '', '', '', '', '', '', '1060487585'),
(16, '', '', '', '', '', '', '', '', '1126464185'),
(17, '', '', '', '', '', '', '', '', '1126464185'),
(18, 'no 181,1st main,1st cross', 'gs', 'near shree krishna institute of technology', '', '', '560090', '7086953473', 'kumar.bee014@gmail.com', '1173199348'),
(19, '', '', '', '', '', '', '', '', '1037234031'),
(20, '', '', '', '', '', '', '', '', '1219117481'),
(21, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'bangalore', 'bcfsfs', '560090', '7086953473', 'kumar.bee014@gmail.com', '1152795880'),
(22, '#3A, 5th main cross', 'BENGALURU', 'Karnataka', 'bangalore', 'Jalahalli', '560090', '7086953473', 'ankit4@gmail.com', '1025151237'),
(23, 'no 181,1st main,1st cross', 'BENGALURU', 'near shree krishna institute of technology', 'up', 'chikkabanbara', '560090', '245242', '', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `references_7`
--

CREATE TABLE IF NOT EXISTS `references_7` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `contact1` varchar(15) NOT NULL,
  `app_id` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `references_7`
--

INSERT INTO `references_7` (`id`, `name`, `address`, `contact`, `name1`, `address1`, `contact1`, `app_id`) VALUES
(1, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'niranjan', 'india', '44564654654', ''),
(2, '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', ''),
(4, 'surya bhai', 'delhi', '7086953473', 'akshay kumar', 'jharkhand', '09135122200', '1323614595'),
(5, '', '', '', '', '', '', '1244087379'),
(6, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1314885847'),
(7, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1314885847'),
(8, '', '', '', '', '', '', '1024402215'),
(9, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'niranjan', 'india', '7086953473', '1329398154'),
(10, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1286392868'),
(11, '', '', '', '', '', '', '1331624290'),
(12, '', '', '', '', '', '', '1331624290'),
(13, '', '', '', '', '', '', '1331624290'),
(14, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1383463441'),
(15, '', '', '', '', '', '', '1205631249'),
(16, '', '', '', '', '', '', '1060487585'),
(17, '', '', '', '', '', '', '1126464185'),
(18, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1173199348'),
(19, '', '', '', '', '', '', '1037234031'),
(20, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1152795880'),
(21, 'Bibek kumar', 'no 181,1st main,1st cross, Raghuvendra layout,chikkabanabara,bangalore', '7086953473', 'niranjan', 'no 181,1st main,1st cross', '265249618', '1025151237'),
(22, 'Niranjan Yadav', 'india', '7086953473', 'Bibek kumar', 'no 181,1st main,1st cross', '7086953473', '1115323484');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `passport_office` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `lname` varchar(55) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(155) NOT NULL,
  `login_id` varchar(155) NOT NULL,
  `password` varchar(75) NOT NULL,
  `hint_question` varchar(255) NOT NULL,
  `hint_answer` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `passport_office`, `name`, `lname`, `dob`, `email`, `login_id`, `password`, `hint_question`, `hint_answer`, `active`, `type`) VALUES
(1, '1', 'Niranjan', 'Yadav', '2017-02-08', 'niranjany74@gmail.com', 'niranjany74@gmail.com', 'niru', 'birth_city', 'kabul', 1, 1),
(2, '15', 'Bibek kumar', 'kushwaha', '1993-05-23', 'kumar.bee014@gmail.com', 'kumar.bee014@gmail.com', 'bibek', 'fav_actor', 'bibek', 1, 0),
(3, '39', 'tabish', 'ahmad', '2017-03-10', 'tabish@gmail.com', 'tabish@gmail.com', 'ahmad', 'fav_color', 'black', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `app_id` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `login_id`, `app_id`) VALUES
(1, '', '1331624290'),
(2, 'niranjany74@gmail.com', '1331624290'),
(3, 'niranjany74@gmail.com', '1383463441'),
(4, 'niranjany74@gmail.com', '1383463441'),
(5, 'niranjany74@gmail.com', '1383463441'),
(6, 'niranjany74@gmail.com', '1383463441'),
(7, 'niranjany74@gmail.com', '1383463441'),
(8, 'niranjany74@gmail.com', '1205631249'),
(9, 'niranjany74@gmail.com', '1060487585'),
(10, 'niranjany74@gmail.com', '1126464185'),
(11, 'niranjany74@gmail.com', '1173199348'),
(12, 'niranjany74@gmail.com', '1037234031'),
(13, 'kumar.bee014@gmail.com', '1152795880'),
(14, 'kumar.bee014@gmail.com', '1025151237'),
(15, 'niranjany74@gmail.com', ''),
(16, 'niranjany74@gmail.com', ''),
(17, 'niranjany74@gmail.com', '1025151237'),
(18, 'niranjany74@gmail.com', '1025151237'),
(19, 'kumar.bee014@gmail.com', '1115323484'),
(20, 'niranjany74@gmail.com', '1115323484'),
(21, 'niranjany74@gmail.com', '0'),
(22, 'niranjany74@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_details_2`
--
ALTER TABLE `applicant_details_2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emergency_contact_6`
--
ALTER TABLE `emergency_contact_6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_details_3`
--
ALTER TABLE `family_details_3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paid_users`
--
ALTER TABLE `paid_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passport_type_1`
--
ALTER TABLE `passport_type_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permanent_address_5`
--
ALTER TABLE `permanent_address_5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `police_verification`
--
ALTER TABLE `police_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `present_residential_address_4`
--
ALTER TABLE `present_residential_address_4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `references_7`
--
ALTER TABLE `references_7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_details_2`
--
ALTER TABLE `applicant_details_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `emergency_contact_6`
--
ALTER TABLE `emergency_contact_6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `family_details_3`
--
ALTER TABLE `family_details_3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `paid_users`
--
ALTER TABLE `paid_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `passport_type_1`
--
ALTER TABLE `passport_type_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `permanent_address_5`
--
ALTER TABLE `permanent_address_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `police_verification`
--
ALTER TABLE `police_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `present_residential_address_4`
--
ALTER TABLE `present_residential_address_4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `references_7`
--
ALTER TABLE `references_7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
