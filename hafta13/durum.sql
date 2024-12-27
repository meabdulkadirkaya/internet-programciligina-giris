-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Ara 2024, 09:04:24
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `isci_maas`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `durum`
--

CREATE TABLE `durum` (
  `id` int(255) NOT NULL,
  `tc` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soyad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `cinsiyet` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `maas` int(255) NOT NULL,
  `cocuksayisi` int(255) NOT NULL,
  `tmaas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `durum`
--
ALTER TABLE `durum`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `durum`
--
ALTER TABLE `durum`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
