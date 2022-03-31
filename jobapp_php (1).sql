-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobapp_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `bdate` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `rstatus` varchar(255) DEFAULT NULL,
  `c_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`id`, `fname`, `lname`, `designation`, `address1`, `address2`, `city`, `state`, `zipcode`, `email`, `number`, `bdate`, `gender`, `rstatus`, `c_time`, `update_time`) VALUES
(5, 'Akki', 'Patel', 'MArketing', 'ashdwqohfduf', 'skldhfowshfeuf', 'nlxcjwnejfd', 'gujarat', '123456', 'akki@gmail.com', '7894561230', '2022-03-01', 'female', 'sinlge', '2022-03-30 08:39:50', '2022-03-30 08:39:50'),
(6, 'Akki', 'Patel', 'MArketing', 'ashdwqohfduf', 'skldhfowshfeuf', 'nlxcjwnejfd', 'gujarat', '123456', 'akki@gmail.com', '7894561230', '2022-03-01', 'female', 'sinlge', '2022-03-30 08:40:23', '2022-03-30 08:40:23'),
(7, 'Akki', 'Patel', 'MArketing', 'ashdwqohfduf', 'skldhfowshfeuf', 'nlxcjwnejfd', 'gujarat', '123456', 'akki@gmail.com', '7894561230', '2022-03-01', 'female', 'sinlge', '2022-03-30 08:40:42', '2022-03-30 08:40:42'),
(8, 'efrgrg', 'wgegb', 'svfsdg', 'sdlfhnwlh', 'lnfldfh', 'sdlfweroif', 'gujarat', '456123', 'geger@gmail.com', '4561237890', '7212-05-04', 'male', 'sinlge', '2022-03-30 09:01:43', '2022-03-30 09:01:43'),
(9, 'efrgrg', 'wgegb', 'svfsdg', 'sdlfhnwlh', 'lnfldfh', 'sdlfweroif', 'gujarat', '456123', 'geger@gmail.com', '4561237890', '7212-05-04', 'male', 'sinlge', '2022-03-30 09:02:40', '2022-03-30 09:02:40'),
(10, 'efrgrg', 'wgegb', 'svfsdg', 'sdlfhnwlh', 'lnfldfh', 'sdlfweroif', 'gujarat', '456123', 'geger@gmail.com', '4561237890', '7212-05-04', 'male', 'sinlge', '2022-03-30 09:03:11', '2022-03-30 09:03:11'),
(11, 'efrgrg', 'wgegb', 'svfsdg', 'sdlfhnwlh', 'lnfldfh', 'sdlfweroif', 'gujarat', '456123', 'geger@gmail.com', '4561237890', '7212-05-04', 'male', 'sinlge', '2022-03-30 09:04:28', '2022-03-30 09:04:28'),
(12, 'efrgrg', 'wgegb', 'svfsdg', 'sdlfhnwlh', 'lnfldfh', 'sdlfweroif', 'gujarat', '456123', 'geger@gmail.com', '4561237890', '7212-05-04', 'male', 'sinlge', '2022-03-30 09:07:24', '2022-03-30 09:07:24'),
(13, 'dgfh', 'asdgffhr', 'sverer', 'sdverfgbe', 'fdwsfb', 'csverv', 'gujarat', '456789', 'vsdre@gmail.com', '7891234560', '2021-06-10', 'female', 'sinlge', '2022-03-30 09:09:29', '2022-03-30 09:09:29'),
(14, 'cgrferfg', 'werfgwerf', 'fwerf', 'asfdwergf', 'sverger', 'sdferg', 'gujarat', '123456', 'sdcwed@gmail.com', '4567890123', '2021-10-13', 'male', 'merried', '2022-03-30 09:35:27', '2022-03-30 09:35:27'),
(15, 'cgrferfg', 'werfgwerf', 'fwerf', 'asfdwergf', 'sverger', 'sdferg', 'gujarat', '123456', 'sdcwed@gmail.com', '4567890123', '2021-10-13', 'male', 'merried', '2022-03-30 09:36:17', '2022-03-30 09:36:17'),
(16, 'sfgsdg', 'asfef', 'asfweq', 'dvcwegf', 'cdwdf', 'sdvferg', 'gujarat', '465130', 'asfa@gmail.com', '9632587410', '2022-03-04', 'male', 'merried', '2022-03-30 09:54:30', '2022-03-30 09:54:30'),
(17, 'sfgsdg', 'asfef', 'asfweq', 'dvcwegf', 'cdwdf', 'sdvferg', 'gujarat', '465130', 'asfa@gmail.com', '9632587410', '2022-03-04', 'male', 'merried', '2022-03-30 09:55:02', '2022-03-30 09:55:02'),
(18, 'sfgsdg', 'asfef', 'asfweq', 'dvcwegf', 'cdwdf', 'sdvferg', 'gujarat', '465130', 'asfa@gmail.com', '9632587410', '2022-03-04', 'male', 'merried', '2022-03-30 09:55:48', '2022-03-30 09:55:48'),
(19, 'sfgsdg', 'asfef', 'asfweq', 'dvcwegf', 'cdwdf', 'sdvferg', 'gujarat', '465130', 'asfa@gmail.com', '9632587410', '2022-03-04', 'male', 'merried', '2022-03-30 09:59:58', '2022-03-30 09:59:58'),
(20, 'dfhj', 'ngfhgf', 'fbfdg', 'dffhg', 'dsdsdgfdhg', 'Kathalal', 'UP', '123456', 'dfh@gmail.com', '7894561230', '2022-03-03', 'female', 'merried', '2022-03-30 10:11:57', '2022-03-30 10:11:57'),
(21, 'adegehf', 'fherfh', 'vdwefw', 'vsdvr', 'sdgvefdg', 'vslkdnvwlj', 'Rajasthan', '789456', 'qwe@gmail.com', '7894561230', '2022-03-02', 'male', 'merried', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(22, 'adegehf', 'fherfh', 'vdwefw', 'vsdvr', 'sdgvefdg', 'vslkdnvwlj', 'Rajasthan', '789456', 'qwe@gmail.com', '7894561230', '2022-03-02', 'male', 'merried', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(23, 'Diskhti', 'Patel', 'vdwefw', 'vsdvr', 'sdgvefdg', 'vslkdnvwlj', 'Rajasthan', '789456', 'qwe@gmail.com', '7894561230', '2022-03-02', 'male', 'sinlge', '2022-03-30 11:08:28', '2022-03-31 04:42:37'),
(24, 'Akshay', 'Patel', 'Dev1', 'Bhaner', 'Kathalal', 'Kathalal', 'UP', '123456', 'akshay@gmail.com', '4561237890', '2022-03-02', 'male', 'sinlge', '2022-03-30 11:10:22', '2022-03-31 03:48:35'),
(25, 'Akshay', 'Patel', 'Student', 'bhaner', 'Kathalal', 'Kathalal', 'Rajasthan', '789456', 'akshay@gmail.com', '7227929312', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:16:42', '2022-03-31 08:16:42'),
(26, 'Akshay', 'Patel', 'Student', 'bhaner', 'Kathalal', 'Kathalal', 'Rajasthan', '789456', 'akshay@gmail.com', '7227929312', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:18:31', '2022-03-31 08:18:31'),
(27, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:19:36', '2022-03-31 08:19:36'),
(28, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:20:20', '2022-03-31 08:20:20'),
(29, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:21:03', '2022-03-31 08:21:03'),
(30, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:21:20', '2022-03-31 08:21:20'),
(31, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:21:46', '2022-03-31 08:21:46'),
(32, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:21:57', '2022-03-31 08:21:57'),
(33, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:23:52', '2022-03-31 08:23:52'),
(34, 'Akshay', 'Patel', 'Student', 'KAthalal', 'Kheda', 'Kathalal', 'gujarat', '789456', 'akshay@gmail.com', '7894561230', '1998-03-27', 'male', 'sinlge', '2022-03-31 08:24:30', '2022-03-31 08:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `edu_details`
--

CREATE TABLE `edu_details` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `sscboard` varchar(255) DEFAULT NULL,
  `sscyear` varchar(255) DEFAULT NULL,
  `sscpec` varchar(255) DEFAULT NULL,
  `hscboard` varchar(255) DEFAULT NULL,
  `hscyear` varchar(255) DEFAULT NULL,
  `hscpec` varchar(255) DEFAULT NULL,
  `bachelor_coursename` varchar(255) DEFAULT NULL,
  `bachelor_uni` varchar(255) DEFAULT NULL,
  `bachelor_year` varchar(255) DEFAULT NULL,
  `bachelor_pec` varchar(255) DEFAULT NULL,
  `master_coursename` varchar(255) DEFAULT NULL,
  `master_uni` varchar(255) DEFAULT NULL,
  `master_year` varchar(255) DEFAULT NULL,
  `master_pec` varchar(255) DEFAULT NULL,
  `c_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_details`
--

INSERT INTO `edu_details` (`id`, `s_id`, `sscboard`, `sscyear`, `sscpec`, `hscboard`, `hscyear`, `hscpec`, `bachelor_coursename`, `bachelor_uni`, `bachelor_year`, `bachelor_pec`, `master_coursename`, `master_uni`, `master_year`, `master_pec`, `c_time`, `update_time`) VALUES
(1, 4, 'sscdemo', '1234', '45', 'hscdemo', '2345', '55', 'IT', 'GTU', '3456', '65', 'Data Science', 'IU', '4567', '75', '2022-03-30 08:09:02', '2022-03-30 08:09:02'),
(2, 5, 'sdgfg', '4561', '75', 'sdgfhg', '8547', '45', 'dsghrt', 'lfkjvi', '8456', '78', 'vcrge', 'cbgertt', '2012', '49', '2022-03-30 08:39:50', '2022-03-30 08:39:50'),
(3, 6, 'sdgfg', '4561', '75', 'sdgfhg', '8547', '45', 'dsghrt', 'lfkjvi', '8456', '78', 'vcrge', 'cbgertt', '2012', '49', '2022-03-30 08:40:23', '2022-03-30 08:40:23'),
(4, 7, 'sdgfg', '4561', '75', 'sdgfhg', '8547', '45', 'dsghrt', 'lfkjvi', '8456', '78', 'vcrge', 'cbgertt', '2012', '49', '2022-03-30 08:40:42', '2022-03-30 08:40:42'),
(5, 8, 'asfwefwergf', '1011', '25', 'jdkljcwief', '1021', '45', 'nklsjcklwe', 'kvnkrfv', '2022', '65', 'edfwef', 'cweqafwqf', '4567', '49', '2022-03-30 09:01:43', '2022-03-30 09:01:43'),
(6, 9, 'asfwefwergf', '1011', '25', 'jdkljcwief', '1021', '45', 'nklsjcklwe', 'kvnkrfv', '2022', '65', 'edfwef', 'cweqafwqf', '4567', '49', '2022-03-30 09:02:40', '2022-03-30 09:02:40'),
(7, 10, 'asfwefwergf', '1011', '25', 'jdkljcwief', '1021', '45', 'nklsjcklwe', 'kvnkrfv', '2022', '65', 'edfwef', 'cweqafwqf', '4567', '49', '2022-03-30 09:03:11', '2022-03-30 09:03:11'),
(8, 11, 'asfwefwergf', '1011', '25', 'jdkljcwief', '1021', '45', 'nklsjcklwe', 'kvnkrfv', '2022', '65', 'edfwef', 'cweqafwqf', '4567', '49', '2022-03-30 09:04:28', '2022-03-30 09:04:28'),
(9, 12, 'asfwefwergf', '1011', '25', 'jdkljcwief', '1021', '45', 'nklsjcklwe', 'kvnkrfv', '2022', '65', 'edfwef', 'cweqafwqf', '4567', '49', '2022-03-30 09:07:24', '2022-03-30 09:07:24'),
(10, 13, 'cefqw', '1011', '45', 'hscdemo', '1021', '55', 'edrfger', 'aqwqw', '56', '85', 'qwcfwergw', 'byrfg', '75', '68', '2022-03-30 09:09:29', '2022-03-30 09:09:29'),
(11, 14, 'vaserdf', '4561', '75', 'sdf34f', '6412', '45', 'fwerfwedf', 'wefwe', '2012', '85', 'asdcwqe', 'cverbehb', '6575', '75', '2022-03-30 09:35:27', '2022-03-30 09:35:27'),
(12, 15, 'vaserdf', '4561', '75', 'sdf34f', '6412', '45', 'fwerfwedf', 'wefwe', '2012', '85', 'asdcwqe', 'cverbehb', '6575', '75', '2022-03-30 09:36:17', '2022-03-30 09:36:17'),
(13, 16, 'sfwdfd', '4614', '15', 'dsvtgjyk', '5421', '65', 'dfghgjk', 'swerttu', '4875', '62', 'dvfrfthjgtjk', 'wedwfw', '2541', '25', '2022-03-30 09:54:30', '2022-03-30 09:54:30'),
(14, 17, 'sfwdfd', '4614', '15', 'dsvtgjyk', '5421', '65', 'dfghgjk', 'swerttu', '4875', '62', 'dvfrfthjgtjk', 'wedwfw', '2541', '25', '2022-03-30 09:55:02', '2022-03-30 09:55:02'),
(15, 18, 'sfwdfd', '4614', '15', 'dsvtgjyk', '5421', '65', 'dfghgjk', 'swerttu', '4875', '62', 'dvfrfthjgtjk', 'wedwfw', '2541', '25', '2022-03-30 09:55:48', '2022-03-30 09:55:48'),
(16, 19, 'sfwdfd', '4614', '15', 'dsvtgjyk', '5421', '65', 'dfghgjk', 'swerttu', '4875', '62', 'dvfrfthjgtjk', 'wedwfw', '2541', '25', '2022-03-30 09:59:58', '2022-03-30 09:59:58'),
(17, 20, 'asfwefwergf', '4561', '45', 'sdgfhg', '1021', '45', 'dsghrt', 'kvnkrfv', '8456', '85', 'dvfrfthjgtjk', 'cbgertt', '2012', '75', '2022-03-30 10:11:58', '2022-03-30 10:11:58'),
(18, 21, 'cascs', '1234', '75', 'sdgfhg', '2345', '55', 'nklsjcklwe', 'kvnkrfv', '8456', '78', 'qwcfwergw', 'wedwfw', '4567', '49', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(19, 22, 'cascs', '1234', '75', 'sdgfhg', '2345', '55', 'nklsjcklwe', 'kvnkrfv', '8456', '78', 'qwcfwergw', 'wedwfw', '4567', '49', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(20, 23, 'cascs', '1234', '75', 'sdgfhg', '2345', '55', 'nklsjcklwe', 'kvnkrfv', '8456', '78', 'M.tech', 'wedwfw', '4567', '49', '2022-03-30 11:08:28', '2022-03-31 05:23:28'),
(21, 24, 'Akshay', '2012', '85', 'hscdemo', '1021', '65', 'nklsjcklwe', 'kvnkrfv', '3456', '78', 'dvfrfthjgtjk', 'cbgertt', '2012', '49', '2022-03-30 11:10:22', '2022-03-31 04:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `pref_details`
--

CREATE TABLE `pref_details` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `notice_period` varchar(255) NOT NULL,
  `expected_ctc` varchar(255) NOT NULL,
  `current_ctc` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pref_details`
--

INSERT INTO `pref_details` (`id`, `s_id`, `location`, `notice_period`, `expected_ctc`, `current_ctc`, `department`, `c_date`, `u_date`) VALUES
(1, 24, 'surat,gandhinagar', '2 week', '20000', '15000', 'design', '2022-03-31 06:24:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ref_details`
--

CREATE TABLE `ref_details` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `contact_number1` varchar(255) NOT NULL,
  `relation1` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `contact_number2` varchar(255) NOT NULL,
  `relation2` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_details`
--

INSERT INTO `ref_details` (`id`, `s_id`, `name1`, `contact_number1`, `relation1`, `name2`, `contact_number2`, `relation2`, `c_date`, `u_date`) VALUES
(1, 20, 'Akshay', '1234567890', 'Brother', 'Dikshit', '7894561230', 'Friend', '2022-03-30 10:11:58', '2022-03-30 10:11:58'),
(2, 21, 'D', '1234567890', 'Frnd', 'A', '9876543210', 'qwe', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(3, 22, 'D', '1234567890', 'Frnd', 'A', '9876543210', 'qwe', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(4, 23, 'Dikshit', '1234567890', 'Brother', 'Akshay', '9876543210', 'Friend', '2022-03-31 05:51:43', '2022-03-31 05:51:43'),
(5, 24, 'D', '1234567890', 'Frnd', 'Dikshit', '7894561230', 'qwe', '2022-03-30 11:10:22', '2022-03-30 11:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `skill_details`
--

CREATE TABLE `skill_details` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `hindi` varchar(255) NOT NULL,
  `english` varchar(255) NOT NULL,
  `gujarati` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_details`
--

INSERT INTO `skill_details` (`id`, `s_id`, `hindi`, `english`, `gujarati`, `c_date`, `u_date`) VALUES
(1, 15, 'read,', 'read,write,', 'read,write,speak,', '2022-03-30 09:36:17', '2022-03-30 09:36:17'),
(2, 16, 'speak,', 'write,speak,', 'read,write,speak,', '2022-03-30 09:54:30', '2022-03-30 09:54:30'),
(3, 17, 'speak,', 'write,speak,', 'read,write,speak,', '2022-03-30 09:55:03', '2022-03-30 09:55:03'),
(4, 18, 'speak,', 'write,speak,', 'read,write,speak,', '2022-03-30 09:55:48', '2022-03-30 09:55:48'),
(5, 19, 'speak,', 'write,speak,', 'read,write,speak,', '2022-03-30 09:59:58', '2022-03-30 09:59:58'),
(6, 20, 'read,', 'read,write,', 'speak,', '2022-03-30 10:11:58', '2022-03-30 10:11:58'),
(7, 21, 'read,write,speak,', 'read,write,', 'read,', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(8, 22, 'read,write,speak,', 'read,write,', 'read,', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(9, 23, 'read,write,speak', 'read,write,speak', 'read,write,speak', '2022-03-31 05:22:27', '2022-03-31 05:22:27'),
(10, 24, 'read', 'read', 'read', '2022-03-31 06:24:38', '2022-03-31 06:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `tech_details`
--

CREATE TABLE `tech_details` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `php` varchar(255) NOT NULL,
  `mysql` varchar(255) NOT NULL,
  `laravel` varchar(255) NOT NULL,
  `oracle` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tech_details`
--

INSERT INTO `tech_details` (`id`, `s_id`, `php`, `mysql`, `laravel`, `oracle`, `c_date`, `u_date`) VALUES
(1, 18, 'beginner', 'mideator', 'export', 'beginner', '2022-03-30 09:55:48', '2022-03-30 09:55:48'),
(2, 19, 'beginner', 'mideator', 'export', 'beginner', '2022-03-30 09:59:58', '2022-03-30 09:59:58'),
(3, 20, 'export', 'mideator', 'beginner', 'beginner', '2022-03-30 10:11:58', '2022-03-30 10:11:58'),
(4, 21, 'beginner', 'beginner', 'beginner', 'beginner', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(5, 22, 'beginner', 'beginner', 'beginner', 'beginner', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(6, 23, 'mideator', 'mideator', 'beginner', 'beginner', '2022-03-31 05:22:27', '2022-03-31 05:22:27'),
(7, 24, 'beginner', 'mideator', 'export ', 'beginner', '2022-03-31 06:24:38', '2022-03-31 06:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `work_exp`
--

CREATE TABLE `work_exp` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `companyname1` varchar(255) DEFAULT NULL,
  `work_designation1` varchar(255) DEFAULT NULL,
  `from_date1` varchar(255) DEFAULT NULL,
  `to_date1` varchar(255) DEFAULT NULL,
  `companyname2` varchar(255) DEFAULT NULL,
  `work_designation2` varchar(255) DEFAULT NULL,
  `from_date2` varchar(255) DEFAULT NULL,
  `to_date2` varchar(255) DEFAULT NULL,
  `companyname3` varchar(255) DEFAULT NULL,
  `work_designation3` varchar(255) DEFAULT NULL,
  `from_date3` varchar(255) DEFAULT NULL,
  `to_date3` varchar(255) DEFAULT NULL,
  `c_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_exp`
--

INSERT INTO `work_exp` (`id`, `s_id`, `companyname1`, `work_designation1`, `from_date1`, `to_date1`, `companyname2`, `work_designation2`, `from_date2`, `to_date2`, `companyname3`, `work_designation3`, `from_date3`, `to_date3`, `c_time`, `update_time`) VALUES
(1, 5, 'A', 'DEV1', '21/02/2022', '22/05/2022', 'B', 'DEv2', '23/05/2022', '24/06/2022', '', '', '', '', '2022-03-30 08:39:50', '2022-03-30 08:39:50'),
(2, 6, 'A', 'DEV1', '21/02/2022', '22/05/2022', 'B', 'DEv2', '23/05/2022', '24/06/2022', '', '', '', '', '2022-03-30 08:40:23', '2022-03-30 08:40:23'),
(3, 7, 'A', 'DEV1', '21/02/2022', '22/05/2022', 'B', 'DEv2', '23/05/2022', '24/06/2022', '', '', '', '', '2022-03-30 08:40:42', '2022-03-30 08:40:42'),
(4, 8, 'AB', 'DEV12', '2022-03-23', '2022-03-31', 'BD', 'DEv23', '2022-03-16', '2022-03-18', '', '', '', '', '2022-03-30 09:01:43', '2022-03-30 09:01:43'),
(5, 9, 'AB', 'DEV12', '2022-03-23', '2022-03-31', 'BD', 'DEv23', '2022-03-16', '2022-03-18', '', '', '', '', '2022-03-30 09:02:40', '2022-03-30 09:02:40'),
(6, 10, 'AB', 'DEV12', '2022-03-23', '2022-03-31', 'BD', 'DEv23', '2022-03-16', '2022-03-18', '', '', '', '', '2022-03-30 09:03:11', '2022-03-30 09:03:11'),
(7, 11, 'AB', 'DEV12', '2022-03-23', '2022-03-31', 'BD', 'DEv23', '2022-03-16', '2022-03-18', '', '', '', '', '2022-03-30 09:04:28', '2022-03-30 09:04:28'),
(8, 12, 'AB', 'DEV12', '2022-03-23', '2022-03-31', 'BD', 'DEv23', '2022-03-16', '2022-03-18', '', '', '', '', '2022-03-30 09:07:24', '2022-03-30 09:07:24'),
(9, 13, 'vsssssd', 'vrer', '2022-03-08', '2022-03-10', '', '', '', '', '', '', '', '', '2022-03-30 09:09:29', '2022-03-30 09:09:29'),
(10, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-30 09:33:45', '2022-03-30 09:33:45'),
(11, 14, 'casdc', 'casca', '2022-03-15', '2022-03-17', '', '', '', '', '', '', '', '', '2022-03-30 09:35:27', '2022-03-30 09:35:27'),
(12, 15, 'casdc', 'casca', '2022-03-15', '2022-03-17', '', '', '', '', '', '', '', '', '2022-03-30 09:36:17', '2022-03-30 09:36:17'),
(13, 16, 'sdfgrfh', 'wqefd1w32', '2022-03-23', '2022-03-18', '', '', '', '', '', '', '', '', '2022-03-30 09:54:30', '2022-03-30 09:54:30'),
(14, 17, 'sdfgrfh', 'wqefd1w32', '2022-03-23', '2022-03-18', '', '', '', '', '', '', '', '', '2022-03-30 09:55:03', '2022-03-30 09:55:03'),
(15, 18, 'sdfgrfh', 'wqefd1w32', '2022-03-23', '2022-03-18', '', '', '', '', '', '', '', '', '2022-03-30 09:55:48', '2022-03-30 09:55:48'),
(16, 19, 'sdfgrfh', 'wqefd1w32', '2022-03-23', '2022-03-18', '', '', '', '', '', '', '', '', '2022-03-30 09:59:58', '2022-03-30 09:59:58'),
(17, 20, 'AB', 'DEV12', '2022-03-01', '2022-03-11', 'BD', 'DEv23', '2022-03-10', '2022-03-25', '', '', '', '', '2022-03-30 10:11:58', '2022-03-30 10:11:58'),
(18, 21, 'vsssssd', 'DEV12', '2022-03-10', '2022-03-31', '', '', '', '', '', '', '', '', '2022-03-30 11:06:33', '2022-03-30 11:06:33'),
(19, 22, 'vsssssd', 'DEV12', '2022-03-10', '2022-03-31', '', '', '', '', '', '', '', '', '2022-03-30 11:07:44', '2022-03-30 11:07:44'),
(20, 23, 'eSpark Biz', 'Marketing', '2021-11-11', '2022-01-08', 'InfoStrech', 'Networking', '2022-01-13', '2022-02-18', 'ABCB', 'BCE', '2022-03-09', '2022-03-25', '2022-03-30 11:08:28', '2022-03-31 05:15:48'),
(21, 24, 'vsssssd', 'DEV12', '2022-03-01', '2022-03-10', 'BD', 'DEv23', '2022-03-24', '2022-03-31', '', '', '', '', '2022-03-30 11:10:22', '2022-03-30 11:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edu_details`
--
ALTER TABLE `edu_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pref_details`
--
ALTER TABLE `pref_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_details`
--
ALTER TABLE `ref_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_details`
--
ALTER TABLE `skill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tech_details`
--
ALTER TABLE `tech_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_exp`
--
ALTER TABLE `work_exp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `edu_details`
--
ALTER TABLE `edu_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pref_details`
--
ALTER TABLE `pref_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ref_details`
--
ALTER TABLE `ref_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skill_details`
--
ALTER TABLE `skill_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tech_details`
--
ALTER TABLE `tech_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `work_exp`
--
ALTER TABLE `work_exp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
