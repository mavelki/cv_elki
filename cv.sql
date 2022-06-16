-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2022 pada 16.24
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_edu`
--

CREATE TABLE `tb_edu` (
  `edu_id` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL,
  `edu_in` date NOT NULL,
  `edu_out` date NOT NULL,
  `edu_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_edu`
--

INSERT INTO `tb_edu` (`edu_id`, `edu_name`, `edu_in`, `edu_out`, `edu_detail`) VALUES
(1, 'Universitas Muhammadiyah Sukabumi', '2019-09-09', '2023-03-26', 'Strata 1 Teknik Informatika'),
(2, 'SMA Negeri 1 Kota Sukabumi', '2016-07-01', '2019-08-04', 'Ilmu Pengetahuan Alam'),
(3, 'SMP Negeri 3 Kota Sukabumi', '2013-07-07', '2016-08-08', 'Sekolah Menengah Pertama'),
(4, 'SD Negeri Begeg 2 Kota Sukabumi', '2007-07-05', '2013-05-16', 'Sekolah Dasar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_exp`
--

CREATE TABLE `tb_exp` (
  `exp_id` int(11) NOT NULL,
  `exp_name` varchar(255) NOT NULL,
  `exp_in` char(10) NOT NULL,
  `exp_out` char(10) NOT NULL,
  `exp_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_exp`
--

INSERT INTO `tb_exp` (`exp_id`, `exp_name`, `exp_in`, `exp_out`, `exp_detail`) VALUES
(1, 'PT. SAHABAT PETUALANG', '2020', '2021', 'Leader of Dometic Projects'),
(2, 'CV. DELIMA MANDIRI', '2019', '2020', 'Marketing Product'),
(5, 'Onix Photo Studio', '2022', 'Now', 'Studio Photographer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_edu`
--
ALTER TABLE `tb_edu`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indeks untuk tabel `tb_exp`
--
ALTER TABLE `tb_exp`
  ADD PRIMARY KEY (`exp_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_edu`
--
ALTER TABLE `tb_edu`
  MODIFY `edu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_exp`
--
ALTER TABLE `tb_exp`
  MODIFY `exp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
