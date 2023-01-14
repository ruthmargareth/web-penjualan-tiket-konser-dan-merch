-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 02:58 PM
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
-- Database: `tiketin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(128) NOT NULL,
  `password_admin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id_admin`, `email_admin`, `password_admin`) VALUES
(1, 'admin.tiketin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_merch`
--

CREATE TABLE `jenis_merch` (
  `id_jenis_merch` int(11) NOT NULL,
  `nama_jenis_merch` varchar(64) NOT NULL,
  `img_jenis_merch` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_merch`
--

INSERT INTO `jenis_merch` (`id_jenis_merch`, `nama_jenis_merch`, `img_jenis_merch`) VALUES
(7, 'Fanlight', '639e92768629c.jpg'),
(8, 'Clotes', '639e92fd2c2f6.jpg'),
(9, 'Album', '639e9307a20d8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `merch`
--

CREATE TABLE `merch` (
  `id_merch` int(11) NOT NULL,
  `nama_merch` varchar(128) NOT NULL,
  `img_merch` varchar(128) NOT NULL,
  `harga_merch` varchar(128) NOT NULL,
  `id_jenis_merch_FK` int(11) NOT NULL,
  `deskripsi_merch` text NOT NULL,
  `stock_merch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merch`
--

INSERT INTO `merch` (`id_merch`, `nama_merch`, `img_merch`, `harga_merch`, `id_jenis_merch_FK`, `deskripsi_merch`, `stock_merch`) VALUES
(2, 'ATEEZ - 1st Albums', '639e9da813c6c.jpg', '250.000', 9, '    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, officiis cum? Laborum nostrum doloribus voluptatum optio magnam rem fugit error perspiciatis in, quaerat quisquam excepturi aliquam ipsam eligendi sequi! Saepe, asperiores neque. Placeat eius repellendus, reprehenderit soluta totam iusto earum nobis adipisci nihil in veniam quisquam nam culpa harum aperiam.', 10),
(3, 'B.I – 1st Full Album', '639e9ee4c07a0.jpg', '300.000', 9, '                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi possimus vitae soluta excepturi aperiam, id quis quibusdam iste dolorum? Voluptas distinctio sit dolorem aliquid accusamus autem laborum, magni tempore earum iste beatae cumque dolores ut voluptates deserunt quasi. Aliquid sit velit repudiandae dolore nihil, accusantium non? Aspernatur repellendus labore placeat. Earum nam necessitatibus, autem maxime ipsam ut? Laboriosam, atque fugiat.', 12),
(4, 'BAMBAM – 1st Mini Album', '639e9f7e834a0.jpg', '200.000', 9, '                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta delectus unde fugit quas quod accusamus, aperiam tenetur, tempora nulla porro neque recusandae modi odit maxime molestiae, officiis vero voluptatem qui mollitia rem pariatur! Nostrum odio ipsa, cum velit libero dolor minus voluptates alias est dolores, modi, inventore maiores. Ipsa placeat error exercitationem quibusdam sed ullam minus magnam beatae officiis! Enim!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama_tiket` varchar(128) NOT NULL,
  `img_tiket` varchar(128) NOT NULL,
  `harga_tiket` varchar(128) NOT NULL,
  `stock_tiket` int(11) NOT NULL,
  `deskripsi_tiket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama_tiket`, `img_tiket`, `harga_tiket`, `stock_tiket`, `deskripsi_tiket`) VALUES
(2, 'ITZY \"CHECKMATE\" WORLD TOUR in JAKARTA', '639eeba73a8cb.jpg', '1.400.000', 300, '              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, facere vel ex error delectus ullam ducimus sint. Fuga cupiditate quidem amet ullam. Assumenda obcaecati dolorem vitae ab totam ipsa soluta minima fuga. Ipsa odit asperiores, distinctio maiores quod tempora expedita debitis veniam quisquam officia quam vitae assumenda nihil sequi enim.    ');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `password_user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id_user`, `email_user`, `password_user`) VALUES
(3, 'gilangadhiperkasa@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `jenis_merch`
--
ALTER TABLE `jenis_merch`
  ADD PRIMARY KEY (`id_jenis_merch`);

--
-- Indexes for table `merch`
--
ALTER TABLE `merch`
  ADD PRIMARY KEY (`id_merch`),
  ADD KEY `fk_idJenisMerch` (`id_jenis_merch_FK`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_merch`
--
ALTER TABLE `jenis_merch`
  MODIFY `id_jenis_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `merch`
--
ALTER TABLE `merch`
  MODIFY `id_merch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `merch`
--
ALTER TABLE `merch`
  ADD CONSTRAINT `fk_idJenisMerch` FOREIGN KEY (`id_jenis_merch_FK`) REFERENCES `jenis_merch` (`id_jenis_merch`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
