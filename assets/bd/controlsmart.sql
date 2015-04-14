# Host: localhost  (Version: 5.6.21)
# Date: 2015-04-13 18:32:46
# Generator: MySQL-Front 5.3  (Build 4.196)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "clientes"
#

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `cliente` varchar(80) DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "clientes"
#

INSERT INTO `clientes` VALUES (1,'antonio falcon','6621632321'),(2,'miguel herrera','6621212324'),(3,'juan Quijada','6623242323'),(4,'julian duarte','6623212421');

#
# Structure for table "maestros"
#

DROP TABLE IF EXISTS `maestros`;
CREATE TABLE `maestros` (
  `idMaestro` int(11) NOT NULL AUTO_INCREMENT,
  `maestro` varchar(80) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idMaestro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "maestros"
#

INSERT INTO `maestros` VALUES (1,'antonio falcon','troncoso','6621434543'),(2,'Catman','BatiCat','6622001122');

#
# Structure for table "cursos"
#

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `idCurso` int(11) NOT NULL AUTO_INCREMENT,
  `idMaestro` int(11) NOT NULL DEFAULT '0',
  `curso` varchar(30) DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaSalida` time DEFAULT NULL,
  PRIMARY KEY (`idCurso`),
  KEY `fkMaestrocurso` (`idMaestro`),
  CONSTRAINT `fkmaster` FOREIGN KEY (`idMaestro`) REFERENCES `maestros` (`idMaestro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "cursos"
#

INSERT INTO `cursos` VALUES (1,1,'Matematicas','14:00:00','15:00:00'),(2,2,'Como ser un Catman','02:00:00','07:00:00');

#
# Structure for table "inscritos"
#

DROP TABLE IF EXISTS `inscritos`;
CREATE TABLE `inscritos` (
  `idInscritos` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idInscritos`),
  KEY `fkclienteinscrito` (`idCliente`),
  KEY `fkCursoinscrito` (`idCurso`),
  CONSTRAINT `fkCursoinscrito` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`idCurso`),
  CONSTRAINT `fkclienteinscrito` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "inscritos"
#

INSERT INTO `inscritos` VALUES (1,1,1),(2,2,1),(3,4,1);

#
# Structure for table "semanas"
#

DROP TABLE IF EXISTS `semanas`;
CREATE TABLE `semanas` (
  `idSemana` int(11) NOT NULL AUTO_INCREMENT,
  `semana` varchar(20) DEFAULT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `fechaInicio` date NOT NULL DEFAULT '0000-00-00',
  `fechaFin` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`idSemana`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "semanas"
#

INSERT INTO `semanas` VALUES (1,'1',70.00,'2015-03-23','2015-03-27'),(2,'2',70.00,'2015-03-30','2015-04-03'),(3,'3',70.00,'2015-04-06','2015-04-10'),(4,'4',70.00,'0000-00-00','0000-00-00'),(5,'5',70.00,'0000-00-00','0000-00-00');

#
# Structure for table "pagos"
#

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE `pagos` (
  `idPago` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idSemana` int(11) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`idPago`),
  KEY `fkSemanapago` (`idSemana`),
  KEY `fkClientepago` (`idCliente`),
  CONSTRAINT `fkClientepago` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  CONSTRAINT `fkSemanapago` FOREIGN KEY (`idSemana`) REFERENCES `semanas` (`idSemana`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "pagos"
#

INSERT INTO `pagos` VALUES (1,1,1,'2015-04-01',NULL),(3,1,2,'2015-04-09',NULL),(4,3,1,'2015-04-08',NULL),(5,2,1,'2015-04-03',NULL);

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL DEFAULT '',
  `cuenta` varchar(45) NOT NULL DEFAULT '',
  `pswd` varchar(128) NOT NULL DEFAULT '',
  `cPswd` varchar(128) NOT NULL DEFAULT '',
  `nivel` int(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'Antonio Falcón','tony','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',1),(2,'adan moreno','adan','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',1),(4,'dario','dariofig1','202cb962ac59075b964b07152d234b70','202cb962ac59075b964b07152d234b70',1);
