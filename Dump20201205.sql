CREATE DATABASE  IF NOT EXISTS `fseletro` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `fseletro`;
-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: fseletro
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `idclientes` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `Endereço` varchar(60) NOT NULL,
  `n°` int NOT NULL,
  `complemento` varchar(45) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `produto_requerido` int DEFAULT NULL,
  PRIMARY KEY (`idclientes`),
  UNIQUE KEY `idclientes_UNIQUE` (`idclientes`),
  KEY `produto_requerido` (`produto_requerido`),
  CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`produto_requerido`) REFERENCES `produtos` (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Joellis','Rua joaquina',51,'casa 101','RJ',1),(2,'Célia','Rua joaninha',65,'casa 14','RJ',11),(3,'Simone','Rua das flores',120,'apt 50','RJ',3),(4,'Hecília','Rua das orquídeas',144,'apt 30','RJ',8),(5,'Gederson','Rua das margaridas',63,'casa 2','RJ',4);
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `msg` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'Joellis','O preço dessa loja é imbatível!','2020-12-04 21:45:23');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedidos` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idpedidos`),
  UNIQUE KEY `idpedidos_UNIQUE` (`idpedidos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1),(2),(3),(4),(5);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtos`
--

DROP TABLE IF EXISTS `produtos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produtos` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `data_inclusao` datetime DEFAULT NULL,
  `categoria` varchar(100) NOT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `preco_venda` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtos`
--

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` VALUES (1,'2020-10-20 15:00:00','arcondicionados','Ar-condicionado midea spring',1499.00,1149.00,'img/ar-condicionado/a1.webp'),(2,'2020-10-20 15:00:00','arcondicionados','Ar-condicionado midea econômico',1199.00,999.00,'img/ar-condicionado/a2.jpg'),(3,'2020-10-20 15:00:00','fogoes','Fogão de piso consul 5 bocas',1209.00,979.00,'img/fogoes/Fogão3.webp'),(4,'2020-10-20 15:00:00','fogoes','Fogão de piso fênix 5 bocas',999.00,799.00,'img/fogoes/Fogão2.jpg'),(5,'2020-10-20 15:00:00','fogoes','Fogão de piso 5 bocas Atlantis',1399.00,1099.00,'img/fogoes/Fogão1.webp'),(6,'2020-10-20 15:00:00','refrigeradores','Refrigerador frost free eletrolux',5999.00,4499.00,'img/refrigerador/refrigerador-electrolux-inox-1.webp'),(7,'2020-10-20 15:00:00','refrigeradores','Refrigerador frost free eletrolux branco',2999.00,2299.00,'img/refrigerador/Refrigerador2.webp'),(8,'2020-10-20 15:00:00','refrigeradores','Refrigerador frost free brastemp',4499.00,3999.00,'img/refrigerador/Geladeira3.webp'),(9,'2020-10-20 15:00:00','microondas','Micro-ondas LG quartzo',1299.00,999.00,'img/micro-ondas/m1.webp'),(10,'2020-10-20 15:00:00','microondas','Micro-ondas eletrolux branco',599.00,349.00,'img/micro-ondas/m2.jpg'),(11,'2020-10-20 15:00:00','lavadouras','Lavadoura LG prata 6kg prata',4999.00,3099.00,'img/lavadoura/lava-e-seca-lg-wd1412rt-10-2kg-aco-escovado-prime-touch-6-motion.jpg'),(12,'2020-10-20 15:00:00','lavadouras','Lavadoura samsung 6 kg branco',3599.00,2899.00,'img/lavadoura/lavadora-de-roupas-samsung-front-load-wf106-10-1kg-branca.png');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-05 15:01:14
