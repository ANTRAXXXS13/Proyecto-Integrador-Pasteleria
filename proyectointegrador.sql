-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: proyectointegrador
-- ------------------------------------------------------
-- Server version	8.0.19

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
-- Table structure for table `categoria_ingre`
--

DROP TABLE IF EXISTS `categoria_ingre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_ingre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_ingre`
--

LOCK TABLES `categoria_ingre` WRITE;
/*!40000 ALTER TABLE `categoria_ingre` DISABLE KEYS */;
INSERT INTO `categoria_ingre` VALUES (1,'MASA','TIPO DE MASA A UTILIZAR '),(2,'RELLENO','SABOR DEL PASTEL'),(3,'BETUN','FRUTAS PARA  EL PASTEL'),(4,'TOPPING','DULCES PARA EL PASTEL');
/*!40000 ALTER TABLE `categoria_ingre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria_prod`
--

DROP TABLE IF EXISTS `categoria_prod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria_prod` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria_prod`
--

LOCK TABLES `categoria_prod` WRITE;
/*!40000 ALTER TABLE `categoria_prod` DISABLE KEYS */;
INSERT INTO `categoria_prod` VALUES (1,'ENFIESTADOS','PASTELES YA PREPARADOS'),(2,'EN DESCUENTO','MERMA O PASTELES PEDIDOS POR ERORR O BROMA'),(3,'PERSONALIZADOS','PASTELES QUE LOS USUARIOS PUEDEN HACER');
/*!40000 ALTER TABLE `categoria_prod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `contartotalpedidos`
--

DROP TABLE IF EXISTS `contartotalpedidos`;
/*!50001 DROP VIEW IF EXISTS `contartotalpedidos`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `contartotalpedidos` AS SELECT 
 1 AS `COUNT(*)`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `contartotalusuario`
--

DROP TABLE IF EXISTS `contartotalusuario`;
/*!50001 DROP VIEW IF EXISTS `contartotalusuario`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `contartotalusuario` AS SELECT 
 1 AS `COUNT(*)`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `forma`
--

DROP TABLE IF EXISTS `forma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forma` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma`
--

LOCK TABLES `forma` WRITE;
/*!40000 ALTER TABLE `forma` DISABLE KEYS */;
INSERT INTO `forma` VALUES (1,'PASTEL REDONDO'),(2,'PASTEL RECTANGULAR');
/*!40000 ALTER TABLE `forma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forma_pago`
--

DROP TABLE IF EXISTS `forma_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `forma_pago` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `forma_pago_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forma_pago`
--

LOCK TABLES `forma_pago` WRITE;
/*!40000 ALTER TABLE `forma_pago` DISABLE KEYS */;
INSERT INTO `forma_pago` VALUES (1,NULL,'TARJETA DE DEBITO',NULL),(2,NULL,'EFECTIVO',NULL);
/*!40000 ALTER TABLE `forma_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categoria_ingre` int DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cod_ingrediente` (`codigo`),
  KEY `id_categoria_ingre` (`id_categoria_ingre`),
  KEY `nom_ingrediente` (`nombre`),
  CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`id_categoria_ingre`) REFERENCES `categoria_ingre` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientes`
--

LOCK TABLES `ingredientes` WRITE;
/*!40000 ALTER TABLE `ingredientes` DISABLE KEYS */;
INSERT INTO `ingredientes` VALUES (1,1,'CHOCOLATE','M1',NULL),(2,1,'VAINILLA','M2',NULL),(3,2,'MERMELADA DE FRESA','R2',NULL),(4,2,'MERMELADA DE DURAZNO','R3',NULL),(5,2,'BETUN DE VAINILLA','R4',NULL),(6,2,'BETUN DE CHOCOLATE','R5',NULL),(7,3,'BETUN DE VAINILLA','B1',NULL),(8,3,'BETUN DE CHOCOLATE','B2',NULL),(9,3,'CREMA BATIDA','B3',NULL),(10,3,'FONDANT','B4',NULL),(11,4,'FRESAS','T1',NULL),(12,4,'DURAZNOS','T2',NULL),(13,4,'CEREZA','T3',NULL),(14,4,'KIWI','T4',NULL),(15,4,'ZARZAMORAS','T5',NULL),(16,4,'FRAMBUESAS','T6',NULL),(17,4,'ESTRELLAS DE FONDANT','T7',NULL);
/*!40000 ALTER TABLE `ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `nombresuc_asc`
--

DROP TABLE IF EXISTS `nombresuc_asc`;
/*!50001 DROP VIEW IF EXISTS `nombresuc_asc`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `nombresuc_asc` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `a_paterno`,
 1 AS `a_materno`,
 1 AS `fecha_nacimiento`,
 1 AS `correo`,
 1 AS `passwd`,
 1 AS `celular`,
 1 AS `calle`,
 1 AS `colonia`,
 1 AS `numeracion_casa`,
 1 AS `codigo_postal`,
 1 AS `status`,
 1 AS `blacklist`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `nombresuc_des`
--

DROP TABLE IF EXISTS `nombresuc_des`;
/*!50001 DROP VIEW IF EXISTS `nombresuc_des`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `nombresuc_des` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `a_paterno`,
 1 AS `a_materno`,
 1 AS `fecha_nacimiento`,
 1 AS `correo`,
 1 AS `passwd`,
 1 AS `celular`,
 1 AS `calle`,
 1 AS `colonia`,
 1 AS `numeracion_casa`,
 1 AS `codigo_postal`,
 1 AS `status`,
 1 AS `blacklist`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `nombreusuario_asc`
--

DROP TABLE IF EXISTS `nombreusuario_asc`;
/*!50001 DROP VIEW IF EXISTS `nombreusuario_asc`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `nombreusuario_asc` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `a_paterno`,
 1 AS `a_materno`,
 1 AS `fecha_nacimiento`,
 1 AS `correo`,
 1 AS `passwd`,
 1 AS `celular`,
 1 AS `calle`,
 1 AS `colonia`,
 1 AS `numeracion_casa`,
 1 AS `codigo_postal`,
 1 AS `status`,
 1 AS `blacklist`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `nombreusuario_des`
--

DROP TABLE IF EXISTS `nombreusuario_des`;
/*!50001 DROP VIEW IF EXISTS `nombreusuario_des`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `nombreusuario_des` AS SELECT 
 1 AS `id`,
 1 AS `nombre`,
 1 AS `a_paterno`,
 1 AS `a_materno`,
 1 AS `fecha_nacimiento`,
 1 AS `correo`,
 1 AS `passwd`,
 1 AS `celular`,
 1 AS `calle`,
 1 AS `colonia`,
 1 AS `numeracion_casa`,
 1 AS `codigo_postal`,
 1 AS `status`,
 1 AS `blacklist`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `folio` varchar(20) DEFAULT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `costo_envio` float DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido`
--

LOCK TABLES `pedido` WRITE;
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_producto`
--

DROP TABLE IF EXISTS `pedido_producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pedido` int DEFAULT NULL,
  `id_producto` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `pedido_producto_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  CONSTRAINT `pedido_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_producto`
--

LOCK TABLES `pedido_producto` WRITE;
/*!40000 ALTER TABLE `pedido_producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_statuspedido`
--

DROP TABLE IF EXISTS `pedido_statuspedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido_statuspedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_pedido` int DEFAULT NULL,
  `id_status_pedido` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pedido` (`id_pedido`),
  KEY `id_status_pedido` (`id_status_pedido`),
  CONSTRAINT `pedido_statuspedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  CONSTRAINT `pedido_statuspedido_ibfk_2` FOREIGN KEY (`id_status_pedido`) REFERENCES `status_pedido` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_statuspedido`
--

LOCK TABLES `pedido_statuspedido` WRITE;
/*!40000 ALTER TABLE `pedido_statuspedido` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_statuspedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pro_ing`
--

DROP TABLE IF EXISTS `pro_ing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pro_ing` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int DEFAULT NULL,
  `id_ingrediente` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_ingrediente` (`id_ingrediente`),
  CONSTRAINT `pro_ing_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  CONSTRAINT `pro_ing_ibfk_2` FOREIGN KEY (`id_ingrediente`) REFERENCES `ingredientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pro_ing`
--

LOCK TABLES `pro_ing` WRITE;
/*!40000 ALTER TABLE `pro_ing` DISABLE KEYS */;
/*!40000 ALTER TABLE `pro_ing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_categoria_prod` int DEFAULT NULL,
  `id_tamaño` int DEFAULT NULL,
  `id_forma` int DEFAULT NULL,
  `status_producto` tinyint(1) DEFAULT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `costo` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria_prod` (`id_categoria_prod`),
  KEY `id_tamaño` (`id_tamaño`),
  KEY `id_forma` (`id_forma`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria_prod`) REFERENCES `categoria_prod` (`id`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_tamaño`) REFERENCES `tamaño` (`id`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_forma`) REFERENCES `forma` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto_sucursal`
--

DROP TABLE IF EXISTS `producto_sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto_sucursal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int DEFAULT NULL,
  `id_sucursal` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_sucursal` (`id_sucursal`),
  CONSTRAINT `producto_sucursal_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  CONSTRAINT `producto_sucursal_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto_sucursal`
--

LOCK TABLES `producto_sucursal` WRITE;
/*!40000 ALTER TABLE `producto_sucursal` DISABLE KEYS */;
/*!40000 ALTER TABLE `producto_sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quejas_aclaraciones`
--

DROP TABLE IF EXISTS `quejas_aclaraciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `quejas_aclaraciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `quejas_aclaraciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quejas_aclaraciones`
--

LOCK TABLES `quejas_aclaraciones` WRITE;
/*!40000 ALTER TABLE `quejas_aclaraciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `quejas_aclaraciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status_pedido`
--

DROP TABLE IF EXISTS `status_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_pedido` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_pedido`
--

LOCK TABLES `status_pedido` WRITE;
/*!40000 ALTER TABLE `status_pedido` DISABLE KEYS */;
INSERT INTO `status_pedido` VALUES (1,'ENTREGADO'),(2,'PEDIDO'),(3,'EN PROCESO DE ENTREGA'),(4,'EN PREPARACION'),(5,'APARTADO');
/*!40000 ALTER TABLE `status_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursal` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `calle` varchar(20) DEFAULT NULL,
  `colonia` varchar(20) DEFAULT NULL,
  `numeracion_casa` char(10) DEFAULT NULL,
  `telefono` char(12) DEFAULT NULL,
  `rfc` char(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `passwd` varchar(40) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `matriz` tinyint(1) DEFAULT NULL,
  `supervisado_por` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_telefonosuc` (`telefono`),
  UNIQUE KEY `idx_correosuc` (`correo`),
  UNIQUE KEY `idx_rfcsuc` (`rfc`),
  KEY `idx_supervisado` (`supervisado_por`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
INSERT INTO `sucursal` VALUES (1,'FASTCAKE','insurgentes','CDP','13246','614258962','AREY1539UDRREY4','fastcake1@lol.com','9bed79caa735cea8b3198afc4c73dfaa03904fca','CHIHUAHUA','CHIHUAHUA','MEXICO',1,1),(2,'FASTCAKE REMASTERIZADO','insurgentes','CDP','13646','614578962','AREY1539UDRTEY4','fastcake@lol.com','9bed79caa735cea8b3198afc4c73dfaa03904fca','CHIHUAHUA','CHIHUAHUA','MEXICO',0,1);
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tamaño`
--

DROP TABLE IF EXISTS `tamaño`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tamaño` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `caracteristicas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tamaño`
--

LOCK TABLES `tamaño` WRITE;
/*!40000 ALTER TABLE `tamaño` DISABLE KEYS */;
INSERT INTO `tamaño` VALUES (1,'15cm DE DIAMETRO','4-6 PORCIONES'),(2,'20cm DE DIAMETRO','8-10 PORCIONES'),(3,'25cm DE DIAMETRO','20-24 PORCIONES'),(4,'18cm x 28cm','12-15 PORCIONES'),(5,'23cm x 33cm','20-24 PORCIONES'),(6,'28cm x 38cm ','35-40 PORCIONES'),(7,'30cm x 46cm','50-55 PORCIONES');
/*!40000 ALTER TABLE `tamaño` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarjeta_debito`
--

DROP TABLE IF EXISTS `tarjeta_debito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarjeta_debito` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `num_tarjeta` char(40) DEFAULT NULL,
  `nombre_titular` varchar(90) DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `codigo_seguridad` char(40) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `tarjeta_debito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarjeta_debito`
--

LOCK TABLES `tarjeta_debito` WRITE;
/*!40000 ALTER TABLE `tarjeta_debito` DISABLE KEYS */;
INSERT INTO `tarjeta_debito` VALUES (1,1,'5121212345789854','FRANCISCO PEREZ DOMINGUEZ','2021-03-03','2a2b47bf21a372f267deccbb420567f3d450b3c0');
/*!40000 ALTER TABLE `tarjeta_debito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `a_paterno` varchar(30) DEFAULT NULL,
  `a_materno` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `passwd` varchar(40) DEFAULT NULL,
  `celular` char(15) DEFAULT NULL,
  `calle` varchar(20) DEFAULT NULL,
  `colonia` varchar(20) DEFAULT NULL,
  `numeracion_casa` char(6) DEFAULT NULL,
  `codigo_postal` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `blacklist` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_correo` (`correo`),
  UNIQUE KEY `idx_celular` (`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'ERICK ARTURO','HERNAANDEZ','AGUILAR','2000-03-13','erick_@gmail.com','9bed79caa735cea8b3198afc4c73dfaa03904fca','6142751531','insurgencia obrera','cdp','6541',35185,1,0);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'proyectointegrador'
--
/*!50003 DROP PROCEDURE IF EXISTS `delete_sucursal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_sucursal`(in _id int)
begin
delete from sucursal where id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `delete_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_usuario`(in _id int)
begin
delete from usuario where id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insert_sucursal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_sucursal`(in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _numeracion_casa char(10), in _telefono char(12), in _rfc char(20), in _correo varchar(50), in _passwd varchar(40), 
_estado varchar(50),  in _municipio varchar(50), in _pais varchar(50), in _matriz  boolean, _supervisado_por INTEGER )
begin
insert into sucursal(nombre, calle, colonia, numeracion_casa, telefono, rfc, correo, passwd, estado, municipio, pais, matriz, supervisado_por)
values(_nombre, _calle, _colonia, _numeracion_casa, _telefono, _rfc, _correo,  sha1(_passwd), _estado, _municipio, _pais, _matriz, _supervisado_por);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insert_tarjeta` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_tarjeta`(in _id_usuario INTEGER, in _num_tarjeta char(16),in _nombre_titular varchar(90), in _fecha_vencimiento date, in _codigo_seguridad char(4))
begin
	insert into tarjeta_debito(id_usuario, num_tarjeta, nombre_titular, fecha_vencimiento, codigo_seguridad)
    values(_id_usuario, _num_tarjeta, _nombre_titular, _fecha_vencimiento, sha1(_codigo_seguridad));
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insert_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_usuario`(in _nombre varchar(30), in _a_paterno varchar(30), in _a_materno varchar(30), in _fecha_nacimiento date, in _correo varchar(50), in _passwd varchar(25), 
	in _celular char(15), in _calle varchar(20), in _colonia varchar(20), in _numeracion_casa CHAR(6), in _codigo_postal INTEGER)
begin
insert into usuario(nombre, a_paterno, a_materno, fecha_nacimiento, correo, passwd, celular, calle, colonia, numeracion_casa, codigo_postal, status, blacklist)
values(_nombre, _a_paterno, _a_materno, _fecha_nacimiento,  _correo, sha1(_passwd), _celular, _calle, _colonia, _numeracion_casa, _codigo_postal, 1, 0);
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `selectsu_for_nombre` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectsu_for_nombre`(p_nombre VARCHAR(30))
begin
select * from sucursal where nombre = p_nombre;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `selectus_for_correo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectus_for_correo`(p_correo VARCHAR(50))
begin
select * from usuario where correo = p_correo;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `selectus_for_nombre` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectus_for_nombre`(p_nombre VARCHAR(30))
begin
select * from usuario where nombre = p_nombre;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `select_for_id` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_for_id`(p_id int)
begin
select * from usuario where id = p_id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `update_sucursal` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_sucursal`(in _nombre varchar(30), in _calle varchar(20), in _colonia varchar(20), in _numeracion_casa char(10), in _telefono char(12), in _rfc char(20), in _correo varchar(50), in _passwd varchar(40), 
_estado varchar(50),  in _municipio varchar(50), in _pais varchar(50), in _matriz  boolean, _supervizado_por integer)
begin
update  sucursal set nombre = _nombre , calle = _calle, colonia = _colonia, num_casa = _num_casa, telefono = _telefono, rfc = _rfc, correo = _correo, passwd = sha1(_passwd), estado = _estado, municio = _municipio, 
pais = _pais, matriz = _matriz, supervizado_por = _supervizado_por
where correo = _correo or id = _id; 
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `update_tarjeta` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_tarjeta`(in _id_usuario INTEGER, in _num_tarjeta char(16),in _nombre_titular varchar(90), in _fecha_vencimiento date, in _codigo_seguridad char(4))
begin
    update tarjeta_debito set num_tarjeta = _num_tarjeta, nombre_titular = _nombre_titular, fecha_vencimiento = _fecha_vencimiento, codigo_seguridad = sha1(_codigo_seguridad)
    where id_usuario = id_usuario;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `update_usuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_usuario`(in _nombre varchar(30), in _a_paterno varchar(30), in _a_materno varchar(30), in _fecha_nacimiento date, in _correo varchar(50), in _passwd varchar(25),
	in _celular char(15), in _calle varchar(20), in _colonia varchar(20), in _numeracion_casa CHAR(6), in _codigo_postal INTEGER)
begin
update usuario set nombre = _nombre, a_paterno = _a_paterno, a_materno = _a_materno, fecha_nacimiento = _fecha_nacimiento, correo = _correo, passwd = sha1(_passwd), celular = _celular ,
	calle = _calle, colonia = _colonia, numeracion_casa = _numeracion_casa, codigo_postal = _codigo_postal
where correo = _correo or id = _id;
end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `contartotalpedidos`
--

/*!50001 DROP VIEW IF EXISTS `contartotalpedidos`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `contartotalpedidos` AS select count(0) AS `COUNT(*)` from `pedido` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `contartotalusuario`
--

/*!50001 DROP VIEW IF EXISTS `contartotalusuario`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `contartotalusuario` AS select count(0) AS `COUNT(*)` from `usuario` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `nombresuc_asc`
--

/*!50001 DROP VIEW IF EXISTS `nombresuc_asc`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `nombresuc_asc` AS select `usuario`.`id` AS `id`,`usuario`.`nombre` AS `nombre`,`usuario`.`a_paterno` AS `a_paterno`,`usuario`.`a_materno` AS `a_materno`,`usuario`.`fecha_nacimiento` AS `fecha_nacimiento`,`usuario`.`correo` AS `correo`,`usuario`.`passwd` AS `passwd`,`usuario`.`celular` AS `celular`,`usuario`.`calle` AS `calle`,`usuario`.`colonia` AS `colonia`,`usuario`.`numeracion_casa` AS `numeracion_casa`,`usuario`.`codigo_postal` AS `codigo_postal`,`usuario`.`status` AS `status`,`usuario`.`blacklist` AS `blacklist` from `usuario` order by `usuario`.`nombre` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `nombresuc_des`
--

/*!50001 DROP VIEW IF EXISTS `nombresuc_des`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `nombresuc_des` AS select `usuario`.`id` AS `id`,`usuario`.`nombre` AS `nombre`,`usuario`.`a_paterno` AS `a_paterno`,`usuario`.`a_materno` AS `a_materno`,`usuario`.`fecha_nacimiento` AS `fecha_nacimiento`,`usuario`.`correo` AS `correo`,`usuario`.`passwd` AS `passwd`,`usuario`.`celular` AS `celular`,`usuario`.`calle` AS `calle`,`usuario`.`colonia` AS `colonia`,`usuario`.`numeracion_casa` AS `numeracion_casa`,`usuario`.`codigo_postal` AS `codigo_postal`,`usuario`.`status` AS `status`,`usuario`.`blacklist` AS `blacklist` from `usuario` order by `usuario`.`nombre` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `nombreusuario_asc`
--

/*!50001 DROP VIEW IF EXISTS `nombreusuario_asc`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `nombreusuario_asc` AS select `usuario`.`id` AS `id`,`usuario`.`nombre` AS `nombre`,`usuario`.`a_paterno` AS `a_paterno`,`usuario`.`a_materno` AS `a_materno`,`usuario`.`fecha_nacimiento` AS `fecha_nacimiento`,`usuario`.`correo` AS `correo`,`usuario`.`passwd` AS `passwd`,`usuario`.`celular` AS `celular`,`usuario`.`calle` AS `calle`,`usuario`.`colonia` AS `colonia`,`usuario`.`numeracion_casa` AS `numeracion_casa`,`usuario`.`codigo_postal` AS `codigo_postal`,`usuario`.`status` AS `status`,`usuario`.`blacklist` AS `blacklist` from `usuario` order by `usuario`.`nombre` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `nombreusuario_des`
--

/*!50001 DROP VIEW IF EXISTS `nombreusuario_des`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `nombreusuario_des` AS select `usuario`.`id` AS `id`,`usuario`.`nombre` AS `nombre`,`usuario`.`a_paterno` AS `a_paterno`,`usuario`.`a_materno` AS `a_materno`,`usuario`.`fecha_nacimiento` AS `fecha_nacimiento`,`usuario`.`correo` AS `correo`,`usuario`.`passwd` AS `passwd`,`usuario`.`celular` AS `celular`,`usuario`.`calle` AS `calle`,`usuario`.`colonia` AS `colonia`,`usuario`.`numeracion_casa` AS `numeracion_casa`,`usuario`.`codigo_postal` AS `codigo_postal`,`usuario`.`status` AS `status`,`usuario`.`blacklist` AS `blacklist` from `usuario` order by `usuario`.`nombre` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-27 18:19:31
