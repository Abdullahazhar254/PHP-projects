-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 03:22 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakcricketclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_name` varchar(50) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_username` varchar(255) NOT NULL,
  `ad_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_email`, `ad_username`, `ad_pass`) VALUES
(1, 'asad', 'asad63881@gmail.com', 'asad', '63881');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_timing` varchar(50) NOT NULL,
  `b_start_date` date NOT NULL,
  `b_end_date` date NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`b_id`, `b_name`, `b_timing`, `b_start_date`, `b_end_date`, `d_id`) VALUES
(25, '1710C2', '13:00', '2019-09-28', '2019-10-28', 4),
(27, '1710C3', '17:00', '2019-09-04', '2019-10-09', 3),
(28, '1710C1', '13:00', '2019-08-01', '2019-09-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch_form`
--

CREATE TABLE `batch_form` (
  `bf_id` int(11) NOT NULL,
  `bf_member` int(11) NOT NULL,
  `bf_batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_form`
--

INSERT INTO `batch_form` (`bf_id`, `bf_member`, `bf_batch`) VALUES
(3, 70, 27);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`d_id`, `d_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `ground`
--

CREATE TABLE `ground` (
  `g_id` int(11) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `g_detail` varchar(10000) NOT NULL,
  `g_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground`
--

INSERT INTO `ground` (`g_id`, `g_name`, `g_detail`, `g_amount`) VALUES
(3, 'NSK', 'Karachi Pakistans largest and most populous city presents an interesting and colourful combination of the old and new The National Stadium became Karachis fifth and Pakistans 11th firstclass ground. The inaugural first class match was played at NSK between Pakistan and India and it became a fortress', 100),
(4, 'LCG', 'Despite a major rebuilding programme in recent years Lord s remains a cricket ground as opposed to the largely impersonal stadiums many other leading venues which have become Playing in a Test at Lord s still widely regarded as the home of cricket remains to many cricketers the pinnacle of a career The third of Thomas Lord s grounds was opened in 1814 and soon became the major venue as cricket became the world s leading sport in the 19th century While cricket has been overtaken by other international events and the game itself has become overtly commercial Lord s has retained its place as the spiritual home The ground is privately owned by the Marylebone Cricket Club is the home to the ECB and from 1909 to 2005 the ICC The dominant building is the terracotta-coloured pavilion built in 1890.', 90);

-- --------------------------------------------------------

--
-- Table structure for table `ground_booking`
--

CREATE TABLE `ground_booking` (
  `gb_id` int(11) NOT NULL,
  `gb_member` int(11) NOT NULL,
  `gb_ground` int(11) NOT NULL,
  `gb_date` date NOT NULL,
  `gb_status` int(11) NOT NULL,
  `g_card` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_booking`
--

INSERT INTO `ground_booking` (`gb_id`, `gb_member`, `gb_ground`, `gb_date`, `gb_status`, `g_card`) VALUES
(42, 49, 3, '2019-10-03', 1, '3815 9385 8947 58'),
(43, 70, 3, '2019-10-04', 0, '3483 849343 48389');

-- --------------------------------------------------------

--
-- Table structure for table `ground_image`
--

CREATE TABLE `ground_image` (
  `gi_id` int(11) NOT NULL,
  `gi_image` varchar(255) NOT NULL,
  `gi_gid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_image`
--

INSERT INTO `ground_image` (`gi_id`, `gi_image`, `gi_gid`) VALUES
(3, 'nsk.jpg', 3),
(4, 'nsk1.jpg', 3),
(9, 'nsk2.jpg', 3),
(10, 'nsk3.jpg', 3),
(11, 'nsk4.jpg', 3),
(12, 'nsk5.jpg', 3),
(13, 'lcg.jpg', 4),
(14, 'lcg1.jpg', 4),
(15, 'lcg2.jpg', 4),
(16, 'lcg3.jpg', 4),
(17, 'lcg4.jpg', 4),
(18, 'lcg5.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ground_status`
--

CREATE TABLE `ground_status` (
  `gs_id` int(11) NOT NULL,
  `gs_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_status`
--

INSERT INTO `ground_status` (`gs_id`, `gs_status`) VALUES
(1, 'Pending'),
(2, 'Approved'),
(3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_firstname` varchar(50) NOT NULL,
  `m_lastname` varchar(50) NOT NULL,
  `m_email` varchar(255) NOT NULL,
  `m_username` varchar(255) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_cnic` varchar(20) NOT NULL,
  `p_role` int(11) NOT NULL,
  `m_card` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_firstname`, `m_lastname`, `m_email`, `m_username`, `m_password`, `m_cnic`, `p_role`, `m_card`) VALUES
(49, 'ali', 'asghar', 'ali@gmail.com', 'ali', '86318e52f5ed4801abe1d13d509443de', '5150-51399333-1', 1, NULL),
(50, 'abdullah', 'azhar', 'abdullah@gmail.com', '', '971e9b15a8aa2f66bf671789f06be286', '5325-5352355-3', 2, '1234567899876543'),
(70, 'sameer', 'shah', 'sameer@gmail.com', 'sa', 'd524813536b71639999ba12bdb3621a8', '5325-5352355-3', 2, '1234567898765432'),
(83, 'hassan', 'khan', 'hk@gmail.com', 'hk', '827ccb0eea8a706c4c34a16891f84e7b', '6756756757656', 49, '4649 5101 3104 6739');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(50) NOT NULL,
  `n_detail` varchar(255) NOT NULL,
  `n_startdate` date NOT NULL,
  `n_enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`n_id`, `n_title`, `n_detail`, `n_startdate`, `n_enddate`) VALUES
(2, '1stAnnouncement', 'Registration of Batch1710C2 is closed now', '2019-09-26', '2019-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `p_id` int(11) NOT NULL,
  `p_role` varchar(50) NOT NULL,
  `p_des` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`p_id`, `p_role`, `p_des`, `p_price`) VALUES
(1, 'Free', 'Ground booking\r\n24x7 Support', 0),
(2, 'Premium', 'Free Training\r\n Ground booking \r\n24x7 Support', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`),
  ADD UNIQUE KEY `ad_username` (`ad_username`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_name` (`b_name`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `batch_form`
--
ALTER TABLE `batch_form`
  ADD PRIMARY KEY (`bf_id`),
  ADD KEY `fk_batch` (`bf_batch`),
  ADD KEY `fk_member` (`bf_member`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `ground`
--
ALTER TABLE `ground`
  ADD PRIMARY KEY (`g_id`),
  ADD KEY `g_amount` (`g_amount`);

--
-- Indexes for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD PRIMARY KEY (`gb_id`),
  ADD KEY `fk_ground` (`gb_ground`),
  ADD KEY `fk_bookingmember` (`gb_member`);

--
-- Indexes for table `ground_image`
--
ALTER TABLE `ground_image`
  ADD PRIMARY KEY (`gi_id`),
  ADD KEY `fk_groundimage` (`gi_gid`);

--
-- Indexes for table `ground_status`
--
ALTER TABLE `ground_status`
  ADD PRIMARY KEY (`gs_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`),
  ADD UNIQUE KEY `m_username` (`m_username`),
  ADD KEY `fk_memberrole` (`p_role`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `batch_form`
--
ALTER TABLE `batch_form`
  MODIFY `bf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ground`
--
ALTER TABLE `ground`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ground_booking`
--
ALTER TABLE `ground_booking`
  MODIFY `gb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `ground_image`
--
ALTER TABLE `ground_image`
  MODIFY `gi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ground_status`
--
ALTER TABLE `ground_status`
  MODIFY `gs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `FK_d_id` FOREIGN KEY (`d_id`) REFERENCES `days` (`d_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `batch_form`
--
ALTER TABLE `batch_form`
  ADD CONSTRAINT `fk_batch` FOREIGN KEY (`bf_batch`) REFERENCES `batch` (`b_id`),
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`bf_member`) REFERENCES `member` (`m_id`);

--
-- Constraints for table `ground_image`
--
ALTER TABLE `ground_image`
  ADD CONSTRAINT `fk_groundimage` FOREIGN KEY (`gi_gid`) REFERENCES `ground` (`g_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
