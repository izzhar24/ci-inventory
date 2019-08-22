-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2019 pada 14.13
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', 'Superadmin for all permission test'),
(2, 'admin', 'General User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_id` varchar(15) NOT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_satuan` varchar(30) DEFAULT NULL,
  `barang_harpok` double DEFAULT NULL,
  `barang_harjul` double DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `barang_stok` int(11) DEFAULT 0,
  `barang_min_stok` int(11) DEFAULT 0,
  `barang_tgl_input` timestamp NULL DEFAULT current_timestamp(),
  `barang_tgl_last_update` datetime DEFAULT NULL,
  `barang_kategori_id` int(11) DEFAULT NULL,
  `barang_user_id` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`barang_id`, `barang_nama`, `barang_satuan`, `barang_harpok`, `barang_harjul`, `barang_harjul_grosir`, `barang_stok`, `barang_min_stok`, `barang_tgl_input`, `barang_tgl_last_update`, `barang_kategori_id`, `barang_user_id`, `status`) VALUES
('BR000001', 'Klem Kabel IKK No 7', 'Bks', 15000, 20000, 17000, 5, 1, '2016-11-22 23:30:50', '2019-08-22 02:14:29', 11, 1, 1),
('BR000002', 'Klem Kabel IKK No 8', 'Bks', 16000, 20000, 18000, 15, 1, '2016-11-22 23:32:02', '2019-08-22 02:14:35', 11, 1, 1),
('BR000003', 'Klem Kabel IKK No 9', 'Bks', 16000, 22000, 18500, 2, 1, '2016-11-22 23:33:08', NULL, 11, 1, 1),
('BR000004', 'Klem Kabel IKK No 10', 'Bks', 17000, 24000, 19000, 21, 1, '2016-11-22 23:34:19', '2019-08-22 02:14:40', 11, 1, 1),
('BR000005', 'Klem kabel dms No 6', 'Bks', 3000, 5000, 4000, 12, 1, '2016-11-22 23:35:23', '2019-08-22 02:14:48', 10, 1, 1),
('BR000006', 'Klem kabel dms No 7', 'Bks', 3500, 6000, 4500, 2, 1, '2016-11-22 23:36:23', NULL, 10, 1, 1),
('BR000007', 'Klem kabel dms No 8', 'Bks', 4000, 7000, 5000, 6, 1, '2016-11-22 23:37:20', '2019-08-22 02:15:05', 10, 1, 1),
('BR000008', 'Klem kabel dms No 9', 'Bks', 4500, 8000, 5500, 4, 1, '2016-11-22 23:38:36', '2019-08-22 02:14:54', 10, 1, 1),
('BR000009', 'Klem kabel dms No 10', 'Bks', 5000, 9000, 6000, 5, 1, '2016-11-22 23:39:24', '2019-08-22 02:14:59', 10, 1, 1),
('BR000010', 'Klem kabel Steel No 6', 'Bks', 3100, 6000, 4000, 10, 1, '2016-11-22 23:40:49', '2019-08-22 02:10:50', 9, 1, 1),
('BR000011', 'Klem kabel Steel No 7', 'Bks', 3400, 7000, 4500, 2, 1, '2016-11-22 23:41:43', NULL, 9, 1, 1),
('BR000012', 'Klem kabel Steel No 8', 'Bks', 4200, 8000, 5500, 17, 1, '2016-11-22 23:42:42', '2019-08-22 02:16:25', 9, 1, 1),
('BR000013', 'Klem kabel Steel No 9', 'Bks', 5000, 9000, 6000, 2, 1, '2016-11-22 23:43:37', NULL, 9, 1, 1),
('BR000014', 'Klem kabel Steel No 10', 'Bks', 5750, 10000, 7000, 2, 1, '2016-11-22 23:44:49', NULL, 9, 1, 1),
('BR000015', 'Saklar Engkel Fonic B', 'PCS', 6750, 10000, 7250, 18, 1, '2016-11-22 23:46:15', '2019-08-22 02:16:05', 8, 1, 1),
('BR000016', 'Saklar Seri Fonic B', 'PCS', 8750, 12000, 9500, 25, 1, '2016-11-22 23:47:14', '2019-08-22 02:16:13', 8, 1, 1),
('BR000017', 'Saklar Tridel Fonic B', 'PCS', 9500, 15000, 11500, 2, 1, '2016-11-22 23:48:03', NULL, 8, 1, 1),
('BR000018', 'Saklar Engkel Fonic KK', 'PCS', 6750, 10000, 7250, 14, 1, '2016-11-22 23:48:47', '2019-08-22 02:15:52', 8, 1, 1),
('BR000019', 'Saklar Seri Fonic KK', 'PCS', 8750, 12000, 9500, 2, 1, '2016-11-22 23:49:55', NULL, 8, 1, 1),
('BR000020', 'Stok Kontak Fonic B', 'PCS', 8750, 12000, 9500, 8, 1, '2016-11-22 23:51:02', '2019-08-22 02:15:35', 8, 1, 1),
('BR000021', 'Stop Kontak Fonic KK', 'PCS', 8750, 12000, 9500, 9, 1, '2016-11-22 23:52:11', '2019-08-22 02:15:43', 8, 1, 1),
('BR000022', 'Saklar Engkel Sheineder B ', 'PCS', 14000, 18000, 15000, 2, 1, '2016-11-23 00:04:07', NULL, 7, 1, 1),
('BR000056', 'Antena Digital HD 12', 'PCS', 66000, 95000, 75000, 2, 1, '2016-11-23 16:53:21', NULL, 13, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`) VALUES
(5, 'Omi'),
(6, 'Visalux'),
(7, 'Sheineder'),
(8, 'Fonic'),
(9, 'Steel'),
(10, 'DMS'),
(11, 'IKK'),
(12, 'Voxel'),
(13, 'Antena'),
(14, 'Kabel Antena'),
(15, 'Power Supply'),
(16, 'RCA'),
(17, 'AC Cord'),
(18, 'Jack Antena '),
(19, 'Esenze'),
(20, 'Augen'),
(21, 'Itami'),
(22, 'Steker'),
(23, 'Pallas'),
(24, 'Stanco'),
(25, 'Flapon'),
(26, 'T Dos dan Rolen'),
(27, 'Tekong'),
(28, 'Maspion'),
(29, 'Kompos Gas'),
(30, 'Miyako'),
(31, 'Uticon'),
(32, 'Sekai'),
(33, 'Regancy'),
(34, 'Amasco'),
(35, 'Enter'),
(36, 'Licons'),
(37, 'Philips'),
(38, 'Nissan'),
(39, 'AMC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `suplier_id` int(11) NOT NULL,
  `suplier_nama` varchar(35) DEFAULT NULL,
  `suplier_alamat` varchar(60) DEFAULT NULL,
  `suplier_notelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$9CrXFPu9i445QgcomoGq4ecv/qiDKrdjUCcuzk5PeBkfZf4z6Hioq', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1566473618, 1, 'Admin', 'istrator', NULL, '0859450712632'),
(2, '::1', 'agus.firman@gmail.com', '$2y$10$qHmt9D7JHT2kAU5G9nFEFOD2bPT29saxzTpJIJgJOkQD4XhdhajNe', 'agus.firman@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566385240, 1566411501, 1, 'Agus', 'Firman', NULL, NULL),
(3, '::1', 'risna@gmail.com', '$2y$10$kZ6/ja1aeCKx7QYwMLXkyufHw1LGPCidw2kqjpr/qG5SeVxQwE36m', 'risna@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566412473, NULL, 1, 'Risna', 'Ahmad', NULL, '0823463425623'),
(4, '::1', 'wahyu@gmail.com', '$2y$10$8/Hmwf7DTiFhxGOyPgDa0.86rxEeH1ONgPqOU1JZq35BsaJ4NFUsC', 'wahyu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566412563, NULL, 1, 'Wahyu', 'Sujana', NULL, '087563783649'),
(5, '::1', 'nazwa@gmail.com', '$2y$10$ye0AKQKLPVbjJzTTkdBoIOVun.BOUVoKnnhyKU.v2t.zf6g6miUqy', 'nazwa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566472899, NULL, 1, 'Nazwa', 'Sihab', NULL, NULL),
(6, '::1', 'sarah@gmail.com', '$2y$10$N.9qfRAqoAKmx4RaALutYeW2GKnnT4PhNdhOnxC2KwyP2v6T2PW1O', 'sarah@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566473054, NULL, 1, 'Sarah', 'Sehan', NULL, NULL),
(7, '::1', 'andi@gmail.com', '$2y$10$U5PmxjmuspgGVq2FKuX/qu8ocVCH0gIYZJ/BGyZS4bLegkMcXOMbe', 'andi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1566473508, 1566473527, 1, 'Andi', 'Saja', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(6, 1, 1),
(3, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 5, 2),
(10, 6, 2),
(11, 7, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_kategori_id` (`barang_kategori_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`barang_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_barang_ibfk_2` FOREIGN KEY (`barang_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
