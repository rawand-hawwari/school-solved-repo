-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: schoolSolved
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale` int NOT NULL,
  `addDate` datetime DEFAULT NULL,
  `updateDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'/school-solved-repo/image/pic-6.jpg','Every Client Matters','We focus on ergonomics and meeting you....',16.48,25,NULL,'2021-08-22 05:23:00'),(4,'/school-solved-repo/image/pic-7.jpg','Approdable Packages','We focus on ergonomics and meeting you....',16.48,0,NULL,'2021-08-22 05:25:00'),(5,'/school-solved-repo/image/pic-8.jpg','Watch our Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(6,'/school-solved-repo/image/pic-9.jpg','Our Popular Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(7,'/school-solved-repo/image/pic-10.jpg','Every Client Matters','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(8,'/school-solved-repo/image/pic-11.jpg','Approdable Packages','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(9,'/school-solved-repo/image/pic-12.jpg','Watch our Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(10,'/school-solved-repo/image/pic-13.jpg','Our Popular Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(11,'/school-solved-repo/image/pic-14.jpg','Every Client Matters','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(12,'/school-solved-repo/image/pic-15.jpg','Approdable Packages','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(13,'/school-solved-repo/image/pic-16.jpg','Watch our Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(14,'/school-solved-repo/image/pic-17.jpg','Our Popular Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(15,'/school-solved-repo/image/pic-18.jpg','Every Client Matters','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(16,'/school-solved-repo/image/pic-19.jpg','Approdable Packages','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(17,'/school-solved-repo/image/pic-20.jpg','Watch our CoursesWatch our Courses','We focus on ergonomics and meeting you....',16.48,25,NULL,NULL),(18,'/school-solved-repo/image/pic-21.jpg','Our Popular Courses','We focus on ergonomics and meeting you....',16.48,15,NULL,'2021-08-22 04:01:00'),(20,'/school-solved-repo/image/pic-4.jpg','Every Client Matters','We focus on ergonomics and meeting you....',16.48,0,NULL,NULL),(21,'/school-solved-repo/image/pic-2.jpg','Our Popular Courses','We focus on ergonomics and meeting you....',16.48,0,'2021-08-22 04:19:00',NULL);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribes`
--

DROP TABLE IF EXISTS `subscribes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscribes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `message` varchar(255) NOT NULL,
  `publishDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribes`
--

LOCK TABLES `subscribes` WRITE;
/*!40000 ALTER TABLE `subscribes` DISABLE KEYS */;
INSERT INTO `subscribes` VALUES (1,'sasasasasfddfdf','enail@website.com','(555) 555 3333','lbnlkvfdfdnbblckldkfjldff','0000-00-00 00:00:00'),(2,'sasasasasfddfdf','hahaha@website.com','(555) 555 5555','dsssssssssssssssssssssssssdddddddddddd','0000-00-00 00:00:00'),(3,'hakuna matata','enail@website.com','(555) 555 4444','HAKUNA MATATA what a wonderful phrase','2023-08-22 11:35:00');
/*!40000 ALTER TABLE `subscribes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(225) NOT NULL,
  `lastlogin` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'just_example','example','itis','hahaha@website.com','$2y$10$6t.Sr.RwHycTQdSWnI1jjeSxjHRS5jEp8vhpNIU9944Q8WQaeu9wa','admin','2023-08-22 04:10:00'),(2,'example2','aaaa','bbbb','mail2@website.com','$2y$10$YURvXrQP/Ett6zpQ835KFedX/5VtrC1HLAsOKk1hnbwG659Hx7w7y','editor','0000-00-00 00:00:00'),(8,'John','Doe','Doe','john.doe@example.com','$2y$10$K/LaGr5/ox7gEKsXbX5EsejhnkcuRNIfQfWDnbNiTMLzwXGlCt4Mq','editor','2023-08-22 11:35:00'),(11,'abc','def','ghi','klmnopqrst@example.com','$2y$10$zzXt472FifmPpIvmW4QJfeH5VD8PeCYesE3bTVRAo/Qlb71Bhfgxm','editor','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-25 11:35:20
