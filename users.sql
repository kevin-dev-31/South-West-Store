-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 sep. 2019 à 16:56
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
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `last_name`, `first_name`, `address`, `additional_address`, `postal_code`, `city`, `phone_number`, `reset_token`) VALUES
(1, 'pratlong.estelle@outlook.fr', '[\"ROLE_ADMIN\"]', '$2y$10$qiNtMvgywSxwzTfEbsa0SObkyoBbWTSy1BVz36WXCeQr5hlGlqvD2', 'Pratlong', 'Estelle', '2 allée olympe de gouges', '', 31520, 'Ramonville Saint-Agne', '0611536708', 'm9BT--ggF4IabGfNGoB6Xh0d3IVPBJGX8mcoT4gKxXU'),
(2, 'bbtuneur@hotmail.fr', '[\"ROLE_USER\"]', '$2y$10$MOYaIFGrBdyxFNlenstiN.Nzl8n43mqiJOjP3eV51VwciZWAZ/hGm', 'Ricou', 'Kévin', '47, boulevard Jean Brunhes', '', 31300, 'Toulouse', '0611223344', NULL),
(3, 'fablelong@yahoo.fr', '[\"ROLE_USER\"]', '$2y$10$MITtXHR6bK32zwZIWIE6CegZ7WkWLx0gzmwePhMdt2o/lBABvNiyu', 'Puech', 'Fabien', '77 rue Louis Plana', '', 31500, 'Toulouse', '0611223344', NULL),
(4, 'gomes.boris@gmail.com', '[\"ROLE_USER\"]', '$2y$10$rPPzW7cTd/1AvDQkVIf7zuOrfafvuyn7QLKd9p0/si0MAUJ8iTreG', 'Gomez Da Costa', 'Boris', '105 rue des Fontaines', '', 31100, 'Toulouse', '0611223344', NULL);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
