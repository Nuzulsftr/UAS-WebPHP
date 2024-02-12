-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2024 pada 02.52
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama`, `Username`, `email`, `password`, `level`) VALUES
(12378, 'BagasPurnomo', 'Bagas', 'bagaspurnomo0198@gmail.com', '$2y$10$w.COa3Uak29B4c/nxH8kGODodJsYF6v6qnY4uz/wPIApUpfFcHzWe', '1'),
(12379, 'Nuzul safitra', 'NuzulSafitra', 'Bagas12345@gmail.com', '$2y$10$Er6oQq7Va1kYqQ9Y6bcqJ.PLZnw0GUwOknwbldz99bf50xVHmghWm', '1'),
(12381, 'admin', 'admin', 'admin@gmail.com', '$2y$10$.Z9gE15.kUmi4oB2oOuGmeCmGl0vhsHaUC9wOM8dfaqy1X5RdmTfa', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buah`
--

CREATE TABLE `buah` (
  `Id_buah` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buah`
--

INSERT INTO `buah` (`Id_buah`, `kode`, `nama`, `jenis`, `harga`, `tanggal`) VALUES
(17, '555', 'BagasPurnomo', 'Impord', '5000', '2024-02-11 10:15:19'),
(20, '123', 'Nuzul', 'Local', '2000', '2024-02-11 17:35:46'),
(21, '123', 'Nuzul', 'Local', '2000', '2024-02-11 18:34:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mk` varchar(50) NOT NULL,
  `jn` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tlepon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama`, `mk`, `jn`, `email`, `alamat`, `tlepon`) VALUES
(6, '1215', 'Nuzul safitra', 'PBO', '08.00-11.45', 'nuzulsftr@gmail.com', 'Cilegon', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id_mahasiswa` int(11) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id_mahasiswa`, `nim`, `nama`, `jurusan`, `jk`, `alamat`, `nohp`) VALUES
(5, '202011036', 'Bagas', 'Teknik Informatika', 'Laki-Laki', 'Cilegon', '55'),
(6, '5547', 'BagasPurnomo', 'Teknik Informatika', 'Laki-Laki', 'Cilegon', '12345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `taa`
--

CREATE TABLE `taa` (
  `id_nota` int(11) NOT NULL,
  `nota` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `mahasiswa` varchar(200) NOT NULL,
  `pembimbing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `taa`
--

INSERT INTO `taa` (`id_nota`, `nota`, `judul`, `mahasiswa`, `pembimbing`) VALUES
(42, '10', 'karangan Bunga', 'bagas', 'Nuzul'),
(43, '10', 'karangan Bunga', 'bagas', 'Nuzul'),
(44, '10', 'menjadilebih baik', 'bagas', 'Nuzul'),
(45, '10', 'menjadilebih baik', 'bagas', 'Nuzul'),
(46, '2021-10', 'kami', 'bagas', 'BP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `Id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`Id`, `username`, `password`, `email`, `level`, `blokir`, `Id_sessions`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'N', ''),
(3, 'Bagas', '827ccb0eea8a706c4c34a16891f84e7b', 'bagaspurnomo0198@gmail.com', 'admin', 'N', ''),
(6, 'Nuzul', '202cb962ac59075b964b07152d234b70', 'Nuzul@gmail.com', 'admin', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`Id_buah`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id_mahasiswa`);

--
-- Indeks untuk tabel `taa`
--
ALTER TABLE `taa`
  ADD PRIMARY KEY (`id_nota`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12382;

--
-- AUTO_INCREMENT untuk tabel `buah`
--
ALTER TABLE `buah`
  MODIFY `Id_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `taa`
--
ALTER TABLE `taa`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
