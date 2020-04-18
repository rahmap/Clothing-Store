-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 07.59
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motoliciousx`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(50) NOT NULL,
  `slug` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `slug`) VALUES
(1, 'Kaos', 'kaos'),
(2, 'Celana', 'celana'),
(3, 'Sandal', 'sandal'),
(4, 'Topi', 'topi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `judul_produk` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `diskon_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `keterangan_tumb` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `brand_produk` varchar(50) NOT NULL,
  `foto_depan` varchar(100) NOT NULL,
  `foto_belakang` varchar(100) NOT NULL,
  `fr_depan` varchar(100) NOT NULL,
  `fr_belakang` varchar(100) NOT NULL,
  `fk_kategori` int(11) DEFAULT NULL,
  `create_at` int(11) NOT NULL,
  `delete_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `judul_produk`, `slug`, `diskon_produk`, `harga_produk`, `keterangan_tumb`, `keterangan`, `brand_produk`, `foto_depan`, `foto_belakang`, `fr_depan`, `fr_belakang`, `fk_kategori`, `create_at`, `delete_at`) VALUES
(7, 'Nimco Limited Edition', 'nimco-limited-edition', 8, 75000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Nimco', 'FD_1587069226_793c24a7b1d2cb6cb2c0.png', 'FB_1587069227_3310db702b8825bb502e.png', 'FRD_1587069227_cd81a5c1e957dc49941c.png', 'FRB_1587069228_217d373a83f600323aeb.png', 1, 1587113500, 0),
(8, 'Absolute New Edition', 'absolute-new-edition', 0, 190000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Absolute', 'FD_1587070609_74918b2d7769b8916008.png', 'FB_1587070610_0a58a70ad41c48107cc8.png', 'FRD_1587070610_bca11b733fd5847be10a.png', 'FRB_1587070610_a366156d4026486e0acd.png', 1, 1587113700, 0),
(9, 'Kaos 308 Absolute', 'kaos-308-absolute', 5, 200000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Absolute', 'FD_1587116506_33ec333e3ce077291c07.png', 'FB_1587116506_f4b1b5d516f3878dc98d.png', 'FRD_1587116507_7da0f2e089300ced6fb8.png', 'FRB_1587116507_a3cd5c9d17b2c03b62b7.png', 1, 1587116508, 0),
(10, 'Nimco Limited Edition New', 'nimco-limited-edition-new', 5, 79000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Nimco', 'FD_1587069226_793c24a7b1d2cb6cb2c0.png', 'FB_1587069227_3310db702b8825bb502e.png', 'FRD_1587069227_cd81a5c1e957dc49941c.png', 'FRB_1587069228_217d373a83f600323aeb.png', 1, 1587113500, 0),
(11, 'Absolute New Edition Original', 'absolute-new-edition-original', 0, 120000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Absolute', 'FD_1587070609_74918b2d7769b8916008.png', 'FB_1587070610_0a58a70ad41c48107cc8.png', 'FRD_1587070610_bca11b733fd5847be10a.png', 'FRB_1587070610_a366156d4026486e0acd.png', 1, 1587113700, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `fk_kategori` (`fk_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`fk_kategori`) REFERENCES `kategori` (`kategori_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
