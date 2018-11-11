-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.35-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table admin.branchprofile
DROP TABLE IF EXISTS `branchprofile`;
CREATE TABLE IF NOT EXISTS `branchprofile` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `licensekey` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `logo_img` text NOT NULL,
  `website_name` varchar(50) NOT NULL,
  `branch_phonenumber` varchar(50) NOT NULL,
  `Flag` int(11) NOT NULL,
  PRIMARY KEY (`branch_id`),
  KEY `User_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table admin.branchprofile: ~0 rows (approximately)
DELETE FROM `branchprofile`;
/*!40000 ALTER TABLE `branchprofile` DISABLE KEYS */;
/*!40000 ALTER TABLE `branchprofile` ENABLE KEYS */;

-- Dumping structure for table admin.permission
DROP TABLE IF EXISTS `permission`;
CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FuncationName` varchar(50) NOT NULL,
  `RoutesName` varchar(50) NOT NULL,
  `IconName` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Modifiredate` datetime NOT NULL,
  `Parent_id` int(11) NOT NULL,
  `Flag` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT 'type=1 ,Main menu,Type=2 ,submenu',
  `Option` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table admin.permission: ~4 rows (approximately)
DELETE FROM `permission`;
/*!40000 ALTER TABLE `permission` DISABLE KEYS */;
INSERT INTO `permission` (`id`, `FuncationName`, `RoutesName`, `IconName`, `Description`, `Modifiredate`, `Parent_id`, `Flag`, `type`, `Option`) VALUES
	(1, 'Permission', 'Permission', 'fa fa-lock', 'administrator', '2018-11-03 00:00:00', 0, 1, 1, 0),
	(2, 'User Access right', 'Useraccessright', 'glyphicon glyphicon-plus', 'administrator', '2018-11-03 00:00:00', 1, 1, 2, 0),
	(4, 'Branch Setting', 'Branchsetting', 'fa fa-cog', 'administrator', '2018-11-03 00:00:00', 0, 1, 1, 0),
	(5, 'Branch Profile', 'Branchprofile', 'glyphicon glyphicon-plus', 'administrator', '2018-11-03 00:00:00', 4, 1, 2, 0);
/*!40000 ALTER TABLE `permission` ENABLE KEYS */;

-- Dumping structure for table admin.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL COMMENT 'role=1:administrator',
  `role_type` int(11) NOT NULL COMMENT 'role_type=1:administtrator,IT Department',
  `permission_key` text NOT NULL COMMENT 'array key',
  `subpermission_key` text NOT NULL COMMENT 'sub array key',
  `permission_option` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `Modifireby` varchar(50) NOT NULL,
  `licensekey` varchar(50) NOT NULL,
  `remember_token` text NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table admin.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `role_type`, `permission_key`, `subpermission_key`, `permission_option`, `updated_at`, `created_at`, `Modifireby`, `licensekey`, `remember_token`, `flag`) VALUES
	(1, 'Administrator', 'tuyravey99@gmail.com', '$2y$10$soR1vxqDZ3cL0uXCeVvHau/fXmhp.YRIyU.SQpIUfveNNdjADuHuC', 1, 1, '1,4', '1,2,3', '', '2018-10-30 15:27:09', '2018-10-30 15:27:09', 'tuyravy', '1111', 'x0ctvjPd0KNpLSR55rEc5zXjIh3hcT0LHsFFuNXnvLBuSXkinALj6xYF1i8H', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
