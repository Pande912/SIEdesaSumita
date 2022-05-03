-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2022 pada 12.06
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sie`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banjar`
--

CREATE TABLE `banjar` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_banjar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banjar`
--

INSERT INTO `banjar` (`id`, `nama_banjar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Br. Pande', 'Banjar dinas', NULL, '2022-01-06 20:30:35'),
(3, 'Br. Tengah', 'Banjar dinas', '2021-12-28 23:49:19', '2022-01-06 20:30:13'),
(4, 'Br. Mulung', 'Banjar dinas', '2021-12-28 23:50:19', '2022-01-16 00:50:29'),
(5, 'Br. Siih', 'Banjar dinas', '2021-12-28 23:50:39', '2022-01-06 20:29:34'),
(7, 'Br. Sema', 'Banjar dinas', '2022-01-06 20:29:03', '2022-01-21 22:02:37'),
(11, 'Br. Melayang', 'Banjar dinas', '2022-03-17 08:08:51', '2022-03-17 08:08:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kedatangan`
--

CREATE TABLE `data_kedatangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_datang` date NOT NULL,
  `alamat_asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penduduk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kedatangan`
--

INSERT INTO `data_kedatangan` (`id`, `no_surat`, `tgl_surat`, `tgl_datang`, `alamat_asal`, `keterangan`, `penduduk_id`, `created_at`, `updated_at`) VALUES
(1, 'GF/JHGG66/2022', '2022-03-29', '2022-01-29', 'Br. pujung, Payangan, Gianyar', '-', 1, NULL, '2022-03-30 10:51:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelahiran`
--

CREATE TABLE `data_kelahiran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kelahiran`
--

INSERT INTO `data_kelahiran` (`id`, `no_surat`, `tgl_surat`, `nama`, `anak_ke`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `nama_ayah`, `nama_ibu`, `created_at`, `updated_at`) VALUES
(2, '13/ASD/2022', '2022-03-25', 'kadek budi Adnyana', '2', '2022-01-25', 'Gianyar', 'laki-laki', 'wayan jagra', 'Ni Luh Kirana', '2022-03-24 10:27:06', '2022-03-30 09:15:20'),
(3, 'HVHJ/213/2011', '2022-03-02', 'I Putu Surya adi Pratama', '3', '2022-02-05', 'Gianyar', 'laki-laki', 'I putu gunarsa', 'ni ketut artini', '2022-03-24 10:39:38', '2022-03-30 09:14:57'),
(4, 'ASD/123/2022', '2022-01-05', 'I Made Sukayana', '3', '2022-01-03', 'Gianyar', 'laki-laki', 'I Made Buda', 'Ni Luh Santi', '2022-03-30 10:32:37', '2022-03-30 10:32:37'),
(5, 'ASD/123/162HJGAS', '2022-03-01', 'I Putu  Dika', '2', '2022-03-23', 'Gianyar', 'laki-laki', 'I Made Bagia', 'Ni Putu yinita', '2022-03-30 10:34:41', '2022-03-30 10:34:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kematian`
--

CREATE TABLE `data_kematian` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `penduduk_id` int(10) UNSIGNED NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kematian`
--

INSERT INTO `data_kematian` (`id`, `no_surat`, `tgl_surat`, `penduduk_id`, `tgl_meninggal`, `keterangan`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '12/ASD/2022', '2022-01-01', 1, '2022-01-21', 'sakit', 30, '2022-03-21 03:08:38', '2022-03-30 04:06:34'),
(3, 'ASD/123/162HJGAS', '2022-02-03', 1, '2022-02-02', 'SAKIT', 32, '2022-03-30 04:07:51', '2022-03-30 04:07:51'),
(4, 'ASD/123/2022', '2022-02-02', 2, '2022-02-03', 'sakit', 32, '2022-03-30 04:09:52', '2022-03-30 04:18:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kepindahan`
--

CREATE TABLE `data_kepindahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alamat_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penduduk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_kepindahan`
--

INSERT INTO `data_kepindahan` (`id`, `no_surat`, `tgl_surat`, `tgl_pindah`, `alamat_tujuan`, `keterangan`, `penduduk_id`, `created_at`, `updated_at`) VALUES
(1, 'ASD/2112/2012', '2022-03-24', '2022-03-24', 'Br. Pujung, Payangan, Gianyar', '-', 1, NULL, '2022-03-28 03:50:59'),
(3, 'ASD/123/2022', '2022-03-01', '2022-02-23', 'Br. Melayang, Sumita, Gianyar', '-', 1, '2022-03-30 10:38:58', '2022-03-30 10:38:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_permohonan_kk`
--

CREATE TABLE `detail_permohonan_kk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shdk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_kk_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_permohonan_kk`
--

INSERT INTO `detail_permohonan_kk` (`id`, `nik`, `nama`, `masa_berlaku_ktp`, `shdk`, `permohonan_kk_id`, `created_at`, `updated_at`) VALUES
(1, '90381093801938013', 'I Putu Adi', 'sampai akhir bulan', '02', 1, NULL, NULL),
(3, '5104031806000002', 'kadek budi', 'sadsad', 'asdasas', 2, '2022-02-04 09:26:40', '2022-02-04 09:26:40'),
(4, '5104031806000002', 'putu danu', 'sadsad', '09', 2, '2022-02-04 09:30:29', '2022-02-04 09:30:29'),
(5, '5104031806000002', 'I Gede Yuda', 'daskjdw', '90', 1, '2022-02-04 09:39:59', '2022-02-04 09:39:59'),
(6, '12312412415344', 'I Putu Mahardika', 'ssa', '09', 2, '2022-02-08 07:57:27', '2022-02-08 07:57:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_permohonan_pindah`
--

CREATE TABLE `detail_permohonan_pindah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masa_berlaku_ktp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shdk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permohonan_pindah_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_permohonan_pindah`
--

INSERT INTO `detail_permohonan_pindah` (`id`, `nik`, `nama`, `masa_berlaku_ktp`, `shdk`, `permohonan_pindah_id`, `created_at`, `updated_at`) VALUES
(1, '5104031806000002', 'putu danu', '19-05-2023', '09', 2, '2022-02-16 03:21:26', '2022-02-16 03:21:26'),
(2, '510403180612113', 'Made Surya  Wibawa', '19-05-2023', '09', 1, '2022-02-16 03:22:16', '2022-02-16 03:22:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'Rapat tahunan', '2022-01-28 12:09:00', '2022-01-30 12:10:00', 'agar semua anggota hadir tepat waktu', '2022-01-12 21:10:21', '2022-01-21 22:10:10'),
(20, 'rapat mingguan', '2022-01-27 12:09:00', '2022-01-28 12:09:00', 'diharapkan semua anggota hadir tepat waktu', '2022-01-21 22:09:35', '2022-01-21 22:09:35'),
(21, 'pertemuan dengan bupati gianyar', '2022-01-29 21:01:00', '2022-01-30 21:02:00', 'harap semua hadir tepat waktu', '2022-01-28 07:02:23', '2022-01-28 07:02:23'),
(22, 'Rapat Pegelaran Caru Di pura Manikcorong', '2022-04-04 14:33:00', '2022-04-12 14:33:00', 'Diharapkan hadir tepat waktu', '2022-04-04 00:33:34', '2022-04-04 00:33:34');

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
-- Struktur dari tabel `kartu_kk`
--

CREATE TABLE `kartu_kk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomer_KK` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banjar_id` int(10) UNSIGNED NOT NULL,
  `alamat_KK` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kartu_kk`
--

INSERT INTO `kartu_kk` (`id`, `nomer_KK`, `banjar_id`, `alamat_KK`, `created_at`, `updated_at`) VALUES
(1, '00012345666776716786726767', 1, 'banjar pande, Sumita, Gianyar', NULL, NULL),
(2, '00998212131231988', 1, 'Br. Mulung, Sumita, Gianyar', '2022-01-17 08:29:55', '2022-01-17 09:45:35'),
(3, '0111232324432', 7, 'Br. Sema, Sumita, Gianyar', '2022-01-17 08:45:52', '2022-01-17 09:46:15'),
(4, '0001233255135', 1, 'Br. Pande, Sumita, Gianyar', '2022-01-17 09:46:56', '2022-01-17 09:46:56'),
(5, '01982912123', 3, 'Br. Tengah, Sumita, Gianyar', '2022-01-17 09:47:30', '2022-01-17 09:47:30'),
(6, '00172716671212', 3, 'Br. Tengah, Sumita, Gianyar', '2022-01-17 09:48:12', '2022-01-17 09:48:12'),
(7, '0001245123123712', 1, 'Br. Mulung, Sumita, Gianyar', '2022-01-22 02:30:05', '2022-01-22 02:38:10'),
(8, '00993109931931', 4, 'Br. Mulung, Sumita, Gianyar', '2022-04-19 21:44:54', '2022-04-19 21:44:54'),
(9, '00112231381', 5, 'Br. Siih, Sumita, Gianyar', '2022-04-21 02:05:22', '2022-04-21 02:05:22'),
(10, '0311113163712', 11, 'Br, Melayang, Sumita, Gianyar', '2022-04-21 02:25:12', '2022-04-21 02:25:12');

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
(5, '2021_12_24_075819_create_table_banjar', 2),
(6, '2021_12_24_104957_create_banjars_table', 3),
(7, '2022_01_08_085420_create_event_table', 4),
(8, '2022_01_12_032106_create_events_table', 5),
(9, '2022_01_17_092444_create_kartu_kk_table', 6),
(11, '2022_01_21_045439_create_penduduk_table', 7),
(12, '2022_01_26_074358_create_permohonan_meninggal_table', 8),
(13, '2022_01_27_163423_create_permohonan_lahir_table', 9),
(14, '2022_01_28_035835_create_permohonan_meninggal_table', 10),
(15, '2022_01_28_042341_create_permohonan_meninggal_table', 11),
(16, '2022_01_28_045527_create_permohonan_lahir_table', 12),
(17, '2022_01_28_092139_create_permohonan_lahir_table', 13),
(18, '2022_01_31_044623_create_permohonan_lahir_table', 14),
(19, '2022_02_02_075232_create_permohonan_ktp_table', 15),
(20, '2022_02_03_145055_create_permohonan_kk_table', 16),
(21, '2022_02_04_074135_create_permohonan_kk_table', 17),
(22, '2022_02_04_085644_create_detail_permohonan_kk_table', 18),
(27, '2022_02_09_051331_create_permohonan_pindah_table', 19),
(28, '2022_02_09_053305_create_detail_permohonan_pindah_table', 20),
(30, '2022_03_21_083850_create_data_kematian_table', 21),
(31, '2022_03_21_143456_create_data_kelahiran_table', 22),
(36, '2022_03_27_133908_create_data_kepindahan_table', 23),
(39, '2022_03_28_140652_create_data_kedatangan_table', 24);

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
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_kk_id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `tgl_terdaftar` date NOT NULL,
  `tgl_pindah` date DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_meninggal` date DEFAULT NULL,
  `sts_kpl_keluarga` int(10) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `kartu_kk_id`, `nik`, `jenis_kelamin`, `hubungan_keluarga`, `agama`, `alamat`, `pendidikan`, `pekerjaan`, `nama_ayah`, `nama_ibu`, `status`, `tgl_terdaftar`, `tgl_pindah`, `tgl_lahir`, `tempat_lahir`, `tgl_meninggal`, `sts_kpl_keluarga`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 'kadek budi', 1, '5104031806000002', 'laki-laki', 'kandung', 'Hindu', 'Hindu', 'S-2', 'PNS', 'wayan jagra', 'made weta', 'aktif', '2022-01-22', '2022-01-27', '1999-03-20', 'Gianyar', '2022-01-29', 1, 1, '2022-01-22 02:16:38', '2022-04-20 02:42:59'),
(2, 'Ni Kadek Sudiani', 1, '510403180612113', 'perempuan', 'kandung', 'Hindu', 'Br. Sema, Sumita, Gianyar', 'SMA/SMK', 'Petani', 'wayan jagra', 'made dari', 'aktif', '2022-01-22', NULL, '1993-02-23', 'Gianyar', '2022-01-15', 1, 1, '2022-01-22 02:22:45', '2022-04-20 10:02:49'),
(3, 'I Ketut Budiarta', 1, '510456273787', 'laki-laki', 'kandung', 'Islam', 'br. Mulung, sumita, gianyar', 'S-1', 'Polisi', 'Wayan Ginaarta', 'Ni Made Luwet', 'aktif', '2022-04-20', NULL, '1988-03-19', 'Gianyar', NULL, 1, 1, '2022-04-19 21:48:07', '2022-04-20 03:08:46'),
(4, 'I Ketut Gunawan', 3, '0212321310012', 'laki-laki', 'Kandung', 'Hindu', 'Br. Sema, Sumita, Gianyar', 'SMA/SMK', 'Wiraswasta', 'I Ketut Sugianyar', 'I Wayan Asih', 'aktif', '2022-04-21', NULL, '1990-10-02', 'Gianya', NULL, 0, 7, '2022-04-21 01:29:41', '2022-04-21 01:29:41'),
(5, 'Ni Nengah Juliantini', 3, '021000312329', 'perempuan', 'kandung', 'Hindu', 'Br. Sema, Sumita, Gianyar', 'S-1', 'Pegawai Swasta', 'I Ketut Nurita', 'I Made Sinar', 'aktif', '2022-04-21', NULL, '1990-01-03', 'Gianyar', NULL, 1, 7, '2022-04-21 01:39:44', '2022-04-21 01:39:44'),
(6, 'I Gede Yudi Sastrawan', 5, '009821212371', 'laki-laki', 'kandung', 'Hindu', 'Br. Tengah, Sumita, Gianyar', 'S-1', 'TNI', 'I Wayan Juwet', 'I Ketut Sunarni', 'aktif', '2022-04-21', NULL, '1998-09-08', 'Gianyar', NULL, 0, 3, '2022-04-21 01:54:37', '2022-04-21 01:54:37'),
(7, 'Ni Luh Eka Julianti', 9, '001123131', 'perempuan', 'kandung', 'Hindu', 'Br. Siih, Sumita, Gianyar', 'SMP', 'Pelajar/Mahasiswa', 'I Wayan Gunadi', 'I Ketut Sinar', 'aktif', '2022-04-21', NULL, '2000-04-20', 'Gianyar', NULL, 1, 5, '2022-04-21 02:08:22', '2022-04-21 02:08:22'),
(8, 'I Putu Adi Gunawan', 10, '501486137121', 'laki-laki', 'kandung', 'Hindu', 'Br. Melayang, Sumita, Gianyar', 'SD', 'Petani', 'I Wajan Durya', 'Ni Ketut Sianya', 'aktif', '2022-04-21', NULL, '1997-04-21', 'Gianyar', NULL, 0, 11, '2022-04-21 02:27:15', '2022-04-21 02:27:15'),
(9, 'I Kadek Pasek', 8, '009818219812', 'laki-laki', 'kandung', 'Hindu', 'Br. Mulung, Sumita, Gianyar', 'SMA/SMK', 'Wiraswasta', 'I Wayan Jinarta', 'I Made Sukayani', 'aktif', '2022-04-22', NULL, '1990-10-09', 'Gianyar', NULL, 0, 4, '2022-04-21 18:48:07', '2022-04-21 18:48:07'),
(10, 'Ni Luh Juliantari', 8, '5014562136531', 'perempuan', 'kandung', 'Hindu', 'Br. Mulung, Sumita, Gianyar', 'SMA/SMK', 'Pedagang', 'I Ketut Murdana', 'Ni Made Santi', 'aktif', '2022-04-22', NULL, '1996-07-08', 'Gianyar', NULL, 1, 4, '2022-04-21 18:51:28', '2022-04-21 18:51:28'),
(11, 'Ni Putu Gita', 10, '82733123712', 'perempuan', 'kandung', 'Hindu', 'Br. Melayang, Sumita, Gianyar', 'Diploma', 'Pegawai Swasta', 'I Gede Widiada', 'Ni Made Sunarti', 'aktif', '2022-04-22', NULL, '1990-04-22', 'Gianyar', NULL, 1, 11, '2022-04-21 23:36:36', '2022-04-21 23:36:36'),
(12, 'Ni Luh Yuni', 10, '31209381031', 'perempuan', 'kandung', 'Hindu', 'Br. Tengah, Sumita, Gianyar', 'SMA/SMK', 'Pelajar/Mahasiswa', 'I  Made Budastra', 'Ni Ketut Sari', 'aktif', '2022-04-22', NULL, '1990-04-22', 'Gianyar', NULL, 1, 11, '2022-04-21 23:41:42', '2022-04-21 23:43:26'),
(13, 'I Putu  Yuda Ardinata', 9, '1373193081', 'laki-laki', 'kandung', 'Hindu', 'Br. Siih, Sumita, Gianyar', 'SMA/SMK', 'PNS', 'I Putu Grebed', 'I Made Werti', 'aktif', '2022-04-22', NULL, '1990-12-31', 'Gianyar', NULL, 0, 5, '2022-04-21 23:49:52', '2022-04-21 23:49:52'),
(14, 'Erna Yunita', 5, '1731237121', 'perempuan', 'Kandung', 'Kristen', 'Br. Tengah, Sumita, Gianyar', 'SMA/SMK', 'Pedagang', 'Juliandra Batubara', 'Felicia Hasibuan', 'aktif', '2022-04-22', NULL, '1991-04-22', 'Denpasar', NULL, 1, 3, '2022-04-21 23:54:51', '2022-04-21 23:54:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_kk`
--

CREATE TABLE `permohonan_kk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_kk_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permohonan_kk`
--

INSERT INTO `permohonan_kk` (`id`, `nama`, `nik`, `no_kk_lama`, `alamat`, `alasan`, `status`, `user_id`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 'I Putu Gunawan ', '213123989802', '01392378263712', 'Br. Pande, Sumita, Gianyar', 'Membentuk keluarga Baru', 'disetujui', 26, 1, '2022-02-04 07:43:44', '2022-02-11 10:03:56'),
(2, 'I Putu Surya Dinata Putra', '5104031806000002', '09839173001222', 'br, Pande, sumita, gianyar', 'Membuat Keluarga Baru', 'proses', 26, 1, '2022-02-04 01:02:38', '2022-02-08 10:13:24'),
(4, 'I Made Sukayana', '089981238191', '00123187123', 'Br. Melayang, Sumita, Gianyar', 'Kartu KK Hilang', 'disetujui', 32, 11, '2022-03-17 08:44:26', '2022-04-04 00:53:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_ktp`
--

CREATE TABLE `permohonan_ktp` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permohonan_ktp`
--

INSERT INTO `permohonan_ktp` (`id`, `nama_pemohon`, `nik`, `alamat`, `alasan`, `status`, `user_id`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 'I Made Budiyasa', '030193812380183871', 'Br. Pande, Sumita, Gianyar', 'Baru', 'proses', 26, 1, NULL, '2022-02-11 10:01:42'),
(4, 'I Made Jaya Kusuma', '000231123123', 'Br. Siih, Sumita, Gianyar', 'Baru', 'disetujui', 33, 5, '2022-03-17 09:28:09', '2022-04-03 03:16:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_lahir`
--

CREATE TABLE `permohonan_lahir` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saksi_1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_saksi_1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_saksi_1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_saksi_2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_saksi_2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_saksi_2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anak_ke` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permohonan_lahir`
--

INSERT INTO `permohonan_lahir` (`id`, `nama`, `tgl_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `nama_ayah`, `nama_ibu`, `nama_saksi_1`, `alamat_saksi_1`, `pekerjaan_saksi_1`, `nama_saksi_2`, `alamat_saksi_2`, `pekerjaan_saksi_2`, `anak_ke`, `status`, `user_id`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 'I Made Candra Kusuma', '2022-01-31', 'Gianyar', 'Laki-laki', 'Br. Pande, Sumita, Gianyar', 'I Putu Gunawan', 'I Made Sinta ', 'Agus', 'Br. Pande, Sumita, Gianyar', 'Wiraswasta', 'Budi', 'Br. Pande, Sumita, Gianyar', 'PNS', '3', 'disetujui', 26, 1, NULL, '2022-04-06 10:45:15'),
(4, 'I Putu Adi Mahendra', '2022-01-31', 'Gianyar', 'laki-laki', 'br. Mulung, sumita, gianyar', 'Gede Gianyar', 'Ni Luh Kirana', 'budi', 'Br. Pande, Sumita, Gianyar', 'Petani', 'Bagus Putra', 'Br. Pande, Sumita, Gianyar', 'polisi', '4', 'disetujui', 26, 1, '2022-01-31 00:59:32', '2022-01-31 01:07:34'),
(5, 'Ni Luh Santi Puspita Sari', '2022-01-31', 'Gianyar', 'perempuan', 'br. sema, sumita, gianyar', 'wayan jagra', 'made dari', 'budi', 'Br. Pande, Sumita, Gianyar', 'Petani', 'Bagus Putra', 'Br. Pande, Sumita, Gianyar', 'polisi', '1', 'disetujui', 26, 1, '2022-01-31 01:10:05', '2022-01-31 02:18:49'),
(6, 'kadek Jaya', '2022-03-15', 'Gianyar', 'laki-laki', 'br. Mulung, sumita, gianyar', 'wayan jagra', 'Ni Luh Kirana', 'budi', 'Br. Pande, Sumita, Gianyar', 'Petani', 'Bagus Putra', 'Br. Pande, Sumita, Gianyar', 'polisi', '2', 'proses', 30, 4, '2022-03-16 03:10:50', '2022-03-16 03:10:50'),
(7, 'Putu Andara Wata', '2022-03-17', 'Gianyar', 'laki-laki', 'br. sema, sumita, gianyar', 'wayan jagra', 'Ni Luh Kirana', 'budi', 'Br. Pande, Sumita, Gianyar', 'Petani', 'Bagus Putra', 'Br. Pande, Sumita, Gianyar', 'polisi', '2', 'disetujui', 24, 7, '2022-03-16 20:36:56', '2022-04-06 10:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_meninggal`
--

CREATE TABLE `permohonan_meninggal` (
  `id` int(10) UNSIGNED NOT NULL,
  `penduduk_id` int(10) UNSIGNED NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `tempat_meninggal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permohonan_meninggal`
--

INSERT INTO `permohonan_meninggal` (`id`, `penduduk_id`, `tgl_meninggal`, `tempat_meninggal`, `keterangan`, `status`, `user_id`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-01-29', 'sumita (rumah)', 'sakit', 'proses', 26, 1, '2022-01-27 21:27:27', '2022-01-27 21:27:27'),
(2, 2, '2022-01-26', 'gianyar', 'kecelakaan', 'disetujui', 30, 4, '2022-01-27 21:50:44', '2022-01-27 21:51:23'),
(3, 1, '2022-02-18', 'sumita ', 'sakit', 'disetujui', 26, 1, '2022-02-02 02:28:31', '2022-03-29 07:20:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_pindah`
--

CREATE TABLE `permohonan_pindah` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_keluarga_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banjar_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_lama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemohon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kk_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_kepala_keluarga_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_keluarga_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kedatangan` date NOT NULL,
  `alamat_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banjar_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan_baru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('proses','disetujui','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'proses',
  `status_kk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_surat` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permohonan_pindah`
--

INSERT INTO `permohonan_pindah` (`id`, `jenis_surat`, `kk_lama`, `kepala_keluarga_lama`, `alamat_lama`, `banjar_lama`, `kelurahan_lama`, `kode_pos`, `telepon`, `telepon_baru`, `nik_pemohon`, `nama_pemohon`, `kk_baru`, `nik_kepala_keluarga_baru`, `kepala_keluarga_baru`, `tgl_kedatangan`, `alamat_baru`, `banjar_baru`, `kelurahan_baru`, `status`, `status_kk`, `keterangan_surat`, `user_id`, `banjar_id`, `created_at`, `updated_at`) VALUES
(1, 'datang', '81373190371093', 'I Ketut Suweta', 'Br. Benawah Kangin, Petak, Gianyar', 'Br. Benawah Kangin', 'Petak', '801515', '087666555111', '08766675556', '00019018311', 'I Ketut Suweta', '71837137010121', '89182313098112', 'I Made Gunadi', '2022-02-15', 'Br. Sema, Sumita, Gianyar', 'Br. Sema', 'Sumita', 'disetujui', 'membuat KK baru', 'antar desa', 30, 4, '2022-02-15 10:00:14', '2022-02-17 21:44:55'),
(2, 'pindah', '0018288819', 'I ketut Murdana', 'Br. Benawah Kangin, Petak, Gianyar', 'Br. Benawah Kangin', 'Petak', '801515', '0887765567', '085445334221', '0012813181', 'I ketut Murdana', '0018288819', '0088182311', 'I ketut Murdana', '2022-02-16', 'Br. Sema, Sumita, Gianyar', 'Br. Sema', 'Sumita', 'ditolak', 'numpang KK', 'satu desa', 30, 4, '2022-02-15 21:07:32', '2022-04-29 19:22:38');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banjar_id` int(10) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_HP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `banjar_id`, `alamat`, `no_HP`, `jenis_kelamin`, `role`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(24, 'kadek budi', 'budi24', '$2y$10$y8y1YRkBtipKJkQH.RIloeKafk69GN5Y6WH.t1AgScKpscR/lyAoW', 7, 'br. sema, sumita, gianyar', '087665443778', 'laki-laki', 'kelian', '1642304399.jpg', NULL, '2022-02-27 08:27:02', '2022-01-15 20:39:59'),
(26, 'candra', 'candra23', '$2y$10$ugmw6zqrjgHfDm.VeOn7dumW1U4damYg.huGWSIriNn8qFMCP1LYG', 1, 'br. sema, sumita, gianyar', '0876654437887', 'laki-laki', 'kelian', '1640748409.jpg', 'b0qWZ1PU6RapCkMIhuX246PYt2nnwxuyyb1TIshTPGkDgSGU4aMjf2J4JnTm', '2022-02-27 21:09:22', '2021-12-28 20:26:49'),
(27, 'Pande Nyoman Sutama Arta', 'sutama19', '$2y$10$RpyvUjBfmBrLmQX9vfsR1eLkiX6gvTuikUyjHlAtS15c4KzlGtuZy', 1, 'br. pande, sumita, gianyar', '082146798030', 'laki-laki', 'administrator', '1640669873.jpeg', 't5qLQPLzabW08l519D6c7KGwxtZ6OFrZeRCqJWdfvxpByKvedPKLi6isSukv', '2022-04-27 22:37:53', '2021-12-27 22:37:53'),
(28, 'I Made Bawa', 'madebawa20', '$2y$10$jI03HrvmnMoXnwoyNWpbkeB2YNJdqDXJ25updTEex4F5HRSI8Aro.', 1, 'br. pande, sumita, gianyar', '087665443221', 'laki-laki', 'kades', '1642520197.jpg', '4gvIzFbS4JP3NmlMlgyVu8cZcKyJWiNpH7AFgkjVfv1CqWbMWUthzoI275JH', '2022-02-28 03:21:58', '2022-05-01 00:57:59'),
(30, 'putu giana', 'giana123', '$2y$10$gAJ71hMjM3RsxSfORvgbceFJvmj/gCsvtQl5t0yQUR68CDpxHuk3C', 4, 'br. Mulung, sumita, gianyar', '087665443778', 'laki-laki', 'kelian', '1642305020.jpg', '9NYMop1t1MTDD5csUYUnC0kSawzShz7y1vZNzmdcxfC1OgUHjmLqMDtyFOLM', '2022-01-15 20:50:20', '2022-01-15 20:50:20'),
(31, 'I Kadek Sudiyasa', 'sudiyasa20', '$2y$10$hJzIYbkkaoOJhp.MfFRzOuIk4CbEOwjN8HoT07v6EVNP82aO3jp8S', 5, 'br. siih, sumita, gianyar', '0891123453', 'laki-laki', 'administrator', '1642837187.png', NULL, '2022-01-22 00:39:48', '2022-01-22 00:39:48'),
(32, 'Kadek Bagiada', 'Bagiada19', '$2y$10$4KX9UrG73Lm9bWGbhzM1Oumog6MMpVFBYs.gQTDZPowzvtPWEohMi', 11, 'Br. Melayang, Sumita, Gianyar', '0876654437887', 'laki-laki', 'kelian', '1647530037.jpg', NULL, '2022-03-17 08:13:58', '2022-05-01 01:33:29'),
(33, 'I Putu Wira Saputra', 'wira123', '$2y$10$3iwFjEogGvGneaYHR/gbteVFq4oc6mN/PeAOnupCEEd45.r4hqpim', 5, 'Br. Siih, Sumita, Gianyar', '087665778665', 'laki-laki', 'kelian', '1647534293.png', NULL, '2022-03-17 09:24:54', '2022-03-17 09:24:54'),
(34, 'I Made Sudara', 'Sudara20', '$2y$10$p7iMbv68SxhuSryg6Xkv0O1OEWBSHEhmGO0YDz9AUKh/O7QPT1xba', 3, 'Br. Tengah, Sumita, Gianyar', '087223445334', 'laki-laki', 'kelian', '1650531080.png', NULL, '2022-04-21 01:51:21', '2022-04-21 01:51:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banjar`
--
ALTER TABLE `banjar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kedatangan`
--
ALTER TABLE `data_kedatangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kedatangan_penduduk_id_foreign` (`penduduk_id`);

--
-- Indeks untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kematian_penduduk_id_foreign` (`penduduk_id`),
  ADD KEY `data_kematian_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `data_kepindahan`
--
ALTER TABLE `data_kepindahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_kepindahan_penduduk_id_foreign` (`penduduk_id`);

--
-- Indeks untuk tabel `detail_permohonan_kk`
--
ALTER TABLE `detail_permohonan_kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_permohonan_kk_permohonan_kk_id_foreign` (`permohonan_kk_id`);

--
-- Indeks untuk tabel `detail_permohonan_pindah`
--
ALTER TABLE `detail_permohonan_pindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_permohonan_pindah_permohonan_pindah_id_foreign` (`permohonan_pindah_id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kartu_kk`
--
ALTER TABLE `kartu_kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kartu_kk_banjar_id_foreign` (`banjar_id`);

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
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penduduk_kartu_kk_id_foreign` (`kartu_kk_id`);

--
-- Indeks untuk tabel `permohonan_kk`
--
ALTER TABLE `permohonan_kk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_kk_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_ktp_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `permohonan_lahir`
--
ALTER TABLE `permohonan_lahir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_lahir_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `permohonan_meninggal`
--
ALTER TABLE `permohonan_meninggal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_meninggal_penduduk_id_foreign` (`penduduk_id`),
  ADD KEY `permohonan_meninggal_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `permohonan_pindah`
--
ALTER TABLE `permohonan_pindah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permohonan_pindah_user_id_foreign` (`user_id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banjar`
--
ALTER TABLE `banjar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_kedatangan`
--
ALTER TABLE `data_kedatangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_kelahiran`
--
ALTER TABLE `data_kelahiran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_kepindahan`
--
ALTER TABLE `data_kepindahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_permohonan_kk`
--
ALTER TABLE `detail_permohonan_kk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detail_permohonan_pindah`
--
ALTER TABLE `detail_permohonan_pindah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kartu_kk`
--
ALTER TABLE `kartu_kk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `permohonan_kk`
--
ALTER TABLE `permohonan_kk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `permohonan_lahir`
--
ALTER TABLE `permohonan_lahir`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `permohonan_meninggal`
--
ALTER TABLE `permohonan_meninggal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `permohonan_pindah`
--
ALTER TABLE `permohonan_pindah`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_kedatangan`
--
ALTER TABLE `data_kedatangan`
  ADD CONSTRAINT `data_kedatangan_penduduk_id_foreign` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`);

--
-- Ketidakleluasaan untuk tabel `data_kematian`
--
ALTER TABLE `data_kematian`
  ADD CONSTRAINT `data_kematian_penduduk_id_foreign` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`),
  ADD CONSTRAINT `data_kematian_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `data_kepindahan`
--
ALTER TABLE `data_kepindahan`
  ADD CONSTRAINT `data_kepindahan_penduduk_id_foreign` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_permohonan_kk`
--
ALTER TABLE `detail_permohonan_kk`
  ADD CONSTRAINT `detail_permohonan_kk_permohonan_kk_id_foreign` FOREIGN KEY (`permohonan_kk_id`) REFERENCES `permohonan_kk` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_permohonan_pindah`
--
ALTER TABLE `detail_permohonan_pindah`
  ADD CONSTRAINT `detail_permohonan_pindah_permohonan_pindah_id_foreign` FOREIGN KEY (`permohonan_pindah_id`) REFERENCES `permohonan_pindah` (`id`);

--
-- Ketidakleluasaan untuk tabel `kartu_kk`
--
ALTER TABLE `kartu_kk`
  ADD CONSTRAINT `kartu_kk_banjar_id_foreign` FOREIGN KEY (`banjar_id`) REFERENCES `banjar` (`id`);

--
-- Ketidakleluasaan untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_kartu_kk_id_foreign` FOREIGN KEY (`kartu_kk_id`) REFERENCES `kartu_kk` (`id`);

--
-- Ketidakleluasaan untuk tabel `permohonan_kk`
--
ALTER TABLE `permohonan_kk`
  ADD CONSTRAINT `permohonan_kk_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `permohonan_ktp`
--
ALTER TABLE `permohonan_ktp`
  ADD CONSTRAINT `permohonan_ktp_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `permohonan_lahir`
--
ALTER TABLE `permohonan_lahir`
  ADD CONSTRAINT `permohonan_lahir_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `permohonan_meninggal`
--
ALTER TABLE `permohonan_meninggal`
  ADD CONSTRAINT `permohonan_meninggal_penduduk_id_foreign` FOREIGN KEY (`penduduk_id`) REFERENCES `penduduk` (`id`),
  ADD CONSTRAINT `permohonan_meninggal_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `permohonan_pindah`
--
ALTER TABLE `permohonan_pindah`
  ADD CONSTRAINT `permohonan_pindah_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
