# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 192.168.10.10 (MySQL 5.6.19-0ubuntu0.14.04.1)
# Base de datos: horario
# Tiempo de Generación: 2015-07-20 18:33:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla aulas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aulas`;

CREATE TABLE `aulas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aula` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `aulas` WRITE;
/*!40000 ALTER TABLE `aulas` DISABLE KEYS */;

INSERT INTO `aulas` (`id`, `aula`, `descripcion`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'a1','edificio principal',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(2,'a2','edificio principal',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(3,'a3','edificio principal planta 2',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(4,'a4','edificio principal planta 2',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(5,'l1','laboratorio computo edificio principal',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(6,'l2','laboratorio de computo edifico final',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(7,'b1','edificio secundario',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(8,'b2','edifico secundario',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(9,'b3','edificio secundario planta 2',1,'2015-07-20 17:36:39','0000-00-00 00:00:00'),
	(10,'b4','edificio secundario planta 2',1,'2015-07-20 17:36:39','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `aulas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla carreras
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carreras`;

CREATE TABLE `carreras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;

INSERT INTO `carreras` (`id`, `carrera`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'tecnologias de informacion',1,'2015-07-20 17:36:44','0000-00-00 00:00:00'),
	(2,'mantenimiento',1,'2015-07-20 17:36:44','0000-00-00 00:00:00'),
	(3,'logistica',1,'2015-07-20 17:36:44','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla ciclos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ciclos`;

CREATE TABLE `ciclos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ciclo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `ciclos` WRITE;
/*!40000 ALTER TABLE `ciclos` DISABLE KEYS */;

INSERT INTO `ciclos` (`id`, `ciclo`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'2015 Enero - Julio',1,'2015-07-20 17:36:49','0000-00-00 00:00:00'),
	(2,'2015 Agosto - Diciembre',1,'2015-07-20 17:36:49','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `ciclos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla dias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dias`;

CREATE TABLE `dias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `dias` WRITE;
/*!40000 ALTER TABLE `dias` DISABLE KEYS */;

INSERT INTO `dias` (`id`, `dia`, `created_at`, `updated_at`)
VALUES
	(1,'Lunes','2015-07-20 17:36:28','0000-00-00 00:00:00'),
	(2,'Martes','2015-07-20 17:36:28','0000-00-00 00:00:00'),
	(3,'Miercoles','2015-07-20 17:36:28','0000-00-00 00:00:00'),
	(4,'Jueves','2015-07-20 17:36:28','0000-00-00 00:00:00'),
	(5,'Viernes','2015-07-20 17:36:28','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `dias` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla grupo_materia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `grupo_materia`;

CREATE TABLE `grupo_materia` (
  `id` int(10) DEFAULT NULL,
  `grupo_id` int(10) unsigned NOT NULL,
  `materia_id` int(10) unsigned NOT NULL,
  KEY `grupo_id` (`grupo_id`),
  KEY `materia_id` (`materia_id`),
  CONSTRAINT `grupo_materia_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  CONSTRAINT `grupo_materia_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Volcado de tabla grupos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `grupos`;

CREATE TABLE `grupos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `grupo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `carrera_id` int(10) unsigned NOT NULL,
  `turno_id` int(10) unsigned NOT NULL,
  `semestre_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `carrera_id` (`carrera_id`),
  KEY `turno_id` (`turno_id`),
  KEY `semestre_id` (`semestre_id`),
  CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`),
  CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`turno_id`) REFERENCES `turnos` (`id`),
  CONSTRAINT `grupos_ibfk_3` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;

INSERT INTO `grupos` (`id`, `grupo`, `carrera_id`, `turno_id`, `semestre_id`, `created_at`, `updated_at`)
VALUES
	(1,'101',1,1,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(2,'102',1,2,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(4,'103',2,1,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(5,'104',2,2,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(7,'105',3,1,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(8,'106',3,2,1,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(9,'201',1,1,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(10,'202',1,2,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(11,'203',2,1,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(12,'204',2,2,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(13,'205',3,1,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(14,'206',3,2,2,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(15,'301',1,1,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(16,'302',1,2,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(17,'303',2,1,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(18,'304',2,2,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(19,'305',3,1,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(20,'306',3,2,3,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(21,'401',1,1,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(22,'402',1,2,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(24,'403',2,1,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(25,'404',2,2,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(26,'405',3,1,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(27,'406',3,2,4,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(28,'501',1,1,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(29,'502',1,2,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(30,'503',2,1,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(31,'504',2,2,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(32,'505',3,1,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(33,'506',3,2,5,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(34,'601',1,1,6,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(35,'602',1,2,6,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(36,'603',2,1,6,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(37,'604',2,2,6,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(38,'605',3,1,6,'2015-07-20 17:37:06','0000-00-00 00:00:00'),
	(39,'606',3,2,6,'2015-07-20 17:37:06','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla horas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `horas`;

CREATE TABLE `horas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hora` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `horas` WRITE;
/*!40000 ALTER TABLE `horas` DISABLE KEYS */;

INSERT INTO `horas` (`id`, `hora`, `created_at`, `updated_at`)
VALUES
	(1,'7:00-8:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(2,'8:00-9:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(3,'9:00-10:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(4,'10:00-11:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(5,'11:00-12:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(6,'12:00-13:00','2015-07-20 17:36:20','0000-00-00 00:00:00'),
	(7,'13:00-14:00','2015-07-20 17:36:20','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `horas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla maestro_materia
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestro_materia`;

CREATE TABLE `maestro_materia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `maestro_id` int(10) unsigned NOT NULL,
  `materia_id` int(10) unsigned NOT NULL,
  `ciclo_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `maestro_id` (`maestro_id`),
  KEY `materia_id` (`materia_id`),
  KEY `ciclo_id` (`ciclo_id`),
  CONSTRAINT `maestro_materia_ibfk_1` FOREIGN KEY (`maestro_id`) REFERENCES `maestros` (`id`),
  CONSTRAINT `maestro_materia_ibfk_2` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`),
  CONSTRAINT `maestro_materia_ibfk_3` FOREIGN KEY (`ciclo_id`) REFERENCES `ciclos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Volcado de tabla maestros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `maestros`;

CREATE TABLE `maestros` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `maestros` WRITE;
/*!40000 ALTER TABLE `maestros` DISABLE KEYS */;

INSERT INTO `maestros` (`id`, `clave`, `nombres`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'asd1342','luis enrique',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(2,'df89jjsu','jorge enrique',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(3,'sdfsdf78','matias romero',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(4,'gas57as','tizoc mendez',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(5,'jgdas55','claudia nohemi',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(6,'asdq3q','erick de jesus',1,'2015-07-20 17:36:05','0000-00-00 00:00:00'),
	(7,'as907sd','maria de lourdes',1,'2015-07-20 17:36:05','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `maestros` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla materias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `materias`;

CREATE TABLE `materias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `materia` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `hrs_teoricas` int(10) DEFAULT NULL,
  `hrs_practicas` int(10) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;

INSERT INTO `materias` (`id`, `materia`, `hrs_teoricas`, `hrs_practicas`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'ingles',2,0,1,'2015-07-20 17:36:00','0000-00-00 00:00:00'),
	(2,'algebra',4,0,1,'2015-07-20 17:36:00','0000-00-00 00:00:00'),
	(3,'fisica',4,0,1,'2015-07-20 17:36:00','0000-00-00 00:00:00'),
	(5,'quimica',4,2,1,'2015-07-20 17:36:00','0000-00-00 00:00:00'),
	(6,'tics',2,4,1,'2015-07-20 17:36:00','0000-00-00 00:00:00'),
	(7,'mantenimiento',2,2,1,'2015-07-20 17:36:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla semestres
# ------------------------------------------------------------

DROP TABLE IF EXISTS `semestres`;

CREATE TABLE `semestres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `semestre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `semestres` WRITE;
/*!40000 ALTER TABLE `semestres` DISABLE KEYS */;

INSERT INTO `semestres` (`id`, `semestre`, `status`, `created_at`, `updated_at`)
VALUES
	(1,'primer semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00'),
	(2,'segundo semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00'),
	(3,'tercer semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00'),
	(4,'cuarto semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00'),
	(5,'quinto semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00'),
	(6,'sexto semestre',1,'2015-07-20 17:35:54','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `semestres` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla turnos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `turnos`;

CREATE TABLE `turnos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `turno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `turnos` WRITE;
/*!40000 ALTER TABLE `turnos` DISABLE KEYS */;

INSERT INTO `turnos` (`id`, `turno`, `created_at`, `updated_at`)
VALUES
	(1,'matutino','2015-07-20 17:35:23','0000-00-00 00:00:00'),
	(2,'vespertino','2015-07-20 17:35:23','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `turnos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
