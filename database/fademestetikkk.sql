-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 Ara 2023, 15:16:30
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `fademestetikkk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

DROP TABLE IF EXISTS `hizmetler`;
CREATE TABLE IF NOT EXISTS `hizmetler` (
  `hizmet_id` int(11) NOT NULL AUTO_INCREMENT,
  `hizmet_name` varchar(255) NOT NULL,
  `hizmet_price` int(11) NOT NULL,
  PRIMARY KEY (`hizmet_id`),
  KEY `hizmet_id` (`hizmet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_name`, `hizmet_price`) VALUES
(1, 'cilt_bakımı', 500),
(2, 'Lazer_epilasyon', 800),
(3, 'G-5_Bölgesel_incelme', 1000);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet_personel`
--

DROP TABLE IF EXISTS `hizmet_personel`;
CREATE TABLE IF NOT EXISTS `hizmet_personel` (
  `hizmet_id` int(11) NOT NULL,
  `personel_id` int(11) NOT NULL,
  UNIQUE KEY `hizmet_id` (`hizmet_id`,`personel_id`),
  KEY `personel_id` (`personel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_username` varchar(255) NOT NULL,
  `kullanici_email` varchar(255) NOT NULL,
  `kullanici_password` varchar(255) NOT NULL,
  PRIMARY KEY (`kullanici_id`),
  KEY `kullanici_id` (`kullanici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_username`, `kullanici_email`, `kullanici_password`) VALUES
(2, 'fadem', 'fademestetik@gmail.com', 'fadem123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

DROP TABLE IF EXISTS `musteriler`;
CREATE TABLE IF NOT EXISTS `musteriler` (
  `musteri_id` int(11) NOT NULL AUTO_INCREMENT,
  `ödeme_id` int(11) NOT NULL,
  `musteri_username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `musteri_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `musteri_phonenumber` int(11) NOT NULL,
  PRIMARY KEY (`musteri_id`),
  UNIQUE KEY `randevu_id` (`ödeme_id`),
  KEY `musteri_id` (`musteri_id`),
  KEY `ödeme_id` (`ödeme_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odeme`
--

DROP TABLE IF EXISTS `odeme`;
CREATE TABLE IF NOT EXISTS `odeme` (
  `odeme_id` int(11) NOT NULL AUTO_INCREMENT,
  `musteri_id` int(11) NOT NULL,
  `kullanici_id` int(50) NOT NULL,
  `kullanici_name` varchar(255) NOT NULL,
  `odeme_tarihi` date NOT NULL,
  `fatura_numarasi` int(255) NOT NULL,
  `odenen_tutar` int(255) NOT NULL,
  `toplam_tutar` int(255) NOT NULL,
  `islem_tarihi` date NOT NULL,
  PRIMARY KEY (`odeme_id`),
  KEY `odeme_id` (`odeme_id`,`musteri_id`),
  KEY `kullanici_id` (`kullanici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `personel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hizmet_id` int(11) NOT NULL,
  `personel_name` varchar(255) NOT NULL,
  `personel_bilgi` varchar(255) NOT NULL,
  `personel_maas` int(255) NOT NULL,
  `verdigihizmet` varchar(250) NOT NULL,
  PRIMARY KEY (`personel_id`),
  KEY `hizmet_id` (`hizmet_id`),
  KEY `personel_id` (`personel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`personel_id`, `hizmet_id`, `personel_name`, `personel_bilgi`, `personel_maas`, `verdigihizmet`) VALUES
(1, 1, 'Beyza Kurt', 'tel: 05319487802', 15000, 'cilt bakımı'),
(2, 2, 'Aysima Yılmaz', 'tel:05435416133', 15000, 'lazer-epilasyon'),
(3, 1, 'Azra ', 'Stajyer\r\ntel: 05349747387', 10000, 'cilt bakımı'),
(4, 3, 'Beren', 'stajyer\r\ntel: 05331594211', 10000, 'G-5 Bölgesel incelme');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

DROP TABLE IF EXISTS `randevu`;
CREATE TABLE IF NOT EXISTS `randevu` (
  `musteri_id` int(11) NOT NULL,
  `musteri_username` varchar(250) NOT NULL,
  `musteri_mail` varchar(250) NOT NULL,
  `musteri_phonenumber` varchar(11) NOT NULL,
  `hizmet_adi` varchar(250) NOT NULL,
  `randevu_zaman` time NOT NULL,
  `randevu_tarih` date NOT NULL,
  `musteri_mesaj` varchar(250) NOT NULL,
  `randevu_id` int(250) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`randevu_id`),
  KEY `musteri_id` (`musteri_id`,`randevu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`musteri_id`, `musteri_username`, `musteri_mail`, `musteri_phonenumber`, `hizmet_adi`, `randevu_zaman`, `randevu_tarih`, `musteri_mesaj`, `randevu_id`) VALUES
(1, 'Elif_Karaca', 'bilinmiyor', '0', 'G-5 Bölgesel incelme', '15:30:00', '2023-12-07', 'G-5 Bölgesel incelme', 1),
(2, 'Feride', 'bilinmiyor', '0', 'İğneli Epilasyon', '16:00:00', '2023-12-07', 'İğneli Epilasyon', 2),
(3, 'Selen', 'bilinmiyor', '05052519080', 'Lazer-epilasyon', '16:15:00', '2023-12-07', 'Sadece ön bacak için', 7),
(6, 'dr_rumeysa', 'bilinmiyor', '00', 'cilt bakımı', '18:00:00', '2023-12-08', 'cilt bakımı randevu', 8),
(5, 'Emine_oyma', 'bilinmiyor', '0', 'Cilt bakımı', '10:30:00', '2023-12-08', 'Cilt bakımı', 9),
(6, 'Fatma_zohre', 'bilinmiyor', '0', 'G-5 Bölgesel incelme', '13:00:00', '2023-12-06', '..', 10),
(7, 'ceyda', 'bilinmiyor', '0', 'Lazer-epilasyon', '18:10:10', '2023-12-06', 'sadece yüz seansı', 11);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `hizmet_personel`
--
ALTER TABLE `hizmet_personel`
  ADD CONSTRAINT `hizmet_personel_ibfk_1` FOREIGN KEY (`personel_id`) REFERENCES `personel` (`personel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hizmet_personel_ibfk_2` FOREIGN KEY (`hizmet_id`) REFERENCES `hizmetler` (`hizmet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `musteriler_ibfk_1` FOREIGN KEY (`musteri_id`) REFERENCES `randevu` (`musteri_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musteriler_ibfk_2` FOREIGN KEY (`ödeme_id`) REFERENCES `odeme` (`odeme_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
