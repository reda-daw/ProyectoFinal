-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: DatosBD
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

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
-- Table structure for table `actas`
--

DROP TABLE IF EXISTS `actas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `arbitro` varchar(45) NOT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `jornada` varchar(45) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `estadio` varchar(100) NOT NULL,
  `competicion` varchar(100) NOT NULL,
  `equipoLocal` varchar(100) NOT NULL,
  `equipoVisitante` varchar(100) NOT NULL,
  `marcadorLocal` int NOT NULL,
  `marcadorVisitante` int NOT NULL,
  `localAmarillas` int NOT NULL,
  `visitanteAmarillas` int NOT NULL,
  `localRojas` int NOT NULL,
  `visitanteRojas` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actas`
--

LOCK TABLES `actas` WRITE;
/*!40000 ALTER TABLE `actas` DISABLE KEYS */;
INSERT INTO `actas` VALUES (4,'MERIMI JABRI, REDA','2022-05-29','12:00:00','JORNADA 18','PLASENCIA','CAMPO MUNICIPAL PLASENCIA','1ºFEXF','A.D. CIUDAD DE PLASENCIA','C.P. AMANECER \"A\"',3,1,2,1,1,2),(7,'Parra Cuenca, Mercedes','2022-06-19','16:00:00','Jornada 20','CABEZUELA DEL VALLE','MUNICIPAL LA NAVA (CABEZUELA DEL VALLE)','2ª FEXF','C.P. CABEZUELA ','C.P. CHINATO ',0,5,3,0,1,0),(8,'Paredes Carrasco, Roberto','2022-06-05','16:00:00','Jornada 21','Badajoz','CAMPO ','3ª RFEF','C.D. BADAJOZ ','C.D. CALAMONTE ',1,0,1,3,0,0);
/*!40000 ALTER TABLE `actas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anexos`
--

DROP TABLE IF EXISTS `anexos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anexos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `arbitro` varchar(45) NOT NULL,
  `equipolocal` varchar(45) NOT NULL,
  `equipovisitante` varchar(45) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anexos`
--

LOCK TABLES `anexos` WRITE;
/*!40000 ALTER TABLE `anexos` DISABLE KEYS */;
INSERT INTO `anexos` VALUES (2,'Paredes Carrasco, Roberto','C.D. BADAJOZ \"B\"','C.D. CALAMONTE \"A\"','Por error mio, el resultado que esta reflejado en el acta esta incorrecto, el resultado seria 1-0 a favor del equipo local'),(3,'Paredes Carrasco, Roberto','C.P. CABEZUELA','C.D. CALAMONTE \"A\"','fghjkllllllll');
/*!40000 ALTER TABLE `anexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `arbitros`
--

DROP TABLE IF EXISTS `arbitros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `arbitros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombreArbitro` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_arbitros_2_idx` (`nombreArbitro`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arbitros`
--

LOCK TABLES `arbitros` WRITE;
/*!40000 ALTER TABLE `arbitros` DISABLE KEYS */;
INSERT INTO `arbitros` VALUES (17,'Roberto','Paredes Carrasco','3ª RFEF','roberto@gmail.com','654987123'),(18,'Reda','Merimi Jabri','1ª FEXF','reda@gmail.com','632593629'),(19,'Carlos','Agraz Diaz','3ª RFEF','agraz@gmail.com','624157845'),(20,'Mercedes','Parra Cuenca','2ª FEXF','mercedes@gmail.com','624851248'),(21,'Maria','Lopez Sánchez','1ª FEXF','maria@gmail.com','6587421587');
/*!40000 ALTER TABLE `arbitros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `disponibilidad`
--

DROP TABLE IF EXISTS `disponibilidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `disponibilidad` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `disponibilidad` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disponibilidad`
--

LOCK TABLES `disponibilidad` WRITE;
/*!40000 ALTER TABLE `disponibilidad` DISABLE KEYS */;
INSERT INTO `disponibilidad` VALUES (10,'Carlos','Agraz Diaz','Disponible'),(11,'Reda','Merimi Jabri','Disponible'),(12,'Roberto','Paredes Carrasco','Disponible');
/*!40000 ALTER TABLE `disponibilidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos`
--

DROP TABLE IF EXISTS `partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `partidos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `competicion` varchar(100) NOT NULL,
  `grupo` varchar(45) NOT NULL,
  `jornada` varchar(45) NOT NULL,
  `equipoLocal` varchar(100) NOT NULL,
  `equipoVisitante` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `campo` varchar(100) NOT NULL,
  `localidad` varchar(100) NOT NULL,
  `arbitro` varchar(45) NOT NULL,
  `asistenteUno` varchar(45) NOT NULL,
  `asistenteDos` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos`
--

LOCK TABLES `partidos` WRITE;
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
INSERT INTO `partidos` VALUES (4,'1ª FEXF','Grupo 1','JORNADA 10','A.D. CIUDAD DE PLASENCIA','C.P. AMANECER ','2022-06-05','12:00:00','CAMPO MUNICIPAL PLASENCIA','PLASENCIA','MERIMI JABRI, REDA','Paredes Carrasco, Roberto','Parra Cuenca, Mercedes'),(5,'3ª RFEF','Grupo XVI','Jornada 21','C.D. BADAJOZ \"B\" ','C.D. CALAMONTE \"A\" ','2022-06-12','16:00:00','CAMPO \"B\" EUSEBIO BEJARANO VILARO','Badajoz','Paredes Carrasco, Roberto','MERIMI JABRI, REDA','Parra Cuenca, Mercedes'),(6,'2ª FEXF','Grupo 1','Jornada 20','C.P. CABEZUELA ','C.P. CHINATO ','2022-06-19','16:00:00','MUNICIPAL LA NAVA (CABEZUELA DEL VALLE)','CABEZUELA DEL VALLE','Parra Cuenca, Mercedes','Paredes Carrasco, Roberto','MERIMI JABRI, REDA');
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` int NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Reda',45138950,'AD181972','Administrador'),(2,'Roberto',41205461,'AR191827','Arbitro'),(9,'Carlos',42157895,'AR521485','Arbitro'),(10,'Mercedes',41267365,'AR5412478','Arbitra'),(11,'Maria',78952324,'AD789654236','Arbitra');
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

-- Dump completed on 2022-06-13 21:20:38
