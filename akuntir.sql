-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 05.55
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuntir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `no_reff` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_reff` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`no_reff`, `id_user`, `nama_reff`, `keterangan`) VALUES
(111, 0, 'kas', 'akun'),
(115, 0, 'Iklan dibayar dimuka', 'Pemasangan iklan rumah sakit di billboar'),
(122, 0, 'Peralatan', 'Peralatan perusahaan'),
(123, 0, 'akumulasi penyusutan', 'peralatan'),
(212, 0, 'utang gaji', 'perbulan\r\n'),
(215, 0, 'Asuransi Diterima Dimuka', 'Asuransi karyawan, asuransi asset'),
(312, 0, 'prive', 'pemilik'),
(411, 0, 'pendapatan usaha', 'rawat inap'),
(511, 0, 'beban gaji', 'Pembayaran gaji'),
(512, 0, 'bayar listrik', 'operasional rumah sakit'),
(513, 0, 'Beban Pajak', 'Pajak pemerintah'),
(608, 0, 'beban penyusutan', 'ben');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `penjualan_id` int(50) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nominal_transaksi` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`penjualan_id`, `nama_transaksi`, `tgl_transaksi`, `nominal_transaksi`, `keterangan`) VALUES
(4, 'Rawat Jalan', '2019-01-04', 75000000, 'Konsultasi dengan dokter'),
(5, 'obat resep dokter', '2019-01-03', 10000000, 'penebusan obat dokter'),
(6, 'rawat inap', '2019-01-03', 155000000, 'biaya kamar'),
(7, 'Rawat Jalan', '2019-02-01', 120000000, 'obat'),
(8, 'Rawat Inap', '2019-03-01', 185000000, 'biaya kamar'),
(9, 'obat resep dokter', '2019-02-01', 75000000, 'penebusan obat dokter'),
(10, 'Rawat Inap', '2019-03-03', 150000000, 'biaya kamar'),
(11, 'Rawat Jalan', '2019-03-02', 165000000, 'Konsultasi dengan dokter'),
(12, 'obat resep dokter', '2019-03-01', 50000000, 'penebusan obat dokter'),
(13, 'Rawat Inap', '2019-04-01', 13000000, 'biaya kamar'),
(14, 'Rawat Jalan', '2019-04-04', 165000000, 'obat'),
(15, 'test laboratorium', '2019-04-03', 30000000, 'rontgen dan cek darah'),
(16, 'obat resep dokter', '2019-04-03', 45000000, 'penebusan obat dokter'),
(18, 'Rawat Jalan', '2019-05-02', 89000000, 'Konsultasi dengan dokter'),
(19, 'Rawat Inap', '2019-05-02', 170000000, 'biaya kamar'),
(20, 'test laboratorium', '2019-05-03', 20000000, 'penebusan obat dokter'),
(22, 'obat resep dokter', '2019-05-03', 50000000, 'penebusan obat dokter'),
(23, 'Rawat Inap', '2019-06-03', 175000000, 'biaya kamar'),
(24, 'Rawat Jalan', '2019-06-03', 165000000, 'Konsultasi dengan dokter'),
(25, 'obat resep dokter', '2019-06-05', 60000000, 'penebusan obat dokter'),
(26, 'test laboratorium', '2019-06-03', 40000000, 'rontgen,cek darah, '),
(27, 'test laboratorium', '2019-07-16', 20000000, 'tes narkoba'),
(29, 'obat resep dokter', '2020-07-19', 18500000, 'penebusan obat dokter'),
(32, 'Rawat Jalan', '2020-07-20', 30000000, 'Konsultasi dengan dokter'),
(39, 'test laboratorium', '2020-07-22', 40000000, 'tes darah'),
(40, 'Rawat Jalan', '2019-07-29', 44500000, 'periksa sebulan sekali'),
(41, 'Rawat Inap', '2019-08-02', 70125000, 'biaya full set'),
(42, 'Rawat Inap', '2019-11-09', 90000000, 'biaya kamar '),
(43, 'Rawat Jalan', '2019-08-14', 12500000, 'konsultasi kejiwaan'),
(44, 'test laboratorium', '2019-08-16', 60000000, 'radiologi'),
(45, 'obat resep dokter', '2019-08-24', 43000000, 'penebusan obat dokter'),
(46, 'test laboratorium', '2019-08-28', 54000000, 'test narkoba dan tes tensi'),
(47, 'Rawat Jalan', '2019-09-05', 40000000, 'periksa tulang belakang'),
(48, 'Rawat Jalan', '2019-09-11', 100000000, 'cek tulang gigi'),
(49, 'Rawat Inap', '2019-09-15', 96500000, 'kelas vvip'),
(50, 'test laboratorium', '2019-10-04', 90000000, 'radiologi'),
(51, 'Rawat Jalan', '2019-10-03', 140000000, 'Konsultasi dengan dokter'),
(52, 'obat resep dokter', '2019-10-04', 50000000, 'penebusan obat dokter'),
(53, 'Rawat Inap', '2019-10-03', 179000000, 'biaya kamar'),
(54, 'obat resep dokter', '2019-10-09', 70000000, 'penebusan obat dokter'),
(55, 'Rawat Inap', '2019-11-08', 190000000, 'biaya kamar'),
(56, 'Rawat Jalan', '2019-11-03', 80000000, 'Konsultasi dengan dokter'),
(57, 'obat resep dokter', '2019-11-02', 60000000, 'penebusan obat dokter'),
(58, 'test laboratorium', '2019-11-01', 50000000, 'cek darah dan rontgen'),
(59, 'test laboratorium', '2019-12-04', 45000000, 'cek tulang gigi'),
(60, 'Rawat Jalan', '2019-12-15', 60000000, 'konsultasi psikologis'),
(61, 'Rawat Inap', '2019-12-21', 65000000, 'biaya kamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `transaksi_id` int(50) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nominal_transaksi` int(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`transaksi_id`, `nama_transaksi`, `tgl_transaksi`, `nominal_transaksi`, `keterangan`) VALUES
(48, 'Bayar Listrik', '2019-01-02', 10250000, 'bayar listrik bulanan'),
(50, 'Peralatan Mandi', '2019-01-11', 3450000, 'Peralatan mandi untuk pasien'),
(52, 'Obat-obatan', '2019-01-19', 15240000, 'Obat-obatan dibeli 1 bulan sekali'),
(56, 'Gaji Karyawan', '2019-01-28', 120000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(57, 'Bayar Listrik', '2019-02-03', 14000000, 'bayar listrik bulanan'),
(58, 'Alat Kesehatan', '2019-02-03', 10000000, 'Alat Kesehatan terdiri dari Suntikan, Kasa, Perban'),
(59, 'Obat-obatan', '2019-02-03', 20000000, 'Obat-obatan dibeli 1 bulan sekali'),
(60, 'Gaji Karyawan', '2019-02-28', 15000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(61, 'Bayar Listrik', '2019-03-04', 15000000, 'bayar listrik bulanan'),
(63, 'Peralatan Mandi', '2019-03-06', 3250000, 'Peralatan mandi untuk pasien'),
(65, 'Obat-obatan', '2019-03-15', 14250000, 'Obat-obatan dibeli 1 bulan sekali'),
(66, 'Gaji Karyawan', '2019-03-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(67, 'Bayar Listrik', '2019-04-03', 12450000, 'bayar listrik bulanan'),
(68, 'Peralatan Mandi', '2019-04-09', 500000, 'peralatan untuk penjaga pasien'),
(69, 'Obat-obatan', '2019-04-16', 3450000, 'Obat-obatan dibeli 1 bulan sekali'),
(70, 'Gaji Karyawan', '2019-04-28', 230000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(71, 'Bayar Listrik', '2020-05-04', 1500000, 'bayar listrik bulanan'),
(73, 'Obat-obatan', '2020-05-06', 20000000, 'Obat-obatan dibeli 1 bulan sekali'),
(74, 'Alat Kesehatan', '2020-05-12', 8000000, 'isi ulang tabung oksigen'),
(75, 'Gaji Karyawan', '2020-05-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(76, 'Bayar Listrik', '2020-06-02', 14500000, 'bayar listrik bulanan'),
(77, 'Obat-obatan', '2020-06-08', 13000000, 'Obat-obatan dibeli 1 bulan sekali'),
(78, 'Peralatan Mandi', '2020-06-10', 1500000, 'Peralatan mandi untuk pasien'),
(79, 'Catering', '2020-06-11', 15000000, 'Cateting untuk pasien'),
(80, 'Catering', '2020-01-06', 15000000, 'Catering untuk pasien'),
(81, 'Catering', '2020-02-03', 15000000, 'Catering untuk pasien'),
(82, 'Catering', '2020-06-11', 15000000, 'Catering untuk pasien'),
(83, 'Catering', '2020-03-03', 15000000, 'Catering untuk pasien'),
(84, 'Catering', '2020-04-03', 15000000, 'Catering untuk pasien'),
(85, 'Catering', '2020-05-01', 15000000, 'Catering untuk pasien'),
(86, 'Gaji Karyawan', '2020-06-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(87, 'Bayar Listrik', '2020-07-02', 15000000, 'bayar listrik bulanan'),
(88, 'Catering', '2020-07-03', 15000000, 'Catering untuk pasien'),
(89, 'Obat-obatan', '2020-07-07', 12000000, 'Obat-obatan dibeli 1 bulan sekali'),
(90, 'Alat Kesehatan', '2020-07-13', 8000000, 'isi ulang tabung oksigen'),
(91, 'Gaji Karyawan', '2020-07-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(92, 'Bayar Listrik', '2020-08-03', 14000000, 'bayar listrik bulanan'),
(93, 'Catering', '2020-08-04', 15000000, 'Catering untuk pasien'),
(94, 'Obat-obatan', '2020-08-05', 10000000, 'Obat-obatan dibeli 1 bulan sekali'),
(95, 'Peralatan Mandi', '2020-08-14', 7000000, 'Peralatan mandi untuk pasien'),
(96, 'Gaji Karyawan', '2020-08-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(97, 'Bayar Listrik', '2020-09-01', 14000000, 'bayar listrik bulanan'),
(98, 'Obat-obatan', '2020-09-03', 10000000, 'Obat-obatan dibeli 1 bulan sekali'),
(99, 'Catering', '2020-09-07', 15000000, 'Catering untuk pasien'),
(100, 'Alat Kesehatan', '2020-09-16', 9000000, 'isi ulang tabung oksigen'),
(101, 'Gaji Karyawan', '2020-09-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(102, 'Bayar Listrik', '2020-10-01', 15000000, 'bayar listrik bulanan'),
(103, 'Obat-obatan', '2020-09-03', 13000000, ''),
(104, 'Obat-obatan', '2020-10-05', 13000000, 'Obat-obatan dibeli 1 bulan sekali'),
(105, 'Catering', '2020-10-06', 15000000, 'Catering untuk pasien'),
(106, 'Peralatan Mandi', '2020-10-16', 1500000, 'Peralatan mandi untuk pasien'),
(107, 'Gaji Karyawan', '2020-10-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(108, 'Bayar Listrik', '2020-11-02', 14000000, 'bayar listrik bulanan'),
(109, 'Obat-obatan', '2020-11-03', 15000000, 'Obat-obatan dibeli 1 bulan sekali'),
(110, 'Catering', '2020-11-03', 15000000, 'Catering untuk pasien'),
(111, 'Alat Kesehatan', '2020-11-09', 7500000, 'isi ulang tabung oksigen'),
(112, 'Gaji Karyawan', '2020-11-28', 250000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(113, 'Bayar Listrik', '2020-12-01', 15000000, 'bayar listrik bulanan'),
(114, 'Obat-obatan', '2020-12-02', 10000000, 'Obat-obatan dibeli 1 bulan sekali'),
(115, 'Catering', '2020-12-07', 15000000, 'Catering untuk pasien'),
(116, 'Peralatan Mandi', '2020-12-14', 2500000, 'Peralatan mandi untuk pasien'),
(117, 'Gaji Karyawan', '2020-12-28', 150000000, 'Gaji karyawan dibayar 1 bulan sekali'),
(119, '', '0000-00-00', 0, ''),
(120, 'Bayar pajak', '2019-06-10', 56000000, 'pajak pemerintah'),
(121, 'pembayaran asuransi', '2020-02-01', 88000000, 'asuransi pegawai dan asset');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_reff` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_saldo` enum('debit','kredit','','') NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `no_reff`, `tgl_input`, `tgl_transaksi`, `jenis_saldo`, `saldo`) VALUES
(55, 0, 111, '2020-01-08 17:39:18', '2019-01-01', 'debit', 55000000),
(56, 0, 111, '2020-01-08 17:39:48', '2019-01-01', 'kredit', 55000000),
(57, 0, 122, '2020-01-08 17:40:19', '2019-01-01', 'debit', 15000000),
(58, 0, 122, '2020-01-08 17:40:39', '2019-01-01', 'kredit', 15000000),
(59, 0, 111, '2020-01-08 17:41:30', '2019-01-02', 'debit', 30000000),
(61, 0, 111, '2020-01-08 17:43:34', '2019-01-02', 'kredit', 30000000),
(62, 0, 511, '2020-01-08 17:45:14', '2019-01-03', 'debit', 50000000),
(63, 0, 111, '2020-01-08 17:45:37', '2019-01-03', 'kredit', 50000000),
(64, 0, 512, '2020-01-08 17:46:39', '2019-01-04', 'debit', 25000000),
(65, 0, 111, '2020-01-08 17:47:17', '2019-01-04', 'kredit', 25000000),
(66, 0, 513, '2020-01-08 17:47:50', '2019-01-10', 'debit', 10000000),
(67, 0, 111, '2020-01-08 17:48:13', '2019-01-10', 'kredit', 10000000),
(68, 0, 115, '2020-01-08 17:48:48', '2019-01-11', 'debit', 5000000),
(69, 0, 111, '2020-01-08 17:49:14', '2019-01-11', 'kredit', 5000000),
(70, 0, 111, '2020-01-08 17:51:13', '2019-01-11', 'debit', 10000000),
(71, 0, 215, '2020-01-08 17:50:19', '2019-01-11', 'kredit', 10000000),
(82, 0, 111, '2020-01-08 18:22:05', '2019-01-09', 'kredit', 1200000),
(84, 0, 215, '2020-01-08 18:28:29', '2019-02-02', 'debit', 12000000),
(87, 0, 111, '2020-01-08 18:29:10', '2019-02-02', 'kredit', 12000000),
(88, 0, 111, '2020-01-08 18:29:53', '2019-02-08', 'debit', 33000000),
(89, 0, 411, '2020-01-08 18:31:36', '2019-02-02', 'kredit', 33000000),
(90, 0, 511, '2020-01-08 18:32:13', '2019-02-02', 'debit', 25000000),
(91, 0, 212, '2020-01-08 18:32:39', '2019-02-02', 'kredit', 25000000),
(92, 0, 123, '2020-01-08 18:33:21', '2019-02-02', 'debit', 20000000),
(93, 0, 123, '2020-01-08 18:33:46', '2019-02-02', 'kredit', 20000000),
(94, 0, 512, '2020-01-08 18:34:08', '2019-02-02', 'debit', 15000000),
(95, 0, 111, '2020-01-08 18:34:39', '2019-02-02', 'kredit', 15000000),
(96, 0, 513, '2020-01-08 18:36:06', '2019-02-02', 'debit', 5000000),
(97, 0, 111, '2020-01-08 18:38:25', '2019-02-02', 'kredit', 5000000),
(98, 0, 312, '2020-01-08 18:36:53', '2019-02-02', 'debit', 10000000),
(99, 0, 111, '2020-01-08 18:37:22', '2019-02-02', 'kredit', 10000000),
(100, 0, 111, '2020-01-08 18:39:22', '2019-03-03', 'debit', 15000000),
(101, 0, 111, '2020-01-08 18:40:08', '2019-03-02', 'kredit', 15000000),
(102, 0, 115, '2020-01-08 18:40:57', '2019-02-02', 'debit', 3000000),
(103, 0, 115, '2020-01-08 18:47:54', '2019-03-02', 'kredit', 3000000),
(104, 0, 122, '2020-01-08 18:41:59', '2019-02-02', 'debit', 12000000),
(107, 0, 411, '2020-01-08 18:43:58', '2019-03-03', 'kredit', 35000000),
(108, 0, 511, '2020-01-08 18:44:21', '2019-03-02', 'debit', 12000000),
(109, 0, 111, '2020-01-08 18:44:51', '2019-03-02', 'kredit', 12000000),
(110, 0, 111, '2020-01-08 18:45:29', '2019-03-09', 'debit', 35000000),
(111, 0, 115, '2020-01-08 18:46:43', '2019-03-03', 'debit', 3000000),
(112, 0, 512, '2020-01-08 18:50:32', '2019-03-02', 'debit', 2000000),
(113, 0, 111, '2020-01-08 18:51:01', '2019-03-20', 'kredit', 2000000),
(114, 0, 513, '2020-01-08 18:51:31', '2019-03-02', 'debit', 5000000),
(115, 0, 111, '2020-01-08 18:52:04', '2019-03-03', 'kredit', 5000000),
(116, 0, 111, '2020-01-08 18:52:54', '2019-04-03', 'debit', 200000000),
(117, 0, 111, '2020-01-08 18:54:18', '2019-04-02', 'kredit', 200000000),
(118, 0, 122, '2020-01-08 18:55:04', '2019-04-20', 'debit', 20000000),
(119, 0, 111, '2020-01-08 18:55:26', '2019-04-02', 'kredit', 20000000),
(120, 0, 511, '2020-01-08 18:56:00', '2019-04-09', 'debit', 12000000),
(121, 0, 212, '2020-01-08 18:56:23', '2019-04-20', 'kredit', 12000000),
(122, 0, 312, '2020-01-08 18:57:05', '2019-04-08', 'debit', 2000000),
(123, 0, 111, '2020-01-08 18:57:36', '2019-02-02', 'kredit', 2000000),
(124, 0, 111, '2020-01-08 18:58:26', '2019-04-02', 'kredit', 2000000),
(125, 0, 115, '2020-01-08 18:59:21', '2019-05-02', 'debit', 3600000),
(126, 0, 111, '2020-01-08 19:00:17', '2019-05-02', 'kredit', 3600000),
(127, 0, 215, '2020-01-08 19:00:52', '2019-05-02', 'debit', 5000000),
(128, 0, 111, '2020-01-08 19:01:49', '2019-05-02', 'kredit', 5000000),
(129, 0, 122, '2020-01-08 19:02:54', '2019-05-02', 'debit', 6500000),
(130, 0, 111, '2020-01-08 19:03:51', '2019-05-03', 'kredit', 6500000),
(131, 0, 111, '2020-01-08 19:04:43', '2019-06-02', 'debit', 10000000),
(132, 0, 111, '2020-01-08 19:07:23', '2019-06-20', 'kredit', 10000000),
(133, 0, 511, '2020-01-08 19:05:40', '2019-06-09', 'debit', 12000000),
(135, 0, 212, '2020-01-08 19:09:37', '2019-06-02', 'kredit', 12000000),
(136, 0, 215, '2020-01-08 19:10:08', '2019-06-20', 'debit', 5000000),
(137, 0, 111, '2020-01-08 19:10:43', '2019-06-06', 'kredit', 5000000),
(138, 0, 115, '2020-01-08 19:11:13', '2019-06-02', 'debit', 4000000),
(139, 0, 111, '2020-01-08 19:11:33', '2019-06-09', 'kredit', 4000000),
(140, 0, 111, '2020-01-08 19:14:27', '2019-07-09', 'kredit', 5000000),
(141, 0, 111, '2020-01-08 19:12:47', '2019-07-09', 'kredit', 5000000),
(142, 0, 111, '2020-01-08 19:13:20', '2019-07-20', 'debit', 5000000),
(143, 0, 111, '2020-01-08 19:13:44', '2019-07-08', 'debit', 5000000),
(144, 0, 512, '2020-01-08 19:15:00', '2019-07-20', 'debit', 12000000),
(145, 0, 111, '2020-01-08 19:15:26', '2019-07-09', 'kredit', 12000000),
(146, 0, 111, '2020-01-08 19:18:10', '2019-08-08', 'debit', 90000000),
(147, 0, 111, '2020-01-08 19:18:37', '2019-08-08', 'kredit', 90000000),
(148, 0, 122, '2020-01-08 19:20:10', '2019-08-09', 'debit', 22000000),
(149, 0, 111, '2020-01-08 19:21:02', '2019-08-09', 'kredit', 22000000),
(150, 0, 111, '2020-01-08 19:21:27', '2019-08-10', 'debit', 35000000),
(151, 0, 411, '2020-01-08 19:21:51', '2019-08-10', 'kredit', 35000000),
(152, 0, 511, '2020-01-08 19:22:15', '2019-08-11', 'debit', 51000000),
(153, 0, 111, '2020-01-08 19:22:41', '2019-08-11', 'kredit', 51000000),
(154, 0, 512, '2020-01-08 19:23:08', '2019-08-07', 'debit', 26000000),
(155, 0, 111, '2020-01-08 19:23:44', '2019-08-07', 'kredit', 26000000),
(156, 0, 215, '2020-01-08 19:24:44', '2019-09-01', 'debit', 15000000),
(157, 0, 111, '2020-01-08 19:25:07', '2019-09-01', 'kredit', 15000000),
(158, 0, 512, '2020-01-08 19:25:50', '2019-09-02', 'debit', 65000000),
(159, 0, 111, '2020-01-08 19:26:11', '2019-09-01', 'kredit', 65000000),
(160, 0, 122, '2020-01-08 19:27:00', '2019-09-03', 'debit', 30000000),
(161, 0, 111, '2020-01-08 19:27:24', '2019-09-03', 'kredit', 30000000),
(162, 0, 111, '2020-01-08 19:28:00', '2019-10-01', 'debit', 32000000),
(163, 0, 411, '2020-01-08 19:29:33', '2019-10-01', 'kredit', 32000000),
(164, 0, 115, '2020-01-08 19:30:29', '2019-10-02', 'debit', 5000000),
(165, 0, 111, '2020-01-08 19:31:05', '2019-10-02', 'kredit', 5000000),
(166, 0, 511, '2020-01-08 19:32:12', '2019-10-05', 'debit', 90000000),
(167, 0, 111, '2020-01-08 19:32:33', '2019-10-05', 'kredit', 90000000),
(168, 0, 513, '2020-01-08 19:32:57', '2019-10-09', 'debit', 6000000),
(169, 0, 111, '2020-01-08 19:33:18', '2019-10-09', 'kredit', 6000000),
(170, 0, 111, '2020-01-08 19:34:11', '2019-11-01', 'debit', 6500000),
(171, 0, 111, '2020-01-08 19:34:32', '2019-11-01', 'kredit', 6500000),
(172, 0, 122, '2020-01-08 19:34:56', '2019-11-02', 'debit', 3500000),
(173, 0, 111, '2020-01-08 19:35:13', '2019-11-02', 'kredit', 3500000),
(174, 0, 512, '2020-01-08 19:35:31', '2019-11-09', 'debit', 4300000),
(175, 0, 111, '2020-01-08 19:35:51', '2019-11-09', 'kredit', 4300000),
(176, 0, 513, '2020-01-08 19:36:15', '2019-11-10', 'debit', 3500000),
(177, 0, 111, '2020-01-08 19:36:37', '2019-11-10', 'kredit', 3500000),
(178, 0, 111, '2020-01-08 19:37:43', '2019-12-01', 'debit', 17000000),
(179, 0, 111, '2020-01-08 19:37:59', '2019-12-01', 'kredit', 17000000),
(180, 0, 111, '2020-01-08 19:38:39', '2019-12-02', 'debit', 3000000),
(181, 0, 411, '2020-01-08 19:39:00', '2019-12-02', 'kredit', 3000000),
(182, 0, 512, '2020-01-08 19:39:31', '2019-12-12', 'debit', 32000000),
(183, 0, 111, '2020-01-08 19:39:54', '2019-12-12', 'kredit', 32000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('admin','kasir','akuntan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_user`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Pajri Al Zukri', 'admin'),
(2, 'kasir', 'c7911af3adbd12a035b289556d96470a', 'Salman Affandi', 'kasir'),
(3, 'akuntan', '5acc540c98fc1ca5aeaaa9d5c69771c8', 'Rafid ', 'akuntan'),
(4, 'pajri', 'b2f08dc583b19bc9b5a9520d94b26632', 'Pajri Al Zukri', 'akuntan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_reff`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`penjualan_id`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `no_reff` (`no_reff`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `no_reff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12347;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `penjualan_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `transaksi_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
