-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 19 sep. 2019 à 10:29
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shoes`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `brand` int(2) NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shoe_size` float NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `picture1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `brand`, `model`, `sku`, `shoe_size`, `color`, `price`, `picture1`, `picture2`, `picture3`) VALUES
(1, 1, 'Pw Human race Nmd tr Pharrell', 'ac7359', 8.5, 'noire', '795.00', 'img/shoes/ac7359_1.jpg', 'img/shoes/ac7359_2.jpg', 'img/shoes/ac7359_3.jpg'),
(2, 1, 'Nmd r1 Bape', 'ba7326', 10, 'verte', '1095.00', 'img/shoes/ba7326_1.jpg', 'img/shoes/ba7326_2.jpg', 'img/shoes/ba7326_3.jpg'),
(3, 2, 'All-star 70s hi Play', '150204c', 7, 'noire', '195.00', 'img/shoes/150204c_1.jpg', 'img/shoes/150204c_2.jpg', 'img/shoes/150204c_3.jpg'),
(4, 2, 'Fastbreak hi No Easy Buckets', '161327c', 12, 'verte', '145.00', 'img/shoes/161327c_1.jpg', 'img/shoes/161327c_2.jpg', 'img/shoes/161327c_3.jpg'),
(5, 3, 'Air Jordan 12 retro Gym red', '130690 601', 9.5, 'rouge', '295.00', 'img/shoes/130690 601_1.jpg', 'img/shoes/130690 601_2.jpg', 'img/shoes/130690 601_3.jpg'),
(6, 3, 'Air Jordan 4 retro Bred 2019 release', '308497 060', 7.5, 'noire', '245.00', 'img/shoes/308497 060_1.jpg', 'img/shoes/308497 060_2.jpg', 'img/shoes/308497 060_3.jpg'),
(7, 4, 'SB Dunk Low Nasty Boys', '304292 610', 10.5, 'rouge', '645.00', 'img/shoes/304292 610_1.jpg', 'img/shoes/304292 610_2.jpg', 'img/shoes/304292 610_3.jpg'),
(8, 4, 'Air Max 1 premium Cherrywood', '394805 600', 11, 'violette', '9450.00', 'img/shoes/394805 600_1.jpg', 'img/shoes/394805 600_2.jpg', 'img/shoes/394805 600_3.jpg'),
(9, 5, 'Question mid White Pearlized Red', '79757', 6.5, 'blanche', '235.00', 'img/shoes/79757_1.jpg', 'img/shoes/79757_2.jpg', 'img/shoes/79757_3.jpg'),
(10, 5, 'Kendrick Lamar x Classic Leather Lux Olive', 'bs7465', 5.5, 'verte', '265.00', 'img/shoes/bs7465_1.jpg', 'img/shoes/bs7465_2.jpg', 'img/shoes/bs7465_3.jpg'),
(11, 6, 'Yeezy Boost 350 Oxford tan', 'aq2661', 6, 'beige', '1195.00', 'img/shoes/aq2661_1.jpg', 'img/shoes/aq2661_2.jpg', 'img/shoes/aq2661_3.jpg'),
(12, 6, 'Yeezy Boost 350 Turtle dove', 'aq4832', 9, 'grise', '2295.00', 'img/shoes/aq4832_1.jpg', 'img/shoes/aq4832_2.jpg', 'img/shoes/aq4832_3.jpg'),
(13, 1, 'Naked x UltraBoost 1.0 Waves', 'bb1141', 8, 'bleu', '225.00', 'img/shoes/bb1141_1.jpg', 'img/shoes/bb1141_2.jpg', 'img/shoes/bb1141_3.jpg'),
(14, 1, 'Nmd r1 pk Tri color', 'bb2887', 11.5, 'noire', '250.00', 'img/shoes/bb2887_1.jpg', 'img/shoes/bb2887_2.jpg', 'img/shoes/bb2887_3.jpg'),
(15, 2, 'Chuck 70 OX Think 16', '161408c', 12.5, 'noire', '140.00', 'img/shoes/161408c_1.jpg', 'img/shoes/161408c_2.jpg', 'img/shoes/161408c_3.jpg'),
(16, 2, 'One star Golf ox Golf le fleur', '162126c', 6, 'bleu', '285.00', 'img/shoes/162126c_1.jpg', 'img/shoes/162126c_2.jpg', 'img/shoes/162126c_3.jpg'),
(17, 3, 'Air Jordan 11 retro Concord 2018 release', '378037 100', 8, 'blanche', '335.00', 'img/shoes/378037 100_1.jpg', 'img/shoes/378037 100_2.jpg', 'img/shoes/378037 100_3.jpg'),
(18, 3, 'Air Jordan 6 retro Infrared 2019 release', '384664 060', 9.5, 'noire', '230.00', 'img/shoes/384664 060_1.jpg', 'img/shoes/384664 060_2.jpg', 'img/shoes/384664 060_3.jpg'),
(19, 4, 'Air Max 1 prm Atmos', '512033 003', 11, 'verte', '895.00', 'img/shoes/512033 003_1.jpg', 'img/shoes/512033 003_2.jpg', 'img/shoes/512033 003_3.jpg'),
(20, 4, 'Air Force 1 low NYC hs', '722241 844', 5.5, 'blanche', '445.00', 'img/shoes/722241 844_1.jpg', 'img/shoes/722241 844_2.jpg', 'img/shoes/722241 844_3.jpg'),
(21, 5, 'CL Nylon YG X 4 Hunnid', 'cn2664', 8.5, 'rouge', '210.00', 'img/shoes/cn2664_1.jpg', 'img/shoes/cn2664_2.jpg', 'img/shoes/cn2664_3.jpg'),
(22, 5, 'Question mid CURRENSY Jet Life', 'cn3671', 9, 'blanche', '160.00', 'img/shoes/cn3671_1.jpg', 'img/shoes/cn3671_2.jpg', 'img/shoes/cn3671_3.jpg'),
(23, 6, 'Yeezy Boost 700 Wave runner', 'b75571', 10, 'grise', '410.00', 'img/shoes/b75571_1.jpg', 'img/shoes/b75571_2.jpg', 'img/shoes/b75571_3.jpg'),
(24, 6, 'Yeezy Boost 350 Pirate black', 'bb5350', 11.5, 'noire', '945.00', 'img/shoes/bb5350_1.jpg', 'img/shoes/bb5350_2.jpg', 'img/shoes/bb5350_3.jpg'),
(25, 1, 'UltraBoost ltd Triple black', 'bb4677', 10.5, 'noire', '450.00', 'img/shoes/bb4677_1.jpg', 'img/shoes/bb4677_2.jpg', 'img/shoes/bb4677_3.jpg'),
(26, 1, 'Eqt running guidance King Push', 'd69875', 7.5, 'beige', '650.00', 'img/shoes/d69875_1.jpg', 'img/shoes/d69875_2.jpg', 'img/shoes/d69875_3.jpg'),
(27, 2, 'Chuck 70 hi OFF-WHITE', '162204c', 7, 'blanche', '1545.00', 'img/shoes/162204c_1.jpg', 'img/shoes/162204c_2.jpg', 'img/shoes/162204c_3.jpg'),
(28, 2, 'Comme des garçons Play Chuck 70 high top Multi heart', '162973c', 6.5, 'marron', '345.00', 'img/shoes/162973c_1.jpg', 'img/shoes/162973c_2.jpg', 'img/shoes/162973c_3.jpg'),
(29, 3, 'Air Jordan 1 retro high og Turbo green', '555088 311', 12.5, 'bleu', '205.00', 'img/shoes/555088 311_1.jpg', 'img/shoes/555088 311_2.jpg', 'img/shoes/555088 311_3.jpg'),
(30, 3, 'Air Jordan 3 retro og True blue 2016 release', '854262 106', 12, 'blanche', '290.00', 'img/shoes/854262 106_1.jpg', 'img/shoes/854262 106_2.jpg', 'img/shoes/854262 106_3.jpg'),
(31, 4, 'Kobe 10 elite low prm Htm', '805937 900', 11, 'verte', '500.00', 'img/shoes/805937 900_1.jpg', 'img/shoes/805937 900_2.jpg', 'img/shoes/805937 900_3.jpg'),
(32, 4, 'Nike air vapormax flyknit OG', '849558 006', 8.5, 'grise', '495.00', 'img/shoes/849558 006_1.jpg', 'img/shoes/849558 006_2.jpg', 'img/shoes/849558 006_3.jpg'),
(33, 5, 'Pyer Moss Dmx fusion 1 Experiment', 'cn7586', 11.5, 'noire', '215.00', 'img/shoes/cn7586_1.jpg', 'img/shoes/cn7586_2.jpg', 'img/shoes/cn7586_3.jpg'),
(34, 5, 'Instapump fury og Colette x Lamjc', 'm48252', 10.5, 'grise', '315.00', 'img/shoes/m48252_1.jpg', 'img/shoes/m48252_2.jpg', 'img/shoes/m48252_3.jpg'),
(35, 6, 'Yeezy Boost 350 v2', 'cp9652', 7, 'noire', '1295.00', 'img/shoes/cp9652_1.jpg', 'img/shoes/cp9652_2.jpg', 'img/shoes/cp9652_3.jpg'),
(36, 6, 'Yeezy 500 Blush', 'db2908', 12.5, 'beige', '375.00', 'img/shoes/db2908_1.jpg', 'img/shoes/db2908_2.jpg', 'img/shoes/db2908_3.jpg'),
(37, 1, 'Zx 500 Restomod Goku', 'd97046', 7.5, 'orange', '280.00', 'img/shoes/d97046_1.jpg', 'img/shoes/d97046_2.jpg', 'img/shoes/d97046_3.jpg'),
(38, 1, 'Y-3 Futurecraft Runner 4D Red', 'f99805', 9.5, 'rouge', '880.00', 'img/shoes/f99805_1.jpg', 'img/shoes/f99805_2.jpg', 'img/shoes/f99805_3.jpg'),
(39, 2, 'Chuck 70 low Multi heart', '162976c', 5.5, 'marron', '150.00', 'img/shoes/162976c_1.jpg', 'img/shoes/162976c_2.jpg', 'img/shoes/162976c_3.jpg'),
(40, 2, 'Converse Chuck Taylor All-Star 70s Hi Kith x Coca Cola China', '162985c', 9, 'jaune', '350.00', 'img/shoes/162985c_1.jpg', 'img/shoes/162985c_2.jpg', 'img/shoes/162985c_3.jpg'),
(41, 3, 'Air Jordan 1 retro high og nrg Not for resale', '861428 106', 10, 'noire', '1210.00', 'img/shoes/861428 106_1.jpg', 'img/shoes/861428 106_2.jpg', 'img/shoes/861428 106_3.jpg'),
(42, 3, 'Air Jordan 1 x Off-white nrg UNC', 'aq0818 148', 6.5, 'bleu', '1895.00', 'img/shoes/aq0818 148_1.jpg', 'img/shoes/aq0818 148_2.jpg', 'img/shoes/aq0818 148_3.jpg'),
(43, 4, 'The 10: Nike air presto Off-White', 'aa3830 001', 8, 'noire', '2800.00', 'img/shoes/aa3830 001_1.jpg', 'img/shoes/aa3830 001_2.jpg', 'img/shoes/aa3830 001_3.jpg'),
(44, 4, 'The 10: Nike air max 97 og Off-white', 'aj4585 001', 6, 'noire', '1595.00', 'img/shoes/aj4585 001_1.jpg', 'img/shoes/aj4585 001_2.jpg', 'img/shoes/aj4585 001_3.jpg'),
(45, 5, 'Question Mid White Black', 'm48511', 12, 'blanche', '175.00', 'img/shoes/m48511_1.jpg', 'img/shoes/m48511_2.jpg', 'img/shoes/m48511_3.jpg'),
(46, 5, 'Club C Concepts', 'm48829', 9, 'grise', '170.00', 'img/shoes/m48829_1.jpg', 'img/shoes/m48829_2.jpg', 'img/shoes/m48829_3.jpg'),
(47, 6, 'Yeezy Boost 700 Mauve', 'ee9614', 10.5, 'grise', '310.00', 'img/shoes/ee9614_1.jpg', 'img/shoes/ee9614_2.jpg', 'img/shoes/ee9614_3.jpg'),
(48, 6, 'Teezy Boost 700 v2 Static Wave runner', 'ef2829', 8, 'grise', '630.00', 'img/shoes/ef2829_1.jpg', 'img/shoes/ef2829_2.jpg', 'img/shoes/ef2829_3.jpg'),
(49, 1, 'Superstar 80s luker Neighborhood', 'g17201', 11.5, 'noire', '220.00', 'img/shoes/g17201_1.jpg', 'img/shoes/g17201_2.jpg', 'img/shoes/g17201_3.jpg'),
(50, 1, 'Nmd r1 pk Og 2017 release', 's79168', 8.5, 'noire', '320.00', 'img/shoes/s79168_1.jpg', 'img/shoes/s79168_2.jpg', 'img/shoes/s79168_3.jpg'),
(51, 2, 'Kith x Coca-Cola x Chuck 70 High France', '162988c', 7.5, 'bleu', '475.00', 'img/shoes/162988c_1.jpg', 'img/shoes/162988c_2.jpg', 'img/shoes/162988c_3.jpg'),
(52, 2, 'Chuck 70 hi Golf le fleur Burlap', '163168c', 10, 'beige', '155.00', 'img/shoes/163168c_1.jpg', 'img/shoes/163168c_2.jpg', 'img/shoes/163168c_3.jpg'),
(53, 3, 'Air Jordan 1 high og ts sp Travis Scott', 'cd4487 100', 7.5, 'marron', '1995.00', 'img/shoes/cd4487 100_1.jpg', 'img/shoes/cd4487 100_2.jpg', 'img/shoes/cd4487 100_3.jpg'),
(54, 3, 'Air Jordan 1 high og defiant LA to Chicago', 'cd6578 507', 12.5, 'violette', '845.00', 'img/shoes/cd6578 507_1.jpg', 'img/shoes/cd6578 507_2.jpg', 'img/shoes/cd6578 507_3.jpg'),
(55, 4, 'Nike Air Max 97 CR7 Portugal Patchwork', 'aq0655 600', 6.5, 'rouge', '305.00', 'img/shoes/aq0655 600_1.jpg', 'img/shoes/aq0655 600_2.jpg', 'img/shoes/aq0655 600_3.jpg'),
(56, 4, 'Nike React Element 87', 'aq1090 003', 9.5, 'grise', '260.00', 'img/shoes/aq1090 003_1.jpg', 'img/shoes/aq1090 003_2.jpg', 'img/shoes/aq1090 003_3.jpg'),
(57, 5, 'Court victory Pump felt Alife Ball out', 'm49793', 5.5, 'jaune', '130.00', 'img/shoes/m49793_1.jpg', 'img/shoes/m49793_2.jpg', 'img/shoes/m49793_3.jpg'),
(58, 5, 'BAPE x Ventilator affiliates Camo', 'v63541', 7, 'verte', '240.00', 'img/shoes/v63541_1.jpg', 'img/shoes/v63541_2.jpg', 'img/shoes/v63541_3.jpg'),
(59, 6, 'Yeezy 500 Utility Black', 'f36640', 11, 'noire', '430.00', 'img/shoes/f36640_1.jpg', 'img/shoes/f36640_2.jpg', 'img/shoes/f36640_3.jpg'),
(60, 6, 'Yeezy Boost 350 v2', 'fu9006', 9, 'noire', '460.00', 'img/shoes/fu9006_1.jpg', 'img/shoes/fu9006_2.jpg', 'img/shoes/fu9006_3.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
