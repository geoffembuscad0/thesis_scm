-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2014 at 04:08 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_scm`
--
CREATE DATABASE IF NOT EXISTS `db_scm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_scm`;

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE IF NOT EXISTS `audit_trail` (
  `audit_no` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `action_taken` varchar(75) DEFAULT NULL,
  `datetime_taken` datetime DEFAULT NULL,
  PRIMARY KEY (`audit_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`audit_no`, `username`, `action_taken`, `datetime_taken`) VALUES
(00000000000000000001, 'admin-tms.admin', 'Logged In', '2013-12-12 09:16:38'),
(00000000000000000002, 'admin-tms.admin', 'Logged In', '2013-12-15 13:38:36'),
(00000000000000000003, 'admin-ems.admin', 'Logged In', '2014-01-06 11:47:39'),
(00000000000000000004, 'admin-ems.admin', 'Logged Out', '2014-01-06 11:50:33'),
(00000000000000000005, 'michelle@yahoo.com', 'Logged In', '2014-01-06 12:29:15'),
(00000000000000000006, 'michelle@yahoo.com', 'Logged In', '2014-01-06 13:14:47'),
(00000000000000000007, 'michelle@yahoo.com', 'Logged In', '2014-01-07 02:38:05'),
(00000000000000000008, 'pms-admin.admin', 'Logged In', '2014-01-09 04:10:15'),
(00000000000000000009, 'anne@yahoo.com', 'Logged In', '2014-01-15 07:05:30'),
(00000000000000000010, 'anne@yahoo.com', 'Logged Out', '2014-01-15 07:06:39'),
(00000000000000000011, 'anne@yahoo.com', 'Logged In', '2014-01-15 07:08:43'),
(00000000000000000012, 'anne@yahoo.com', 'Logged Out', '2014-01-15 07:15:52'),
(00000000000000000013, 'admin-ems.admin', 'Logged In', '2014-01-15 07:16:00'),
(00000000000000000014, 'admin-ems.admin', 'Logged In', '2014-01-15 07:18:53'),
(00000000000000000015, 'admin-ems.admin', 'Logged Out', '2014-01-15 07:31:18'),
(00000000000000000016, 'admin-ems.admin', 'Logged In', '2014-01-15 07:33:36'),
(00000000000000000017, 'admin-ems.admin', 'Removed Employee', '2014-01-15 07:45:11'),
(00000000000000000018, 'admin-ems.admin', 'Removed Employee', '2014-01-15 08:06:07'),
(00000000000000000019, 'admin-ems.admin', 'Removed Employee', '2014-01-15 08:06:22'),
(00000000000000000020, 'admin-ems.admin', 'Logged Out', '2014-01-15 08:15:25'),
(00000000000000000021, '', 'Logged Out', '2014-01-19 18:27:36'),
(00000000000000000022, 'admin-ems.admin', 'Logged Out', '2014-01-19 18:32:48'),
(00000000000000000023, '', 'Logged Out', '2014-01-19 21:55:14'),
(00000000000000000024, 'admin-ems.admin', 'Logged In', '2014-01-19 21:55:26'),
(00000000000000000025, 'admin-ems.admin', 'Logged Out', '2014-01-19 22:54:16'),
(00000000000000000026, '', 'Logged Out', '2014-01-19 23:10:07'),
(00000000000000000027, 'anne@yahoo.com', 'Logged In', '2014-01-19 23:24:36'),
(00000000000000000028, 'anne@yahoo.com', 'Logged Out', '2014-01-20 00:28:08'),
(00000000000000000029, 'admin-ems.admin', 'Logged In', '2014-01-20 08:12:18'),
(00000000000000000030, 'admin-ems.admin', 'Logged Out', '2014-01-20 08:23:37'),
(00000000000000000031, 'anne@yahoo.com', 'Logged In', '2014-01-20 08:23:47'),
(00000000000000000032, '', 'Hired Employee', '2014-01-20 09:09:43'),
(00000000000000000033, 'anne@yahoo.com', 'Logged Out', '2014-01-20 09:11:01'),
(00000000000000000034, 'admin-ems.admin', 'Logged In', '2014-01-20 09:11:28'),
(00000000000000000035, 'michelle@yahoo.com', 'Logged In', '2014-01-20 13:10:00'),
(00000000000000000036, 'admin-tms.admin', 'Logged In', '2014-01-20 13:10:25'),
(00000000000000000037, 'michelle@yahoo.com', 'Logged In', '2014-01-20 13:45:20'),
(00000000000000000038, 'admin-tms.admin', 'Logged In', '2014-01-20 13:46:10'),
(00000000000000000039, 'michelle@yahoo.com', 'Logged In', '2014-01-20 14:11:22'),
(00000000000000000040, 'michelle@yahoo.com', 'Logged In', '2014-01-20 15:13:53'),
(00000000000000000041, '', 'Logged Out', '2014-01-20 16:18:53'),
(00000000000000000042, '', 'Logged Out', '2014-01-21 12:59:46'),
(00000000000000000043, '', 'Logged Out', '2014-01-21 20:43:27'),
(00000000000000000044, 'michelle@yahoo.com', 'Logged In', '2014-01-21 20:43:52'),
(00000000000000000045, 'admin-ems.admin', 'Logged In', '2014-01-22 03:03:57'),
(00000000000000000046, '', 'Logged Out', '2014-01-22 04:01:55'),
(00000000000000000047, 'admin-ems.admin', 'Logged In', '2014-01-22 04:02:08'),
(00000000000000000048, 'admin-ems.admin', 'Logged Out', '2014-01-22 08:31:17'),
(00000000000000000049, 'michelle@yahoo.com', 'Logged In', '2014-01-22 08:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `crm_accounts`
--

CREATE TABLE IF NOT EXISTS `crm_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `crm_accounts`
--

INSERT INTO `crm_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(1, 'admin-crm.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Ryan', NULL, 'Derilo', 1),
(2, 'lester@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Lester', NULL, 'Soriano', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ems_accounts`
--

CREATE TABLE IF NOT EXISTS `ems_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origpassword` varchar(75) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ems_accounts`
--

INSERT INTO `ems_accounts` (`account_id`, `username`, `user_password`, `origpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(3, 'admin-ems.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Cristina', '', 'Quiao', 1),
(4, 'anne@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Anne', '', 'Heguira', 2),
(5, 'ronnie_sales@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Ronnie', 'Sanchez', 'Sales', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ems_applicants`
--

CREATE TABLE IF NOT EXISTS `ems_applicants` (
  `applicant_no` bigint(20) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` text,
  `mobile` char(11) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `time_reach` varchar(14) DEFAULT NULL,
  `starting_date` datetime NOT NULL,
  `position` varchar(75) DEFAULT NULL,
  `pending_status` int(11) NOT NULL,
  `resume_filename` text,
  `interview_schedule` datetime DEFAULT NULL,
  PRIMARY KEY (`applicant_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ems_applicants`
--

INSERT INTO `ems_applicants` (`applicant_no`, `firstname`, `middlename`, `lastname`, `address`, `mobile`, `email`, `time_reach`, `starting_date`, `position`, `pending_status`, `resume_filename`, `interview_schedule`) VALUES
(00000000000000000001, 'Miriam', 'Santiago', 'Flores', '6, aurellana st., bagong ilog, pasig city', '09123671827', 'miriamflores@yahoo.com', 'evening', '2013-11-25 00:00:00', 'clerk', 0, 'lp-8186-globe-broadband.doc', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ems_departments`
--

CREATE TABLE IF NOT EXISTS `ems_departments` (
  `dept_no` tinyint(3) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`dept_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ems_departments`
--

INSERT INTO `ems_departments` (`dept_no`, `dept_name`) VALUES
(001, 'Finance'),
(002, 'Marketing'),
(003, 'IT'),
(004, 'Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee`
--

CREATE TABLE IF NOT EXISTS `ems_employee` (
  `employee_id` varchar(75) NOT NULL DEFAULT '',
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `position_no` smallint(5) unsigned zerofill DEFAULT NULL,
  `employee_type` int(11) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `birthdate` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `relation_stat` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee`
--

INSERT INTO `ems_employee` (`employee_id`, `firstname`, `middlename`, `lastname`, `position_no`, `employee_type`, `date_added`, `birthdate`, `date_modified`, `status`, `relation_stat`) VALUES
('0af772', 'Jonnathan', NULL, 'Taylor', 00001, 1, '2014-01-06 05:15:23', '1983-10-17 00:00:00', '2014-01-06 12:15:23', 1, 1),
('0df96f', 'Michael', NULL, 'Amandilio', 00001, 1, '2014-01-06 05:15:23', '1984-11-23 00:00:00', '2014-01-06 12:15:23', 1, 1),
('0fdefa', 'Michael', NULL, 'Soriano', 00001, 1, '2014-01-06 05:15:23', '1991-11-14 00:00:00', '2014-01-06 12:15:23', 1, 1),
('10fcfa', 'Grace', NULL, 'Amoura', 00001, 1, '2014-01-06 05:15:23', '1988-10-25 00:00:00', '2014-01-06 12:15:23', 1, 1),
('114568', 'Paolo', NULL, 'Lucio', 00001, 1, '2014-01-06 05:15:23', '1982-10-10 00:00:00', '2014-01-06 12:15:23', 1, 1),
('11b3c5', 'Paul', NULL, 'Abalos', 00001, 1, '2014-01-06 05:15:23', '1985-12-15 00:00:00', '2014-01-06 12:15:24', 1, 1),
('12f480', 'Christine', NULL, 'Argente', 00001, 1, '2014-01-06 05:15:23', '1990-11-13 00:00:00', '2014-01-06 12:15:23', 1, 1),
('13b076', 'Rose', NULL, 'Castro', 00001, 1, '2014-01-06 05:15:23', '1989-11-24 00:00:00', '2014-01-06 12:15:23', 1, 1),
('1b73d2', 'Jonnathan', NULL, 'Abalos', 00001, 1, '2014-01-06 05:15:23', '1988-12-18 00:00:00', '2014-01-06 12:15:23', 1, 1),
('2a2d54', 'Jude', NULL, 'Asperas', 00001, 1, '2014-01-06 05:15:23', '1987-12-17 00:00:00', '2014-01-06 12:15:24', 1, 1),
('2d2f7c', 'James', NULL, 'Santos', 00001, 1, '2014-01-06 05:15:23', '1991-11-10 00:00:00', '2014-01-06 12:15:24', 1, 1),
('2e4bd9', 'Jonnathan', NULL, 'Amoura', 00001, 1, '2014-01-06 05:15:23', '1992-12-11 00:00:00', '2014-01-06 12:15:24', 1, 1),
('31a18d', 'Jason', NULL, 'Santos', 00001, 1, '2014-01-06 05:15:23', '1989-12-16 00:00:00', '2014-01-06 12:15:24', 1, 1),
('32358d', 'Jason', NULL, 'Abalos', 00001, 1, '2014-01-06 05:15:23', '1982-11-20 00:00:00', '2014-01-06 12:15:23', 1, 1),
('346e19', 'Rose', NULL, 'Taylor', 00001, 1, '2014-01-06 05:15:23', '1986-11-22 00:00:00', '2014-01-06 12:15:23', 1, 1),
('3e8bf4', 'Alvin', NULL, 'Padilla', 00001, 1, '2014-01-06 05:15:23', '1992-12-21 00:00:00', '2014-01-06 12:15:24', 1, 1),
('44cd4c', 'Grace', NULL, 'Taylor', 00001, 1, '2014-01-06 05:15:23', '1989-11-23 00:00:00', '2014-01-06 12:15:24', 1, 1),
('48fa63', 'Lucas', NULL, 'Reyes', 00001, 1, '2014-01-06 05:15:23', '1986-12-13 00:00:00', '2014-01-06 12:15:23', 1, 1),
('4bdb38', 'Sandra', NULL, 'Rincon', 00001, 1, '2014-01-06 05:15:23', '1982-12-16 00:00:00', '2014-01-06 12:15:23', 1, 1),
('4e6318', 'Ronnelyn', NULL, 'Nelito', 00001, 1, '2014-01-06 05:15:23', '1987-10-12 00:00:00', '2014-01-06 12:15:23', 1, 1),
('506b77', 'Max', NULL, 'Argente', 00001, 1, '2014-01-06 05:15:23', '1989-12-12 00:00:00', '2014-01-06 12:15:23', 1, 1),
('57c166', 'Alvin', NULL, 'Padilla', 00001, 1, '2014-01-06 05:15:23', '1980-10-12 00:00:00', '2014-01-06 12:15:23', 1, 1),
('58cd9b', 'Michael', NULL, 'Abalos', 00001, 1, '2014-01-06 05:15:23', '1987-12-11 00:00:00', '2014-01-06 12:15:24', 1, 1),
('595862', 'Alvin', NULL, 'Rodriguez', 00001, 1, '2014-01-06 05:15:23', '1988-11-29 00:00:00', '2014-01-06 12:15:23', 1, 1),
('62f682', 'Corey', NULL, 'Amandilio', 00001, 1, '2014-01-06 05:15:23', '1992-12-23 00:00:00', '2014-01-06 12:15:23', 1, 1),
('67c5e1', 'Corey', NULL, 'Daracen', 00001, 1, '2014-01-06 05:15:23', '1980-11-24 00:00:00', '2014-01-06 12:15:23', 1, 1),
('6ee6a7', 'Max', NULL, 'Duncan', 00001, 1, '2014-01-06 05:15:23', '1985-12-10 00:00:00', '2014-01-06 12:15:24', 1, 1),
('717208', 'Christine', NULL, 'Castro', 00001, 1, '2014-01-06 05:15:23', '1985-10-13 00:00:00', '2014-01-06 12:15:23', 1, 1),
('72473f', 'Jonnathan', NULL, 'Lanuza', 00001, 1, '2014-01-06 05:15:23', '1988-11-18 00:00:00', '2014-01-06 12:15:24', 1, 1),
('7bcbaY', 'Analyn', 'Chua', 'Sanchez', 00002, 1, '2013-12-05 18:11:22', '1989-12-06 00:00:00', '2014-01-06 11:38:02', 1, 1),
('7eeb24', 'Corey', NULL, 'Argente', 00001, 1, '2014-01-06 05:15:23', '1988-11-17 00:00:00', '2014-01-06 12:15:23', 1, 1),
('85d4e8', 'Aris', NULL, 'Padilla', 00001, 1, '2014-01-06 05:15:23', '1987-12-27 00:00:00', '2014-01-06 12:15:23', 1, 1),
('8a6934', 'Paul', NULL, 'Soriano', 00001, 1, '2014-01-06 05:15:23', '1981-10-26 00:00:00', '2014-01-06 12:15:23', 1, 1),
('8cde7d', 'Michael', NULL, 'Lorenzo', 00001, 1, '2014-01-06 05:15:23', '1989-10-18 00:00:00', '2014-01-06 12:15:23', 1, 1),
('8ce003', 'Jude', NULL, 'Lanuza', 00001, 1, '2014-01-06 05:13:15', '1984-12-11 00:00:00', '2014-01-06 12:14:16', 1, 1),
('8ce453', 'Jude', NULL, 'Lanuza', 00004, 1, '2014-01-06 05:13:15', '1984-12-11 00:00:00', '2014-01-06 12:13:32', 1, 1),
('9441ec', 'Renaldo', NULL, 'Padilla', 00001, 1, '2014-01-06 05:15:23', '1982-12-12 00:00:00', '2014-01-06 12:15:23', 1, 1),
('9adaff', 'Alvin', NULL, 'Taylor', 00001, 1, '2014-01-06 05:15:23', '1983-10-29 00:00:00', '2014-01-06 12:15:23', 1, 1),
('a1fcdf', 'Aiden', NULL, 'Castro', 00001, 1, '2014-01-06 05:15:23', '1991-11-20 00:00:00', '2014-01-06 12:15:23', 1, 1),
('acb282', 'Ronnie', NULL, 'Soriano', 00001, 1, '2014-01-06 05:15:23', '1991-10-13 00:00:00', '2014-01-06 12:15:23', 1, 1),
('adfcf3', 'Ronnelyn', NULL, 'Velasco', 00001, 1, '2014-01-06 05:15:23', '1990-10-19 00:00:00', '2014-01-06 12:15:24', 1, 1),
('b04eb6', 'Jude', NULL, 'Duncan', 00001, 1, '2014-01-06 05:15:23', '1988-10-10 00:00:00', '2014-01-06 12:15:23', 1, 1),
('bfe55b', 'Claud', NULL, 'Rincon', 00001, 1, '2014-01-06 05:15:23', '1986-10-19 00:00:00', '2014-01-06 12:15:23', 1, 1),
('c18bb4', 'Moose', NULL, 'Nelito', 00001, 1, '2014-01-06 05:15:23', '1992-12-22 00:00:00', '2014-01-06 12:15:24', 1, 1),
('c25220', 'Paula', NULL, 'Asperas', 00001, 1, '2014-01-06 05:15:23', '1990-11-19 00:00:00', '2014-01-06 12:15:23', 1, 1),
('c943ab', 'James', NULL, 'Santos', 00001, 1, '2014-01-06 05:15:23', '1987-12-20 00:00:00', '2014-01-06 12:15:23', 1, 1),
('d1e2d7', 'Ronnelyn', NULL, 'Lorenzo', 00001, 1, '2014-01-06 05:15:23', '1991-11-13 00:00:00', '2014-01-06 12:15:24', 1, 1),
('d42319', 'Michael', NULL, 'Santos', 00001, 1, '2014-01-06 05:15:23', '1992-12-10 00:00:00', '2014-01-06 12:15:24', 1, 1),
('d59b23', 'Corey', NULL, 'Cruz', 00001, 1, '2014-01-06 05:15:23', '1985-12-29 00:00:00', '2014-01-06 12:15:23', 1, 1),
('e270b1', 'Lucas', NULL, 'Nelito', 00001, 1, '2014-01-06 05:15:23', '1981-12-18 00:00:00', '2014-01-06 12:15:23', 1, 1),
('edc4a8', 'Paul', NULL, 'Lorenzo', 00001, 1, '2014-01-06 05:15:23', '1985-12-12 00:00:00', '2014-01-06 12:15:23', 1, 1),
('f30c31', 'Paul', NULL, 'Rodriguez', 00001, 1, '2014-01-06 05:15:23', '1985-10-29 00:00:00', '2014-01-06 12:15:23', 1, 1),
('fb3f13', 'Paolo', NULL, 'Amandilio', 00001, 1, '2014-01-06 05:15:23', '1989-11-29 00:00:00', '2014-01-06 12:15:23', 1, 1),
('FqgM92', 'Hannah', 'Loreino', 'Ousbourne', 00001, 1, '2014-01-20 09:09:42', '1985-01-08 00:00:00', '2014-01-20 09:09:42', 1, 1),
('W7bjZk', 'Roselyn', 'Cayabyab', 'Reyes', 00001, 1, '2013-11-12 11:26:23', '1989-11-07 00:00:00', '2014-01-06 11:38:02', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_contact`
--

CREATE TABLE IF NOT EXISTS `ems_employee_contact` (
  `employee_id` varchar(75) DEFAULT NULL,
  `mobile` char(11) DEFAULT NULL,
  `telephone` varchar(10) DEFAULT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee_contact`
--

INSERT INTO `ems_employee_contact` (`employee_id`, `mobile`, `telephone`, `email`) VALUES
('W7bjZk', '09203020322', NULL, 'roselynreyes@yahoo.com'),
('7bcbaY', '', NULL, ''),
('57c166', '09797559761', '', 'aris.manzano@yahoo.com'),
('346e19', '09140950676', '', 'corey.duncan@yahoo.com'),
('f30c31', '09112892099', '', 'james.manzano@yahoo.com'),
('8cde7d', '09928250847', '', 'paolo.rincon@yahoo.com'),
('67c5e1', '09567055959', '', 'rose.argente@yahoo.com'),
('9441ec', '09100441920', '', 'grace.amandilio@yahoo.com'),
('595862', '09810568748', '', 'jude.daracen@yahoo.com'),
('717208', '09103300747', '', 'paul.castro@yahoo.com'),
('e270b1', '09791620978', '', 'paula.lanuza@yahoo.com'),
('506b77', '09113122405', '', 'christine.santos@yahoo.com'),
('a1fcdf', '09132094903', '', 'alvin.reyes@yahoo.com'),
('4bdb38', '09127579203', '', 'aiden.amoura@yahoo.com'),
('edc4a8', '09121981951', '', 'jude.asperas@yahoo.com'),
('b04eb6', '09552786288', '', 'moose.duncan@yahoo.com'),
('c943ab', '09683483649', '', 'jonnathan.santos@yahoo.com'),
('acb282', '09660118651', '', 'moose.argente@yahoo.com'),
('7eeb24', '09829097193', '', 'paula.nelito@yahoo.com'),
('1b73d2', '09104764605', '', 'james.castro@yahoo.com'),
('12f480', '09934826827', '', 'renaldo.santos@yahoo.com'),
('32358d', '09983682119', '', 'claud.andaya@yahoo.com'),
('10fcfa', '09118062156', '', 'selena.santos@yahoo.com'),
('85d4e8', '09111740106', '', 'paula.tuazon@yahoo.com'),
('0df96f', '09750400032', '', 'selena.reyes@yahoo.com'),
('d59b23', '09117713921', '', 'aiden.amandilio@yahoo.com'),
('9adaff', '09135855944', '', 'paula.manzano@yahoo.com'),
('bfe55b', '09713959472', '', 'moose.manzano@yahoo.com'),
('4e6318', '09814999835', '', 'alvin.santos@yahoo.com'),
('c25220', '09642811395', '', 'jason.soriano@yahoo.com'),
('8a6934', '09924217754', '', 'selena.taylor@yahoo.com'),
('114568', '09491265199', '', 'jason.manzano@yahoo.com'),
('48fa63', '09958558949', '', 'paolo.cruz@yahoo.com'),
('fb3f13', '09104237667', '', 'claud.abalos@yahoo.com'),
('0fdefa', '09105179127', '', 'lucas.rincon@yahoo.com'),
('0af772', '09121183102', '', 'selena.rincon@yahoo.com'),
('13b076', '09943510284', '', 'michael.padilla@yahoo.com'),
('62f682', '09623815562', '', 'max.lucio@yahoo.com'),
('3e8bf4', '09516877251', '', 'claud.duncan@yahoo.com'),
('c18bb4', '09136203939', '', 'corey.cruz@yahoo.com'),
('adfcf3', '09690089163', '', 'claud.cruz@yahoo.com'),
('2e4bd9', '09587276598', '', 'rose.velasco@yahoo.com'),
('58cd9b', '09101477345', '', 'alvin.duncan@yahoo.com'),
('44cd4c', '09705705718', '', 'james.alvarez@yahoo.com'),
('72473f', '09762577869', '', 'selena.soriano@yahoo.com'),
('d1e2d7', '09103847623', '', 'claud.daracen@yahoo.com'),
('11b3c5', '09522608705', '', 'jason.amandilio@yahoo.com'),
('2a2d54', '09903578058', '', 'christine.cruz@yahoo.com'),
('2d2f7c', '09109808508', '', 'michael.padilla@yahoo.com'),
('31a18d', '09112503740', '', 'max.asperas@yahoo.com'),
('d42319', '09115861494', '', 'grace.reyes@yahoo.com'),
('6ee6a7', '09140849516', '', 'christine.argente@yahoo.com'),
('FqgM92', '09123712783', NULL, 'hannah@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_leave`
--

CREATE TABLE IF NOT EXISTS `ems_employee_leave` (
  `employee_id` varchar(75) NOT NULL DEFAULT '',
  `r_leaves` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee_leave`
--

INSERT INTO `ems_employee_leave` (`employee_id`, `r_leaves`) VALUES
('0af772', 10),
('0df96f', 10),
('0fdefa', 10),
('10fcfa', 10),
('114568', 8),
('11b3c5', 10),
('12f480', 10),
('13b076', 10),
('1b73d2', 10),
('2a2d54', 10),
('2d2f7c', 10),
('2e4bd9', 10),
('31a18d', 10),
('32358d', 10),
('346e19', 10),
('3e8bf4', 10),
('44cd4c', 10),
('48fa63', 10),
('4bdb38', 10),
('4e6318', 10),
('506b77', 10),
('57c166', 10),
('58cd9b', 10),
('595862', 10),
('62f682', 10),
('67c5e1', 10),
('6ee6a7', 10),
('717208', 10),
('72473f', 10),
('7bcbaY', 10),
('7eeb24', 10),
('85d4e8', 10),
('8a6934', 10),
('8cde7d', 10),
('8ce003', 10),
('8ce453', 10),
('9441ec', 10),
('9adaff', 10),
('a1fcdf', 10),
('acb282', 10),
('adfcf3', 10),
('b04eb6', 10),
('bfe55b', 10),
('c18bb4', 10),
('c25220', 10),
('c943ab', 10),
('d1e2d7', 10),
('d42319', 10),
('d59b23', 10),
('e270b1', 10),
('edc4a8', 10),
('f30c31', 10),
('fb3f13', 10),
('W7bjZk', 10);

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_locations`
--

CREATE TABLE IF NOT EXISTS `ems_employee_locations` (
  `employee_id` varchar(75) DEFAULT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ems_employee_locations`
--

INSERT INTO `ems_employee_locations` (`employee_id`, `address`) VALUES
('W7bjZk', '6, aurellana st., bagong ilog, pasig city'),
('7bcbaY', '6, aurellana st., bagong ilog, pasig city'),
('57c166', '6, aurellana st., bagong ilog, pasig city'),
('346e19', '6, aurellana st., bagong ilog, pasig city'),
('f30c31', '6, aurellana st., bagong ilog, pasig city'),
('8cde7d', '6, aurellana st., bagong ilog, pasig city'),
('67c5e1', '6, aurellana st., bagong ilog, pasig city'),
('9441ec', '6, aurellana st., bagong ilog, pasig city'),
('595862', '6, aurellana st., bagong ilog, pasig city'),
('717208', '6, aurellana st., bagong ilog, pasig city'),
('e270b1', '6, aurellana st., bagong ilog, pasig city'),
('506b77', '6, aurellana st., bagong ilog, pasig city'),
('a1fcdf', '6, aurellana st., bagong ilog, pasig city'),
('4bdb38', '6, aurellana st., bagong ilog, pasig city'),
('edc4a8', '6, aurellana st., bagong ilog, pasig city'),
('b04eb6', '6, aurellana st., bagong ilog, pasig city'),
('c943ab', '6, aurellana st., bagong ilog, pasig city'),
('acb282', '6, aurellana st., bagong ilog, pasig city'),
('7eeb24', '6, aurellana st., bagong ilog, pasig city'),
('1b73d2', '6, aurellana st., bagong ilog, pasig city'),
('12f480', '6, aurellana st., bagong ilog, pasig city'),
('32358d', '6, aurellana st., bagong ilog, pasig city'),
('10fcfa', '6, aurellana st., bagong ilog, pasig city'),
('85d4e8', '6, aurellana st., bagong ilog, pasig city'),
('0df96f', '6, aurellana st., bagong ilog, pasig city'),
('d59b23', '6, aurellana st., bagong ilog, pasig city'),
('9adaff', '6, aurellana st., bagong ilog, pasig city'),
('bfe55b', '6, aurellana st., bagong ilog, pasig city'),
('4e6318', '6, aurellana st., bagong ilog, pasig city'),
('c25220', '6, aurellana st., bagong ilog, pasig city'),
('8a6934', '6, aurellana st., bagong ilog, pasig city'),
('114568', '6, aurellana st., bagong ilog, pasig city'),
('48fa63', '6, aurellana st., bagong ilog, pasig city'),
('fb3f13', '6, aurellana st., bagong ilog, pasig city'),
('0fdefa', '6, aurellana st., bagong ilog, pasig city'),
('0af772', '6, aurellana st., bagong ilog, pasig city'),
('13b076', '6, aurellana st., bagong ilog, pasig city'),
('62f682', '6, aurellana st., bagong ilog, pasig city'),
('3e8bf4', '6, aurellana st., bagong ilog, pasig city'),
('c18bb4', '6, aurellana st., bagong ilog, pasig city'),
('adfcf3', '6, aurellana st., bagong ilog, pasig city'),
('2e4bd9', '6, aurellana st., bagong ilog, pasig city'),
('58cd9b', '6, aurellana st., bagong ilog, pasig city'),
('44cd4c', '6, aurellana st., bagong ilog, pasig city'),
('72473f', '6, aurellana st., bagong ilog, pasig city'),
('d1e2d7', '6, aurellana st., bagong ilog, pasig city'),
('11b3c5', '6, aurellana st., bagong ilog, pasig city'),
('2a2d54', '6, aurellana st., bagong ilog, pasig city'),
('2d2f7c', '6, aurellana st., bagong ilog, pasig city'),
('31a18d', '6, aurellana st., bagong ilog, pasig city'),
('d42319', '6, aurellana st., bagong ilog, pasig city'),
('6ee6a7', '6, aurellana st., bagong ilog, pasig city'),
('FqgM92', '6, aurellana st., bagong ilog, pasig city');

-- --------------------------------------------------------

--
-- Table structure for table `ems_employee_type`
--

CREATE TABLE IF NOT EXISTS `ems_employee_type` (
  `employee_type` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(75) DEFAULT NULL,
  `working_hours` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`employee_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ems_employee_type`
--

INSERT INTO `ems_employee_type` (`employee_type`, `type`, `working_hours`) VALUES
(1, 'Fulltime', 8),
(2, 'Part-time', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ems_leaves`
--

CREATE TABLE IF NOT EXISTS `ems_leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` char(6) DEFAULT NULL,
  `leave_type` varchar(20) DEFAULT NULL,
  `date_leave` datetime DEFAULT NULL,
  `no_of_days` int(11) DEFAULT NULL,
  `reason` text,
  `status` smallint(6) DEFAULT NULL,
  `forwarding_address` text,
  `date_requested` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ems_leaves`
--

INSERT INTO `ems_leaves` (`id`, `employee_id`, `leave_type`, `date_leave`, `no_of_days`, `reason`, `status`, `forwarding_address`, `date_requested`) VALUES
(1, '114568', 'medical', '2014-01-19 22:18:12', 4, 'yeah', 1, 'pasig city', '2014-01-19 22:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `ems_positions`
--

CREATE TABLE IF NOT EXISTS `ems_positions` (
  `position_no` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(75) DEFAULT NULL,
  `dept_no` tinyint(3) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`position_no`),
  KEY `dept_no` (`dept_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ems_positions`
--

INSERT INTO `ems_positions` (`position_no`, `pos_name`, `dept_no`) VALUES
(00001, 'Driver', 004),
(00002, 'Delivery Man', 004);

-- --------------------------------------------------------

--
-- Table structure for table `mis_accounts`
--

CREATE TABLE IF NOT EXISTS `mis_accounts` (
  `account_id` int(11) DEFAULT NULL,
  `username` varchar(75) DEFAULT NULL,
  `user_password` char(40) DEFAULT NULL,
  `origuserpassword` varchar(50) DEFAULT NULL,
  `firstname` varchar(75) DEFAULT NULL,
  `middlename` varchar(75) DEFAULT NULL,
  `lastname` varchar(75) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mis_accounts`
--

INSERT INTO `mis_accounts` (`account_id`, `username`, `user_password`, `origuserpassword`, `firstname`, `middlename`, `lastname`, `user_lvl`) VALUES
(NULL, 'superadmin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'password', 'Super', '', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_prefixes`
--

CREATE TABLE IF NOT EXISTS `module_prefixes` (
  `module_prefix` varchar(10) NOT NULL,
  `desccription` varchar(75) NOT NULL,
  PRIMARY KEY (`module_prefix`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pms_accounts`
--

CREATE TABLE IF NOT EXISTS `pms_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pms_accounts`
--

INSERT INTO `pms_accounts` (`account_id`, `username`, `user_password`, `user_lvl`) VALUES
(1, 'pms-admin.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(2, 'michelle@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pms_attendance_monitoring`
--

CREATE TABLE IF NOT EXISTS `pms_attendance_monitoring` (
  `attend_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `emp_no` varchar(75) DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `timeout` datetime DEFAULT NULL,
  PRIMARY KEY (`attend_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pms_attendance_monitoring`
--

INSERT INTO `pms_attendance_monitoring` (`attend_no`, `emp_no`, `time_in`, `timeout`) VALUES
(1, '114568', '2014-01-23 06:00:00', '2014-01-23 16:00:00'),
(2, '114568', '2014-01-24 07:00:00', '2014-01-24 16:00:00'),
(3, '114568', '2013-12-31 07:00:00', '2013-12-31 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_deduction`
--

CREATE TABLE IF NOT EXISTS `pms_deduction` (
  `deduction_no` int(11) NOT NULL AUTO_INCREMENT,
  `from_range` decimal(8,2) DEFAULT NULL,
  `to_range` decimal(8,2) DEFAULT NULL,
  `sss` decimal(8,2) DEFAULT NULL,
  `pagibig` decimal(8,2) DEFAULT NULL,
  `philhealth` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`deduction_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pms_deduction`
--

INSERT INTO `pms_deduction` (`deduction_no`, `from_range`, `to_range`, `sss`, `pagibig`, `philhealth`) VALUES
(1, '4000.00', '8000.00', '80.00', '80.00', '80.00'),
(2, '8000.00', '100000.00', '100.00', '100.00', '100.00'),
(3, '10000.00', '120000.00', '150.00', '150.00', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `pms_logged_employee`
--

CREATE TABLE IF NOT EXISTS `pms_logged_employee` (
  `employee_id` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pms_position_rate`
--

CREATE TABLE IF NOT EXISTS `pms_position_rate` (
  `position_no` smallint(6) NOT NULL AUTO_INCREMENT,
  `rate` float DEFAULT NULL,
  PRIMARY KEY (`position_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pms_position_rate`
--

INSERT INTO `pms_position_rate` (`position_no`, `rate`) VALUES
(1, 500.25),
(2, 250.75);

-- --------------------------------------------------------

--
-- Table structure for table `tms_accounts`
--

CREATE TABLE IF NOT EXISTS `tms_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_lvl` int(11) DEFAULT NULL,
  `origpassword` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `middlename` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tms_accounts`
--

INSERT INTO `tms_accounts` (`account_id`, `username`, `user_password`, `user_lvl`, `origpassword`, `firstname`, `middlename`, `lastname`) VALUES
(1, 'admin-tms.admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, 'password', 'Michelle', NULL, 'Viola'),
(2, 'qiao@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 2, 'password', NULL, NULL, NULL),
(3, 'michelle@yahoo.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 3, 'password', 'Michelle', NULL, 'Viola');

-- --------------------------------------------------------

--
-- Table structure for table `tms_company`
--

CREATE TABLE IF NOT EXISTS `tms_company` (
  `company_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`company_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tms_company`
--

INSERT INTO `tms_company` (`company_no`, `name`) VALUES
(1, 'Sony Inc.'),
(2, 'Samsung'),
(3, 'Toshiba');

-- --------------------------------------------------------

--
-- Table structure for table `tms_delivers`
--

CREATE TABLE IF NOT EXISTS `tms_delivers` (
  `deliver_id` int(11) NOT NULL AUTO_INCREMENT,
  `date_receiving` datetime DEFAULT NULL,
  `date_issued` datetime DEFAULT NULL,
  `details` text,
  `delivery_stat` int(11) DEFAULT NULL,
  `driver_id` varchar(75) DEFAULT NULL,
  `company_no` bigint(20) DEFAULT NULL,
  `market_no` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`deliver_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tms_delivers`
--

INSERT INTO `tms_delivers` (`deliver_id`, `date_receiving`, `date_issued`, `details`, `delivery_stat`, `driver_id`, `company_no`, `market_no`) VALUES
(2, '2014-01-30 17:00:00', '2014-01-22 00:59:28', 'joijmlojio', 1, '0af772', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tms_delivery_status`
--

CREATE TABLE IF NOT EXISTS `tms_delivery_status` (
  `deliver_stat` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`deliver_stat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tms_delivery_status`
--

INSERT INTO `tms_delivery_status` (`deliver_stat`, `label`) VALUES
(1, 'On-Delivery'),
(2, 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `tms_driver_availablity`
--

CREATE TABLE IF NOT EXISTS `tms_driver_availablity` (
  `employee_id` varchar(75) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tms_driver_availablity`
--

INSERT INTO `tms_driver_availablity` (`employee_id`, `availability`) VALUES
('0af772', 1),
('0df96f', 1),
('0fdefa', 1),
('10fcfa', 1),
('114568', 1),
('11b3c5', 1),
('12f480', 1),
('13b076', 1),
('1b73d2', 1),
('2a2d54', 1),
('2d2f7c', 1),
('2e4bd9', 1),
('31a18d', 1),
('32358d', 1),
('346e19', 1),
('3e8bf4', 1),
('44cd4c', 1),
('48fa63', 1),
('4bdb38', 1),
('4e6318', 1),
('506b77', 1),
('57c166', 1),
('58cd9b', 1),
('595862', 1),
('62f682', 1),
('67c5e1', 1),
('6ee6a7', 1),
('717208', 1),
('72473f', 1),
('7bcbaY', 1),
('7eeb24', 1),
('85d4e8', 1),
('8a6934', 1),
('8cde7d', 1),
('8ce003', 1),
('8ce453', 1),
('9441ec', 1),
('9adaff', 1),
('a1fcdf', 1),
('acb282', 1),
('adfcf3', 1),
('b04eb6', 1),
('bfe55b', 1),
('c18bb4', 1),
('c25220', 1),
('c943ab', 1),
('d1e2d7', 1),
('d42319', 1),
('d59b23', 1),
('e270b1', 1),
('edc4a8', 1),
('f30c31', 1),
('fb3f13', 1),
('FqgM92', 1),
('W7bjZk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tms_marketplace`
--

CREATE TABLE IF NOT EXISTS `tms_marketplace` (
  `market_no` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`market_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tms_marketplace`
--

INSERT INTO `tms_marketplace` (`market_no`, `name`, `address`) VALUES
(1, 'Pioneer Centre Supermart', '8006 Pioneer St., Brgy. Kapitolyo, Pasig City, Metro Manila, Pioneer, Pasig'),
(2, 'Puregold Prince Club Inc. (PPCI-SHAW)', '312 Shaw Blvd., Liberty Center, Mandaluyong City');

-- --------------------------------------------------------

--
-- Table structure for table `user_levels`
--

CREATE TABLE IF NOT EXISTS `user_levels` (
  `user_lvl` int(11) NOT NULL AUTO_INCREMENT,
  `level_name` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_lvl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_levels`
--

INSERT INTO `user_levels` (`user_lvl`, `level_name`) VALUES
(1, 'admin'),
(2, 'personnel'),
(3, 'clerk');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ems_positions`
--
ALTER TABLE `ems_positions`
  ADD CONSTRAINT `ems_positions_ibfk_1` FOREIGN KEY (`dept_no`) REFERENCES `ems_departments` (`dept_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
