/*
SQLyog Community Edition- MySQL GUI v5.25
Host - 5.5.5-10.4.10-MariaDB : Database - ferre
*********************************************************************
Server version : 5.5.5-10.4.10-MariaDB
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `ferre`;

USE `ferre`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `art` */

DROP TABLE IF EXISTS `art`;

CREATE TABLE `art` (
  `art_cod` int(10) NOT NULL AUTO_INCREMENT,
  `art_des` varchar(100) DEFAULT NULL,
  `art_rub` int(10) DEFAULT NULL,
  `art_pre` float(10,2) DEFAULT NULL,
  `art_sto` int(10) DEFAULT NULL,
  `art_fot` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`art_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `art` */

insert  into `art`(`art_cod`,`art_des`,`art_rub`,`art_pre`,`art_sto`,`art_fot`) values (15,'Lampara Led',9,270.00,22,'LamparaLed.jpg'),(16,'Linterna Duracell',9,455.00,29,'LinternaDuracell.jpg'),(17,'Martillo Stanley',4,810.00,16,'MartilloStanley.jpg'),(19,'Pala para jardin',4,695.00,8,'PalaJardin.jpg'),(20,'Andamio tubular',8,30000.00,3,'AndamioTubular.jpg'),(21,'Arena bolsa grande',7,5250.00,7,'ArenaBolsa.jpg'),(22,'Cal bolsa comun',7,945.00,9,'CalBolsa.jpg'),(23,'Cutter Stanley',4,430.00,10,'CutterStanley.jpg'),(24,'Destornillador plano',4,220.00,14,'DestornilladorPlano.jpg'),(25,'Escalera plegable aluminio',8,3700.00,4,'EscaleraAluminio.jpg'),(26,'Lijadora electrica',5,5600.00,6,'LijadoraElectrica.jpg'),(27,'Mezclador de pintura',5,4800.00,4,'MezcladorPintura.jpg'),(28,'Perforadora electrica',5,3900.00,12,'PerforadoraElectrica.jpg'),(29,'Pico de loro',4,930.00,11,'PicoLoro.jpg'),(30,'Pintura latex 20Lt',10,1844.77,8,'PinturaLatex.jpg'),(31,'Plafon led circular',9,775.00,17,'PlafonLed.jpg'),(38,'Pala Caterpillar',8,1245.00,5,'PalaCat.jpg'),(39,'Velador madera',9,1825.00,17,'VeladorMadera.jpg');

/*Table structure for table `log` */

DROP TABLE IF EXISTS `log`;

CREATE TABLE `log` (
  `log_nom` varchar(50) NOT NULL,
  `log_cla` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`log_nom`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `log` */

insert  into `log`(`log_nom`,`log_cla`) values ('test','test'),('usu','usu');

/*Table structure for table `rub` */

DROP TABLE IF EXISTS `rub`;

CREATE TABLE `rub` (
  `rub_cod` int(10) NOT NULL AUTO_INCREMENT,
  `rub_nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rub_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `rub` */

insert  into `rub`(`rub_cod`,`rub_nom`) values (4,'Herramienta de mano'),(5,'Maquina electrica'),(7,'Materiales'),(8,'Construccion'),(9,'Iluminacion del hogar'),(10,'Pintura');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
