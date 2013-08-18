-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2012 at 07:22 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth_reg`
--

CREATE TABLE IF NOT EXISTS `birth_reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Registerno` varchar(50) NOT NULL,
  `districit` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `a_t_birth` varchar(50) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `dor` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `birth_reg`
--

INSERT INTO `birth_reg` (`id`, `Registerno`, `districit`, `zone`, `name`, `sex`, `dob`, `pob`, `father`, `mother`, `p_address`, `a_t_birth`, `remark`, `dor`) VALUES
(1, '/2012/Jul/', 'COIMBATORE', 'MADUKARAI', 'Vinu', 'MALE', 'CBE', 'V', 'V', 'V', '', 'V', '', '2012-07-04 08:32:26'),
(2, '/2012/Jul/2', 'NAMAKKAL', 'SULUR', 'sf', 'MALE', 'ddfgd', 'hjffj', 'juyfju', 'yityi', '', 'tityi', '', '2012-07-04 08:33:25'),
(3, '/2012/Jul/3', 'NAMAKKAL', 'ANAMALAI', 'Vinu', 'MALE', '19-Jul-2012', 'CBE', 'afads', 'dafasdf', 'dfaasf', '', 'faefa', '2012-07-04 08:38:09'),
(4, 'ALL/2012/Jul/4', 'NAMAKKAL', 'ANAMALAI', 'a', 'MALE', '4-Jul-2012', 'a', 'a', 'a', 'a', 'a', 'aaa', '2012-07-04 08:44:38'),
(5, 'ALL/2012/Jul/5', 'COIMBATORE', 'ANAMALAI', 'Vinu', 'MALE', '', '', '', '', '', '', '', '2012-07-04 11:43:45'),
(6, 'NKL/2012/Jul/6', 'COIMBATORE', 'ANAMALAI', '', 'MALE', '4-Jul-2012', 'CBE', 'a', 'a', 'a', 'aeffe', 'faefa', '2012-07-04 11:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `death_reg`
--

CREATE TABLE IF NOT EXISTS `death_reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Registerno` varchar(50) NOT NULL,
  `districit` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dod` varchar(50) NOT NULL,
  `pod` varchar(50) NOT NULL,
  `father` varchar(50) NOT NULL,
  `mother` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `a_t_birth` varchar(50) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `dor` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `death_reg`
--

INSERT INTO `death_reg` (`id`, `Registerno`, `districit`, `zone`, `name`, `sex`, `dod`, `pod`, `father`, `mother`, `p_address`, `a_t_birth`, `remark`, `dor`) VALUES
(7, 'ALL/2012/Jul/', 'COIMBATORE', 'KARAMADAI', 'Vinoth', 'MALE', '4-Jul-2012', '', 'Sukumar', 'Saroja', 'Namakkal', 'Namakkal', 'Noting', '2012-07-06 04:01:30'),
(8, 'ALL/2012/Jul/8', 'NAMAKKAL', 'ANAMALAI', 'Vinoth', 'MALE', '6-Jul-2012', 'Namakkal', 'Sukumar', 'Saroja', 'Namakkal', 'Namakkal', 'Noting', '2012-07-06 04:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `distr`
--

CREATE TABLE IF NOT EXISTS `distr` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `distric` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `distr`
--

INSERT INTO `distr` (`id`, `distric`) VALUES
(3, 'CHENNAI'),
(2, 'COIMBATORE'),
(15, 'NAMAKKAL'),
(14, 'SALEM');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `zone` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `zone`, `dist`) VALUES
(1, 'ANAMALAI', 'COIMBATORE'),
(2, 'KARAMADAI', 'COIMBATORE'),
(3, 'MADUKARAI', 'COIMBATORE'),
(4, 'POLLACHI(NORTH)', 'COIMBATORE'),
(5, 'SARCARSAMAKULAM', 'COIMBATORE'),
(6, 'SULUR', 'COIMBATORE'),
(7, 'ANNUR', 'COIMBATORE'),
(8, 'KINATHUKADAVU', 'COIMBATORE'),
(9, 'PERIYANAKAPALAYAM', 'COIMBATORE'),
(10, 'POLLACHI(SOUTH)', 'COIMBATORE'),
(11, 'SULTANPET', 'COIMBATORE'),
(12, 'THONDAMUTHUR', 'COIMBATORE'),
(13, 'PRABATH', 'SALEM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `ccode`, `email`, `grade`, `place`) VALUES
(1, 'admin', '7ed8e02e77441dd97e2496386ba3db39', 'Vinoth', 'ALL', 'vinyogaesh@gmail.com', 'ADMIN', 'ALL'),
(4, 'vinu', '298c9f3fc51afb5aae8d9407a3e76027', 'Vino', 'NKL', 'vin@gmail.com', 'USER', 'NAMAKKAL'),
(5, 'kannan', 'd41d8cd98f00b204e9800998ecf8427e', 'Vino', 'CBE', 'vin@gmail.com', 'USER', 'COIMBATORE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
