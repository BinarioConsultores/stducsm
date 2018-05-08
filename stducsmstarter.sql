-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: stducsm
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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_100000_create_password_resets_table',1),(2,'2018_05_01_031034_create_tipousuario_table',1),(3,'2018_05_01_031304_create_area_table',1),(4,'2018_05_01_031409_create_users_table',1),(5,'2018_05_01_031908_create_tipooperacion_table',1),(6,'2018_05_01_032223_create_clasificacion_table',1),(7,'2018_05_01_032401_create_requisito_table',1),(8,'2018_05_01_032751_create_solicitud_table',1),(9,'2018_05_01_033257_create_requisitosolicitud_table',1),(10,'2018_05_01_033719_create_departamento_table',1),(11,'2018_05_01_055103_create_provincia_table',1),(12,'2018_05_01_055341_create_distrito_table',1),(13,'2018_05_01_055736_create_remitente_table',1),(14,'2018_05_01_144937_create_tipodocumento_table',1),(15,'2018_05_01_145132_create_documento_table',1),(16,'2018_05_01_145803_create_tramite_table',1),(17,'2018_05_01_154233_create_tramitedocumento_table',1),(18,'2018_05_01_154650_create_operacion_table',1),(19,'2018_05_01_155402_create_documentooperacion_table',1),(20,'2018_05_08_223713_create_historialoperacion_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_area`
--

DROP TABLE IF EXISTS `t_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_area` (
  `area_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `area_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_abr` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_area`
--

LOCK TABLES `t_area` WRITE;
/*!40000 ALTER TABLE `t_area` DISABLE KEYS */;
INSERT INTO `t_area` VALUES (1,'Area 1','A1',NULL,NULL),(2,'Area 2','A2',NULL,NULL),(3,'Area 3','A3',NULL,NULL);
/*!40000 ALTER TABLE `t_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_clasificacion`
--

DROP TABLE IF EXISTS `t_clasificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_clasificacion` (
  `clas_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clas_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`clas_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_clasificacion`
--

LOCK TABLES `t_clasificacion` WRITE;
/*!40000 ALTER TABLE `t_clasificacion` DISABLE KEYS */;
INSERT INTO `t_clasificacion` VALUES (1,'Prioridad 1',NULL,NULL),(2,'Prioridad 2',NULL,NULL),(3,'Prioridad 3',NULL,NULL);
/*!40000 ALTER TABLE `t_clasificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_departamento`
--

DROP TABLE IF EXISTS `t_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_departamento` (
  `dpto_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dpto_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dpto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_departamento`
--

LOCK TABLES `t_departamento` WRITE;
/*!40000 ALTER TABLE `t_departamento` DISABLE KEYS */;
INSERT INTO `t_departamento` VALUES (1,'Arequipa',NULL,NULL);
/*!40000 ALTER TABLE `t_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_distrito`
--

DROP TABLE IF EXISTS `t_distrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_distrito` (
  `dist_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dist_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prov_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dist_id`),
  KEY `t_distrito_prov_id_foreign` (`prov_id`),
  CONSTRAINT `t_distrito_prov_id_foreign` FOREIGN KEY (`prov_id`) REFERENCES `t_provincia` (`prov_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_distrito`
--

LOCK TABLES `t_distrito` WRITE;
/*!40000 ALTER TABLE `t_distrito` DISABLE KEYS */;
INSERT INTO `t_distrito` VALUES (1,'Miraflores',1,NULL,NULL);
/*!40000 ALTER TABLE `t_distrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_documento`
--

DROP TABLE IF EXISTS `t_documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_documento` (
  `doc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_nrofol` int(11) NOT NULL,
  `doc_nro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_fech` date NOT NULL,
  `tdoc_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`doc_id`),
  KEY `t_documento_tdoc_id_foreign` (`tdoc_id`),
  KEY `t_documento_usu_id_foreign` (`usu_id`),
  CONSTRAINT `t_documento_tdoc_id_foreign` FOREIGN KEY (`tdoc_id`) REFERENCES `t_tipodocumento` (`tdoc_id`),
  CONSTRAINT `t_documento_usu_id_foreign` FOREIGN KEY (`usu_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_documento`
--

LOCK TABLES `t_documento` WRITE;
/*!40000 ALTER TABLE `t_documento` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_documentooperacion`
--

DROP TABLE IF EXISTS `t_documentooperacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_documentooperacion` (
  `docop_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_id` int(10) unsigned NOT NULL,
  `ope_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`docop_id`),
  KEY `t_documentooperacion_doc_id_foreign` (`doc_id`),
  KEY `t_documentooperacion_ope_id_foreign` (`ope_id`),
  CONSTRAINT `t_documentooperacion_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `t_documento` (`doc_id`),
  CONSTRAINT `t_documentooperacion_ope_id_foreign` FOREIGN KEY (`ope_id`) REFERENCES `t_operacion` (`ope_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_documentooperacion`
--

LOCK TABLES `t_documentooperacion` WRITE;
/*!40000 ALTER TABLE `t_documentooperacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_documentooperacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_historialoperacion`
--

DROP TABLE IF EXISTS `t_historialoperacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_historialoperacion` (
  `hop_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hop_est` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hop_fecha` date NOT NULL,
  `ope_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`hop_id`),
  KEY `t_historialoperacion_ope_id_foreign` (`ope_id`),
  CONSTRAINT `t_historialoperacion_ope_id_foreign` FOREIGN KEY (`ope_id`) REFERENCES `t_operacion` (`ope_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_historialoperacion`
--

LOCK TABLES `t_historialoperacion` WRITE;
/*!40000 ALTER TABLE `t_historialoperacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_historialoperacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_operacion`
--

DROP TABLE IF EXISTS `t_operacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_operacion` (
  `ope_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ope_obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ope_fecha` date NOT NULL,
  `ope_est` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuori_id` int(10) unsigned NOT NULL,
  `usudest_id` int(10) unsigned NOT NULL,
  `tram_id` int(10) unsigned NOT NULL,
  `tope_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ope_id`),
  KEY `t_operacion_usuori_id_foreign` (`usuori_id`),
  KEY `t_operacion_usudest_id_foreign` (`usudest_id`),
  KEY `t_operacion_tram_id_foreign` (`tram_id`),
  KEY `t_operacion_tope_id_foreign` (`tope_id`),
  CONSTRAINT `t_operacion_tope_id_foreign` FOREIGN KEY (`tope_id`) REFERENCES `t_tipooperacion` (`tope_id`),
  CONSTRAINT `t_operacion_tram_id_foreign` FOREIGN KEY (`tram_id`) REFERENCES `t_tramite` (`tram_id`),
  CONSTRAINT `t_operacion_usudest_id_foreign` FOREIGN KEY (`usudest_id`) REFERENCES `users` (`id`),
  CONSTRAINT `t_operacion_usuori_id_foreign` FOREIGN KEY (`usuori_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_operacion`
--

LOCK TABLES `t_operacion` WRITE;
/*!40000 ALTER TABLE `t_operacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_operacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_provincia`
--

DROP TABLE IF EXISTS `t_provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_provincia` (
  `prov_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `prov_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpto_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`prov_id`),
  KEY `t_provincia_dpto_id_foreign` (`dpto_id`),
  CONSTRAINT `t_provincia_dpto_id_foreign` FOREIGN KEY (`dpto_id`) REFERENCES `t_departamento` (`dpto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_provincia`
--

LOCK TABLES `t_provincia` WRITE;
/*!40000 ALTER TABLE `t_provincia` DISABLE KEYS */;
INSERT INTO `t_provincia` VALUES (1,'Arequipa',1,NULL,NULL);
/*!40000 ALTER TABLE `t_provincia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_remitente`
--

DROP TABLE IF EXISTS `t_remitente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_remitente` (
  `remi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `remi_rzs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remi_ruc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remi_dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remi_tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remi_cel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remi_dir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dist_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`remi_id`),
  KEY `t_remitente_dist_id_foreign` (`dist_id`),
  CONSTRAINT `t_remitente_dist_id_foreign` FOREIGN KEY (`dist_id`) REFERENCES `t_distrito` (`dist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_remitente`
--

LOCK TABLES `t_remitente` WRITE;
/*!40000 ALTER TABLE `t_remitente` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_remitente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_requisito`
--

DROP TABLE IF EXISTS `t_requisito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_requisito` (
  `req_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `req_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `req_obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_requisito`
--

LOCK TABLES `t_requisito` WRITE;
/*!40000 ALTER TABLE `t_requisito` DISABLE KEYS */;
INSERT INTO `t_requisito` VALUES (1,'Partida de Nacimiento','Partida de Nacimiento Original Expedido por la Municipalidad',NULL,NULL),(2,'Certificado de Estudios','Certificado completo de estudios de todos los años cursados',NULL,NULL);
/*!40000 ALTER TABLE `t_requisito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_requisitosolicitud`
--

DROP TABLE IF EXISTS `t_requisitosolicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_requisitosolicitud` (
  `reqsol_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `req_id` int(10) unsigned NOT NULL,
  `sol_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`reqsol_id`),
  KEY `t_requisitosolicitud_req_id_foreign` (`req_id`),
  KEY `t_requisitosolicitud_sol_id_foreign` (`sol_id`),
  CONSTRAINT `t_requisitosolicitud_req_id_foreign` FOREIGN KEY (`req_id`) REFERENCES `t_requisito` (`req_id`),
  CONSTRAINT `t_requisitosolicitud_sol_id_foreign` FOREIGN KEY (`sol_id`) REFERENCES `t_solicitud` (`sol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_requisitosolicitud`
--

LOCK TABLES `t_requisitosolicitud` WRITE;
/*!40000 ALTER TABLE `t_requisitosolicitud` DISABLE KEYS */;
INSERT INTO `t_requisitosolicitud` VALUES (1,1,1,NULL,NULL),(2,2,1,NULL,NULL);
/*!40000 ALTER TABLE `t_requisitosolicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_solicitud`
--

DROP TABLE IF EXISTS `t_solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_solicitud` (
  `sol_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sol_tit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sol_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sol_tupa` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_solicitud`
--

LOCK TABLES `t_solicitud` WRITE;
/*!40000 ALTER TABLE `t_solicitud` DISABLE KEYS */;
INSERT INTO `t_solicitud` VALUES (1,'Convalidación de Cursos','Proceso de Convalidación de Cursos',0,NULL,NULL);
/*!40000 ALTER TABLE `t_solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipodocumento`
--

DROP TABLE IF EXISTS `t_tipodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipodocumento` (
  `tdoc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tdoc_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tdoc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipodocumento`
--

LOCK TABLES `t_tipodocumento` WRITE;
/*!40000 ALTER TABLE `t_tipodocumento` DISABLE KEYS */;
INSERT INTO `t_tipodocumento` VALUES (1,'Adjunto',NULL,NULL),(2,'Original',NULL,NULL);
/*!40000 ALTER TABLE `t_tipodocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipooperacion`
--

DROP TABLE IF EXISTS `t_tipooperacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipooperacion` (
  `tope_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tope_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tope_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipooperacion`
--

LOCK TABLES `t_tipooperacion` WRITE;
/*!40000 ALTER TABLE `t_tipooperacion` DISABLE KEYS */;
INSERT INTO `t_tipooperacion` VALUES (1,'Derivar',NULL,NULL),(2,'Recibir',NULL,NULL),(3,'Archivar',NULL,NULL),(4,'Devolver',NULL,NULL);
/*!40000 ALTER TABLE `t_tipooperacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipousuario`
--

DROP TABLE IF EXISTS `t_tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tipousuario` (
  `tusu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tusu_desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tusu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipousuario`
--

LOCK TABLES `t_tipousuario` WRITE;
/*!40000 ALTER TABLE `t_tipousuario` DISABLE KEYS */;
INSERT INTO `t_tipousuario` VALUES (1,'MP',NULL,NULL),(2,'UC',NULL,NULL),(3,'JA',NULL,NULL);
/*!40000 ALTER TABLE `t_tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tramite`
--

DROP TABLE IF EXISTS `t_tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tramite` (
  `tram_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tram_fech` date NOT NULL,
  `tram_asun` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tram_obs` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tram_est` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tram_tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sol_id` int(10) unsigned NOT NULL,
  `usu_id` int(10) unsigned NOT NULL,
  `remi_id` int(10) unsigned NOT NULL,
  `clas_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tram_id`),
  KEY `t_tramite_sol_id_foreign` (`sol_id`),
  KEY `t_tramite_usu_id_foreign` (`usu_id`),
  KEY `t_tramite_remi_id_foreign` (`remi_id`),
  KEY `t_tramite_clas_id_foreign` (`clas_id`),
  CONSTRAINT `t_tramite_clas_id_foreign` FOREIGN KEY (`clas_id`) REFERENCES `t_clasificacion` (`clas_id`),
  CONSTRAINT `t_tramite_remi_id_foreign` FOREIGN KEY (`remi_id`) REFERENCES `t_remitente` (`remi_id`),
  CONSTRAINT `t_tramite_sol_id_foreign` FOREIGN KEY (`sol_id`) REFERENCES `t_solicitud` (`sol_id`),
  CONSTRAINT `t_tramite_usu_id_foreign` FOREIGN KEY (`usu_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tramite`
--

LOCK TABLES `t_tramite` WRITE;
/*!40000 ALTER TABLE `t_tramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tramitedocumento`
--

DROP TABLE IF EXISTS `t_tramitedocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tramitedocumento` (
  `tradoc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_id` int(10) unsigned NOT NULL,
  `tram_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tradoc_id`),
  KEY `t_tramitedocumento_doc_id_foreign` (`doc_id`),
  KEY `t_tramitedocumento_tram_id_foreign` (`tram_id`),
  CONSTRAINT `t_tramitedocumento_doc_id_foreign` FOREIGN KEY (`doc_id`) REFERENCES `t_documento` (`doc_id`),
  CONSTRAINT `t_tramitedocumento_tram_id_foreign` FOREIGN KEY (`tram_id`) REFERENCES `t_tramite` (`tram_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tramitedocumento`
--

LOCK TABLES `t_tramitedocumento` WRITE;
/*!40000 ALTER TABLE `t_tramitedocumento` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_tramitedocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  `tusu_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_area_id_foreign` (`area_id`),
  KEY `users_tusu_id_foreign` (`tusu_id`),
  CONSTRAINT `users_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `t_area` (`area_id`),
  CONSTRAINT `users_tusu_id_foreign` FOREIGN KEY (`tusu_id`) REFERENCES `t_tipousuario` (`tusu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Jorge Luis','jgarnica@gmail.com','$2y$10$1ujJexuwkJJQvI2dimDj1u8JOpddZ3lBTa6o9YYs6qKSkFgnBaGrC','1','47040062',1,1,'qr0ZHW6YZdQ3p2ptO4XbXmPlnzIktctLKfxXOcdoygj2l7EFo0ygfEl2dtHw','2018-05-03 18:52:29','2018-05-03 18:52:29');
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

-- Dump completed on 2018-05-08 17:45:02
