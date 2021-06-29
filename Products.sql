-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2021 at 10:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `idProducts` int(11) NOT NULL,
  `productName` varchar(45) DEFAULT NULL,
  `imgUrl` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`idProducts`, `productName`, `imgUrl`, `price`, `category`, `description`) VALUES
(1, 'Veba Geceleri', 'static/veba-geceleri.jpg', '30', 'romance', 'Veba salgını zamanını, insanların verdiği mücadeleyi anlatan..'),
(2, 'Yer Demir Gök Bakır', 'static/yer-demir.jpg', '40', 'romance', 'İnsanlara karşı acımasız bir toprağın temposu...'),
(3, 'Beynin Gizli Hayatı', 'static/beyin-gizli.jpg', '60', 'science', 'Siz daha tehlikeyi algılamadan, ayağınızı fren pedalının üstüne götüren kim?'),
(4, 'Türlerin Kökeni', 'static/turlerin-kokeni.jpg', '60', 'science', 'İlk basımı 1859’da Londra’da yayımlanan Türlerin Kökeni, dünyamızın bilim ve kültür tarihini değiştiren kitapların başında gelir. Darwin’in 20 yıllık araştırması...'),
(5, 'Kaos', 'static/kaos.jpg', '32', 'science', 'kaos her yerde...'),
(6, 'Suç ve Ceza', 'static/sucveceza.jpg', '25', 'classic', 'Gerçek dünyadan kendini soyutlamış bir kişinin iç çatışmalarını ve hezeyanlarını konu edinen Yeraltından Notlar da zaman zaman kendinizden bir parça bulabilirsiniz.\r\n'),
(12, 'Balıkçı ve Oğlu', 'static/balikci.jpg', '60', 'romance', 'son yılların en can yakıcı ve büyük dramı “göçmenliği” balıkçı Mustafa, Mesude ve Samir bebek üzerinden anlatıyor. '),
(14, 'Mülksüzler', 'static/mulksuzler.jpg', '32', 'mystery', 'Bilimkurgu ve fantastik roman türlerinin gelmiş geçmiş en güçlü yazarlarından olan Ursula K. Le Guin, dünya tarihinin sistem çatışmalarına bütünsel ve alegorik bakış açısıyla yaklaşıyor.'),
(16, 'Seyir', 'static/seyir.jpg', '45', 'romance', 'Mina, onu kendi dönüşümüne götürecek\r\nuzun bir yolculuğa çıkmaya hazırdı artık!'),
(18, 'Ağaçların Gizli Yaşamı', 'static/agaclar.jpg', '36', 'science', 'Ağaçların acıyı hissedebildiğini, hafızaları olduğunu ve ağaçların çocuklarıyla yaşadığını öğrendiğinizde,sıradan bir işmiş gibi devasa makinelerle kesip hayatlarını altüst edemiyorsunuz.'),
(21, 'Büyük Yalanlar', 'static/yalanlar.jpg', '21', 'mystery', 'Büyük Yalanlar’da, propaganda dediğimiz siyasi eylemle tek bir insanın, kitlelere neler yapabileceğini ve yaptırabileceğini göreceksiniz.'),
(22, 'Bilim Kitabı', 'static/bilimkitabi.jpg', '94', 'science', 'Evren bir Büyük Patlamayla mı başladı? Işık bir dalga mı, bir parçacık mıi yoksa her ikisi midir? Küresel ısınmanın nedeni biz miyiz? Her Şeyin Teorisi olanaklı mıdır?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`idProducts`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
