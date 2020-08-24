-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Des 2018 pada 20.45
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakaria_airline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_akunuser`
--

CREATE TABLE `tbl_akunuser` (
  `nama_lengkap` varchar(50) NOT NULL,
  `no_telpon` int(12) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_akunuser`
--

INSERT INTO `tbl_akunuser` (`nama_lengkap`, `no_telpon`, `alamat`, `jenis_kelamin`, `username`, `password`) VALUES
('Ahmad Zakaria', 89344501, 'Bekasi', 'Pria', 'jak', '123'),
('Ratih Purwanti', 2147483647, 'Manado', 'Wanita', 'ratih', '123'),
('Wulandari', 2147483647, 'kemang Jakarta Pusat', 'Wanita', 'wulan@yahoo.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `no_identitas` int(8) NOT NULL,
  `nama_konsumen` varchar(64) NOT NULL,
  `almt_komsumen` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `umur` int(2) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`no_identitas`, `nama_konsumen`, `almt_komsumen`, `telepon`, `umur`, `jenis_kelamin`, `tmp_lahir`, `tanggal`) VALUES
(521001, 'Budi Sp', 'padang', '087236123', 23, 'Pria', 'kalimantan', '0000-00-00'),
(521005, 'Herina Putri ', 'Pekanbaru', '09230291', 23, 'Wanita', 'Pekanbaru', '1993-01-14'),
(521002, 'Erin', 'Palangkaraya', '023489234', 24, 'Wanita', 'Jember', '0000-00-00'),
(521004, 'Cut mutia', 'Aceh', '32849238', 24, 'Wanita', 'Aceh', '0000-00-00'),
(521006, 'Ruly', 'padang', '01239834', 23, 'Pria', 'padang', '1993-02-11'),
(521003, 'Anton Cahyo', 'Malang', '021877599', 26, 'Pria', 'Sidoarjo', '1993-04-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `no_pegawai` int(15) NOT NULL,
  `nama_pegawai` varchar(32) NOT NULL,
  `alamat_pegawai` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur_pegawai` int(11) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`no_pegawai`, `nama_pegawai`, `alamat_pegawai`, `jenis_kelamin`, `umur_pegawai`, `telepon`, `tmp_lahir`, `tgl_lahir`, `username`, `password`) VALUES
(218947001, 'Ahmad Zakaria', 'Palangkaraya', 'Pria', 27, '00002', 'malang', '1992-03-04', 'ahmad', 'zakaria'),
(896774801, 'Pengki Heryanto', 'padang', 'Pria', 25, '03420394', 'Padang', '1991-00-00', 'pengki', 'ganteng'),
(620004, 'Mario dyb', 'Solo', 'Pria', 27, '08578869964', 'Burangkeng', '1992-11-17', 'jak', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `no_pembayaran` varchar(11) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `hari_pembayaran` varchar(6) NOT NULL,
  `jumlah_tiket` int(3) NOT NULL,
  `harga_tiket` int(10) NOT NULL,
  `total_pembayaran` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`no_pembayaran`, `no_tiket`, `tgl_pembayaran`, `hari_pembayaran`, `jumlah_tiket`, `harga_tiket`, `total_pembayaran`) VALUES
('00001', 'DM00001(JAKARTA-ACEH)', '2017-01-13', 'Jum''at', 2, 500000, '1000000'),
('00002', 'DM00003(JAKARTA-MANADO)', '2018-12-05', 'Selasa', 3, 2000000, '6000000'),
('00003', 'DM00019(JAKARTA-JAYAPURA)', '2018-12-13', 'Selasa', 2, 4300000, '8600000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `no_konsumen` int(12) NOT NULL,
  `no_tiket` varchar(100) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `hari_berangkat` varchar(6) NOT NULL,
  `waktu_berangkat` time NOT NULL,
  `no_tujuan` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`no_konsumen`, `no_tiket`, `tgl_berangkat`, `hari_berangkat`, `waktu_berangkat`, `no_tujuan`) VALUES
(521001, 'DM00001(JAKARTA-ACEH)', '2017-01-21', 'Kamis', '12:00:00', 'ACH'),
(521002, 'DM00003(JAKARTA-MANADO)', '2018-12-07', 'Rabu', '18:51:00', 'MDN'),
(521003, 'DM00019(JAKARTA-JAYAPURA)', '2019-01-17', 'Rabu', '20:06:00', 'JYPR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tujuan`
--

CREATE TABLE `tbl_tujuan` (
  `no_tujuan` varchar(50) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL,
  `no_tiket` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tujuan`
--

INSERT INTO `tbl_tujuan` (`no_tujuan`, `kota_tujuan`, `no_tiket`) VALUES
('PDG', 'PADANG', 'DM00006(JAKARTA-PADANG)'),
('PL', 'PALU', 'DM00007(JAKARTA-PALU)'),
('MDN', 'MANADO', 'DM00003(JAKARTA-MANADO)'),
('BDG', 'BANDUNG', 'DM00002(JAKARTA-BANDUNG)'),
('BTM', 'BATAM', 'DM00005(JAKARTA-BATAM)'),
('MLG', 'MALANG', 'DM00004(JAKARTA-MALANG)'),
('ACH', 'ACEH', 'DM00001(JAKARTA-ACEH)'),
('SBNG', 'SABANG', 'DM00008(JAKARTA-SABANG)'),
('MEDN', 'MEDAN', 'DM00009(JAKARTA-MEDAN)'),
('LMPNG', 'LAMPUNG', 'DM00010(JAKARTA-LAMPUNG)'),
('TBNGT', 'TEBING TINGGI', 'DM00011(JAKARTA-TEBING TINGGI)'),
('SBLGA', 'SIBOLGA', 'DM00012(JAKARTA-SIBOLGA)'),
('BNJAI', 'BINJAI', 'DM00013(JAKARTA-BINJAI)'),
('SLK', 'SOLOK', 'DM00014(JAKARTA-SOLOK)'),
('BKTT', 'BUKIT TINGGI', 'DM00015(JAKARTA-BUKIT TINGGI)'),
('BBU', 'BAU-BAU', 'DM00016(JAKARTA-BAU-BAU)'),
('MKSR', 'MAKASSAR', 'DM00017(JAKARTA-MAKASSAR)'),
('PKNBR', 'PEKANBARU', 'DM00018(JAKARTA-PEKANBARU)'),
('JYPR', 'JAYAPURA', 'DM00019(JAKARTA-JAYAPURA)'),
('SRG', 'SORONG', 'DM00020(JAKARTA-SORONG)'),
('AMBN', 'AMBON', 'DM00021(JAKARTA-AMBON)'),
('SMRND', 'SAMARINDA', 'DM00022(JAKARTA-SAMARINDA)'),
('PNTNK', 'PONTIANAK', 'DM00023(JAKARTA-PONTIANAK)'),
('KDR', 'KEDIRI', 'DM00024(JAKARTA-KEDIRI)'),
('MGL', 'MAGELANG', 'DM00025(JAKARTA-MAGELANG)'),
('BLI', 'BALI', 'DM00026(JAKARTA-BALI)'),
('PRKT0', 'PURWOKERTO', 'DM00027(JAKARTA-PURWOKERTO)'),
('SRBY', 'SURABAYA', 'DM00028(JAKARTA-SURABAYA)'),
('TGL', 'TEGAL', 'DM00029(JAKARTA-TEGAL)'),
('PRBL', 'PROBOLINGGO', 'DM00030(JAKARTA-PROBOLINGGO)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_akunuser`
--
ALTER TABLE `tbl_akunuser`
  ADD PRIMARY KEY (`nama_lengkap`);

--
-- Indexes for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD UNIQUE KEY `no_identitas` (`no_identitas`),
  ADD UNIQUE KEY `no_identitas_4` (`no_identitas`),
  ADD KEY `no_identitas_2` (`no_identitas`),
  ADD KEY `no_identitas_3` (`no_identitas`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`no_pegawai`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`no_tiket`);

--
-- Indexes for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`no_konsumen`);

--
-- Indexes for table `tbl_tujuan`
--
ALTER TABLE `tbl_tujuan`
  ADD PRIMARY KEY (`no_tujuan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
