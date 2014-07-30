-- MySQL dump 10.13  Distrib 5.5.37, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: posts
-- ------------------------------------------------------
-- Server version	5.5.37-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(10) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'em','http://i.imgur.com/ko9pj.jpg');
INSERT INTO `posts` VALUES (2,'dep','http://i.imgur.com/ko9pj.jpg');
INSERT INTO `posts` VALUES (3,'dep','http://imgur.com/yWXmCaY');
INSERT INTO `posts` VALUES (4,'dep','http://www.reddit.com/r/NoFap/comments/1c0jxx/as_a_living_breathing_nonporn_woman_i_cant_thank/');
INSERT INTO `posts` VALUES (5,'rej','http://www.reddit.com/r/NoFap/comments/1c0jxx/as_a_living_breathing_nonporn_woman_i_cant_thank/');
INSERT INTO `posts` VALUES (6,'dep','http://www.reddit.com/r/NoFap/comments/1c0jxx/as_a_living_breathing_nonporn_woman_i_cant_thank/');
INSERT INTO `posts` VALUES (7,'dep','http://i.imgur.com/MNkpVSH.jpg');
INSERT INTO `posts` VALUES (8,'em','http://i.imgur.com/MNkpVSH.jpg');
INSERT INTO `posts` VALUES (9,'rej','http://i.imgur.com/MNkpVSH.jpg');
INSERT INTO `posts` VALUES (10,'rel','http://i.imgur.com/MNkpVSH.jpg');
INSERT INTO `posts` VALUES (11,'dep','http://i.imgur.com/a9lh5qQ.jpg');
INSERT INTO `posts` VALUES (12,'em','http://i.imgur.com/a9lh5qQ.jpg');
INSERT INTO `posts` VALUES (13,'rel','http://i.imgur.com/a9lh5qQ.jpg');
INSERT INTO `posts` VALUES (14,'dep','http://i.imgur.com/5QnxH.jpg');
INSERT INTO `posts` VALUES (15,'em','http://i.imgur.com/5QnxH.jpg');
INSERT INTO `posts` VALUES (16,'rej','http://i.imgur.com/5QnxH.jpg');
INSERT INTO `posts` VALUES (17,'dep','http://www.reddit.com/r/NoFap/comments/xdf5s/i_went_to_my_10year_high_school_reunion_last_night/');
INSERT INTO `posts` VALUES (18,'rej','http://i.imgur.com/MNwkJih.jpg');
INSERT INTO `posts` VALUES (19,'em','http://i.imgur.com/MNwkJih.jpg');
INSERT INTO `posts` VALUES (20,'dep','http://i.imgur.com/MNwkJih.jpg');
INSERT INTO `posts` VALUES (21,'rel','http://i.imgur.com/MNwkJih.jpg');
INSERT INTO `posts` VALUES (22,'rel','http://i.imgur.com/VZGAhtx.png');
INSERT INTO `posts` VALUES (23,'em','http://i.imgur.com/VZGAhtx.png');
INSERT INTO `posts` VALUES (24,'dep','http://www.reddit.com/r/NoFap/comments/17g9bi/want_superpowers_read_this/');
INSERT INTO `posts` VALUES (25,'rel','http://www.reddit.com/r/NoFap/comments/17g9bi/want_superpowers_read_this/');
INSERT INTO `posts` VALUES (26,'rel','http://www.reddit.com/r/NoFap/comments/19bl70/25_reasons_to_do_nofap/');
INSERT INTO `posts` VALUES (27,'em','http://www.reddit.com/r/NoFap/comments/19bl70/25_reasons_to_do_nofap/');
INSERT INTO `posts` VALUES (28,'dep','http://www.reddit.com/r/NoFap/comments/19bl70/25_reasons_to_do_nofap/');
INSERT INTO `posts` VALUES (29,'dep','http://i.imgur.com/rTyVaDo.jpg');
INSERT INTO `posts` VALUES (30,'rej','http://i.imgur.com/rTyVaDo.jpg');
INSERT INTO `posts` VALUES (31,'em','https://scontent-b-gru.xx.fbcdn.net/hphotos-frc3/t1.0-9/10313142_834264333270436_3298810865206189195');
INSERT INTO `posts` VALUES (32,'dep','https://scontent-b-gru.xx.fbcdn.net/hphotos-frc3/t1.0-9/10313142_834264333270436_3298810865206189195');
INSERT INTO `posts` VALUES (33,'em','http://imgur.com/JRHNiSf');
INSERT INTO `posts` VALUES (34,'rel','http://imgur.com/JRHNiSf');
INSERT INTO `posts` VALUES (35,'rej','http://imgur.com/JRHNiSf');
INSERT INTO `posts` VALUES (36,'dep','http://www.reddit.com/r/NoFap/comments/1gempu/day_4_busted_a_fat_one_during_partnered_yoga/');
INSERT INTO `posts` VALUES (37,'rej','http://i.imgur.com/eJLuk1k.jpg');
INSERT INTO `posts` VALUES (38,'em','http://i.imgur.com/eJLuk1k.jpg');
INSERT INTO `posts` VALUES (39,'dep','http://i.imgur.com/eJLuk1k.jpg');
INSERT INTO `posts` VALUES (40,'rel','http://i.imgur.com/eJLuk1k.jpg');
INSERT INTO `posts` VALUES (41,'rel','http://www.reddit.com/r/NoFap/comments/18rmnj/what_fapping_is_comparable_to/');
INSERT INTO `posts` VALUES (42,'em','http://www.reddit.com/r/NoFap/comments/18rmnj/what_fapping_is_comparable_to/');
INSERT INTO `posts` VALUES (43,'em','http://i.imgur.com/oJ0dJSv.gif');
INSERT INTO `posts` VALUES (44,'em','http://imgur.com/a/b6kEF');
INSERT INTO `posts` VALUES (45,'rel','http://imgur.com/a/b6kEF');
INSERT INTO `posts` VALUES (46,'em','http://i.imgur.com/fTGO7dO.png');
INSERT INTO `posts` VALUES (47,'rel','http://i.imgur.com/fTGO7dO.png');
INSERT INTO `posts` VALUES (48,'rej','http://i.imgur.com/fTGO7dO.png');
INSERT INTO `posts` VALUES (49,'rel','http://i.imgur.com/xLA0KOV.jpg');
INSERT INTO `posts` VALUES (50,'em','http://i.imgur.com/CyZlJZ9.jpg');
INSERT INTO `posts` VALUES (51,'em','http://i.imgur.com/5nPGo70.jpg');
INSERT INTO `posts` VALUES (52,'rel','http://i.imgur.com/5nPGo70.jpg');
INSERT INTO `posts` VALUES (53,'em','http://i.imgur.com/ULbfVJY.jpg');
INSERT INTO `posts` VALUES (54,'dep','http://i.imgur.com/ULbfVJY.jpg');
INSERT INTO `posts` VALUES (55,'em','http://i.imgur.com/AKKBlxq.png');
INSERT INTO `posts` VALUES (56,'rel','http://i.imgur.com/AKKBlxq.png');
INSERT INTO `posts` VALUES (57,'em','http://imgur.com/OHOFr');
INSERT INTO `posts` VALUES (58,'dep','http://imgur.com/OHOFr');
INSERT INTO `posts` VALUES (59,'rel','http://imgur.com/OHOFr');
INSERT INTO `posts` VALUES (60,'rej','http://imgur.com/OHOFr');
INSERT INTO `posts` VALUES (61,'dep','http://www.reddit.com/r/NoFap/comments/1yp2sm/90_daysi_finally_found_myself/');
INSERT INTO `posts` VALUES (62,'rej','http://www.reddit.com/r/NoFap/comments/1yp2sm/90_daysi_finally_found_myself/');
INSERT INTO `posts` VALUES (63,'em','http://i.imgur.com/mbbpi.jpg');
INSERT INTO `posts` VALUES (64,'rel','http://i.imgur.com/mbbpi.jpg');
INSERT INTO `posts` VALUES (65,'dep','http://www.reddit.com/r/NoFap/comments/17sfwj/the_guide_to_nofap/');
INSERT INTO `posts` VALUES (66,'em','http://imgur.com/a/ILOVY');
INSERT INTO `posts` VALUES (67,'dep','http://imgur.com/a/ILOVY');
INSERT INTO `posts` VALUES (68,'rej','http://imgur.com/a/ILOVY');
INSERT INTO `posts` VALUES (69,'em','http://i.imgur.com/xfDH27b.png');
INSERT INTO `posts` VALUES (70,'dep','http://i.imgur.com/xfDH27b.png');
INSERT INTO `posts` VALUES (71,'em','http://i.imgur.com/RilxPBq.png');
INSERT INTO `posts` VALUES (72,'rel','http://i.imgur.com/RilxPBq.png');
INSERT INTO `posts` VALUES (73,'rel','http://i.imgur.com/lV172Df.png');
INSERT INTO `posts` VALUES (74,'em','http://i.imgur.com/lV172Df.png');
INSERT INTO `posts` VALUES (75,'em','http://imgur.com/a/mNDXo');
INSERT INTO `posts` VALUES (76,'dep','http://imgur.com/a/mNDXo');
INSERT INTO `posts` VALUES (77,'rel','http://imgur.com/a/mNDXo');
INSERT INTO `posts` VALUES (78,'rej','http://imgur.com/a/mNDXo');
INSERT INTO `posts` VALUES (79,'em','http://www.lolroflmao.com/wp-content/uploads/2011/12/motherfucking-game.png');
INSERT INTO `posts` VALUES (80,'rel','http://www.lolroflmao.com/wp-content/uploads/2011/12/motherfucking-game.png');
INSERT INTO `posts` VALUES (81,'dep','http://www.lolroflmao.com/wp-content/uploads/2011/12/motherfucking-game.png');
INSERT INTO `posts` VALUES (82,'dep','http://www.reddit.com/r/NoFap/comments/1s0d2v/how_nofap_not_changed_but_saved_my_life_100_day/');
INSERT INTO `posts` VALUES (83,'rej','http://imgur.com/r/GetMotivated/zTc0MFR');
INSERT INTO `posts` VALUES (84,'em','http://imgur.com/r/GetMotivated/zTc0MFR');
INSERT INTO `posts` VALUES (85,'rel','http://imgur.com/r/GetMotivated/zTc0MFR');
INSERT INTO `posts` VALUES (86,'rel','http://www.reddit.com/r/NoFap/comments/uyg9r/nofap_really_will_make_you_a_chick_magnet_yes/');
INSERT INTO `posts` VALUES (87,'dep','http://www.reddit.com/r/NoFap/comments/uyg9r/nofap_really_will_make_you_a_chick_magnet_yes/');
INSERT INTO `posts` VALUES (88,'em','http://www.reddit.com/r/NoFap/comments/uyg9r/nofap_really_will_make_you_a_chick_magnet_yes/');
INSERT INTO `posts` VALUES (89,'em','http://i.imgur.com/LBsi0vT.jpg');
INSERT INTO `posts` VALUES (90,'em','https://www.youtube.com/watch?v=mgmVOuLgFB0');
INSERT INTO `posts` VALUES (91,'rel','https://www.youtube.com/watch?v=mgmVOuLgFB0');
INSERT INTO `posts` VALUES (92,'rej','https://www.youtube.com/watch?v=mgmVOuLgFB0');
INSERT INTO `posts` VALUES (93,'dep','https://www.youtube.com/watch?v=mgmVOuLgFB0');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-07-30 15:20:25
