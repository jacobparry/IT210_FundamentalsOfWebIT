-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: it210b
-- ------------------------------------------------------
-- Server version	5.5.47-0+deb7u1

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
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `imagePath` varchar(255) DEFAULT NULL,
  `imageApproved` varchar(255) DEFAULT '0',
  `altText` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `numLikes` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `uploaded` int(1) NOT NULL,
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/images/image1.jpg','1','testing1',3,50,'0000-00-00 00:00:00','2016-03-09 17:54:06',1),(2,'/images/image1.jpg','1','testing1',3,18,'2013-08-21 10:22:16','2013-08-26 15:45:55',1),(3,'/images/image2.jpg','0','testing2',1,16,'2013-08-21 10:22:39','2013-08-23 19:03:24',1),(4,'/images/image3.jpg','0','testing3',3,12,'2013-08-21 10:22:50','2013-08-22 19:04:28',1),(5,'/images/image5.jpg','1','testing5',3,13,'2013-08-21 10:24:59','2013-08-22 22:33:05',1),(6,'/images/image6.jpg','1','testing6',4,14,'2013-08-21 10:25:09','2016-04-01 01:38:53',1),(7,'/images/image7.jpg','1','testing7',3,11,'2013-08-21 10:25:16','2016-03-09 17:46:55',1),(8,'/images/image8.jpg','1','testing8',2,20,'2013-08-22 12:49:37','2016-04-01 01:16:27',1),(9,'/images/image9.jpg','1','testing9',3,15,'2013-08-22 13:24:42','2016-03-09 17:35:58',1),(14,'/images/blah49013081321revan.jpg','0','blah',7,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(15,'/images/image20.jpg','1','testing9',3,100,'2013-08-22 13:24:42','2016-03-09 17:35:58',1),(16,'/images/forest52130924792greenwood.jpg','0','forest',7,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(17,'/images/finally465855569xwing.jpg','0','About \'freakin\' time',7,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1),(18,'/images/Hate9204574589sithvsjedi.jpg','0','Anger leads to Hate',7,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `loggedIn` int(11) DEFAULT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'user',0,'user@user.com','12dea96fec20593566ab75692c9949596833adc9',0,'2013-08-21 10:22:16','2013-08-21 10:22:16'),(2,'admin',0,'admin@admin.com','d033e22ae348aeb5660fc2140aec35850c4da997',0,'2013-08-21 10:22:16','2013-08-21 10:22:16'),(3,'jed',0,'test@gmail.com','123456789',1,'2013-08-21 10:22:16','2013-08-21 10:22:16'),(4,'tester',0,'tester@test.com','0987654321',0,'2013-08-21 10:22:16','2013-08-21 10:22:16'),(7,'Jacob',1,'myusername@gmail.com','98765432109876543210987654321',1,'2016-03-04 16:50:05','2016-04-01 15:27:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-08  0:00:01
