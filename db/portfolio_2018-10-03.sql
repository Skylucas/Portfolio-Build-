# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfolio
# Generation Time: 2018-10-03 10:29:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_content`;

CREATE TABLE `about_content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `about_me_sections` varchar(1000) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_content` WRITE;
/*!40000 ALTER TABLE `about_content` DISABLE KEYS */;

INSERT INTO `about_content` (`id`, `about_me_sections`, `text`)
VALUES
	(1,'about me','My name is Dan and I am a Trainee Full Stack Developer at Mayden academy, my hobbies\n                    consist of playing video games, programming in my spare time and I have done a fair bit of\n                    boxing just to stay healthy but is also fun, as I am sitting down a lot usually on my\n                    computer. I enjoy making projects in a team as I have made my own rpg game as a indie\n                    game developer with a small team which was very enjoyable.');

/*!40000 ALTER TABLE `about_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table portfolio_input
# ------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_input`;

CREATE TABLE `portfolio_input` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_name` varchar(1000) DEFAULT NULL,
  `file_image_name` varchar(1000) DEFAULT NULL,
  `url_location` varchar(1000) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `portfolio_input` WRITE;
/*!40000 ALTER TABLE `portfolio_input` DISABLE KEYS */;

INSERT INTO `portfolio_input` (`id`, `project_name`, `file_image_name`, `url_location`, `deleted`)
VALUES
	(1,'pilot shop','pilot shop','Pilot shop/pilotshop.html',NULL),
	(2,'html + css img','test image','\'Images/testimage.png\'',NULL),
	(3,'Project 3',NULL,NULL,NULL),
	(4,'Project 4',NULL,NULL,NULL),
	(5,'Project 5',NULL,NULL,NULL),
	(6,'Project 6',NULL,NULL,NULL);

/*!40000 ALTER TABLE `portfolio_input` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
