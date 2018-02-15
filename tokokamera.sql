-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.18 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for toko
CREATE DATABASE IF NOT EXISTS `toko` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `toko`;

-- Dumping structure for table toko.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table toko.groups: ~2 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT IGNORE INTO `groups` (`id`, `name`) VALUES
	(1, 'Admin'),
	(2, 'Member');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping structure for table toko.invoices
CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `status` enum('paid','unpaid','canceled','expired') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table toko.invoices: ~0 rows (approximately)
/*!40000 ALTER TABLE `invoices` DISABLE KEYS */;
INSERT IGNORE INTO `invoices` (`id`, `date`, `due_date`, `status`) VALUES
	(1, '2018-01-09 22:50:56', '2018-01-10 22:50:56', 'unpaid');
/*!40000 ALTER TABLE `invoices` ENABLE KEYS */;

-- Dumping structure for table toko.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table toko.orders: ~2 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT IGNORE INTO `orders` (`id`, `invoice_id`, `product_id`, `product_name`, `qty`, `price`, `options`) VALUES
	(1, 1, 7, 'Fujifilm X-T20 kit ', 1, 2200000, NULL),
	(2, 1, 6, 'Sony alpha A5000', 1, 1200000, NULL);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table toko.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(9) NOT NULL,
  `stock` int(3) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table toko.products: ~5 rows (approximately)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT IGNORE INTO `products` (`id`, `name`, `description`, `price`, `stock`, `image`) VALUES
	(6, 'Sony alpha A5000', 'Sony Alpha A5000 merupakan kamera mirrorless yang memiliki efektifitas piksel sebesar 20.1 MP dengan tipe sensor CMOS dan didukung prosesor BIONZ X. ', 1200000, 20, '1.jpg'),
	(7, 'Fujifilm X-T20 kit ', ' merupakan kamera mirrorless yang memiliki sensor 24 MP X-Trans APS-C CMOS dengan peningkatan prosesor gambar.', 2200000, 60, '2.jpg'),
	(8, ' Nikon 1 J5 Kit 10-30mm - Black', '- Tas\r\n- Sandisk Ultra MicroSDHC 16GB 48MB/s Class 10\r\n- LCD Screen Protector', 2300000, 20, '3.jpg'),
	(9, ' SONY ALPHA ILCE-A5000', '20.1 mp\r\nfull hd movie 1920x1080\r\nwifi / nfc\r\nAPS-C Sensor\r\nbuilt in flash\r\nISO 100-25600\r\nProcessor BIONZ X\r\nLCD Tiltable up to 180 derajat\r\n', 2100000, 5, '4.jpg'),
	(10, 'SONY ALPHA A6000 Kit 16-50-Camera', 'SONY ALPHA A6000 Kit 16-50-Camera \r\n', 1450000, 40, '5.jpg'),
	(11, 'FUJIFILM X-A10 KIT 16-50mm', '. 100%BARU DAN TERSEGEL\r\n. BRAND NEW IN BOX (BNIB)\r\n. ORIGINAL\r\n. FULL SET', 21000000, 50, '8.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table toko.toko_sessions
CREATE TABLE IF NOT EXISTS `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table toko.toko_sessions: ~2 rows (approximately)
/*!40000 ALTER TABLE `toko_sessions` DISABLE KEYS */;
INSERT IGNORE INTO `toko_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
	('766cd9dd639d9f1f73b7cfe0107afb17', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', 1515548155, 'a:3:{s:9:"user_data";s:0:"";s:8:"username";s:6:"client";s:5:"group";s:1:"2";}'),
	('8c5dc92a66b9e4a89d19bf161eb1477d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:57.0) Gecko/20100101 Firefox/57.0', 1515548304, '');
/*!40000 ALTER TABLE `toko_sessions` ENABLE KEYS */;

-- Dumping structure for table toko.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `group` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table toko.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `username`, `password`, `group`) VALUES
	(1, 'admin', 'admin', 1),
	(2, 'client', '123', 2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
