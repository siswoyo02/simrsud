-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2023 pada 07.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrsud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `notelpon` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_02_16_163930_create_employees_table', 1),
(5, '2023_02_17_002513_create_rpasienpulangs_table', 1),
(6, '2023_02_28_033134_create_rpasienbalitaplgs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpasienbalitaplgs`
--

CREATE TABLE `rpasienbalitaplgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_rm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgllahir` varchar(255) NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `ruang` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tglmasuk` varchar(255) NOT NULL,
  `tglkeluar` varchar(255) NOT NULL,
  `doktermerawat` varchar(255) NOT NULL,
  `diagnosamasuk` varchar(255) NOT NULL,
  `indikasirawat` varchar(255) NOT NULL,
  `diagnosakeluar` varchar(255) NOT NULL,
  `kodeicd_10` varchar(255) NOT NULL,
  `komplikasi` varchar(255) NOT NULL,
  `komorbid` varchar(255) NOT NULL,
  `tindakan` varchar(255) NOT NULL,
  `tgldilakukan` varchar(255) NOT NULL,
  `kodeicd_9cm` varchar(255) NOT NULL,
  `keluhanutama` varchar(255) NOT NULL,
  `gejalapenyerta` varchar(255) NOT NULL,
  `penyakitdahulu` varchar(255) NOT NULL,
  `pemeriksaanfisik` varchar(255) NOT NULL,
  `pemeriksaanpenunjang` varchar(255) NOT NULL,
  `laboratorium` varchar(255) NOT NULL,
  `pencintraandiagnostik` varchar(255) NOT NULL,
  `lainnya` varchar(255) NOT NULL,
  `konsultasi` varchar(255) NOT NULL,
  `obatselamarawat` varchar(255) NOT NULL,
  `kondisisaatpulang` varchar(255) NOT NULL,
  `obatpulang` varchar(255) NOT NULL,
  `kontrolulang` varchar(255) NOT NULL,
  `bawarsbila` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rpasienpulangs`
--

CREATE TABLE `rpasienpulangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_rm` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `jeniskelamin` enum('L','P') NOT NULL,
  `ruang` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tglmasuk` date NOT NULL,
  `tglkeluar` date NOT NULL,
  `doktermerawat` text NOT NULL,
  `diagnosamasuk` text NOT NULL,
  `indikasirawat` text NOT NULL,
  `diagnosakeluar` text NOT NULL,
  `kodeicd_10` text NOT NULL,
  `komplikasi` text NOT NULL,
  `komorbid` text NOT NULL,
  `tindakan` text NOT NULL,
  `tgldilakukan` date NOT NULL,
  `kodeicd_9cm` text NOT NULL,
  `keluhanutama` text NOT NULL,
  `gejalapenyerta` text NOT NULL,
  `penyakitdahulu` text NOT NULL,
  `pemeriksaanfisik` text NOT NULL,
  `pemeriksaanpenunjang` text NOT NULL,
  `laboratorium` text NOT NULL,
  `pencintraandiagnostik` text NOT NULL,
  `lainnya` text NOT NULL,
  `konsultasi` text NOT NULL,
  `obatselamarawat` text NOT NULL,
  `kondisisaatpulang` text NOT NULL,
  `obatpulang` text NOT NULL,
  `kontrolulang` text NOT NULL,
  `bawarsbila` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rpasienpulangs`
--

INSERT INTO `rpasienpulangs` (`id`, `no_rm`, `nama`, `tgllahir`, `jeniskelamin`, `ruang`, `kelas`, `tglmasuk`, `tglkeluar`, `doktermerawat`, `diagnosamasuk`, `indikasirawat`, `diagnosakeluar`, `kodeicd_10`, `komplikasi`, `komorbid`, `tindakan`, `tgldilakukan`, `kodeicd_9cm`, `keluhanutama`, `gejalapenyerta`, `penyakitdahulu`, `pemeriksaanfisik`, `pemeriksaanpenunjang`, `laboratorium`, `pencintraandiagnostik`, `lainnya`, `konsultasi`, `obatselamarawat`, `kondisisaatpulang`, `obatpulang`, `kontrolulang`, `bawarsbila`, `created_at`, `updated_at`) VALUES
(1, 9456789, 'Joko Samsudin', '1997-01-02', 'L', 'Anyelir', 'VVIP', '2023-01-04', '2023-03-08', 'Dr.Nugroho Sarana International', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris34.5.6.6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', '2023-03-03', '23.7, 45.23,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla erat dolor, ullamcorper in ultricies eget,fermentum rhoncus leo. Curabitur eu mi vitae metus posuere laoreet. Eam facilis omittantur at, usu efficiantur neglegentur delicatissimi et, in per vero splendide persequeris', '2023-03-01 21:35:44', '2023-03-01 21:38:55'),
(2, 945678, 'seses', '2023-02-26', 'L', 'Anyelir', 'VVIP', '2023-02-26', '2023-03-02', 'Dr.Nugroho Sarana International', 'sakit kepala', 'operasi perut', 'sembuh', '23.45, 35.67', 'usus dan paru-paru', 'sehat dan nafsu makan', 'tidak ada', '2023-02-27', '23.7, 45.23', 'sesak,diare,diapet,males minum obat,kembung,pusing,males makan', 'sakit,sesak,pusing', 'sesak', 'Tb:180, Bb:65, krimsom 1', 'Sakit kepala', 'Gigi dan Paru', 'Sakit kepala', 'tidak ada', 'Dr.Siswoyo', 'Oskadon', 'Sehat', 'domek ijo', 'Poli Gigi RSUD Tuban', 'Sesak nafas,Pusing,Muntah', '2023-03-01 23:03:37', '2023-03-01 23:03:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `rpasienbalitaplgs`
--
ALTER TABLE `rpasienbalitaplgs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rpasienpulangs`
--
ALTER TABLE `rpasienpulangs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rpasienbalitaplgs`
--
ALTER TABLE `rpasienbalitaplgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rpasienpulangs`
--
ALTER TABLE `rpasienpulangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
