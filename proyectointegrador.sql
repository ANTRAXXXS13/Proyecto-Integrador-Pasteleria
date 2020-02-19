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
-- Table structure for table `black_list`
--

DROP TABLE IF EXISTS `black_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `black_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `black_list`
--

LOCK TABLES `black_list` WRITE;
/*!40000 ALTER TABLE `black_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `black_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `cat_descri` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tipo_cliente` int DEFAULT NULL,
  `id_status_cliente` int DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `a_paterno` varchar(30) DEFAULT NULL,
  `a_materno` varchar(30) DEFAULT NULL,
  `dia_nac` int DEFAULT NULL,
  `mes_nac` int DEFAULT NULL,
  `año_nac` int DEFAULT NULL,
  `rfc` char(13) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `passwd` varchar(25) DEFAULT NULL,
  `celular` char(15) DEFAULT NULL,
  `calle` varchar(20) DEFAULT NULL,
  `colonia` varchar(20) DEFAULT NULL,
  `num_casa` char(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_cliente` (`id_tipo_cliente`),
  KEY `id_status_cliente` (`id_status_cliente`),
  CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_tipo_cliente`) REFERENCES `tipo_cliente` (`id`),
  CONSTRAINT `cliente_ibfk_2` FOREIGN KEY (`id_status_cliente`) REFERENCES `status_cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresa`
--

DROP TABLE IF EXISTS `empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empresa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sucursal` int DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sucursal` (`id_sucursal`),
  CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresa`
--

LOCK TABLES `empresa` WRITE;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fac_maestra_fac_det`
--

DROP TABLE IF EXISTS `fac_maestra_fac_det`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fac_maestra_fac_det` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_fac_maestra` int DEFAULT NULL,
  `id_fac_detalle` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_fac_maestra` (`id_fac_maestra`),
  KEY `id_fac_detalle` (`id_fac_detalle`),
  CONSTRAINT `fac_maestra_fac_det_ibfk_1` FOREIGN KEY (`id_fac_maestra`) REFERENCES `factura_maestra` (`id`),
  CONSTRAINT `fac_maestra_fac_det_ibfk_2` FOREIGN KEY (`id_fac_detalle`) REFERENCES `factura_detalle` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fac_maestra_fac_det`
--

LOCK TABLES `fac_maestra_fac_det` WRITE;
/*!40000 ALTER TABLE `fac_maestra_fac_det` DISABLE KEYS */;
/*!40000 ALTER TABLE `fac_maestra_fac_det` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura_detalle`
--

DROP TABLE IF EXISTS `factura_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `factura_detalle` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int DEFAULT NULL,
  `cantidad` int DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `importe` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  CONSTRAINT `factura_detalle_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura_detalle`
--

LOCK TABLES `factura_detalle` WRITE;
/*!40000 ALTER TABLE `factura_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura_maestra`
--

DROP TABLE IF EXISTS `factura_maestra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `factura_maestra` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `folio` varchar(20) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `iva` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `factura_maestra_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura_maestra`
--

LOCK TABLES `factura_maestra` WRITE;
/*!40000 ALTER TABLE `factura_maestra` DISABLE KEYS */;
/*!40000 ALTER TABLE `factura_maestra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredientes`
--

LOCK TABLES `ingredientes` WRITE;
/*!40000 ALTER TABLE `ingredientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `ingredientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kardex_almacen`
--

DROP TABLE IF EXISTS `kardex_almacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kardex_almacen` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_tipo_movimiento` int DEFAULT NULL,
  `id_producto` int DEFAULT NULL,
  `id_personalizado` int DEFAULT NULL,
  `id_empresa` int DEFAULT NULL,
  `fecha_movimiento` datetime DEFAULT NULL,
  `referencia` varchar(20) DEFAULT NULL,
  `entrada` int DEFAULT NULL,
  `salida` int DEFAULT NULL,
  `costo` float DEFAULT NULL,
  `debe` float DEFAULT NULL,
  `haber` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_movimiento` (`id_tipo_movimiento`),
  KEY `id_producto` (`id_producto`),
  KEY `id_personalizado` (`id_personalizado`),
  KEY `id_empresa` (`id_empresa`),
  CONSTRAINT `kardex_almacen_ibfk_1` FOREIGN KEY (`id_tipo_movimiento`) REFERENCES `tipo_movimiento` (`id`),
  CONSTRAINT `kardex_almacen_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`),
  CONSTRAINT `kardex_almacen_ibfk_3` FOREIGN KEY (`id_personalizado`) REFERENCES `personalizado` (`id`),
  CONSTRAINT `kardex_almacen_ibfk_4` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kardex_almacen`
--

LOCK TABLES `kardex_almacen` WRITE;
/*!40000 ALTER TABLE `kardex_almacen` DISABLE KEYS */;
/*!40000 ALTER TABLE `kardex_almacen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kardex_ingrediente`
--

DROP TABLE IF EXISTS `kardex_ingrediente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kardex_ingrediente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_kardex` int DEFAULT NULL,
  `id_ingredientes` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kardex` (`id_kardex`),
  KEY `id_ingredientes` (`id_ingredientes`),
  CONSTRAINT `kardex_ingrediente_ibfk_1` FOREIGN KEY (`id_kardex`) REFERENCES `kardex_almacen` (`id`),
  CONSTRAINT `kardex_ingrediente_ibfk_2` FOREIGN KEY (`id_ingredientes`) REFERENCES `ingredientes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kardex_ingrediente`
--

LOCK TABLES `kardex_ingrediente` WRITE;
/*!40000 ALTER TABLE `kardex_ingrediente` DISABLE KEYS */;
/*!40000 ALTER TABLE `kardex_ingrediente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ped_status`
--

DROP TABLE IF EXISTS `ped_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ped_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ped_status`
--

LOCK TABLES `ped_status` WRITE;
/*!40000 ALTER TABLE `ped_status` DISABLE KEYS */;
/*!40000 ALTER TABLE `ped_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedido_futuro`
--

DROP TABLE IF EXISTS `pedido_futuro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedido_futuro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_status` int DEFAULT NULL,
  `id_kardex` int DEFAULT NULL,
  `id_empre` int DEFAULT NULL,
  `id_tipo_alerta` int DEFAULT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_status` (`id_status`),
  KEY `id_kardex` (`id_kardex`),
  KEY `id_empre` (`id_empre`),
  KEY `id_tipo_alerta` (`id_tipo_alerta`),
  CONSTRAINT `pedido_futuro_ibfk_1` FOREIGN KEY (`id_status`) REFERENCES `ped_status` (`id`),
  CONSTRAINT `pedido_futuro_ibfk_2` FOREIGN KEY (`id_kardex`) REFERENCES `kardex_almacen` (`id`),
  CONSTRAINT `pedido_futuro_ibfk_3` FOREIGN KEY (`id_empre`) REFERENCES `empresa` (`id`),
  CONSTRAINT `pedido_futuro_ibfk_4` FOREIGN KEY (`id_tipo_alerta`) REFERENCES `tipo_alerta` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedido_futuro`
--

LOCK TABLES `pedido_futuro` WRITE;
/*!40000 ALTER TABLE `pedido_futuro` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedido_futuro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personalizado`
--

DROP TABLE IF EXISTS `personalizado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personalizado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_kdx` int DEFAULT NULL,
  `codigo_semana` varchar(20) DEFAULT NULL,
  `produccion` int DEFAULT NULL,
  `venta` int DEFAULT NULL,
  `probabilidad` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kdx` (`id_kdx`),
  CONSTRAINT `personalizado_ibfk_1` FOREIGN KEY (`id_kdx`) REFERENCES `kardex_almacen` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personalizado`
--

LOCK TABLES `personalizado` WRITE;
/*!40000 ALTER TABLE `personalizado` DISABLE KEYS */;
/*!40000 ALTER TABLE `personalizado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_cat` int DEFAULT NULL,
  `id_ingredientes` int DEFAULT NULL,
  `id_tipo_descuento` int DEFAULT NULL,
  `id_personalizado` int DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cat` (`id_cat`),
  KEY `id_ingredientes` (`id_ingredientes`),
  KEY `id_personalizado` (`id_personalizado`),
  KEY `id_tipo_descuento` (`id_tipo_descuento`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id`),
  CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_ingredientes`) REFERENCES `ingredientes` (`id`),
  CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_personalizado`) REFERENCES `personalizado` (`id`),
  CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`id_tipo_descuento`) REFERENCES `tipo_descuento` (`id`)
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
-- Table structure for table `status_cliente`
--

DROP TABLE IF EXISTS `status_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status_cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status_cliente`
--

LOCK TABLES `status_cliente` WRITE;
/*!40000 ALTER TABLE `status_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `status_cliente` ENABLE KEYS */;
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
  `num_casa` char(10) DEFAULT NULL,
  `telefono` char(12) DEFAULT NULL,
  `rfc` char(20) DEFAULT NULL,
  `correo` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal`
--

LOCK TABLES `sucursal` WRITE;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_alerta`
--

DROP TABLE IF EXISTS `tipo_alerta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_alerta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alerta` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_alerta`
--

LOCK TABLES `tipo_alerta` WRITE;
/*!40000 ALTER TABLE `tipo_alerta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_alerta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_cliente`
--

DROP TABLE IF EXISTS `tipo_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_cliente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) DEFAULT NULL,
  `descri` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_cliente`
--

LOCK TABLES `tipo_cliente` WRITE;
/*!40000 ALTER TABLE `tipo_cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_descuento`
--

DROP TABLE IF EXISTS `tipo_descuento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_descuento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo_descuento` varchar(20) DEFAULT NULL,
  `desripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_descuento`
--

LOCK TABLES `tipo_descuento` WRITE;
/*!40000 ALTER TABLE `tipo_descuento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_descuento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_movimiento`
--

DROP TABLE IF EXISTS `tipo_movimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_movimiento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_movimiento`
--

LOCK TABLES `tipo_movimiento` WRITE;
/*!40000 ALTER TABLE `tipo_movimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_movimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'proyectointegrador'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-19 11:07:08
