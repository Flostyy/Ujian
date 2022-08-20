-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Agu 2022 pada 08.45
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `jawaban` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`jawaban`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `id_ujian`, `id_user`, `nilai`, `jawaban`) VALUES
(1, 11, 74, 50, '{\"4\":{\"jawaban\":\"option_a\",\"benar\":false},\"14\":{\"jawaban\":\"option_b\",\"benar\":true},\"25\":{\"jawaban\":\"option_c\",\"benar\":false},\"26\":{\"jawaban\":\"option_e\",\"benar\":true},\"27\":{\"jawaban\":\"option_d\",\"benar\":true},\"36\":{\"jawaban\":\"option_c\",\"benar\":false}}'),
(2, 11, 74, 17, '{\"4\":{\"jawaban\":\"option_e\",\"benar\":false},\"14\":{\"jawaban\":\"option_a\",\"benar\":false},\"25\":{\"jawaban\":\"option_b\",\"benar\":false},\"26\":{\"jawaban\":\"option_c\",\"benar\":false},\"27\":{\"jawaban\":\"option_d\",\"benar\":true},\"36\":{\"jawaban\":\"option_e\",\"benar\":false}}'),
(3, 11, 74, 50, '{\"4\":{\"jawaban\":\"option_a\",\"benar\":false},\"14\":{\"jawaban\":\"option_a\",\"benar\":false},\"25\":{\"jawaban\":\"option_a\",\"benar\":true},\"26\":{\"jawaban\":\"option_a\",\"benar\":false},\"27\":{\"jawaban\":\"option_d\",\"benar\":true},\"36\":{\"jawaban\":\"option_a\",\"benar\":true}}'),
(4, 11, 60, 33, '{\"4\":{\"jawaban\":\"option_a\",\"benar\":false},\"14\":{\"jawaban\":\"option_a\",\"benar\":false},\"25\":{\"jawaban\":\"option_a\",\"benar\":true},\"26\":{\"jawaban\":\"option_a\",\"benar\":false},\"27\":{\"jawaban\":\"option_d\",\"benar\":true},\"36\":{\"jawaban\":\"option_b\",\"benar\":false}}'),
(5, 11, 60, 17, '{\"4\":{\"jawaban\":\"option_a\",\"benar\":false},\"14\":{\"jawaban\":\"option_c\",\"benar\":false},\"25\":{\"jawaban\":\"option_b\",\"benar\":false},\"26\":{\"jawaban\":\"option_d\",\"benar\":false},\"27\":{\"jawaban\":\"option_d\",\"benar\":true},\"36\":{\"jawaban\":\"option_d\",\"benar\":false}}'),
(6, 11, 72, 50, '{\"4\":{\"jawaban\":\"option_c\",\"benar\":true},\"14\":{\"jawaban\":\"option_a\",\"benar\":false},\"25\":{\"jawaban\":\"option_a\",\"benar\":true},\"26\":{\"jawaban\":\"option_d\",\"benar\":false},\"27\":{\"jawaban\":\"option_e\",\"benar\":false},\"36\":{\"jawaban\":\"option_a\",\"benar\":true}}'),
(7, 18, 74, 100, '{\"13\":{\"jawaban\":\"option_b\",\"benar\":true},\"33\":{\"jawaban\":\"option_a\",\"benar\":true},\"34\":{\"jawaban\":\"option_d\",\"benar\":true},\"35\":{\"jawaban\":\"option_b\",\"benar\":true}}'),
(8, 18, 60, 25, '{\"13\":{\"jawaban\":\"option_d\",\"benar\":false},\"33\":{\"jawaban\":\"option_a\",\"benar\":true},\"34\":{\"jawaban\":\"option_e\",\"benar\":false},\"35\":{\"jawaban\":\"option_c\",\"benar\":false}}'),
(9, 20, 60, 0, '{\"30\":{\"jawaban\":\"option_c\",\"benar\":false},\"31\":{\"jawaban\":\"option_c\",\"benar\":false},\"32\":{\"jawaban\":\"option_a\",\"benar\":false}}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `option_a` varchar(255) NOT NULL,
  `option_b` varchar(255) NOT NULL,
  `option_c` varchar(255) NOT NULL,
  `option_d` varchar(255) NOT NULL,
  `option_e` varchar(255) NOT NULL,
  `kunci` varchar(255) NOT NULL,
  `id_ujian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `soal`, `option_a`, `option_b`, `option_c`, `option_d`, `option_e`, `kunci`, `id_ujian`) VALUES
(13, 'Luas penampang dongkrak hidrolik masing-masing 0,04 m2 dan 0,10 m2. Jika gaya masukan adalah 5 Newton, berapa gaya keluaran maksimum ?', '12 N', '12,5 N', '13 N', '13,5 N', '14 N', 'option_b', 18),
(24, 'Sebuah lagu dapat dikatakan baik apabila memenuhi sembilan elemen seperti di bawah ini, kecuali....', 'bentuk', 'nuansa', 'sejarah', 'isi', 'harmoni', 'option_c', 21),
(25, 'Diketahui kubus  A B C D . E F G H  dengan panjang rusuk  4   c m . Titik  P  adalah titik potong  A H  dan  E D  dan titik  Q  adalah titik potong  F H  dan  E G . Jarak titik  B  ke garis  P Q  adalah...', '√ 22   c m', '√ 21   c m', '2 √ 5   c m', '√ 19   c m', '3 √ 2   c m', 'option_a', 11),
(26, 'Diketahui kubus  A B C D . E F G H  dengan panjang rusuk  6   c m . Jarak titik  A  ke garis  C F  adalah...', '6 √ 3   c m', '6 √ 2   c m', '3 √ 3   c m', '3 √ 2   c m', '3 √ 2   c m', 'option_e', 11),
(27, 'Diketahui kubus  A B C D . E F G H  dengan rusuk  8   c m .  M  adalah titik tengah  E H . Jarak titik  M  ke  A G  adalah...', '4 √ 6   c m', '4 √ 5   c m', '4 √ 3   c m', '4 √ 2   c m', '4   c m', 'option_d', 11),
(28, 'Panjang pendeknya nada dalam permainan musik disebut....', 'nada', 'tempo', 'birama', 'melodi', 'irama', 'option_e', 21),
(29, 'Suara dua not atau lebih yang dimainkan sekaligus disebut....', 'melodi', 'harmoni', 'counterpoint', 'irama', 'birama', 'option_b', 21),
(30, 'Perintah untuk membuat database adalah', ' CREATE TABLE', 'CREATE DB', 'CREATE DATABASE TABLE', 'CREATE DATABASE', 'CREATE TAB', 'option_d', 20),
(31, 'Perintah untuk update data di database adalah', 'SELECT', 'UPDATE', 'MODIFY', 'EXTRACT', 'INSERT', 'option_b', 20),
(32, 'Perintah untuk menghapus data di database adalah', 'REMOVE', ' SAVE AS', 'DELETE', 'MODIFY', 'UPDATE', 'option_c', 20),
(33, 'Jari-jari penampang kecil dongkrak hidrolik adalah 2 cm dan jari-jari penampang besar adalah 25 cm. Berapa gaya yang diberikan pada penampang kecil untuk mengangkat sebuah mobil bermassa 2000 kg ?', '125,44 N', '125,55 N', '125 N', '124,55 N', '124,44 N', 'option_a', 18),
(34, 'Tekanan gauge maksimum pada dongkrak hidrolik adalah 14 atm. Berapa massa maksimum (kg) yang dapat diangkat jika diameter keluaran adalah 30 cm ?', '10.890 kg', '11.999 kg', '9.987 kg', '10.224 kg', '10.222 kg', 'option_d', 18),
(35, 'Luas penampang dongkrak hidrolik masing-masing 0,03 m2 dan 0,12 m2. Jika gaya masukan adalah 6 Newton, berapa gaya keluaran maksimum ?', '20 N', '24 N', '22 N', '25 N', '23 N', 'option_b', 18),
(37, 'asd', 'asad', 'asd', 'asd', 'asd', 'asd', 'option_b', 22),
(38, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'option_b', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ujian`
--

CREATE TABLE `ujian` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ujian`
--

INSERT INTO `ujian` (`id`, `judul`, `deskripsi`, `id_guru`) VALUES
(11, 'Bangun ruang', 'Bab 1', 56),
(18, 'Fisika Dasar', 'Hukum Pascal', 58),
(20, 'Basis Data', 'MySQL', 70),
(21, 'seni budaya', 'deskripsi', 75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('guru','murid') NOT NULL,
  `mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `level`, `mapel`) VALUES
(56, 'laura', 'lauratita@gmail.com', 'laura', 'guru', 'Matematika'),
(58, 'Zulfan', 'zulfangibran@gmail.com', 'zulfan', 'guru', 'Fisika'),
(60, 'Yefta', 'yeftaocta@gmail.com', 'yefta', 'murid', ''),
(70, 'Drs. Desu Spd. Ss. S,Kom M.Pd', 'Desu@gmail.com', '1234', 'guru', 'Basis Data\r\n'),
(72, 'nindy', 'nindy@gmail.com', 'nindy', 'murid', ''),
(74, 'rara', 'ra@gmail.com', '4444', 'murid', ''),
(75, 'kocta', 'kocta@gmail.com', '040404', 'guru', 'Seni Budaya'),
(76, 'tita', 'tita@gmail.com', 'titaaa', 'murid', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
