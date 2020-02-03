-- MariaDB dump 10.17  Distrib 10.4.11-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: projekcik
-- ------------------------------------------------------
-- Server version	10.4.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jdm`
--

DROP TABLE IF EXISTS `jdm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jdm` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `kraj_prod` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `rok_prod` int(50) NOT NULL,
  `przebieg` int(50) NOT NULL,
  `cena` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jdm`
--

LOCK TABLES `jdm` WRITE;
/*!40000 ALTER TABLE `jdm` DISABLE KEYS */;
INSERT INTO `jdm` VALUES (1,'Toyota','Supra','Japonia',1995,250000,350000),(2,'Mazda','RX-5 Miata','Japonia',2002,152000,150632),(3,'Mazda','RX-7','Japonia',2015,23000,89000),(4,'Mazda ','RX-8','Japonia',2016,56000,75632),(5,'Nissan','GT-R Skyline R34','Japonia',1998,65300,70000),(6,'Nissan','350z','Japonia',2005,56300,75000),(7,'Nissan','370z','Japonia',2007,63000,80800),(8,'Nissan','180SX','Japonia',1998,197000,45000),(9,'Nissan','240SX ','Japonia',1997,187632,68200),(15,'tr','ut','rut',4545,4545,4545);
/*!40000 ALTER TABLE `jdm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klient`
--

DROP TABLE IF EXISTS `klient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klient` (
  `id_klient` int(50) NOT NULL AUTO_INCREMENT,
  `imie` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `numer` int(9) NOT NULL,
  `typ` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_klient`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klient`
--

LOCK TABLES `klient` WRITE;
/*!40000 ALTER TABLE `klient` DISABLE KEYS */;
INSERT INTO `klient` VALUES (1,'Adam','Rymowicz','admin','21232f297a57a5a743894a0e4a801fc3','rymowicz.adam@o2.pl',635656398,1),(5,'Grzesiek','Szuper','pleb','b6444bd6a09de9a106dcedf1c3e67a02','grzesio@pl',693568745,0),(6,'Rafał','Czerniawski','ingty','1679091c5a880faf6fb5e6087eb1b2dc','theingty@yahoo.com',653256356,0);
/*!40000 ALTER TABLE `klient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `limuzyna`
--

DROP TABLE IF EXISTS `limuzyna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `limuzyna` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `kraj_prod` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `rok_prod` int(50) NOT NULL,
  `przebieg` int(50) NOT NULL,
  `cena` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `limuzyna`
--

LOCK TABLES `limuzyna` WRITE;
/*!40000 ALTER TABLE `limuzyna` DISABLE KEYS */;
INSERT INTO `limuzyna` VALUES (1,'Bentley','Continental GT','Wlk.Brytania',2018,12814,1060000),(2,'Rolls-Royce','Phantom','Niemcy',2010,156423,1250000),(3,'Audi','RS7','Niemcy',2015,182302,320000),(4,'Mercedes','Klasa S','Niemcy',2017,120000,563000);
/*!40000 ALTER TABLE `limuzyna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `uzytkownik` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `data` datetime NOT NULL,
  `czynnosc` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,'admin','2020-02-03 10:09:56','zalogowal sie'),(2,'admin','2020-02-03 10:10:07','dodal samochod'),(3,'admin','2020-02-03 10:10:15','usunal samochod'),(4,'admin','2020-02-03 10:13:29','dodal samochod'),(5,'pleb','2020-02-03 10:18:03','zalogowal sie'),(6,'admin','2020-02-03 10:18:46','zalogowal sie'),(7,'ingty','2020-02-03 10:38:20','zarejestrowal sie'),(8,'ingty','2020-02-03 10:38:29','zalogowal sie'),(9,'ingty','2020-02-03 10:40:57','zmienil swoje dane');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sportowe`
--

DROP TABLE IF EXISTS `sportowe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sportowe` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `marka` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `kraj_prod` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `rok_prod` int(100) NOT NULL,
  `przebieg` bigint(100) NOT NULL,
  `cena` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sportowe`
--

LOCK TABLES `sportowe` WRITE;
/*!40000 ALTER TABLE `sportowe` DISABLE KEYS */;
INSERT INTO `sportowe` VALUES (1,'Mclaren','Senna','Wlk.Brytania',2019,250,1500000),(2,'Ferrari ','458 Italia','Włochy',2016,20000,560000),(3,'Bugatti','Chiron','Francja',2017,21,13000000),(4,'Mclaren','P1','Wlk.Brytania',2014,13452,4428728),(5,'Nissan','GT-R','Szwajcaria',2012,68000,260000),(6,'Aston Martin','DB11','Niemcy',2017,19555,395555),(7,'Lamborghini\r\n','Aventador Roadster lp700-4','Włochy',2016,25000,1300000);
/*!40000 ALTER TABLE `sportowe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terenowe`
--

DROP TABLE IF EXISTS `terenowe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terenowe` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `model` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `kraj_prod` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `rok_prod` int(50) NOT NULL,
  `przebieg` int(50) NOT NULL,
  `cena` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terenowe`
--

LOCK TABLES `terenowe` WRITE;
/*!40000 ALTER TABLE `terenowe` DISABLE KEYS */;
INSERT INTO `terenowe` VALUES (1,'Jeep','Wrangler','Niemcy',2017,30000,120000),(2,'Suzuki','Vitara','Francja',2012,93000,56000),(3,'Hummer','H3','USA',2015,130000,250000),(4,'Nissan','Patrol Y61','Włochy',2001,249000,45000);
/*!40000 ALTER TABLE `terenowe` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-03 10:46:10
