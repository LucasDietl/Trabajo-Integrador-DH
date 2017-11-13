-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: theblondie_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `genero` varchar(45) DEFAULT NULL,
  `dia` varchar(45) DEFAULT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `anio` varchar(45) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (NULL,'lucas','lucas','lucas','lucas@lucas.com','$2y$10$VLLgA3kZiOj/DiDqsTRC3eL6mTY.ACAADvma60','0',NULL,NULL,1),(NULL,'sole','p','solep','sole@soel.com','$2y$10$DMQ.BfyaPbI7006FAdTJA.WuoTG7EmYJ7Pkf9o','0',NULL,NULL,2),(NULL,'pedro','pedrin','pepe','pedro@pedro.com','$2y$10$DawRH9wD98qNJvFC5Tf6Geph342TiOKgeJpCyz','0',NULL,NULL,3),('Lucas','Pe','Pule','lupemail','lupepass','lupegenero','1','2','3',4),('manuel','manulito','manu','manu@manu.com','$2y$10$JBtMe4n5Vu1imHTMjmSZJeBoQx0HT0dlIh.MDN','0',NULL,NULL,NULL,5),('flor','flora','florfa','flor@flor.com','$2y$10$7M5oJxuUiZmsw6tzY669jOQc6qbOq6NNCXiGiJ','1',NULL,NULL,NULL,6),('Dario','Sus','dariosus','dario@digitalhouse.com','$2y$10$UPHjlg3XATCQfnM9.fNbVegL/vUm7yS7HDwbP6','0',NULL,NULL,NULL,7),('Dario','Sus2','dariosus2','dario@dario.com','$2y$10$zFFzLpzoAkci3r2Mk3ezfuL4ie09vxAu0c.gfI','0',NULL,NULL,NULL,8),('Dario','Sus2','dariosus2','dario2@dario.com','$2y$10$14aOp1ibHA1p1mZgFAr/nOp1VHCcchv.eamcLk','0',NULL,NULL,NULL,9),('Dario','Sus2','dariosus2','dario3@dario.com','$2y$10$zdsXVTm/p6I0EjV/nM1Z0.j4ILpxzLFLBx47Vi','0',NULL,NULL,NULL,10),('Dario','Sus2','dariosus2','dario4@dario.com','$2y$10$Jry64MXInOmqaSy7VTQWiOY3Pifr/5Ced4RnmX','0',NULL,NULL,NULL,11),('Dario','Sus2','dariosus2','dario4@dario.com2','$2y$10$kThzjjMd7kPFupZr2bTW3OUBTTjjd6ms7RISU3CPIW/JP7267uWre','0',NULL,NULL,NULL,12);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-13 20:36:36
