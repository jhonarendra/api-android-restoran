-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2018 pada 07.35
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fifteen_resto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_10_093724_create_tb_hidangan_table', 1),
(4, '2018_11_10_094041_create_tb_pegawai_table', 1),
(5, '2018_11_10_094204_create_tb_pelanggan_table', 1),
(6, '2018_11_10_122215_create_tb_komentar_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hidangan`
--

CREATE TABLE `tb_hidangan` (
  `id_hidangan` int(10) UNSIGNED NOT NULL,
  `nama_hidangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_hidangan` text COLLATE utf8mb4_unicode_ci,
  `harga_hidangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_hidangan` enum('Burger','Salad','Dessert','Minuman','Breakfast') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_hidangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_hidangan`
--

INSERT INTO `tb_hidangan` (`id_hidangan`, `nama_hidangan`, `deskripsi_hidangan`, `harga_hidangan`, `kategori_hidangan`, `foto_hidangan`, `created_at`, `updated_at`) VALUES
(1, 'Cheese Burger', 'Beri ruang untuk Burger Cheeseburger ganda kami, dua roti daging bakar bakar yang dibumbui dengan lapisan sederhana keju Amerika yang meleleh, acar belok keriting, mustard kuning, dan saus tomat pada roti biji wijen panggang.', 'Rp 31.818', 'Burger', 'burger_cheese_burger.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(2, 'Chicken Garden Salad', 'Salad Taman Ayam kami adalah campuran romain hijau renyah, daun hijau dan selada radicchio, tomat matang, crouton bawang putih, dan keju cheddar parut.', 'Rp 18.181', 'Salad', 'salad_ChickenGardenSalad.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(3, 'Coca Cola', '© The Coca-Cola Company. \"Coke\" adalah merek dagang terdaftar dari The Coca-Cola Company.', 'Rp 7.727', 'Minuman', 'minuman_coca_cola.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(4, 'Es Krim', 'Kami tidak menciptakan servis yang lembut, tetapi dengan satu rasa Vanilla Soft Serve kami yang dingin, lembut, dan lembut, Anda akan berpikir kami menyempurnakannya. Pilihan kerucut atau can', 'Rp 4.545', 'Dessert', 'dessert_es_krim.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(5, 'Sourdough King', 'Memperkenalkan Sarapan Bacon Ganda Asap SOURDOUGH KING ™ dibuat dengan menggandakan porsi potongan tebal daging asap alami, dua porsi keju Amerika yang dilelehkan dan ditumpuk tinggi dengan dua telur lembut; semua di roti penghuni pertama kami', 'Rp 13.636', 'Breakfast', 'breakfast_SourdoughKing.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(6, 'Double Cheese Burger', 'Sandwich menyajikan dua roti bakar daging sapi bakar yang lezat dengan total lebih dari 1/2 lb * daging sapi, dilapisi dengan keju Amerika yang diiris meleleh, bawang karamel dan saus keju Amerika yang diracik pada roti biji wijen panggang kami.', 'Rp 42.727', 'Burger', 'burger_double_cheese_burger.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(7, 'Sprite', '© The Coca-Cola Company. \"Sprite\" adalah merek dagang terdaftar dari The Coca-Cola Company.', 'Rp 7.727', 'Minuman', 'minuman_sprite.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(8, 'Hamburger', 'Coba Hamburger kami, tanda tangan yang dibakar api. beef patty dengan lapisan sederhana acar yang dipotong keriting, mustar kuning, dan saus tomat pada roti biji wijen panggang.', 'Rp 25.454', 'Burger', 'burger_hamburger.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(9, 'WHOPPER', 'Sandwich WHOPPER® kami adalah ¼ lb * daging sapi bakar-bakar yang gurih dengan tomat juicy, selada segar, krim mayones, saus tomat, acar renyah, dan irisan bawang putih pada roti biji wijen yang lembut.', 'Rp 39.090', 'Burger', 'burger_WHOPPER.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(10, 'Bacon Burger', 'BBQ Bacon Burger Sandwich kami memiliki ¼ lb * daging panggang bakar yang gurih, dengan topping daging asap tebal, keju Amerika yang meleleh, irisan selada segar, mayo krim, tomat matang, saus tomat, bawang, acar renyah, dan lapisan saus bbq manis dan berasap, semua pada roti biji wijen yang hangat, panggang, wijen.', 'Rp 46.363', 'Burger', 'burger_bacon.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(11, 'Air Putih', 'Nestlé® Pure Life® Purified Water, air kemasan eksklusif, adalah cara yang keren dan menyegarkan untuk mencuci favorit tanda tangan Anda.', 'Rp 7.272', 'Minuman', 'minuman_air_putih.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(12, 'Frozen Coke', '© The Coca-Cola Company. \"Frozen Coke\" adalah Coca-Cola beku.', 'Rp 10.909', 'Minuman', 'minuman_frozen_coke.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(13, 'Chocolate Sundae', 'Keren dan lembut dengan coklat fudge swirl, kami membuat HERSHEY\'S Chocolate Fudge Sundae dilengkapi dengan Soft Vanve beludru kami.', 'Rp 11.818', 'Dessert', 'dessert_coklat_sundae.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(14, 'Cookies', 'Kue yang lezat dari OTIS SPUNKMEYER® Chocolate Chip kami sarat dengan chip cokelat yang meleleh dan dipanggang setiap hari untuk kesempurnaan.', 'Rp 10.909', 'Dessert', 'dessert_cookies.png', '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(15, 'Oreo Cheese Cake', 'OREO® Cookie Cheesecake kami menyajikan cheesecake krim-gaya pada kerak kue OREO®, dicampur dengan potongan kue OREO® asli.\r\n', 'Rp 15.454', 'Dessert', 'dessert_oreo_cheesecake.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(16, 'Strawberry Shake', 'Bersenang-senanglah dengan Hand Spun Shake Strawberry yang creamy. Velvety vanilla soft serve dan saus strawberry dicampur dengan sempurna dan diakhiri dengan topping kocok manis hanya untuk Anda.', 'Rp 13.636', 'Dessert', 'dessert_strawberr_shake.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(17, 'Twix Pie', 'Pie yang dibuat dengan TWIX® memiliki filling karamel kental berwarna krem dengan potongan TWIX® Bars, semuanya bertumpu pada remah remah vanilla.', 'Rp 14.545', 'Dessert', 'dessert_twixpie.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(18, 'Chicken Club Salad', 'Salad Chicken Club kami adalah campuran romaine hijau renyah, daun hijau dan selada radicchio, potongan daging asap tebal, keju cheddar parut, tomat matang, dan crouton bawang putih mentega.', 'Rp 19.090', 'Salad', 'salad_ChickenClubSalad.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(19, 'Eggnormous Burrito', 'Menampilkan sosis gurih, irisan daging asap tebal, telur tebal, dengan saus Queso, coklat hash emas, ditambah saus pedas yang kental yang dibungkus dengan tortilla tepung hangat dan disajikan', 'Rp 16.363', 'Breakfast', 'breakfast_EggnormousBurrito.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(20, 'Garden Side Salad', 'Salad Sisi Taman kami adalah perpaduan selada premium yang dihiasi dengan tomat berair, crouton bergaya rumahan, medley tiga keju, dan pilihan salad salad KEN\'S. Informasi Nutrisi tidak mence', 'Rp 20.909', 'Salad', 'salad_GardenSideSalad.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(21, 'Hashbrowns', 'Buat pagi Anda mendesis dengan sisi kecil tanda tangan kami yang renyah, Golden Hash Browns. Informasi nutrisi mencerminkan ukuran sedang.', 'Rp 9.090', 'Breakfast', 'breakfast_Hashbrowns.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(22, 'Pancakes dan Sosis', 'Segar dari dapur, Pancake & Sausage Platter kami disajikan dengan tiga pancake lembut yang ditaburi sirup manis dan sisi sosis gurih yang gurih.', 'Rp 12.727', 'Breakfast', 'breakfast_PancakesandSausages.png', '2018-11-14 15:10:19', '2018-11-14 15:10:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `isi_komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_pelanggan`, `isi_komentar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aplikasinya bagus mudah digunakan. Saya jadi tahu semua menu yang ada di restoran', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(2, 1, 'Mantap sekali ini memang super bagus', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(3, 3, 'Keren bro', '2018-11-14 15:10:19', '2018-11-14 15:10:19'),
(4, 3, 'tes dari hp', '2018-11-18 12:16:47', '2018-11-18 12:16:47'),
(5, 3, 'halo', '2018-11-20 09:58:33', '2018-11-20 09:58:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id_pegawai` int(10) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_pegawai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `nama_pegawai`, `email_pegawai`, `username_pegawai`, `password_pegawai`, `foto_pegawai`, `created_at`, `updated_at`) VALUES
(1, 'Anak Agung Gede Agung', 'gungdegung@gmail.com', 'gungdegung', '3e3fd93fbd7877f2caa29042e4d68b9d', NULL, '2018-11-14 15:10:18', '2018-11-14 15:10:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_pelanggan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `email_pelanggan`, `username_pelanggan`, `password_pelanggan`, `foto_pelanggan`, `created_at`, `updated_at`) VALUES
(1, 'Putu Jhonarendra', 'jhonarendra@gmail.com', 'jhonarendra', 'f80cdc281e09fb8f69607830dd9586c4', NULL, '2018-11-14 15:10:18', '2018-11-14 15:10:18'),
(2, 'his', 'hus', 'hus', 'ee4b742d5fc2159c78cd15cef9d238d1', NULL, '2018-11-15 20:02:47', '2018-11-15 20:02:47'),
(3, 'jho', 'jho', 'jho', '1427e904d3da3b984e2cd6e82d97d631', NULL, '2018-11-15 20:06:09', '2018-11-15 20:06:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tb_hidangan`
--
ALTER TABLE `tb_hidangan`
  ADD PRIMARY KEY (`id_hidangan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `tb_komentar_id_pelanggan_foreign` (`id_pelanggan`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_hidangan`
--
ALTER TABLE `tb_hidangan`
  MODIFY `id_hidangan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id_pegawai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `tb_komentar_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
