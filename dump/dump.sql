CREATE DATABASE  IF NOT EXISTS `chelaton` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `chelaton`;
-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: chelaton
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `orden`
--

DROP TABLE IF EXISTS `orden`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden` (
  `orden_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calle` varchar(45) DEFAULT NULL,
  `numero_exterior` varchar(45) DEFAULT NULL,
  `numero_interior` varchar(45) DEFAULT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  `numero_telefonico` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `delegacion` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `creado_en` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `usuario_direccion_id` int(10) unsigned zerofill DEFAULT NULL,
  `entregar_en` varchar(45) DEFAULT NULL,
  `entrega_inmediata` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orden_id`),
  KEY `fk_orden_usuario_direccion1_idx` (`usuario_direccion_id`),
  CONSTRAINT `fk_orden_usuario_direccion1` FOREIGN KEY (`usuario_direccion_id`) REFERENCES `usuario_direccion` (`usuario_direccion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden`
--

LOCK TABLES `orden` WRITE;
/*!40000 ALTER TABLE `orden` DISABLE KEYS */;
INSERT INTO `orden` VALUES (1,'Juana de Arco','24','6','34100','5558903537','Moderna','Benito Juarez','Ciudad de México','','',NULL,NULL,NULL),(2,'Juana de Arco','24','6','34100','5558903537','Moderna','Benito Juarez','Ciudad de México','2016-02-27 23:45:50','P',NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:35:21','P',NULL,'2016-02-28 00:35:21',NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:35:49','P',NULL,'2016-02-28 00:35:49',NULL),(5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:36:02','P',NULL,'2016-02-28 00:36:02',NULL),(6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:36:03','P',NULL,'2016-02-28 00:36:03',NULL),(7,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:37:33','P',NULL,'2016-02-28 00:37:33',NULL),(8,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:37:37','P',NULL,'2016-02-28 00:37:37',NULL),(9,'Juana de Arco',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:41:25','P',NULL,'2016-02-28 00:41:25',NULL),(10,'Juana de Arco',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-02-28 00:45:54','P',NULL,'2016-02-28 00:45:54',NULL);
/*!40000 ALTER TABLE `orden` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_bitacora`
--

DROP TABLE IF EXISTS `orden_bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_bitacora` (
  `orden_bitacora_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `orden_id` int(10) unsigned DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  `creado_en` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orden_bitacora_id`),
  KEY `fk_orden_bitacora_orden1_idx` (`orden_id`),
  CONSTRAINT `fk_orden_bitacora_orden1` FOREIGN KEY (`orden_id`) REFERENCES `orden` (`orden_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_bitacora`
--

LOCK TABLES `orden_bitacora` WRITE;
/*!40000 ALTER TABLE `orden_bitacora` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_bitacora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orden_detalle`
--

DROP TABLE IF EXISTS `orden_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orden_detalle` (
  `orden_detalle_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cantidad` varchar(45) DEFAULT NULL,
  `subtotal` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `producto_id` int(10) unsigned NOT NULL,
  `orden_id` int(10) unsigned NOT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orden_detalle_id`),
  KEY `fk_orden_detalle_producto1_idx` (`producto_id`),
  KEY `fk_orden_detalle_orden1_idx` (`orden_id`),
  CONSTRAINT `fk_orden_detalle_orden1` FOREIGN KEY (`orden_id`) REFERENCES `orden` (`orden_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orden_detalle_producto1` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orden_detalle`
--

LOCK TABLES `orden_detalle` WRITE;
/*!40000 ALTER TABLE `orden_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `orden_detalle` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` varchar(45) DEFAULT NULL,
  `correo_electronico` varchar(45) DEFAULT NULL,
  `numero_celular` varchar(45) DEFAULT NULL,
  `llave_secreta` varchar(45) DEFAULT NULL,
  `creado_en` varchar(45) DEFAULT NULL,
  `estatus` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_direccion`
--

DROP TABLE IF EXISTS `usuario_direccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_direccion` (
  `usuario_direccion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int(10) unsigned NOT NULL,
  `principal` varchar(45) DEFAULT NULL,
  `creado_en` varchar(45) DEFAULT NULL,
  `ultimo_pedido_en` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario_direccion_id`),
  KEY `fk_usuario_direccion_usuario_idx` (`usuario_id`),
  CONSTRAINT `fk_usuario_direccion_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_direccion`
--

LOCK TABLES `usuario_direccion` WRITE;
/*!40000 ALTER TABLE `usuario_direccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_direccion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-02-28  1:03:01
