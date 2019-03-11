-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2018 at 05:08 AM
-- Server version: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rke`
--

-- --------------------------------------------------------

--
-- Table structure for table `asesmen`
--

CREATE TABLE `asesmen` (
  `id_asesmen` int(11) NOT NULL,
  `id_berobat` int(11) DEFAULT NULL,
  `id_dokter` bigint(20) DEFAULT NULL,
  `id_perawat` bigint(20) DEFAULT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nyeri` varchar(20) DEFAULT NULL,
  `skala` int(2) DEFAULT NULL,
  `lokasi` text,
  `durasi` int(11) DEFAULT NULL,
  `frekuensi` int(11) DEFAULT NULL,
  `nyeri_hilang` varchar(25) DEFAULT NULL,
  `info` varchar(11) DEFAULT NULL,
  `pukul` time DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `diagnosis` int(11) DEFAULT NULL,
  `gangguankognitif` int(11) DEFAULT NULL,
  `faktorlingkungan` int(11) DEFAULT NULL,
  `responoperasi` int(11) DEFAULT NULL,
  `penggunaanobat` int(11) DEFAULT NULL,
  `riwayatjatuh1` int(11) DEFAULT NULL,
  `diagnosissekunder` int(11) DEFAULT NULL,
  `alatbantu` int(11) DEFAULT NULL,
  `obativ` int(11) DEFAULT NULL,
  `gayaberjalan` int(11) DEFAULT NULL,
  `statusmental1` int(11) DEFAULT NULL,
  `usia` int(11) DEFAULT NULL,
  `statusmental` int(11) DEFAULT NULL,
  `eliminasi` int(11) DEFAULT NULL,
  `pengobatan` int(11) DEFAULT NULL,
  `diagnosis2` int(11) DEFAULT NULL,
  `ambulasi` int(11) DEFAULT NULL,
  `nutrisi` int(11) DEFAULT NULL,
  `gangguanpolatidur` int(11) DEFAULT NULL,
  `riwayatjatuh` int(11) DEFAULT NULL,
  `riwayatjatuh2` varchar(5) DEFAULT NULL,
  `sekunder` varchar(5) DEFAULT NULL,
  `alatbantu1` varchar(50) DEFAULT NULL,
  `terpasanginfus` varchar(5) DEFAULT NULL,
  `gayaberjalan1` varchar(50) DEFAULT NULL,
  `statusmental3` varchar(50) DEFAULT NULL,
  `usia1` varchar(50) DEFAULT NULL,
  `statusmental2` varchar(50) DEFAULT NULL,
  `eliminasi1` varchar(50) DEFAULT NULL,
  `pengobatan1` varchar(100) DEFAULT NULL,
  `diagnosa` varchar(50) DEFAULT NULL,
  `ambulasi1` varchar(50) DEFAULT NULL,
  `nutrisi1` varchar(50) DEFAULT NULL,
  `polatidur` varchar(50) DEFAULT NULL,
  `jatuh` varchar(50) DEFAULT NULL,
  `golongandarah` varchar(2) DEFAULT NULL,
  `tekanandarah1` varchar(15) DEFAULT NULL,
  `tekanandarah2` varchar(15) DEFAULT NULL,
  `tekanandarah` varchar(15) DEFAULT NULL,
  `tekananjantung` varchar(10) DEFAULT NULL,
  `tjket` text,
  `diabetes` varchar(10) DEFAULT NULL,
  `diabetesket` text,
  `oklusi` varchar(15) DEFAULT NULL,
  `toruspalatinus` varchar(10) DEFAULT NULL,
  `torusmandibularis` varchar(10) DEFAULT NULL,
  `palatum` varchar(10) DEFAULT NULL,
  `supernumerary` varchar(10) DEFAULT NULL,
  `supernumeraryket` text,
  `Diastema` varchar(10) DEFAULT NULL,
  `Diastemaket` text,
  `Gigianomali` varchar(10) DEFAULT NULL,
  `Gigianomaliket` text,
  `lain` text,
  `Keterangan` text,
  `g18` text,
  `g28` text,
  `g38` text,
  `g48` text,
  `g17` text,
  `g27` text,
  `g37` text,
  `g47` text,
  `g16` text,
  `g26` text,
  `g36` text,
  `g46` text,
  `g15g55` text,
  `g25g65` text,
  `g35g75` text,
  `g45g85` text,
  `g14g54` text,
  `g24g64` text,
  `g34g74` text,
  `g44g84` text,
  `g13g53` text,
  `g23g63` text,
  `g33g73` text,
  `g43g83` text,
  `g12g52` text,
  `g22g62` text,
  `g32g72` text,
  `g42g82` text,
  `g11g51` text,
  `g21g61` text,
  `g31g71` text,
  `g41g81` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asesmen`
--

INSERT INTO `asesmen` (`id_asesmen`, `id_berobat`, `id_dokter`, `id_perawat`, `no_rm`, `tanggal`, `nyeri`, `skala`, `lokasi`, `durasi`, `frekuensi`, `nyeri_hilang`, `info`, `pukul`, `umur`, `gender`, `diagnosis`, `gangguankognitif`, `faktorlingkungan`, `responoperasi`, `penggunaanobat`, `riwayatjatuh1`, `diagnosissekunder`, `alatbantu`, `obativ`, `gayaberjalan`, `statusmental1`, `usia`, `statusmental`, `eliminasi`, `pengobatan`, `diagnosis2`, `ambulasi`, `nutrisi`, `gangguanpolatidur`, `riwayatjatuh`, `riwayatjatuh2`, `sekunder`, `alatbantu1`, `terpasanginfus`, `gayaberjalan1`, `statusmental3`, `usia1`, `statusmental2`, `eliminasi1`, `pengobatan1`, `diagnosa`, `ambulasi1`, `nutrisi1`, `polatidur`, `jatuh`, `golongandarah`, `tekanandarah1`, `tekanandarah2`, `tekanandarah`, `tekananjantung`, `tjket`, `diabetes`, `diabetesket`, `oklusi`, `toruspalatinus`, `torusmandibularis`, `palatum`, `supernumerary`, `supernumeraryket`, `Diastema`, `Diastemaket`, `Gigianomali`, `Gigianomaliket`, `lain`, `Keterangan`, `g18`, `g28`, `g38`, `g48`, `g17`, `g27`, `g37`, `g47`, `g16`, `g26`, `g36`, `g46`, `g15g55`, `g25g65`, `g35g75`, `g45g85`, `g14g54`, `g24g64`, `g34g74`, `g44g84`, `g13g53`, `g23g63`, `g33g73`, `g43g83`, `g12g52`, `g22g62`, `g32g72`, `g42g82`, `g11g51`, `g21g61`, `g31g71`, `g41g81`) VALUES
(1, 1, 67, 5, 000001, '2018-02-28', 'Nyeri Akut', 1, '', 0, 1, 'Berubah Posisi/Tidur', 'Tidak', '00:00:00', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Tidak', 'Tidak', 'Tongkat/alat penopang', 'Tidak', 'Normal / tirah baring / imobilisasi', 'Orientasi baik terhadap kemampuan diri sendiri', 'Lebih dari 80 tahun', 'Bingung/Disorientasi', 'Inkontinensia tetapi mampu untuk mobilisasi', 'Mendapat tambahan obat-obatan dan/atau obat-obat PRN(psikiatri, antinyeri) yang diberikan dalam 24 j', 'Dimensia / Delirium', 'Goyah tapi lupa keterbatasan', 'Tidak ada kelainan dengan nafsu makan', 'Ada keluhan gangguan tidur yang dilaporkan oleh pa', 'Ada riwayat jatuh dalam 3 bulan terakhir', 'O', '100', '120', 'normal', 'Ada', '', 'Tidak Ada', '', 'deep bite', 'kecil', 'sedang', 'Sedang', 'Tidak Ada', '', 'Ada', '', 'Ada', '', '', '', 'hgf', 'gf', 'hgf', 'gf', 'gfgh', 'fg', 'fg', 'fh', 'fg', 'fg', 'f', 'hgf', 'gf', 'gfh', 'fgh', 'fg', 'fg', 'fg', 'fh', 'fg', 'fgf', 'gh', 'fgh', '', '', '', '', '', '', '', '', ''),
(2, 2, 67, 5, 000002, '2018-02-28', 'Nyeri Kronis', 3, 'rahang', 2, 3, 'Istirahat', 'Tidak', '00:00:00', 5, 5, 5, 5, 4, 5, 4, 4, 6, 4, 6, 4, 6, 3, 2, 4, 5, 6, 4, 6, 4, 6, 'Tidak', 'Tidak', 'Perabot', 'Tidak', 'Normal / tirah baring / imobilisasi', 'Sering lupa akan keterbatasan yang dimiliki', 'Kurang dari 50 tahun', 'Agitasi/Ansietas', 'Gangguan Eliminasi', 'Mendapat tambahan obat-obatan dan/atau obat-obat PRN(psikiatri, antinyeri) yang diberikan dalam 24 j', 'Gangguan Depresi Mayor', 'Vertigo/ kelemahan', 'Mengkonsumsi sedikit makanan atau minuman dalam 24', 'Ada keluhan gangguan tidur yang dilaporkan oleh pa', 'Ada riwayat jatuh dalam 3 bulan terakhir', 'AB', '100', '120', 'normal', 'Ada', 'ghg', 'Tidak Ada', '', 'normal bite', 'besar', 'sedang', 'Dalam', 'Tidak Ada', '', 'Ada', '', 'Ada', '', 'jhg', 'hgj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'belobang', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 3, NULL, 5, 000003, '2018-03-02', NULL, 3, '3', 3, 3, 'Mendengar Musik', 'Tidak', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pasien`
--

CREATE TABLE `data_pasien` (
  `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(34) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan','','') DEFAULT NULL,
  `agama` enum('Islam','Kristen','Budha','Katolik','Konghocu','Hindu') DEFAULT NULL,
  `status` enum('Tidak_Kawin','Kawin','Cerai Hidup','Cerai Mati') DEFAULT NULL,
  `pendidikan` enum('Tidak_Sekolah','SD','SMP','SMA','Akademik','Universitas') DEFAULT NULL,
  `pekerjaan` enum('Tidak_Kerja','Buruh','Swasta','Wiraswasta','PNS','TNI','POLRI') DEFAULT NULL,
  `bahasa_sehari` varchar(50) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `budaya_suku` varchar(50) DEFAULT NULL,
  `alamat` text,
  `rt` int(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `rw` int(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `no_telpon` varchar(13) DEFAULT NULL,
  `perubahan_alamat` text,
  `nama_wali1` varchar(50) DEFAULT NULL,
  `nama_wali2` varchar(50) DEFAULT NULL,
  `hubungan` varchar(50) DEFAULT NULL,
  `telpon_wali` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pasien`
--

INSERT INTO `data_pasien` (`no_rm`, `nama_pasien`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status`, `pendidikan`, `pekerjaan`, `bahasa_sehari`, `nama_ayah`, `nama_ibu`, `budaya_suku`, `alamat`, `rt`, `rw`, `no_telpon`, `perubahan_alamat`, `nama_wali1`, `nama_wali2`, `hubungan`, `telpon_wali`) VALUES
(000001, 'nama sembarang', '2018-02-08', 'Perempuan', 'Budha', '', 'SMP', 'PNS', 'aaaa', 'aa', 'uuuuu', 'aaa', 'aa', 003, 001, '628324', '', '', '', '', ''),
(000002, 'adit', '2018-02-20', 'Perempuan', 'Islam', 'Tidak_Kawin', 'Tidak_Sekolah', 'PNS', 'jawa', 'adit2', 'adit3', 'melayu', 'jl garuda sakti km 12', 011, 010, '628774', '', '', '', '', ''),
(000003, 'uchiha', '2018-03-29', 'Perempuan', 'Budha', '', 'SMA', 'PNS', 'mandarin', 'madara', 'eciroda', 'jepang', 'tokyo', 022, 011, '6282323', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id_diagnosa` int(11) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `diagnosa` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id_diagnosa`, `id_dokter`, `no_rm`, `tanggal`, `diagnosa`) VALUES
(1, 67, 000001, '2018-02-28 22:30:37', 'fhg'),
(2, 67, 000002, '2018-02-28 23:04:16', 'sakit has'),
(3, 67, 000003, '2018-03-02 22:17:09', 'anda mengalami sakit hati yang luar biasa menurut saya, kalau bisa anda perbaiki diri anda dan menjadi orang yang lebih baik lagi');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nik` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `alamat` text,
  `poly` enum('kejiwaan','vct','tumbuh_kembang','forensik','gigi','penyakit_dalam','') DEFAULT NULL,
  `tlp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nik`, `nama`, `gender`, `alamat`, `poly`, `tlp`) VALUES
(67, 'alwi', 'Laki-Laki', 'jl garuda sakti km 12', 'gigi', '888');

-- --------------------------------------------------------

--
-- Table structure for table `pasien_berobat`
--

CREATE TABLE `pasien_berobat` (
  `id_berobat` int(11) NOT NULL,
  `no_rm` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `nik` bigint(18) DEFAULT NULL,
  `poly` varchar(20) DEFAULT NULL,
  `tanggal_berobat` date DEFAULT NULL,
  `total_pembayaran` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'belum_lunas',
  `flag` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien_berobat`
--

INSERT INTO `pasien_berobat` (`id_berobat`, `no_rm`, `nik`, `poly`, `tanggal_berobat`, `total_pembayaran`, `status`, `flag`) VALUES
(1, 000001, 67, 'gigi', '2018-02-28', 15000, 'lunas', 2),
(2, 000002, 67, 'gigi', '2018-02-28', 15000, 'lunas', 2),
(3, 000003, 67, 'gigi', '2018-03-02', 15000, 'lunas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` int(11) NOT NULL,
  `password` text,
  `nama` varchar(100) DEFAULT NULL,
  `level_pengguna` enum('admin','dokter','pendaftaran','lab','apoteker','kasir','perawat') DEFAULT NULL,
  `poly` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `password`, `nama`, `level_pengguna`, `poly`) VALUES
(5, 'e4da3b7fbbce2345d7772b0674a318d5', 'yola', 'perawat', 'gigi'),
(12, 'c20ad4d76fe97759aa27a0c99bff6710', 'Andi Ahmad', 'admin', ''),
(67, '735b90b4568125ed6c3f678819b6e058', 'alwi', 'dokter', 'gigi'),
(111, '698d51a19d8a121ce581499d7b701668', 'seril', 'pendaftaran', ''),
(9090, '38f629170ac3ab74b9d6d2cc411c2f3c', 'baim', 'kasir', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asesmen`
--
ALTER TABLE `asesmen`
  ADD PRIMARY KEY (`id_asesmen`);

--
-- Indexes for table `data_pasien`
--
ALTER TABLE `data_pasien`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  ADD PRIMARY KEY (`id_berobat`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asesmen`
--
ALTER TABLE `asesmen`
  MODIFY `id_asesmen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_pasien`
--
ALTER TABLE `data_pasien`
  MODIFY `no_rm` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id_diagnosa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pasien_berobat`
--
ALTER TABLE `pasien_berobat`
  MODIFY `id_berobat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
