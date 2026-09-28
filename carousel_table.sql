-- ============================================
-- Tabel: carousel (Popup Beranda Foto & Video)
-- ============================================

USE bapenda;

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `tipe` enum('image','video') NOT NULL DEFAULT 'image',
  `file_media` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
