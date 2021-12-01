-- MySQL dump 10.13  Distrib 8.0.24, for macos11 (x86_64)
--
-- Host: localhost    Database: salary
-- ------------------------------------------------------
-- Server version	5.7.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `penggajian`
--

DROP TABLE IF EXISTS `penggajian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penggajian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(10) unsigned NOT NULL,
  `id_tunjangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_gajian` date NOT NULL,
  `bulan_gajian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_gajian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_tunjangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penggajian`
--

LOCK TABLES `penggajian` WRITE;
/*!40000 ALTER TABLE `penggajian` DISABLE KEYS */;
INSERT INTO `penggajian` VALUES (1,8,'23','2021-11-28','Maret','2020','100000','230000','20000','2021-11-28 06:53:55','2021-11-28 06:53:55'),(2,8,'23','2021-11-28','Maret','2020','200000','400000','5000000','2021-11-28 06:55:03','2021-11-28 06:55:03'),(3,9,'23','2021-11-28','Maret','2020','200000','200000','200000','2021-11-28 07:04:55','2021-11-28 07:04:55'),(4,8,'\"23\"','2021-11-28','Februari','2021','2000','7068000','3570000','2021-11-28 13:19:43','2021-11-28 13:19:43'),(5,8,'\"23\"','2021-11-28','Februari','2021','20000','7050000','3570000','2021-11-28 13:21:09','2021-11-28 13:21:09'),(6,8,'\"23,27\"','2021-12-01','Februari','2023','30000','7240000','3770000','2021-12-01 14:43:20','2021-12-01 14:43:20'),(7,9,'\"23,27\"','2021-12-01','Juni','2022','4000000','1770000','3770000','2021-12-01 14:45:44','2021-12-01 14:45:44');
/*!40000 ALTER TABLE `penggajian` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-01 21:57:58
