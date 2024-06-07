-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2024 pada 05.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_semester`
--

CREATE TABLE `data_semester` (
  `id_semester` int(10) NOT NULL,
  `id_kode` int(10) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `nama_semester` varchar(200) NOT NULL,
  `periode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `data_semester`
--

INSERT INTO `data_semester` (`id_semester`, `id_kode`, `semester`, `nama_semester`, `periode`) VALUES
(1, 1, '1 - 2022/2023', 'Ganjil', 'Juli - Desember'),
(2, 2, '2 - 2022/2023', 'Genap', 'Januari - Juni'),
(3, 3, '3 - 2022/2023', 'Ganjil', 'Juli - Desember'),
(4, 4, '4 - 2022/2023', 'Genap', 'Januari - Juni'),
(5, 5, '5 - 2022/2023', 'Ganjil', 'Juli - Desember'),
(6, 6, '6 - 2022/2023', 'Genap', 'Januari - Juni'),
(7, 7, '7 - 2022/2023', 'Ganjil', 'Juli - Desember'),
(8, 8, '8 - 2022/2023', 'Genap', 'Januari - Juni'),
(9, 9, '9 - 2022/2023', 'Ganjil', 'Juli - Desember'),
(10, 10, '10 - 2022/2023', 'Genap', 'Januari - Juni');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_semester`
--

CREATE TABLE `kode_semester` (
  `id_kode` int(10) NOT NULL,
  `kode_semester` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kode_semester`
--

INSERT INTO `kode_semester` (`id_kode`, `kode_semester`) VALUES
(1, 'Smt1'),
(2, 'Smt2'),
(3, 'Smt3'),
(4, 'Smt4'),
(5, 'Smt5'),
(6, 'Smt6'),
(7, 'Smt7'),
(8, 'Smt8'),
(9, 'Smt9'),
(10, 'Smt10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `mahasiswa` varchar(255) DEFAULT NULL,
  `program_studi` varchar(255) DEFAULT NULL,
  `semester` int(11) NOT NULL,
  `mata_kuliah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `nim`, `mahasiswa`, `program_studi`, `semester`, `mata_kuliah`) VALUES
(1, '22205056', 'Widiyono', 'Teknik Informatika', 1, 'Dasar pemrograman'),
(2, '22205058', 'Muhammad Firman Adi W.', 'Teknik Informatika', 4, 'Pemrograman Web 2'),
(3, '22200505', 'Musyaffa Azzam ardhyar ', 'Teknik informatika ', 2, 'Pemrograman web 2'),
(4, '22205069', 'Akhmad Sobirin', 'Teknik Informatika', 5, 'Pemrograman Web 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_created_at`) VALUES
(1, 'admin2', 'admin2@gmail.com', '$2a$12$UJTeN8tdYAffvcFuvBFGYuGp1lx2caxZnNCKlTloJjEDROXTEPgwu', '2024-03-24 03:42:15'),
(2, 'kelompok5', 'kelompok5@gmail.com', 'kelompok5', '2024-03-24 03:47:33'),
(5, 'admin123', 'admin123@gmail.com', '$2y$10$LR7OttRhUFxDWdr/I76njeiEleNSiUZ4DQIPHdhYOc/Mk11ehI8Se', '2024-05-25 11:43:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_semester`
--
ALTER TABLE `data_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `kode_semester`
--
ALTER TABLE `kode_semester`
  ADD PRIMARY KEY (`id_kode`);

--
-- Indeks untuk tabel `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_semester`
--
ALTER TABLE `data_semester`
  MODIFY `id_semester` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kode_semester`
--
ALTER TABLE `kode_semester`
  MODIFY `id_kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
