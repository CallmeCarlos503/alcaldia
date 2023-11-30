-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para alcaldia
CREATE DATABASE IF NOT EXISTS `alcaldia` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `alcaldia`;

-- Volcando estructura para tabla alcaldia.alcalde
CREATE TABLE IF NOT EXISTS `alcalde` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(900) NOT NULL,
  `APELLIDO` varchar(900) NOT NULL,
  `IMAGEN` varchar(500) NOT NULL,
  `REDSOCIAL1` varchar(900) NOT NULL,
  `REDSOCIAL2` varchar(900) NOT NULL,
  `REDSOCIAL3` varchar(900) NOT NULL,
  `DESCRIPCION` varchar(232) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  CONSTRAINT `alcalde_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla alcaldia.alcalde: ~1 rows (aproximadamente)
INSERT INTO `alcalde` (`ID`, `NOMBRE`, `APELLIDO`, `IMAGEN`, `REDSOCIAL1`, `REDSOCIAL2`, `REDSOCIAL3`, `DESCRIPCION`, `ID_ESTADO`) VALUES
	(1, 'Juan Carlos', 'Bodoque Veracruz', '../assets/alcaldes/bodoque.jpg\n', 'xD', 'xD', 'xD', '¿Para qué alegrarme si después me dará pena? ¿Para qué levantarme si después tengo que acostarme? ¿Para qué me peino si después me despeino? ¿Para qué comés', 1);

-- Volcando estructura para tabla alcaldia.carrousel
CREATE TABLE IF NOT EXISTS `carrousel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IMAGEN` varchar(900) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  CONSTRAINT `carrousel_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla alcaldia.carrousel: ~3 rows (aproximadamente)
INSERT INTO `carrousel` (`ID`, `IMAGEN`, `ID_ESTADO`) VALUES
	(7, '../assets/carrousel/paisaje.jpg', 1),
	(8, '../assets/carrousel/paisaje2.jpg', 1),
	(9, '../assets/carrousel/paisaje3.jpg', 1);

-- Volcando estructura para tabla alcaldia.estado
CREATE TABLE IF NOT EXISTS `estado` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla alcaldia.estado: ~2 rows (aproximadamente)
INSERT INTO `estado` (`ID`, `NOMBRE`) VALUES
	(1, 'Activo'),
	(2, 'Inactivo');

-- Volcando estructura para tabla alcaldia.noticia
CREATE TABLE IF NOT EXISTS `noticia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(200) NOT NULL,
  `SUBENCABEZADO` varchar(200) NOT NULL,
  `COLUMNA1` varchar(1115) NOT NULL,
  `COLUMNA2` varchar(311) NOT NULL,
  `IMAGEN1` varchar(900) NOT NULL,
  `IMAGEN2` varchar(900) NOT NULL,
  `IMAGEN3` varchar(900) NOT NULL,
  `ID_ESTADO` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_ESTADO` (`ID_ESTADO`),
  CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`ID_ESTADO`) REFERENCES `estado` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla alcaldia.noticia: ~3 rows (aproximadamente)
INSERT INTO `noticia` (`ID`, `TITULO`, `SUBENCABEZADO`, `COLUMNA1`, `COLUMNA2`, `IMAGEN1`, `IMAGEN2`, `IMAGEN3`, `ID_ESTADO`) VALUES
	(1, 'Bukele se contradice y se hace de campaña electoral 2024\r\n', 'SE CAGO MUY FUERTE', 'NOSE XD', 'XDDD', '../assets/noticias/cagon.jpg', '../assets/cagon.jpg', '../assets/cagon.jpg', 1),
	(2, 'Bukele se contradice y se hace de campaña electoral 2024\r\n', 'SE CAGO MUY FUERTE', 'NOSE XD', 'XDDD', '../assets/noticias/cagon.jpg', '../assets/cagon.jpg', '../assets/cagon.jpg', 1),
	(3, 'Bukele se contradice y se hace de campaña electoral 2024\r\n', 'SE CAGO MUY FUERTE', 'NOSE XD', 'XDDD', '../assets/noticias/cagon.jpg', '../assets/cagon.jpg', '../assets/cagon.jpg', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
