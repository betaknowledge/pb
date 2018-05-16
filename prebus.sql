-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2018 at 06:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prebus`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(25) NOT NULL,
  `sid` varchar(25) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `b_id` int(25) NOT NULL,
  `year` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `17-18` int(2) NOT NULL,
  `due` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `sid`, `pass`, `email`, `b_id`, `year`, `branch`, `17-18`, `due`) VALUES
(1, '2015cse001', 'abc123', '', 1, '2015', 'cse', 0, NULL),
(2, '2015cse002', 'abc456', '', 1, '2015', 'cse', 0, NULL),
(3, '2015cse003', 'abc789', '', 1, '2015', 'cse', 0, NULL),
(4, '2015cse004', 'abc1122', '', 2, '2015', 'cse', 0, NULL),
(5, '2015cse005', 'abc1455', '', 2, '2015', 'cse', 0, NULL),
(6, '2015cse006', 'abc1788', '', 2, '2015', 'cse', 0, NULL),
(7, '2015cse007', 'abc2121', '', 2, '2015', 'cse', 0, NULL),
(8, '2015cse008', 'abc2454', '', 3, '2015', 'cse', 0, NULL),
(9, '2015cse009', 'abc2787', '', 4, '2015', 'cse', 0, NULL),
(10, '2015cse010', 'abc3120', '', 4, '2015', 'cse', 0, NULL),
(11, '2015cse011', 'abc3453', '', 5, '2015', 'cse', 0, NULL),
(12, '2015cse012', 'abc3786', '', 2, '2015', 'cse', 0, NULL),
(13, '2015cse013', 'abc4119', '', 1, '2015', 'cse', 0, NULL),
(14, '2015cse014', 'abc4452', '', 2, '2015', 'cse', 0, NULL),
(15, '2015cse015', 'abc4785', '', 3, '2015', 'cse', 0, NULL),
(16, '2015cse016', 'abc5118', '', 1, '2015', 'cse', 0, NULL),
(17, '2015cse017', 'abc5451', '', 3, '2015', 'cse', 0, NULL),
(18, '2015cse018', 'abc5784', '', 5, '2015', 'cse', 0, NULL),
(19, '2015cse019', 'abc6117', '', 4, '2015', 'cse', 0, NULL),
(20, '2015cse020', 'abc6450', '', 1, '2015', 'cse', 0, NULL),
(21, '2015cse021', 'abc6783', '', 1, '2015', 'cse', 0, NULL),
(22, '2015cse022', 'abc7116', '', 1, '2015', 'cse', 0, NULL),
(23, '2015cse023', 'abc7449', '', 2, '2015', 'cse', 0, NULL),
(24, '2015cse024', 'abc7782', '', 2, '2015', 'cse', 0, NULL),
(25, '2015cse025', 'abc8115', '', 2, '2015', 'cse', 0, NULL),
(26, '2015cse026', 'abc8448', '', 2, '2015', 'cse', 0, NULL),
(27, '2015cse027', 'abc8781', '', 3, '2015', 'cse', 0, NULL),
(28, '2015cse028', 'abc9114', '', 4, '2015', 'cse', 0, NULL),
(29, '2015cse029', 'abc9447', '', 4, '2015', 'cse', 0, NULL),
(30, '2015cse030', 'abc9780', '', 5, '2015', 'cse', 0, NULL),
(31, '2015cse031', 'abc10113', '', 2, '2015', 'cse', 0, NULL),
(32, '2015cse032', 'abc10446', '', 1, '2015', 'cse', 0, NULL),
(33, '2015cse033', 'abc10779', '', 2, '2015', 'cse', 0, NULL),
(34, '2015cse034', 'abc11112', '', 3, '2015', 'cse', 0, NULL),
(35, '2015cse035', 'abc11445', '', 1, '2015', 'cse', 0, NULL),
(36, '2015cse036', 'abc11778', '', 3, '2015', 'cse', 0, NULL),
(37, '2015cse037', 'abc12111', '', 5, '2015', 'cse', 0, NULL),
(38, '2015cse038', 'abc12444', '', 4, '2015', 'cse', 0, NULL),
(39, '2015cse039', 'abc12777', '', 1, '2015', 'cse', 0, NULL),
(40, '2015cse040', 'abc13110', '', 1, '2015', 'cse', 0, NULL),
(41, '2015cse041', 'abc13443', '', 1, '2015', 'cse', 0, NULL),
(42, '2015cse042', 'abc13776', '', 2, '2015', 'cse', 0, NULL),
(43, '2015cse043', 'abc14109', '', 2, '2015', 'cse', 0, NULL),
(44, '2015cse044', 'abc14442', '', 2, '2015', 'cse', 0, NULL),
(45, '2015cse045', 'abc14775', '', 2, '2015', 'cse', 0, NULL),
(46, '2015cse046', 'abc15108', '', 3, '2015', 'cse', 0, NULL),
(47, '2015cse047', 'abc15441', '', 4, '2015', 'cse', 0, NULL),
(48, '2015cse048', 'abc15774', '', 4, '2015', 'cse', 0, NULL),
(49, '2015cse049', 'abc16107', '', 5, '2015', 'cse', 0, NULL),
(50, '2015cse050', 'abc16440', '', 2, '2015', 'cse', 0, NULL),
(51, '2015cse051', 'abc16773', '', 1, '2015', 'cse', 0, NULL),
(52, '2015cse052', 'abc17106', '', 2, '2015', 'cse', 0, NULL),
(53, '2015cse053', 'abc17439', '', 3, '2015', 'cse', 0, NULL),
(54, '2015cse054', 'abc17772', '', 1, '2015', 'cse', 0, NULL),
(55, '2015cse055', 'abc18105', '', 3, '2015', 'cse', 0, NULL),
(56, '2015cse056', 'abc18438', '', 5, '2015', 'cse', 0, NULL),
(57, '2015cse057', 'abc18771', '', 4, '2015', 'cse', 0, NULL),
(58, '2015cse058', 'abc19104', '', 1, '2015', 'cse', 0, NULL),
(59, '2015cse059', 'abc19437', '', 1, '2015', 'cse', 0, NULL),
(60, '2015cse060', 'abc19770', '', 1, '2015', 'cse', 0, NULL),
(61, '2015cse061', 'abc20103', '', 2, '2015', 'cse', 0, NULL),
(62, '2015cse062', 'abc20436', '', 2, '2015', 'cse', 0, NULL),
(63, '2015cse063', 'abc20769', '', 2, '2015', 'cse', 0, NULL),
(64, '2015cse064', 'abc21102', '', 2, '2015', 'cse', 0, NULL),
(65, '2015cse065', 'abc21435', '', 3, '2015', 'cse', 0, NULL),
(66, '2015cse066', 'abc21768', '', 4, '2015', 'cse', 0, NULL),
(67, '2015cse067', 'abc22101', '', 4, '2015', 'cse', 0, NULL),
(68, '2015cse068', 'abc22434', '', 5, '2015', 'cse', 0, NULL),
(69, '2015cse069', 'abc22767', '', 2, '2015', 'cse', 0, NULL),
(70, '2015cse070', 'abc23100', '', 1, '2015', 'cse', 0, NULL),
(71, '2015cse071', 'abc23433', '', 2, '2015', 'cse', 0, NULL),
(72, '2015cse072', 'abc23766', '', 3, '2015', 'cse', 0, NULL),
(73, '2015cse073', 'abc24099', '', 1, '2015', 'cse', 0, NULL),
(74, '2015cse074', 'abc24432', '', 3, '2015', 'cse', 0, NULL),
(75, '2015cse075', 'abc24765', '', 5, '2015', 'cse', 0, NULL),
(76, '2015cse076', 'abc25098', '', 4, '2015', 'cse', 0, NULL),
(77, '2015cse077', 'abc25431', '', 1, '2015', 'cse', 0, NULL),
(78, '2015cse078', 'abc25764', '', 1, '2015', 'cse', 0, NULL),
(79, '2015cse079', 'abc26097', '', 1, '2015', 'cse', 0, NULL),
(80, '2015cse080', 'abc26430', '', 2, '2015', 'cse', 0, NULL),
(81, '2015cse081', 'abc26763', '', 2, '2015', 'cse', 0, NULL),
(82, '2015cse082', 'abc27096', '', 2, '2015', 'cse', 0, NULL),
(83, '2015cse083', 'abc27429', '', 2, '2015', 'cse', 0, NULL),
(84, '2015cse084', 'abc27762', '', 3, '2015', 'cse', 0, NULL),
(85, '2015cse085', 'abc28095', '', 4, '2015', 'cse', 0, NULL),
(86, '2015cse086', 'abc28428', '', 4, '2015', 'cse', 0, NULL),
(87, '2015cse087', 'abc28761', '', 5, '2015', 'cse', 0, NULL),
(88, '2015cse088', 'abc29094', '', 2, '2015', 'cse', 0, NULL),
(89, '2015cse089', 'abc29427', '', 1, '2015', 'cse', 0, NULL),
(90, '2015cse090', 'abc29760', '', 2, '2015', 'cse', 0, NULL),
(91, '2015cse091', 'abc30093', '', 3, '2015', 'cse', 0, NULL),
(92, '2015cse092', 'abc30426', '', 1, '2015', 'cse', 0, NULL),
(93, '2015cse093', 'abc30759', '', 3, '2015', 'cse', 0, NULL),
(94, '2015cse094', 'abc31092', '', 5, '2015', 'cse', 0, NULL),
(95, '2015cse095', 'abc31425', '', 4, '2015', 'cse', 0, NULL),
(96, '2015cse096', 'abc31758', '', 1, '2015', 'cse', 0, NULL),
(97, '2015cse097', 'abc32091', '', 1, '2015', 'cse', 0, NULL),
(98, '2015cse098', 'abc32424', '', 1, '2015', 'cse', 0, NULL),
(99, '2015cse099', 'abc32757', '', 2, '2015', 'cse', 0, NULL),
(100, '2015cse100', 'abc33090', '', 2, '2015', 'cse', 0, NULL),
(101, '2015cse101', 'abc33423', '', 2, '2015', 'cse', 0, NULL),
(102, '2015cse102', 'abc33756', '', 2, '2015', 'cse', 0, NULL),
(103, '2015cse103', 'abc34089', '', 3, '2015', 'cse', 0, NULL),
(104, '2015cse104', 'abc34422', '', 4, '2015', 'cse', 0, NULL),
(105, '2015cse105', 'abc34755', '', 4, '2015', 'cse', 0, NULL),
(106, '2015cse106', 'abc35088', '', 5, '2015', 'cse', 0, NULL),
(107, '2015cse107', 'abc35421', '', 2, '2015', 'cse', 0, NULL),
(108, '2015cse108', 'abc35754', '', 1, '2015', 'cse', 0, NULL),
(109, '2015cse109', 'abc36087', '', 2, '2015', 'cse', 0, NULL),
(110, '2015cse110', 'abc36420', '', 3, '2015', 'cse', 0, NULL),
(111, '2015cse111', 'abc36753', '', 1, '2015', 'cse', 0, NULL),
(112, '2015cse112', 'abc37086', '', 3, '2015', 'cse', 0, NULL),
(113, '2015cse113', 'abc37419', '', 5, '2015', 'cse', 0, NULL),
(114, '2015cse114', 'abc37752', '', 4, '2015', 'cse', 0, NULL),
(115, '2015cse115', 'abc38085', '', 1, '2015', 'cse', 0, NULL),
(116, '2015cse116', 'abc38418', '', 1, '2015', 'cse', 0, NULL),
(117, '2015cse117', 'abc38751', '', 1, '2015', 'cse', 0, NULL),
(118, '2015cse118', 'abc39084', '', 2, '2015', 'cse', 0, NULL),
(119, '2015cse119', 'abc39417', '', 2, '2015', 'cse', 0, NULL),
(120, '2015cse120', 'abc39750', '', 2, '2015', 'cse', 0, NULL),
(121, '2015cse121', 'abc40083', '', 2, '2015', 'cse', 0, NULL),
(122, '2015cse122', 'abc40416', '', 3, '2015', 'cse', 0, NULL),
(123, '2015cse123', 'abc40749', '', 4, '2015', 'cse', 0, NULL),
(124, '2015cse124', 'abc41082', '', 4, '2015', 'cse', 0, NULL),
(125, '2015cse125', 'abc41415', '', 5, '2015', 'cse', 0, NULL),
(126, '2015cse126', 'abc41748', '', 2, '2015', 'cse', 0, NULL),
(127, '2015cse127', 'abc42081', '', 1, '2015', 'cse', 0, NULL),
(128, '2015cse128', 'abc42414', '', 2, '2015', 'cse', 0, NULL),
(129, '2015cse129', 'abc42747', '', 3, '2015', 'cse', 0, NULL),
(130, '2015cse130', 'abc43080', '', 1, '2015', 'cse', 0, NULL),
(131, '2015cse131', 'abc43413', '', 3, '2015', 'cse', 0, NULL),
(132, '2015cse132', 'abc43746', '', 5, '2015', 'cse', 0, NULL),
(133, '2015cse133', 'abc44079', '', 4, '2015', 'cse', 0, NULL),
(134, '2015cse134', 'abc44412', '', 1, '2015', 'cse', 0, NULL),
(135, '2015cse135', 'abc44745', '', 1, '2015', 'cse', 0, NULL),
(136, '2015cse136', 'abc45078', '', 1, '2015', 'cse', 0, NULL),
(137, '2015cse137', 'abc45411', '', 2, '2015', 'cse', 0, NULL),
(138, '2015cse138', 'abc45744', '', 2, '2015', 'cse', 0, NULL),
(139, '2015cse139', 'abc46077', '', 2, '2015', 'cse', 0, NULL),
(140, '2015cse140', 'abc46410', '', 2, '2015', 'cse', 0, NULL),
(141, '2015cse141', 'abc46743', '', 3, '2015', 'cse', 0, NULL),
(142, '2015cse142', 'abc47076', '', 4, '2015', 'cse', 0, NULL),
(143, '2015cse143', 'abc47409', '', 4, '2015', 'cse', 0, NULL),
(144, '2015cse144', 'abc47742', '', 5, '2015', 'cse', 0, NULL),
(145, '2015cse145', 'abc48075', '', 2, '2015', 'cse', 0, NULL),
(146, '2015cse146', 'abc48408', '', 1, '2015', 'cse', 0, NULL),
(147, '2015cse147', 'abc48741', '', 2, '2015', 'cse', 0, NULL),
(148, '2015cse148', 'abc49074', '', 3, '2015', 'cse', 0, NULL),
(149, '2015cse149', 'abc49407', '', 1, '2015', 'cse', 0, NULL),
(150, '2015cse150', 'abc49740', '', 3, '2015', 'cse', 0, NULL),
(151, '2015cse151', 'abc50073', '', 5, '2015', 'cse', 0, NULL),
(152, '2015cse152', 'abc50406', '', 4, '2015', 'cse', 0, NULL),
(153, '2015cse153', 'abc50739', '', 1, '2015', 'cse', 0, NULL),
(154, '2015cse154', 'abc51072', '', 1, '2015', 'cse', 0, NULL),
(155, '2015cse155', 'abc51405', '', 1, '2015', 'cse', 0, NULL),
(156, '2015cse156', 'abc51738', '', 2, '2015', 'cse', 0, NULL),
(157, '2015cse157', 'abc52071', '', 2, '2015', 'cse', 0, NULL),
(158, '2015cse158', 'abc52404', '', 2, '2015', 'cse', 0, NULL),
(159, '2015cse159', 'abc52737', 'dev225.reddys@gmail.com', 3, '2015', 'cse', 1, 2000),
(160, '2015cse160', 'abc53070', '', 3, '2015', 'cse', 0, NULL),
(161, '2015cse161', 'abc53403', '', 4, '2015', 'cse', 0, NULL),
(162, '2015cse162', 'abc53736', '', 4, '2015', 'cse', 0, NULL),
(163, '2015cse163', 'abc54069', '', 5, '2015', 'cse', 0, NULL),
(164, '2015cse164', 'abc54402', '', 2, '2015', 'cse', 0, NULL),
(165, '2015cse901', 'lcqwq', '', 3, '2015', 'cse', 0, NULL),
(166, '2015mec001', '06ogn', '', 1, '2015', 'mech', 0, NULL),
(167, '2015mec002', 'js5mg', '', 2, '2015', 'mech', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pwd`) VALUES
(1, 'admin', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(25) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(25) NOT NULL,
  `rno` varchar(25) NOT NULL,
  `point` varchar(255) NOT NULL,
  `at` varchar(25) NOT NULL,
  `rt` varchar(25) NOT NULL,
  `fee` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `rno`, `point`, `at`, `rt`, `fee`) VALUES
(1, 'R1', 'Marthahalli', '06:30:00', '05:30:00', '27000'),
(2, 'R1', 'Ananda Nagar', '07:00:00', '04:40:00', '20000'),
(3, 'R1', 'Mahadeva pura', '07:30:00', '04:30:00', '18000'),
(4, 'R2', 'Malleswaram', '06:45:00', '04:50:00', '22000\r'),
(5, 'R2', 'Orion Mall', '07:15:00', '04:45:00', '19000\r'),
(6, 'R2', 'RT Nagar', '07:30:00', '04:30:00', '24000\r'),
(7, 'R3', 'Hebbal Bus Stop', '07:40:00', '04:20:00', '22000\r'),
(8, 'R3', 'Kodigehalli Gate', '07:55:00', '04:15:00', '23000\r'),
(9, 'R3', 'Prakash Theatre', '08:00:00', '04:10:00', '19000\r'),
(10, 'R4', 'Rajanukunte', '8:40:00', '4:30:00', '6000'),
(12, 'R5', 'Marasandra', '8:25:00', '4:25:00', '15500');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `id` int(25) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `bid` int(25) NOT NULL,
  `n_p` varchar(255) NOT NULL,
  `o_bid` int(25) NOT NULL,
  `o_p` varchar(255) NOT NULL,
  `n_fee` int(25) NOT NULL,
  `o_fee` int(255) NOT NULL,
  `done` varchar(2) NOT NULL DEFAULT 'p',
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`id`, `sid`, `bid`, `n_p`, `o_bid`, `o_p`, `n_fee`, `o_fee`, `done`, `date`) VALUES
(66, '2015cse159', 4, 'Malleswaram', 1, 'Marthahalli', 22000, 27000, '1', '2018-04-08 18:26:57.602624'),
(67, '2015cse159', 6, 'RT Nagar', 4, 'Malleswaram', 24000, 22000, '1', '2018-04-08 18:29:00.349975'),
(68, '2015cse159', 2, 'Ananda Nagar', 3, 'Mahadeva pura', 20000, 18000, '1', '2018-04-26 03:36:48.624825');

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `id` int(25) NOT NULL,
  `tid` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(25) NOT NULL,
  `year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
