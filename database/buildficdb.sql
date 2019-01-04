-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2019 pada 10.30
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildficdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Abdur', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `background_path` varchar(35) NOT NULL,
  `tulisan_teratas` varchar(100) NOT NULL,
  `tulisan_tengah_1` varchar(100) NOT NULL,
  `tulisan_tengah_2` varchar(100) NOT NULL,
  `tulisan_bawah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`background_path`, `tulisan_teratas`, `tulisan_tengah_1`, `tulisan_tengah_2`, `tulisan_bawah`) VALUES
('upload/dapat_diupdate.jpg', 'Welcome to', 'Real', 'Factory', 'ini dari ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_a`
--

CREATE TABLE `top_a` (
  `id` int(11) NOT NULL,
  `tulisan_atas` varchar(100) NOT NULL,
  `tulisan_bawah` varchar(500) NOT NULL,
  `background_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_a`
--

INSERT INTO `top_a` (`id`, `tulisan_atas`, `tulisan_bawah`, `background_link`) VALUES
(1, 'Punctual Delivery Time', '99% Delivered On Time x', 'upload/top_a_gambar_1_bisa_diupdate.jpg'),
(2, 'High Technology Factory', '& Environment Friednly', 'upload/top_a_gambar_2_bisa_diupdate.jpg'),
(3, 'High Standard Labors', '99% Delivered On Time 2', 'upload/top_a_gambar_3_bisa_diupdate.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_b`
--

CREATE TABLE `top_b` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `path_icon` varchar(100) NOT NULL,
  `tulisan_dibawah` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_b`
--

INSERT INTO `top_b` (`id`, `judul`, `path_icon`, `tulisan_dibawah`) VALUES
(1, 'Coba ke - 3', 'upload/top_b_icon_bisa_diupdate.png', 'Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_c`
--

CREATE TABLE `top_c` (
  `id` int(11) NOT NULL,
  `tulisan` varchar(1000) NOT NULL,
  `background_path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_c`
--

INSERT INTO `top_c` (`id`, `tulisan`, `background_path`) VALUES
(1, 'This sentence has been changed from cms', 'upload/top_c_background_path_bisa_diupdate.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_d`
--

CREATE TABLE `top_d` (
  `id` int(11) NOT NULL,
  `background_path` varchar(200) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `tulisan` varchar(300) NOT NULL,
  `link` varchar(500) NOT NULL,
  `judul_teratas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_d`
--

INSERT INTO `top_d` (`id`, `background_path`, `judul`, `tulisan`, `link`, `judul_teratas`) VALUES
(1, '', 'Power test 379 O', 'High quality material produced by Real Factory backed by support of our expert consultants to fulfill a whole range of applications in the market.', '#', 'Product IT ,'),
(21, 'upload/top_d_background_path_21.jpg', 'fgfgf hhh wkwk', 'hghghad hgdhasdha', '#', ''),
(22, 'upload/top_d_background_path_22.jpg', 'ghghghghxcvxvfe fgsgfds', 'gfg rythefdbfd', '#', ''),
(24, 'upload/top_d_background_path_24.jpg', 'v', 'suka ati jhfjdhfkjdascd', '#', ''),
(25, 'upload/top_d_background_path_25.jpg', 'jhafdjs', 'fjkdhfdaf', '#', ''),
(26, 'upload/top_d_background_path_26.jpg', 'gdh', 'hghdgdh', '#', ''),
(27, 'upload/top_d_background_path_27.jpg', 'tes 3', 'fgfg', '#', ''),
(28, 'upload/top_d_background_path_28.jpg', 'ytytyt', 'ytytytyty', '#', ''),
(29, 'upload/top_d_background_path_29.jpg', 'tytty', 'ytyty', '#', ''),
(30, 'upload/top_d_background_path_30.jpg', 'ytyty', 'tytyt', '#', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_e`
--

CREATE TABLE `top_e` (
  `id` int(11) NOT NULL,
  `background_path` varchar(500) NOT NULL,
  `keterangan` varchar(10000) NOT NULL,
  `tulisan_di_dalam_kotak` varchar(500) NOT NULL,
  `judul_tulisan_di_bawah_kotak` varchar(500) NOT NULL,
  `tulisan_di_bawah_kotak_1` varchar(500) NOT NULL,
  `tulisan_di_bawah_kotak_2` varchar(500) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_e`
--

INSERT INTO `top_e` (`id`, `background_path`, `keterangan`, `tulisan_di_dalam_kotak`, `judul_tulisan_di_bawah_kotak`, `tulisan_di_bawah_kotak_1`, `tulisan_di_bawah_kotak_2`, `link`) VALUES
(1, 'upload/top_e_background_image_1_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_1 dengan panjang varchar 10000 12', '1.tulisan_di_dalam_kotak tes', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(2, 'upload/top_e_background_image_2_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_2 dengan panjang varchar 10000 22', '2.tulisan_di_dalam_kotak tes 2', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_', 'tulisan_di_bawah_kotak_', 'portfolio.php'),
(3, 'upload/top_e_background_image_3_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_3 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(4, 'upload/top_e_background_image_4_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_4 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(5, 'upload/top_e_background_image_5_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_5 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(6, 'upload/top_e_background_image_6_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_6 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(7, 'upload/top_e_background_image_7_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_7 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak. tes 123', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(8, 'upload/top_e_background_image_8_bisa_diupdate.jpg', 'bla bla bla keterangan portfoloio_8 dengan panjang varchar 10000 ', 'tulisan_di_dalam_kotak', 'judul_tulisan_di_bawah_kotak', 'tulisan_di_bawah_kotak_1', 'tulisan_di_bawah_kotak_2', 'portfolio.php'),
(9, 'upload/top_e_background_image_30_bisa_diupdate.jpg', '', 'tes', '', '', '', 'portfolio.php'),
(44, 'upload/top_e_background_image_44_bisa_diupdate.jpg', 'ini bla bla bla keterangan portfoloio_1 dengan panjang varchar 10987', 'ini.tulisan_di_dalam_kotak tes', 'ini judul_tulisan_di_bawah_kotak', 'ini tulisan_di_bawah_kotak_1', 'ini tulisan_di_bawah_kotak_2', 'portfolio.php');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_e_kotak_kiri`
--

CREATE TABLE `top_e_kotak_kiri` (
  `id` int(11) NOT NULL,
  `background_path` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tulisan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_e_kotak_kiri`
--

INSERT INTO `top_e_kotak_kiri` (`id`, `background_path`, `judul`, `tulisan`) VALUES
(1, 'upload/top_e_gambar_sebelah_kiri.jpg', 'judul_dari_database', 'tulisan_dari_database');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_f_kotak_kanan`
--

CREATE TABLE `top_f_kotak_kanan` (
  `id` int(11) NOT NULL,
  `tulisan_besar` varchar(200) NOT NULL,
  `tulisan_kecil` varchar(1000) NOT NULL,
  `tulisan_di_tombol` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_f_kotak_kanan`
--

INSERT INTO `top_f_kotak_kanan` (`id`, `tulisan_besar`, `tulisan_kecil`, `tulisan_di_tombol`, `image_path`) VALUES
(1, 'Career & Jobs DB', 'Working at Real Factory means being able to commit resolutely to one thing and growing from it. As an individual and as a whole – in a family enterprise that creates fascinating products around the world. Once you experience it, you’ll want to stay. DB', 'See opened positions DB', 'upload/top_f_kotak_kanan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_f_kotak_kiri`
--

CREATE TABLE `top_f_kotak_kiri` (
  `id` int(11) NOT NULL,
  `tulisan_besar` varchar(200) NOT NULL,
  `tulisan_kecil` varchar(200) NOT NULL,
  `tulisan_besar_kotak_1` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_1` varchar(200) NOT NULL,
  `tulisan_besar_kotak_2` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_2` varchar(200) NOT NULL,
  `tulisan_besar_kotak_3` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_f_kotak_kiri`
--

INSERT INTO `top_f_kotak_kiri` (`id`, `tulisan_besar`, `tulisan_kecil`, `tulisan_besar_kotak_1`, `tulisan_kecil_kotak_1`, `tulisan_besar_kotak_2`, `tulisan_kecil_kotak_2`, `tulisan_besar_kotak_3`, `tulisan_kecil_kotak_3`) VALUES
(1, 'Group’s News DB ', 'All News DB', 'I sink under the weight of the splendour DB', 'JUNE 6, 2016 DB', 'I am so happy, my dear friend DB', 'JUNE 6, 2016 DB', 'Even the all-powerful Pointing DB', 'JUNE 6, 2016 DB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_f_kotak_kiri_news`
--

CREATE TABLE `top_f_kotak_kiri_news` (
  `id` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `tempat` varchar(80) NOT NULL,
  `tanggal` date NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `link` varchar(300) NOT NULL,
  `image_path` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_f_kotak_kiri_news`
--

INSERT INTO `top_f_kotak_kiri_news` (`id`, `judul`, `isi`, `tempat`, `tanggal`, `pengarang`, `link`, `image_path`) VALUES
(1, 'I am so happy, my dear friend 2 DB', 'bla blabl', 'medan', '0000-00-00', 'Abdur', 'news.php', 'upload/top_f_news_image_1.jpg'),
(2, 'I am so happy, my dear friend DB', 'test test test', 'Medan', '0000-00-00', 'ABdur', 'news.php', 'upload/top_f_news_image_2.jpg'),
(3, 'From Database', 'bla bla', 'Medan', '0000-00-00', 'ABDUR', 'news.php', 'upload/top_f_news_image_3.jpg'),
(4, 'From Database', 'bla bla', 'Medan', '0000-00-00', 'ABDUR', 'news.php', 'upload/top_f_news_image_4.jpg'),
(5, 'From Database', 'bla bla', 'Medan', '0000-00-00', 'ABDUR', 'news.php', 'upload/top_f_news_image_5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_f_kotak_tengah`
--

CREATE TABLE `top_f_kotak_tengah` (
  `id` int(11) NOT NULL,
  `tulisan_besar` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_1` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_2` varchar(200) NOT NULL,
  `tulisan_kecil_kotak_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_f_kotak_tengah`
--

INSERT INTO `top_f_kotak_tengah` (`id`, `tulisan_besar`, `image_path`, `tulisan_kecil_kotak_1`, `tulisan_kecil_kotak_2`, `tulisan_kecil_kotak_3`) VALUES
(1, 'Financial Results DB', 'upload/top_f_image.jpg', 'Q2 2019 Press Release DB', 'Q2 2019 Presentation DB', 'H2 2019 Half Year Financial Report BD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `top_g`
--

CREATE TABLE `top_g` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `isi_1` varchar(500) NOT NULL,
  `isi_2` varchar(500) NOT NULL,
  `isi_3` varchar(500) NOT NULL,
  `url_video_1` varchar(500) NOT NULL,
  `url_video_2` varchar(500) NOT NULL,
  `url_video_3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `top_g`
--

INSERT INTO `top_g` (`id`, `judul`, `image_path`, `isi_1`, `isi_2`, `isi_3`, `url_video_1`, `url_video_2`, `url_video_3`) VALUES
(1, 'Testimonials', 'upload/top_g_background.jpg', 'Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Fusce dapibuNulla vitae elit libero, a pharetra augue.DB', 'Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue.DB', 'Cras mattis consectetur purus sit amet fermentum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus.DB', 'https://www.youtube.com/embed/loCEj0Rj5NY', 'https://www.youtube.com/embed/loCEj0Rj5NY', 'https://www.youtube.com/embed/loCEj0Rj5NY');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_a`
--
ALTER TABLE `top_a`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_b`
--
ALTER TABLE `top_b`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_c`
--
ALTER TABLE `top_c`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_d`
--
ALTER TABLE `top_d`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_e`
--
ALTER TABLE `top_e`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_e_kotak_kiri`
--
ALTER TABLE `top_e_kotak_kiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_f_kotak_kanan`
--
ALTER TABLE `top_f_kotak_kanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_f_kotak_kiri`
--
ALTER TABLE `top_f_kotak_kiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_f_kotak_kiri_news`
--
ALTER TABLE `top_f_kotak_kiri_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_f_kotak_tengah`
--
ALTER TABLE `top_f_kotak_tengah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `top_g`
--
ALTER TABLE `top_g`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_a`
--
ALTER TABLE `top_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `top_b`
--
ALTER TABLE `top_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_c`
--
ALTER TABLE `top_c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_d`
--
ALTER TABLE `top_d`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `top_e`
--
ALTER TABLE `top_e`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `top_e_kotak_kiri`
--
ALTER TABLE `top_e_kotak_kiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_f_kotak_kanan`
--
ALTER TABLE `top_f_kotak_kanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_f_kotak_kiri`
--
ALTER TABLE `top_f_kotak_kiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_f_kotak_kiri_news`
--
ALTER TABLE `top_f_kotak_kiri_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `top_f_kotak_tengah`
--
ALTER TABLE `top_f_kotak_tengah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `top_g`
--
ALTER TABLE `top_g`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
