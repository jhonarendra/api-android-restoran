/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.30-MariaDB : Database - db_fifteen_resto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_11_10_093724_create_tb_hidangan_table',1),(4,'2018_11_10_094041_create_tb_pegawai_table',1),(5,'2018_11_10_094204_create_tb_pelanggan_table',1),(6,'2018_11_10_122215_create_tb_komentar_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `tb_hidangan` */

DROP TABLE IF EXISTS `tb_hidangan`;

CREATE TABLE `tb_hidangan` (
  `id_hidangan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_hidangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hidangan` text COLLATE utf8mb4_unicode_ci,
  `harga_hidangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_hidangan` enum('Burger','Salad','Dessert','Minuman','Breakfast') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_hidangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_hidangan`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_hidangan` */

insert  into `tb_hidangan`(`id_hidangan`,`nama_hidangan`,`deskripsi_hidangan`,`harga_hidangan`,`kategori_hidangan`,`foto_hidangan`,`created_at`,`updated_at`) values (1,'Cheese Burger','Beri ruang untuk Burger Cheeseburger ganda kami, dua roti daging bakar bakar yang dibumbui dengan lapisan sederhana keju Amerika yang meleleh, acar belok keriting, mustard kuning, dan saus tomat pada roti biji wijen panggang.','Rp 31.818','Burger','burger_cheese_burger.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(2,'Chicken Garden Salad','Salad Taman Ayam kami adalah campuran romain hijau renyah, daun hijau dan selada radicchio, tomat matang, crouton bawang putih, dan keju cheddar parut.','Rp 18.181','Salad','salad_ChickenGardenSalad.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(3,'Coca Cola','© The Coca-Cola Company. \"Coke\" adalah merek dagang terdaftar dari The Coca-Cola Company.','Rp 7.727','Minuman','minuman_coca_cola.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(4,'Es Krim','Kami tidak menciptakan servis yang lembut, tetapi dengan satu rasa Vanilla Soft Serve kami yang dingin, lembut, dan lembut, Anda akan berpikir kami menyempurnakannya. Pilihan kerucut atau can','Rp 4.545','Dessert','dessert_es_krim.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(5,'Sourdough King','Memperkenalkan Sarapan Bacon Ganda Asap SOURDOUGH KING ™ dibuat dengan menggandakan porsi potongan tebal daging asap alami, dua porsi keju Amerika yang dilelehkan dan ditumpuk tinggi dengan dua telur lembut; semua di roti penghuni pertama kami','Rp 13.636','Breakfast','breakfast_SourdoughKing.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(6,'Double Cheese Burger','Sandwich menyajikan dua roti bakar daging sapi bakar yang lezat dengan total lebih dari 1/2 lb * daging sapi, dilapisi dengan keju Amerika yang diiris meleleh, bawang karamel dan saus keju Amerika yang diracik pada roti biji wijen panggang kami.','Rp 42.727','Burger','burger_double_cheese_burger.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(7,'Sprite','© The Coca-Cola Company. \"Sprite\" adalah merek dagang terdaftar dari The Coca-Cola Company.','Rp 7.727','Minuman','minuman_sprite.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(8,'Hamburger','Coba Hamburger kami, tanda tangan yang dibakar api. beef patty dengan lapisan sederhana acar yang dipotong keriting, mustar kuning, dan saus tomat pada roti biji wijen panggang.','Rp 25.454','Burger','burger_hamburger.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(9,'WHOPPER','Sandwich WHOPPER® kami adalah ¼ lb * daging sapi bakar-bakar yang gurih dengan tomat juicy, selada segar, krim mayones, saus tomat, acar renyah, dan irisan bawang putih pada roti biji wijen yang lembut.','Rp 39.090','Burger','burger_WHOPPER.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(10,'Bacon Burger','BBQ Bacon Burger Sandwich kami memiliki ¼ lb * daging panggang bakar yang gurih, dengan topping daging asap tebal, keju Amerika yang meleleh, irisan selada segar, mayo krim, tomat matang, saus tomat, bawang, acar renyah, dan lapisan saus bbq manis dan berasap, semua pada roti biji wijen yang hangat, panggang, wijen.','Rp 46.363','Burger','burger_bacon.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(11,'Air Putih','Nestlé® Pure Life® Purified Water, air kemasan eksklusif, adalah cara yang keren dan menyegarkan untuk mencuci favorit tanda tangan Anda.','Rp 7.272','Minuman','minuman_air_putih.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(12,'Frozen Coke','© The Coca-Cola Company. \"Frozen Coke\" adalah Coca-Cola beku.','Rp 10.909','Minuman','minuman_frozen_coke.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(13,'Chocolate Sundae','Keren dan lembut dengan coklat fudge swirl, kami membuat HERSHEY\'S Chocolate Fudge Sundae dilengkapi dengan Soft Vanve beludru kami.','Rp 11.818','Dessert','dessert_coklat_sundae.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(14,'Cookies','Kue yang lezat dari OTIS SPUNKMEYER® Chocolate Chip kami sarat dengan chip cokelat yang meleleh dan dipanggang setiap hari untuk kesempurnaan.','Rp 10.909','Dessert','dessert_cookies.png','2018-11-14 07:10:18','2018-11-14 07:10:18'),(15,'Oreo Cheese Cake','OREO® Cookie Cheesecake kami menyajikan cheesecake krim-gaya pada kerak kue OREO®, dicampur dengan potongan kue OREO® asli.\r\n','Rp 15.454','Dessert','dessert_oreo_cheesecake.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(16,'Strawberry Shake','Bersenang-senanglah dengan Hand Spun Shake Strawberry yang creamy. Velvety vanilla soft serve dan saus strawberry dicampur dengan sempurna dan diakhiri dengan topping kocok manis hanya untuk Anda.','Rp 13.636','Dessert','dessert_strawberr_shake.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(17,'Twix Pie','Pie yang dibuat dengan TWIX® memiliki filling karamel kental berwarna krem dengan potongan TWIX® Bars, semuanya bertumpu pada remah remah vanilla.','Rp 14.545','Dessert','dessert_twixpie.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(18,'Chicken Club Salad','Salad Chicken Club kami adalah campuran romaine hijau renyah, daun hijau dan selada radicchio, potongan daging asap tebal, keju cheddar parut, tomat matang, dan crouton bawang putih mentega.','Rp 19.090','Salad','salad_ChickenClubSalad.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(19,'Eggnormous Burrito','Menampilkan sosis gurih, irisan daging asap tebal, telur tebal, dengan saus Queso, coklat hash emas, ditambah saus pedas yang kental yang dibungkus dengan tortilla tepung hangat dan disajikan','Rp 16.363','Breakfast','breakfast_EggnormousBurrito.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(20,'Garden Side Salad','Salad Sisi Taman kami adalah perpaduan selada premium yang dihiasi dengan tomat berair, crouton bergaya rumahan, medley tiga keju, dan pilihan salad salad KEN\'S. Informasi Nutrisi tidak mence','Rp 20.909','Salad','salad_GardenSideSalad.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(21,'Hashbrowns','Buat pagi Anda mendesis dengan sisi kecil tanda tangan kami yang renyah, Golden Hash Browns. Informasi nutrisi mencerminkan ukuran sedang.','Rp 9.090','Breakfast','breakfast_Hashbrowns.png','2018-11-14 07:10:19','2018-11-14 07:10:19'),(22,'Pancakes dan Sosis','Segar dari dapur, Pancake & Sausage Platter kami disajikan dengan tiga pancake lembut yang ditaburi sirup manis dan sisi sosis gurih yang gurih.','Rp 12.727','Breakfast','breakfast_PancakesandSausages.png','2018-11-14 07:10:19','2018-11-14 07:10:19');

/*Table structure for table `tb_komentar` */

DROP TABLE IF EXISTS `tb_komentar`;

CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(10) unsigned NOT NULL,
  `isi_komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `tb_komentar_id_pelanggan_foreign` (`id_pelanggan`),
  CONSTRAINT `tb_komentar_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_komentar` */

insert  into `tb_komentar`(`id_komentar`,`id_pelanggan`,`isi_komentar`,`created_at`,`updated_at`) values (3,3,'Keren bro','2018-11-14 07:10:19','2018-11-14 07:10:19'),(4,3,'tes dari hp','2018-11-18 04:16:47','2018-11-18 04:16:47'),(6,10,'tes dulu','2018-12-21 19:33:57','2018-12-21 19:33:57');

/*Table structure for table `tb_pegawai` */

DROP TABLE IF EXISTS `tb_pegawai`;

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_pegawai` */

insert  into `tb_pegawai`(`id_pegawai`,`nama_pegawai`,`email_pegawai`,`username_pegawai`,`password_pegawai`,`foto_pegawai`,`created_at`,`updated_at`) values (1,'Anak Agung Gede Agung','gungdegung@gmail.com','gungdegung','3e3fd93fbd7877f2caa29042e4d68b9d',NULL,'2018-11-14 07:10:18','2018-11-14 07:10:18');

/*Table structure for table `tb_pelanggan` */

DROP TABLE IF EXISTS `tb_pelanggan`;

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Aktif','Dihapus') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tb_pelanggan` */

insert  into `tb_pelanggan`(`id_pelanggan`,`nama_pelanggan`,`email_pelanggan`,`username_pelanggan`,`password_pelanggan`,`foto_pelanggan`,`created_at`,`updated_at`,`status`) values (1,'Putu Jhonarendra2','jhonarendra2@gmail.com','jhonarendra2','f80cdc281e09fb8f69607830dd9586c4',NULL,'2018-11-14 07:10:18','2018-12-21 19:52:56','Aktif'),(2,'lalala','lalalal@ks.c','lalala','9aa6e5f2256c17d2d430b100032b997c',NULL,'2018-11-15 12:02:47','2018-12-21 10:24:58','Aktif'),(3,'johnsom','johnsom','johnsom','1427e904d3da3b984e2cd6e82d97d631',NULL,'2018-11-15 12:06:09','2018-12-21 19:24:13','Aktif'),(4,'jon','jon','jon','37ba7d73de6e6191b41c717b35661a9e',NULL,'2018-12-21 04:31:11','2018-12-21 04:31:11','Aktif'),(5,'koko','koko','koko','37f525e2b6fc3cb4abd882f708ab80eb',NULL,'2018-12-21 04:37:13','2018-12-21 04:37:13','Aktif'),(6,'kokoooo','kokooo@maila.c','koko9oo','37f525e2b6fc3cb4abd882f708ab80eb',NULL,'2018-12-21 04:41:33','2018-12-21 04:41:33','Aktif'),(7,'skiaiaja','sjjaia@js.c','sjiaoaa','8027e3a276f96b801ea200a6fb93ec83',NULL,'2018-12-21 04:52:38','2018-12-21 04:52:38','Aktif'),(8,'joaikaka','kaoaoaka92@ska.d','ksoa9aa','f990dd53b298110173cc579135450c41',NULL,'2018-12-21 05:01:46','2018-12-21 05:01:46','Aktif'),(9,'ksksoaia82','sjjsisia82@sjis.xks','sjjsiwiwiw82','6d8ebd5a6615d8a20cc40b39a3137b14',NULL,'2018-12-21 05:02:59','2018-12-21 05:02:59','Aktif'),(10,'jonjon','jonjon@jsoss.dk','jonjon','b7b0ae5532585411f12c2b90a5509f56',NULL,'2018-12-21 19:26:04','2018-12-21 19:40:14','Dihapus');

/*Table structure for table `tb_token` */

DROP TABLE IF EXISTS `tb_token`;

CREATE TABLE `tb_token` (
  `id_token` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_token` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
