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
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_jabatan` int(10) unsigned NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('magang','kontrak','tetap') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `karyawan_no_hp_unique` (`no_hp`),
  UNIQUE KEY `karyawan_username_unique` (`username`),
  KEY `karyawan_id_jabatan_foreign` (`id_jabatan`),
  CONSTRAINT `karyawan_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karyawan`
--

LOCK TABLES `karyawan` WRITE;
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` VALUES (8,1,'HANIF','tetap','2021-11-28','0822887722','hanifmarshall','$2y$10$tbFDKA/IbO/QxjTq9lq2zuEVFp8vT88rHiRzViA0.Wa7Yjl3EKjYO','2021-11-28 04:47:05','2021-11-28 06:36:06'),(9,3,'Ilham','kontrak','2021-11-28','0821343434','ilhamhdyt','$2y$10$thIDdNmoKZdN4VFV2Mq0r.mSChQpJxmGJB4yhRfNktaoP359duRWi','2021-11-28 05:38:25','2021-11-28 05:39:25'),(11,5,'Hadfasf','kontrak','2021-11-28','086767676','234232sdfa','$2y$10$i3kj5ri26k52w/i/xZZoluNw9ufLrgIaaijy0eG8SLtDahAY14AxW','2021-11-28 05:40:52','2021-11-28 05:40:52'),(12,3,'admin','tetap','2021-11-28','082288778899','adminbos','$2y$10$BD7upgmlxLWsEDVlFyvFwO8iUVXJHdhc8llXAsZnYVUWPaqQ0BtGS','2021-11-28 15:47:24','2021-11-28 15:47:24');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;
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
