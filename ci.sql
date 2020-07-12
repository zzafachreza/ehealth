/*
SQLyog Ultimate v10.42 
MySQL - 5.6.26 : Database - ci
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `bayar` */

CREATE TABLE `bayar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_daftar` int(11) DEFAULT NULL,
  `pembayaran` varchar(100) DEFAULT NULL,
  `total` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `bayar` */

insert  into `bayar`(`id`,`id_daftar`,`pembayaran`,`total`) values (1,1,'BPJS',100000),(3,2,'BPJS',5000),(4,7,'BPJS',15000),(5,8,'BPJS',500000),(6,10,'BPJS',150000);

/*Table structure for table `daftar` */

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date DEFAULT NULL,
  `rekam_medis` varchar(100) DEFAULT NULL,
  `poli` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `daftar` */

insert  into `daftar`(`id`,`tgl`,`rekam_medis`,`poli`) values (1,'2020-03-09','A1','UMUM'),(2,'2020-03-09','A2','GIGI'),(7,'2020-03-09','A9','UMUM'),(10,'2020-03-09','A5','GIGI');

/*Table structure for table `pasien` */

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rekam_medis` varchar(100) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_KTP` (`ktp`),
  UNIQUE KEY `UNIQUE_RM` (`rekam_medis`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `pasien` */

insert  into `pasien`(`id`,`rekam_medis`,`ktp`,`nama`) values (1,'A1','1231231','dadan'),(2,'A2','321','didin'),(6,'A3','12312124','okter Teja Saputra'),(7,'A4','123123','dini'),(16,'A5','12345','dika'),(19,'A6','42928','sarah');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`level`) values (1,'reza','436b8d8ba15732ee3d226b647ad79942101ca34b','Admin'),(2,'hanif','436b8d8ba15732ee3d226b647ad79942101ca34b','Operator');

/*Table structure for table `bayar_v` */

DROP TABLE IF EXISTS `bayar_v`;

/*!50001 CREATE TABLE  `bayar_v`(
 `id` int(11) ,
 `tgl` date ,
 `rekam_medis` varchar(100) ,
 `poli` varchar(100) ,
 `id_pasien` int(11) ,
 `nama` varchar(100) ,
 `ktp` varchar(100) ,
 `pembayaran` varchar(100) ,
 `total` float 
)*/;

/*Table structure for table `daftar_v` */

DROP TABLE IF EXISTS `daftar_v`;

/*!50001 CREATE TABLE  `daftar_v`(
 `id` int(11) ,
 `tgl` date ,
 `rekam_medis` varchar(100) ,
 `poli` varchar(100) ,
 `id_pasien` int(11) ,
 `nama` varchar(100) ,
 `ktp` varchar(100) 
)*/;

/*View structure for view bayar_v */

/*!50001 DROP TABLE IF EXISTS `bayar_v` */;
/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bayar_v` AS select `daftar_v`.`id` AS `id`,`daftar_v`.`tgl` AS `tgl`,`daftar_v`.`rekam_medis` AS `rekam_medis`,`daftar_v`.`poli` AS `poli`,`daftar_v`.`id_pasien` AS `id_pasien`,`daftar_v`.`nama` AS `nama`,`daftar_v`.`ktp` AS `ktp`,`bayar`.`pembayaran` AS `pembayaran`,`bayar`.`total` AS `total` from (`bayar` join `daftar_v` on((`bayar`.`id_daftar` = `daftar_v`.`id`))) */;

/*View structure for view daftar_v */

/*!50001 DROP TABLE IF EXISTS `daftar_v` */;
/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_v` AS select `daftar`.`id` AS `id`,`daftar`.`tgl` AS `tgl`,`daftar`.`rekam_medis` AS `rekam_medis`,`daftar`.`poli` AS `poli`,`pasien`.`id` AS `id_pasien`,`pasien`.`nama` AS `nama`,`pasien`.`ktp` AS `ktp` from (`pasien` join `daftar` on((`pasien`.`rekam_medis` = `daftar`.`rekam_medis`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
