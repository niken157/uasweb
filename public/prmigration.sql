-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2023 pada 06.26
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
-- Database: `prmigration`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(10) UNSIGNED NOT NULL,
  `kodebuku` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerbit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `kodebuku`, `judul`, `pengarang`, `penerbit`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'D01', 'Sunset in Central Park', 'Sarah Morgan', 'Gramedia Pustaka Utama', 'sr.jpeg', '2023-02-03 09:24:52', '2023-02-08 04:53:16'),
(5, 'D02', 'As Much As I Love You', 'Wulan Kenanga', 'Gramedia Pustaka Utama', 'ama.jpeg', '2023-02-08 04:56:14', '2023-02-08 04:56:14'),
(6, 'D03', 'Beato Goes to Indonesia', 'Sucheta Rawal', 'Gramedia Pustaka Utama', 'bi.jpeg', '2023-02-08 04:57:07', '2023-02-08 04:57:07'),
(7, 'D04', 'Dilan', 'Pindi Baiq', 'Gramedia Pustaka Utama', 'd.jpeg', '2023-02-08 04:57:57', '2023-02-08 04:57:57'),
(8, 'D05', 'Hujan', 'Tere Liye', 'Gramedia Pustaka Utama', 'h.jpeg', '2023-02-08 04:58:30', '2023-02-08 04:58:30'),
(9, 'D06', 'Kiss Me at Dawn', 'Raneiva', 'Gramedia Pustaka Utama', 'km.jpeg', '2023-02-08 04:59:02', '2023-02-08 04:59:02'),
(10, 'D07', 'Sang Pemimpi', 'Andrea Hirata', 'Gramedia Pustaka Utama', 'sp.jpeg', '2023-02-08 04:59:32', '2023-02-08 04:59:32'),
(11, 'D08', 'Tentang Kamu', 'Tere Liye', 'Gramedia Pustaka Utama', 'tk.jpeg', '2023-02-08 05:00:06', '2023-02-08 05:00:06'),
(12, 'D09', 'Tenggelamnya Kapal Van der Wijck', 'Hamka', 'Gramedia Pustaka Utama', 'tkv.jpeg', '2023-02-08 05:00:32', '2023-02-08 05:00:32'),
(13, 'D10', 'Tempat Paling Liar di Muka Bumi', 'Theoresia Rumthe & Weslly Johannes', 'Gramedia Pustaka Utama', 'tpl.jpeg', '2023-02-08 05:01:16', '2023-02-08 05:01:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `prodi`, `semester`, `created_at`, `updated_at`) VALUES
(1, 'Tono', 'Teknik Informatika', '5', '2023-01-11 20:08:53', '2023-01-11 20:08:53'),
(2, 'Niken', 'Teknik Informatika', '5', '2023-01-12 03:10:56', '2023-01-12 03:10:56'),
(3, 'Ani', 'Siskom', '5', '2023-01-12 03:24:01', '2023-01-12 03:24:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id` int(10) UNSIGNED NOT NULL,
  `matkul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_matkul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengampu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id`, `matkul`, `kode_matkul`, `pengampu`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web Lanjut', 'KKTI3140', 'Saiful Nur Budiman, S.kom., M.kom', '2023-01-12 11:18:55', '2023-01-12 11:18:55'),
(2, 'Kecerdasan Buatan', 'KKTI3141', 'Saiful Nur Budiman, S.kom., M.kom', '2023-01-12 11:18:55', '2023-01-12 11:18:55'),
(3, 'Sistem pendukung Keputusan', 'KKTI3144', 'Sri Lestanti, S.kom., M.MT', '2023-01-12 11:18:55', '2023-01-12 11:18:55'),
(4, 'Managemen Strategik', 'KKTI3143', 'Sunan Trioko S.T., M.M', '2023-01-12 11:18:55', '2023-01-12 11:18:55'),
(5, 'Desain Analisis Algoritma', 'KKTI3145', 'Indyah Hartami Santi, S.kom., M.kom', '2023-01-12 11:18:55', '2023-01-12 11:18:55'),
(6, 'Jaringan Komputer Lanjut', 'KKTI3142', 'Much Taofik Chukamdi, S.kom, M.T', '2023-01-12 11:29:11', '2023-01-12 11:29:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_12_023131_create_mahasiswa_table', 2),
(6, '2023_01_12_155527_create_matkul_table', 3),
(7, '2023_02_03_155131_buku', 4),
(8, '2023_02_03_163654_peminjaman', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjam` int(10) UNSIGNED NOT NULL,
  `nomer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_k` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjam`, `nomer`, `nama_peminjam`, `id`, `keterangan`, `tanggal_k`, `created_at`, `updated_at`) VALUES
(20, '23123', 'Sipa', 1, 'kembali', '2023-02-14', '2023-02-07 02:04:55', '2023-02-07 02:12:06'),
(21, '80078', 'Rina', 3, 'pinjam', '2023-02-14', '2023-02-07 02:13:03', '2023-02-07 02:13:03'),
(22, '234325', 'Indra', 4, 'pinjam', '2023-02-14', '2023-02-07 02:19:13', '2023-02-07 02:19:13'),
(23, '2475588', 'hui', 1, 'pinjam', '2023-02-14', '2023-02-07 02:32:38', '2023-02-07 02:32:38'),
(24, '764868', 'fadil', 1, 'kembali', '2023-02-15', '2023-02-08 04:38:00', '2023-02-08 04:39:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'niken', 'nikencahyaning157@gmail.com', NULL, '$2y$10$W7iONZedNdc4rHbiSigQzu4Kh.vsQsjHLQOj3IgykA2Lep2Hw4apC', 'admin', 'ohHUIyhWn2ui7kJKqiBaZFWfgwE5VaT6ZpVwypuRizZLPLjR9aunjyb1omPF', '2023-02-04 01:30:47', '2023-02-04 01:30:47'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$hmlzWk9RpHJNi7T8vj/8n.j8stbmZVefxaKsxXAgcpZkVZGZn1yDq', 'user', '1IWpGIHaPg41xRpg3bVDdnHdrBrZsCYKffgKpeQDnXSwF2XfrBl4ZjuCGULE', '2023-02-06 10:30:59', '2023-02-06 10:30:59'),
(3, 'pengguna', 'pengguna@gmail.com', NULL, '$2y$10$dO1gx9zuN4pFbqJLh9kIaO5t1WoJ5hmvNkpeRqpYloDwoV/PEpPfO', 'user', NULL, '2023-02-07 13:44:30', '2023-02-07 13:44:30'),
(4, 'anna', 'anna@gmail.com', NULL, '$2y$10$NbZ6MAgIt0cUjYAQu8ga4OwjFXuWEJ1LP5BLPVmsWrUG6TafxapQG', 'user', NULL, '2023-02-08 04:37:59', '2023-02-08 04:37:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `buku_kodebuku_unique` (`kodebuku`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswa_nama_unique` (`nama`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matkul_matkul_unique` (`matkul`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjam`),
  ADD UNIQUE KEY `peminjaman_nomer_unique` (`nomer`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjam` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
