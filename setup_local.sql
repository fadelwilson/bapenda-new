-- ============================================================
-- Setup Database BAPENDA untuk Lokal (Laragon)
-- Jalankan: mysql -u root < setup_local.sql
-- ============================================================

CREATE DATABASE IF NOT EXISTS `bapenda` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE bapenda;

-- ----------------------------
-- Tabel: user_role
-- ----------------------------
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user_role` (`id`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'Operator')
ON DUPLICATE KEY UPDATE `nama_role` = VALUES(`nama_role`);

-- ----------------------------
-- Tabel: user
-- ----------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Password: admin123  (di-hash dengan password_hash)
INSERT INTO `user` (`id`, `username`, `password`, `role_id`, `created_at`) VALUES
(1, 'admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, NOW())
ON DUPLICATE KEY UPDATE `username` = VALUES(`username`);

-- ----------------------------
-- Tabel: header
-- ----------------------------
CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `sub_judul` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `foto_header` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `header` (`id`, `judul`, `sub_judul`, `logo`, `foto_header`, `alamat`, `no_telp`, `email`, `facebook`, `instagram`, `youtube`, `twitter`) VALUES
(1, 'BAPENDA Purwakarta', 'Badan Pendapatan Daerah Kabupaten Purwakarta', NULL, NULL, 'Jl. RE Martadinata No.1, Purwakarta', '(0264) 200228', 'bapenda@purwakartakab.go.id', 'https://facebook.com', 'https://instagram.com', 'https://youtube.com', 'https://x.com')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: galeri
-- ----------------------------
CREATE TABLE IF NOT EXISTS `galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Tabel: kegiatan
-- ----------------------------
CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Tabel: berita
-- ----------------------------
CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `berita` (`id`, `judul`, `foto`, `isi`, `tanggal`) VALUES
(1, 'Berita BAPENDA 1', NULL, 'Isi berita pertama BAPENDA Purwakarta', '2024-01-01'),
(2, 'Berita BAPENDA 2', NULL, 'Isi berita kedua BAPENDA Purwakarta', '2024-01-02'),
(3, 'Berita BAPENDA 3', NULL, 'Isi berita ketiga BAPENDA Purwakarta', '2024-01-03')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: seputar_informasi
-- ----------------------------
CREATE TABLE IF NOT EXISTS `seputar_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_seputar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `seputar_informasi` (`id`, `judul`, `isi`) VALUES
(1, 'Informasi BAPENDA', 'Seputar informasi layanan BAPENDA Purwakarta')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: seputar_alur
-- ----------------------------
CREATE TABLE IF NOT EXISTS `seputar_alur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `foto_alur` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `seputar_alur` (`id`, `judul`, `isi`) VALUES
(1, 'Alur Pelayanan', 'Alur pelayanan BAPENDA Purwakarta')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: seputar_visi
-- ----------------------------
CREATE TABLE IF NOT EXISTS `seputar_visi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto_visi` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `seputar_visi` (`id`, `judul`, `isi`) VALUES
(1, 'Visi', 'Terwujudnya pengelolaan pendapatan daerah yang optimal, transparan, dan akuntabel')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: seputar_misi
-- ----------------------------
CREATE TABLE IF NOT EXISTS `seputar_misi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto_misi` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `seputar_misi` (`id`, `judul`, `isi`) VALUES
(1, 'Misi', 'Meningkatkan kualitas pelayanan pajak daerah kepada masyarakat')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: seputar_ppid
-- ----------------------------
CREATE TABLE IF NOT EXISTS `seputar_ppid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `seputar_ppid` (`id`, `judul`, `keterangan`) VALUES
(1, 'Dokumen PPID', 'Dokumen informasi publik BAPENDA')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: formulir
-- ----------------------------
CREATE TABLE IF NOT EXISTS `formulir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `formulir` (`id`, `judul`, `file`, `keterangan`) VALUES
(1, 'Formulir Pendaftaran', NULL, 'Formulir pendaftaran wajib pajak')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: tentang_kami
-- ----------------------------
CREATE TABLE IF NOT EXISTS `tentang_kami` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tentang_kami` (`id`, `judul`, `isi`) VALUES
(1, 'Tentang BAPENDA', 'BAPENDA Purwakarta adalah Badan Pendapatan Daerah Kabupaten Purwakarta yang bertugas mengelola pendapatan daerah.')
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: struktur
-- ----------------------------
CREATE TABLE IF NOT EXISTS `struktur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `struktur` (`id`, `judul`, `foto`) VALUES
(1, 'Struktur Organisasi BAPENDA', NULL)
ON DUPLICATE KEY UPDATE `judul` = VALUES(`judul`);

-- ----------------------------
-- Tabel: produk_hukum
-- ----------------------------
CREATE TABLE IF NOT EXISTS `produk_hukum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ket` varchar(255) DEFAULT NULL,
  `file_uu` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `produk_hukum` (`id`, `ket`, `file_uu`) VALUES
(1, 'Perda No. 1 Tahun 2023 tentang Pajak Daerah', NULL),
(2, 'Perda No. 2 Tahun 2023 tentang Retribusi Daerah', NULL),
(3, 'Perbup No. 10 Tahun 2023 tentang Tata Cara Pemungutan Pajak', NULL)
ON DUPLICATE KEY UPDATE `ket` = VALUES(`ket`);

-- ----------------------------
-- Tabel: saran
-- ----------------------------
CREATE TABLE IF NOT EXISTS `saran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kritik` text DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Tabel: sejarah
-- ----------------------------
CREATE TABLE IF NOT EXISTS `sejarah` (
  `id_sejarah` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ============================================================
-- Selesai! Database bapenda siap digunakan.
-- User login: admin / password
-- ============================================================
