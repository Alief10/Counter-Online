-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 02. Oktober 2017 jam 01:42
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_about`
--

CREATE TABLE IF NOT EXISTS `tb_about` (
  `id_about` int(10) NOT NULL AUTO_INCREMENT,
  `ket` int(11) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_login`, `nama`, `password`, `level_user`) VALUES
(0, 'ridwan', 'ridwan', 'admin'),
(0, 'wildan', 'wildan', 'admin'),
(2, 'alief', 'alief', 'admin'),
(22, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE IF NOT EXISTS `tb_desa` (
  `id_desa` int(10) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(30) NOT NULL,
  `nama_desa` varchar(50) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  PRIMARY KEY (`id_desa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id_desa`, `nama_file`, `nama_desa`, `id_kecamatan`) VALUES
(1, 'bag1 ok.jpg', 'Tanjung Kulon', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kecamatan`
--

CREATE TABLE IF NOT EXISTS `tb_kecamatan` (
  `id_kecamatan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(50) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `id_peta` int(10) NOT NULL,
  PRIMARY KEY (`id_kecamatan`),
  UNIQUE KEY `id_peta` (`id_peta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tb_kecamatan`
--

INSERT INTO `tb_kecamatan` (`id_kecamatan`, `nama_file`, `nama_kecamatan`, `keterangan`, `id_peta`) VALUES
(2, 'hp iphone.jpg', 'kec kajen', 'terletak di kabupaten', 3455);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_peta`
--

CREATE TABLE IF NOT EXISTS `tb_peta` (
  `id_peta` int(10) NOT NULL AUTO_INCREMENT,
  `koordinat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_peta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id_produk` int(10) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `nama_ukm` varchar(50) NOT NULL,
  `id_kecamatan` int(10) NOT NULL,
  `id_desa` int(10) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk`, `keterangan`, `nama_file`, `nama_ukm`, `id_kecamatan`, `id_desa`) VALUES
(1, 'kripik', 'terbuat dari ubi', 'IMG-20170905-WA0002.jpg', 'maju jaya', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sejarah`
--

CREATE TABLE IF NOT EXISTS `tb_sejarah` (
  `id_sejarah` int(10) NOT NULL AUTO_INCREMENT,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_sejarah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukm`
--

CREATE TABLE IF NOT EXISTS `tb_ukm` (
  `id_ukm` int(10) NOT NULL AUTO_INCREMENT,
  `nama_ukm` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ukm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
