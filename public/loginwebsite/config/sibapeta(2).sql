-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2022 pada 08.21
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibapeta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keterangan_penelitian`
--

CREATE TABLE `keterangan_penelitian` (
  `id_ket` int(11) NOT NULL,
  `thn_pelayanan` varchar(255) NOT NULL,
  `bundel_pelayanan` varchar(255) NOT NULL,
  `no_urut_pelayanan` varchar(255) NOT NULL,
  `ket_desa` int(1) NOT NULL,
  `fc_shm` int(1) NOT NULL,
  `fc_ajb` int(1) NOT NULL,
  `srt_sblm_akta` int(1) NOT NULL,
  `srt_hak_fisik` int(1) NOT NULL,
  `ba_lap` int(1) NOT NULL,
  `nop_tetangga` int(1) NOT NULL,
  `fc_ktp_pemohon` int(1) NOT NULL,
  `fc_ktp_penjual` int(1) NOT NULL,
  `srt_tanggung_jwb` int(1) NOT NULL,
  `dftr_riw_tnh` int(1) NOT NULL,
  `lainnya` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_sppt_baru2`
--

CREATE TABLE `penelitian_sppt_baru2` (
  `id_pen_sppt_br2` int(11) NOT NULL,
  `thn_pelayanan` varchar(255) NOT NULL,
  `bundel_pelayanan` varchar(255) NOT NULL,
  `no_urut_pelayanan` varchar(255) NOT NULL,
  `kd_propinsi_br2` varchar(123) NOT NULL,
  `kd_dati2_br2` varchar(123) NOT NULL,
  `kd_kecamatan_br2` varchar(123) NOT NULL,
  `kd_kelurahan_br2` varchar(123) NOT NULL,
  `kd_blok_br2` varchar(123) NOT NULL,
  `no_urut_br2` varchar(123) NOT NULL,
  `kd_jns_op_br2` varchar(123) NOT NULL,
  `alm_wp_br2` varchar(123) NOT NULL,
  `alm_op_br2` varchar(123) NOT NULL,
  `luas_tnh_br2` varchar(123) NOT NULL,
  `znt_br2` varchar(123) NOT NULL,
  `njop_bumi_br2` varchar(123) NOT NULL,
  `luas_bng_br2` varchar(123) NOT NULL,
  `nm_wp_br2` varchar(123) NOT NULL,
  `dsr_permohonan_br2` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian_sppt_baru3`
--

CREATE TABLE `penelitian_sppt_baru3` (
  `id_pen_sppt_br3` int(11) NOT NULL,
  `thn_pelayanan` varchar(255) NOT NULL,
  `bundel_pelayanan` varchar(255) NOT NULL,
  `no_urut_pelayanan` varchar(255) NOT NULL,
  `kd_propinsi_br3` varchar(123) NOT NULL,
  `kd_dati2_br3` varchar(123) NOT NULL,
  `kd_kecamatan_br3` varchar(123) NOT NULL,
  `kd_kelurahan_br3` varchar(123) NOT NULL,
  `kd_blok_br3` varchar(123) NOT NULL,
  `no_urut_br3` varchar(123) NOT NULL,
  `kd_jns_op_br3` varchar(123) NOT NULL,
  `alm_wp_br3` varchar(123) NOT NULL,
  `alm_op_br3` varchar(123) NOT NULL,
  `luas_tnh_br3` varchar(123) NOT NULL,
  `znt_br3` varchar(123) NOT NULL,
  `njop_bumi_br3` varchar(123) NOT NULL,
  `luas_bng_br3` varchar(123) NOT NULL,
  `nm_wp_br3` varchar(123) NOT NULL,
  `dsr_permohonan_br3` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan`
--

CREATE TABLE `permohonan` (
  `id_permohonan` int(11) NOT NULL,
  `thn_pelayanan` varchar(123) NOT NULL,
  `bundel_pelayanan` varchar(123) NOT NULL,
  `no_urut_pelayanan` varchar(123) NOT NULL,
  `kd_propinsi_lm` varchar(123) NOT NULL,
  `kd_dati2_lm` varchar(123) NOT NULL,
  `kd_kecamatan_lm` varchar(123) NOT NULL,
  `kd_kelurahan_lm` varchar(123) NOT NULL,
  `kd_blok_lm` varchar(123) NOT NULL,
  `no_urut_lm` varchar(123) NOT NULL,
  `kd_jns_op_lm` varchar(123) NOT NULL,
  `alm_wp_lm` varchar(123) NOT NULL,
  `alm_op_lm` varchar(123) NOT NULL,
  `luas_tnh_lm` varchar(123) NOT NULL,
  `znt_lm` varchar(123) NOT NULL,
  `njop_bumi_lm` varchar(123) NOT NULL,
  `luas_bng_lm` varchar(123) NOT NULL,
  `nm_wp_lm` varchar(123) NOT NULL,
  `dsr_permohonan_lm` varchar(123) NOT NULL,
  `kd_propinsi_br` varchar(123) NOT NULL,
  `kd_dati2_br` varchar(123) NOT NULL,
  `kd_kecamatan_br` varchar(123) NOT NULL,
  `kd_kelurahan_br` varchar(123) NOT NULL,
  `kd_blok_br` varchar(123) NOT NULL,
  `no_urut_br` varchar(123) NOT NULL,
  `kd_jns_op_br` varchar(123) NOT NULL,
  `alm_wp_br` varchar(123) NOT NULL,
  `alm_op_br` varchar(123) NOT NULL,
  `luas_tnh_br` varchar(123) NOT NULL,
  `znt_br` varchar(123) NOT NULL,
  `njop_bumi_br` varchar(123) NOT NULL,
  `luas_bng_br` varchar(123) NOT NULL,
  `nm_wp_br` varchar(123) NOT NULL,
  `dsr_permohonan_br` varchar(123) NOT NULL,
  `terbit_sppt` varchar(132) NOT NULL,
  `no_ba` varchar(123) NOT NULL,
  `no_surat_tugas` varchar(123) NOT NULL,
  `nm_pemohon` varchar(123) NOT NULL,
  `jns_permohonan` varchar(123) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `sket_objek` varchar(255) NOT NULL,
  `nip_subid` varchar(255) NOT NULL,
  `nip_pengelola` varchar(255) NOT NULL,
  `nip_perekam` varchar(255) NOT NULL,
  `nip_kabid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_jns_permohonan`
--

CREATE TABLE `ref_jns_permohonan` (
  `id` int(11) NOT NULL,
  `jns_permohonan` varchar(123) NOT NULL,
  `nm_jns_permohonan` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_kabid`
--

CREATE TABLE `ref_kabid` (
  `id` int(11) NOT NULL,
  `nip_kabid` varchar(122) NOT NULL,
  `nm_kabid` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pegawai`
--

CREATE TABLE `ref_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nm_pegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_pengelola`
--

CREATE TABLE `ref_pengelola` (
  `id` int(11) NOT NULL,
  `nip_pengelola` varchar(122) NOT NULL,
  `nm_pengelola` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_subid_pendanil`
--

CREATE TABLE `ref_subid_pendanil` (
  `id` int(11) NOT NULL,
  `nip_subid` varchar(122) NOT NULL,
  `nm_subid` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(126) NOT NULL,
  `date_created` varchar(128) DEFAULT NULL,
  `jabatan` varchar(126) NOT NULL,
  `nip_perekam` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keterangan_penelitian`
--
ALTER TABLE `keterangan_penelitian`
  ADD PRIMARY KEY (`id_ket`);

--
-- Indexes for table `penelitian_sppt_baru2`
--
ALTER TABLE `penelitian_sppt_baru2`
  ADD PRIMARY KEY (`id_pen_sppt_br2`);

--
-- Indexes for table `penelitian_sppt_baru3`
--
ALTER TABLE `penelitian_sppt_baru3`
  ADD PRIMARY KEY (`id_pen_sppt_br3`);

--
-- Indexes for table `permohonan`
--
ALTER TABLE `permohonan`
  ADD PRIMARY KEY (`id_permohonan`);

--
-- Indexes for table `ref_jns_permohonan`
--
ALTER TABLE `ref_jns_permohonan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_kabid`
--
ALTER TABLE `ref_kabid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_pegawai`
--
ALTER TABLE `ref_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `ref_pengelola`
--
ALTER TABLE `ref_pengelola`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_subid_pendanil`
--
ALTER TABLE `ref_subid_pendanil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keterangan_penelitian`
--
ALTER TABLE `keterangan_penelitian`
  MODIFY `id_ket` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_sppt_baru2`
--
ALTER TABLE `penelitian_sppt_baru2`
  MODIFY `id_pen_sppt_br2` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penelitian_sppt_baru3`
--
ALTER TABLE `penelitian_sppt_baru3`
  MODIFY `id_pen_sppt_br3` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permohonan`
--
ALTER TABLE `permohonan`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2614;
--
-- AUTO_INCREMENT for table `ref_jns_permohonan`
--
ALTER TABLE `ref_jns_permohonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_kabid`
--
ALTER TABLE `ref_kabid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ref_pegawai`
--
ALTER TABLE `ref_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ref_pengelola`
--
ALTER TABLE `ref_pengelola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ref_subid_pendanil`
--
ALTER TABLE `ref_subid_pendanil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
