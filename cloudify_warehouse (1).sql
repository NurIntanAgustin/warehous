-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 03:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudify_warehouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `fee_warehouse`
--

CREATE TABLE `fee_warehouse` (
  `fee_id` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_warehouse`
--

INSERT INTO `fee_warehouse` (`fee_id`, `keterangan`, `fee`) VALUES
(1, 'Amplop', 10000),
(2, '1 kg', 10000),
(3, '> 1 - 2 kg', 15000),
(4, '> 2 - 4 kg', 20000),
(5, '> 4 - 8 kg', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_paket`
--

CREATE TABLE `jenis_paket` (
  `paket_id` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_paket`
--

INSERT INTO `jenis_paket` (`paket_id`, `nama_paket`) VALUES
(1, 'Sharing'),
(2, 'Direct (Repack)'),
(3, 'Direct (No Repack)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengiriman`
--

CREATE TABLE `jenis_pengiriman` (
  `pengiriman_id` int(11) NOT NULL,
  `nama_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_pengiriman`
--

INSERT INTO `jenis_pengiriman` (`pengiriman_id`, `nama_pengiriman`) VALUES
(1, 'EMS'),
(2, 'Air Cargo');

-- --------------------------------------------------------

--
-- Table structure for table `link_checkout`
--

CREATE TABLE `link_checkout` (
  `link_id` int(11) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_checkout`
--

INSERT INTO `link_checkout` (`link_id`, `keterangan`, `link`) VALUES
(1, 'Amplop 1 - 3 Resi', 'https://shp.ee/6smfc7x'),
(2, 'Amplop > 3 Resi', 'https://shp.ee/tams3mx\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE `logistik` (
  `log_id` int(11) NOT NULL,
  `resi_id` int(11) NOT NULL,
  `box` int(11) NOT NULL,
  `resi_pengiriman` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar_arrived_kr` varchar(100) NOT NULL,
  `gambar_arrived_ina` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`log_id`, `resi_id`, `box`, `resi_pengiriman`, `status`, `gambar_arrived_kr`, `gambar_arrived_ina`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 'EG294841965KR', 'Bea Cukai', 'kr.jpg', 'ina.jpg', '2022-07-17 14:20:39', '2022-07-02 12:59:10'),
(2, 2, 20, 'EG294841965KR', 'Bea Cukai', '', '', '2022-07-10 14:08:26', '2022-07-02 12:59:10'),
(3, 3, 20, 'EG294841965KR', 'Bea Cukai', '', '', '2022-07-10 14:08:35', '2022-07-02 12:59:10'),
(4, 4, 20, 'EG294841965KR', 'Bea Cukai', '', '', '2022-07-10 14:09:38', '2022-07-02 12:59:10'),
(5, 4, 5, 'EG68384109134', 'Tiba di Warehouse Korea', '', '', '2022-07-16 12:41:10', '2022-07-16 12:41:10'),
(6, 3, 11, 'EG68384109134', 'Tiba di Warehouse Korea', '', '', '2022-07-16 12:42:36', '2022-07-16 12:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `metode_id` int(11) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `pemilik` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`metode_id`, `metode_pembayaran`, `no_rek`, `pemilik`) VALUES
(1, 'OVO / ShopeePay', '0893791031932', 'Nurantika Kulka');

-- --------------------------------------------------------

--
-- Table structure for table `resi`
--

CREATE TABLE `resi` (
  `resi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `resi` varchar(100) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `paket_id` int(11) NOT NULL,
  `pengiriman_id` int(11) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resi`
--

INSERT INTO `resi` (`resi_id`, `user_id`, `nama_barang`, `jumlah_barang`, `resi`, `tgl_kirim`, `paket_id`, `pengiriman_id`, `gambar_barang`, `created_at`) VALUES
(1, 1, 'Album Manifesto 6 Set', 0, '557713110996', '2022-07-01', 1, 1, '2.jpg', '2022-07-02 12:10:54'),
(2, 4, 'Album Manifesto 6 Set', 0, '557713110995', '2022-07-01', 1, 1, '2.jpg', '2022-07-02 12:10:54'),
(3, 5, 'Album Manifesto 6 Set', 0, '557713110991', '2022-07-01', 1, 2, '2.jpg', '2022-07-02 12:10:54'),
(4, 5, 'Album Manifesto 6 Set', 0, '557713110992', '2022-07-01', 1, 1, '2.jpg', '2022-07-02 12:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `tagihan_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `berat` varchar(11) DEFAULT NULL,
  `tarif_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `bukti_tf` varchar(100) DEFAULT NULL,
  `status_tf` varchar(50) DEFAULT NULL,
  `link_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`tagihan_id`, `log_id`, `berat`, `tarif_id`, `fee_id`, `jumlah`, `bukti_tf`, `status_tf`, `link_id`, `created_at`) VALUES
(1, 1, '2400', 1, 1, '336000', '\r\n', 'Pembayaran Berhasil', 1, '2022-07-03 12:48:23'),
(12, 1, '2400', 2, 1, '336000', NULL, 'Pembayaran Belum Diterima', 1, '2022-07-17 11:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `tarif_id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarif`
--

INSERT INTO `tarif` (`tarif_id`, `keterangan`, `tarif`, `created_at`, `updated_at`) VALUES
(1, 'EMS Tax Barang Ringan / Paper Based', 5000, '2022-06-27 08:21:49', '2022-06-27 08:21:49'),
(2, 'EMS Tax Barang Berat / Barang Bervolume', 175, '2022-07-09 09:17:48', '2022-07-09 09:16:45'),
(3, 'Air Cargo Tax Barang Ringan / Paper Based', 6500, '2022-07-09 09:18:05', '2022-07-09 09:17:36'),
(4, 'Air Cargo Tax Barang Berat / Barang Bervolume', 285, '2022-07-09 09:18:18', '2022-07-09 09:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `role_id` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `jenis_kelamin`, `no_telp`, `email`, `password`, `avatar`, `role_id`, `created_at`) VALUES
(1, 'Zaki Santoso', '', '', 'zakisans@gmail.com', '$2y$10$OvJaNrUjPSewsIEPNLka7uXNgIVlu1kHMoRw01IH6voi2Wufj0oMe', 'default.jpg', 2, '2022-07-10 13:37:43'),
(2, 'Lee Do Hyun', '', '', 'dohyun@gmail.com', '$2y$10$1rnpHY905mXuafpWX0cW1OAB0p4gRhMmSmgiDBtOTDYIPd8C3tzj6', 'default.jpg', 2, '2022-07-10 13:37:43'),
(3, 'Aulia', '', '', 'aulia@gmail.com', '$2y$10$ICkBukHNN5IAKSTvoc4WO.C1J2CkTFcoodlB5Ak1G0FVYwcN1Y3AS', 'default.jpg', 1, '2022-07-10 13:37:43'),
(4, 'Jake', 'Laki-Laki', '085736738222', 'jake@gmail.com', '$2y$10$dY3RSuv9pMKctk2PWyCAh.fwzw1Qt1DXbjOX53Og7/5Nqm8OTg30G', 'jake.jpg', 2, '2022-07-10 13:37:43'),
(5, 'Jungwon', 'Laki-Laki', '089314994445', 'jungwon@gmail.com', '$2y$10$Nuau.66kLyDp3whemcC5CeZRioOSTzXBBhZRASnW83edmYlWcdiAu', 'jungwon.jpg', 1, '2022-07-10 13:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Staff Warehouse'),
(2, 'Konsumen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fee_warehouse`
--
ALTER TABLE `fee_warehouse`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `jenis_pengiriman`
--
ALTER TABLE `jenis_pengiriman`
  ADD PRIMARY KEY (`pengiriman_id`);

--
-- Indexes for table `link_checkout`
--
ALTER TABLE `link_checkout`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `logistik`
--
ALTER TABLE `logistik`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`metode_id`);

--
-- Indexes for table `resi`
--
ALTER TABLE `resi`
  ADD PRIMARY KEY (`resi_id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`tagihan_id`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`tarif_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fee_warehouse`
--
ALTER TABLE `fee_warehouse`
  MODIFY `fee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_paket`
--
ALTER TABLE `jenis_paket`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_pengiriman`
--
ALTER TABLE `jenis_pengiriman`
  MODIFY `pengiriman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `link_checkout`
--
ALTER TABLE `link_checkout`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logistik`
--
ALTER TABLE `logistik`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  MODIFY `metode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resi`
--
ALTER TABLE `resi`
  MODIFY `resi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `tagihan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tarif`
--
ALTER TABLE `tarif`
  MODIFY `tarif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
