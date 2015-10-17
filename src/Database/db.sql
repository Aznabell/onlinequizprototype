-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 17. Oktober 2015 jam 16:46
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `awesome_db`
--
CREATE DATABASE `awesome_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `awesome_db`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_class`
--

CREATE TABLE IF NOT EXISTS `tb_class` (
  `id_class` int(12) NOT NULL AUTO_INCREMENT,
  `class_level` int(10) NOT NULL,
  `class_level_id` int(30) NOT NULL,
  `soal` varchar(256) NOT NULL,
  `kunci_jawaban` varchar(1) NOT NULL,
  PRIMARY KEY (`id_class`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `class_level`, `class_level_id`, `soal`, `kunci_jawaban`) VALUES
(1, 1, 1, 'Class 1 Soal 1', 'A'),
(2, 1, 2, 'Class 1 Soal 2', 'A'),
(3, 2, 1, 'Class 2 Soal 1', 'B'),
(4, 2, 2, 'Class 2 Soal 2', 'D'),
(5, 3, 1, 'Class 3 Soal 1', 'A'),
(6, 3, 2, 'Class 3 Soal 2', 'C'),
(7, 4, 1, 'Class 4 Soal 1', 'C'),
(8, 4, 2, 'Class 4 Soal 2', 'D'),
(9, 1, 3, 'Class 1 Soal 3', 'C'),
(10, 1, 4, 'Class 1 Soal 4', 'B'),
(11, 1, 5, 'Class 1 Soal 5', 'C'),
(12, 1, 6, 'Class 1 Soal 6', 'B'),
(13, 3, 3, 'Class 3 Soal 2', 'A'),
(14, 2, 3, 'Class 2 Soal 3', 'B'),
(15, 2, 4, 'Class 2 Soal 4', 'D'),
(16, 2, 5, 'Class 2 Soal 5', 'A'),
(17, 2, 6, 'Class 2 Soal 6', 'A'),
(18, 3, 4, 'Class 3 Soal 4', 'D'),
(19, 3, 5, 'Class 3 Soal 5', 'A'),
(20, 3, 6, 'Class 3 Soal 6', 'D'),
(21, 4, 3, 'Class 4 Soal 3', 'B'),
(22, 4, 4, 'Class 4 Soal 4', 'A'),
(23, 4, 5, 'Class 4 Soal 5', 'D'),
(24, 4, 6, 'Class 4 Soal 6', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE IF NOT EXISTS `tb_jawaban` (
  `id_jawaban` int(12) NOT NULL AUTO_INCREMENT,
  `id_user` int(12) NOT NULL,
  `jawaban` varchar(128) NOT NULL,
  `id_quiz` int(12) NOT NULL,
  PRIMARY KEY (`id_jawaban`),
  UNIQUE KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_skor`
--

CREATE TABLE IF NOT EXISTS `tb_skor` (
  `id_skor` int(12) NOT NULL AUTO_INCREMENT,
  `skor` int(10) NOT NULL,
  PRIMARY KEY (`id_skor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_store`
--

CREATE TABLE IF NOT EXISTS `tb_store` (
  `id_item` int(12) NOT NULL AUTO_INCREMENT,
  `nama_item` varchar(32) NOT NULL,
  `harga_item` varchar(32) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `imagesrc` varchar(30) NOT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_store`
--

INSERT INTO `tb_store` (`id_item`, `nama_item`, `harga_item`, `deskripsi`, `imagesrc`) VALUES
(1, 'Class 2 Unlock', '200', 'Item untuk membuka Class ke 2', 'img/class2unlockimg.png'),
(2, 'class 3 unlock', '200', 'item untuk membuka Class ke 3, dibutuhkan Class ke 2 untuk terbuka terlebih dahulu', 'img/class3unlockimg.png'),
(3, 'Class 4 Unlock', '200', 'Item untuk membuka Class ke 4, dibutuhkan Class ke 3 untuk terbuka terlebih dahulu', 'img/class4unlockimg.png'),
(4, 'Puppy Image', '200', 'mengganti profile image menjadi gambar guguk', 'img/puppy.gif'),
(5, 'nama item', 'harga item', 'deskripsi item', 'img/itemimg.png'),
(6, 'nama item ', 'harga item', 'deskripsi item', 'img/itemimg.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `id_transaksi` int(12) NOT NULL AUTO_INCREMENT,
  `id_user` int(12) NOT NULL,
  `id_item` int(12) NOT NULL,
  `waktu_transaksi` date NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_user`, `id_item`, `waktu_transaksi`) VALUES
(1, 2, 2, '2015-06-01'),
(6, 2, 2, '2015-06-14'),
(7, 2, 0, '2015-06-14'),
(8, 2, 0, '2015-06-14'),
(9, 2, 0, '2015-06-14'),
(10, 2, 0, '2015-06-14'),
(11, 2, 0, '2015-06-14'),
(12, 4, 0, '2015-06-22'),
(13, 4, 0, '2015-06-22'),
(14, 4, 0, '2015-06-22'),
(15, 4, 0, '2015-06-22'),
(16, 4, 0, '2015-06-22'),
(17, 4, 0, '2015-06-22'),
(18, 4, 0, '2015-06-22'),
(19, 3, 0, '2015-06-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `class` varchar(64) NOT NULL DEFAULT '1',
  `experience` int(64) DEFAULT '0',
  `gold` int(64) NOT NULL DEFAULT '0',
  `skor` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `password`, `nama`, `class`, `experience`, `gold`, `skor`) VALUES
(2, 'sss', 'ame', '2', 25, 45, 0),
(3, 'password', 'xantra', '1', 118, 180, 30),
(4, 'indra123', '', '4', 88, 280, 84),
(5, 'mantra123', 'mantra', '1', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_activity`
--

CREATE TABLE IF NOT EXISTS `user_activity` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `activity` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `user_activity`
--

INSERT INTO `user_activity` (`id`, `user_id`, `user_name`, `activity`) VALUES
(1, 2, 'ame', 'Obtaind Puppy profile'),
(2, 4, 'indro', 'Cleared Class Level 1'),
(3, 4, 'indro', 'Cleared Class Level 1'),
(4, 4, 'indro', 'Cleared Class Level 1'),
(5, 4, 'indro', 'Cleared Class Level 1'),
(6, 4, 'indro', 'Obtained profile Picture Puppy'),
(7, 4, 'indro', 'Obtained profile Picture Puppy'),
(8, 4, 'indro', 'Obtained profile Picture Puppy'),
(9, 4, 'indro', 'Obtained profile Picture Puppy'),
(10, 4, 'indro', 'Cleared class'),
(11, 4, 'indro', 'Cleared class'),
(12, 4, 'indro', 'Cleared class'),
(13, 4, 'indro', 'Cleared class'),
(14, 4, 'indro', 'Cleared class'),
(15, 4, 'indro', 'Cleared class'),
(16, 4, 'indro', 'Unlocked Class level 3'),
(17, 4, 'indro', 'Cleared class 3'),
(18, 4, 'indro', 'Unlocked Class level 4'),
(19, 4, 'indro', 'Cleared class 3'),
(20, 4, 'indro', 'Cleared class 3'),
(21, 4, 'indro', 'Cleared class 3'),
(22, 4, 'indro', 'Cleared class 3'),
(23, 4, 'indro', 'Cleared class 3'),
(24, 3, 'xantra', 'Cleared class 1'),
(25, 3, 'xantra', 'Cleared class 1'),
(26, 3, 'xantra', 'Cleared class 1'),
(27, 3, 'xantra', 'Cleared class 1'),
(28, 3, 'xantra', 'Cleared class 1'),
(29, 3, 'xantra', 'Cleared class 1'),
(30, 3, 'xantra', 'Obtained profile Picture Puppy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `user_id` int(12) NOT NULL,
  `pekerjaan` varchar(22) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `alamat` varchar(60) DEFAULT NULL,
  `current_class` int(1) NOT NULL DEFAULT '1',
  `imgsrc` varchar(30) NOT NULL DEFAULT 'img/profileimg.png',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_data`
--

INSERT INTO `user_data` (`user_id`, `pekerjaan`, `telp`, `email`, `alamat`, `current_class`, `imgsrc`) VALUES
(1, NULL, NULL, NULL, NULL, 1, 'img/profileimg.png'),
(2, 'tester', '13409189', 'ame@mail.com', 'jl. pojok nanti', 1, 'img/puppy.gif'),
(3, 'jobless', '085800000000', 'xantra@mail.com', 'jl. pojok nanti', 1, 'img/puppy.gif'),
(4, '', '', '', '', 1, 'img/puppy.gif'),
(5, NULL, NULL, NULL, NULL, 1, 'img/profileimg.png');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD CONSTRAINT `tb_jawaban_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
