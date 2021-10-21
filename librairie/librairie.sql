-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 oct. 2021 à 22:17
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `librairie`
--

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `descriptionlivre` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `dateparution` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `auteur`, `descriptionlivre`, `image`, `dateparution`) VALUES
(1, 'bonjour', 'kalilou', 'bon livre', '', '0000-00-00'),
(2, '', '', '', '', '0000-00-00'),
(3, '', '', '', '', '0000-00-00'),
(4, '', '', '', '', '0000-00-00'),
(5, '', '', '', '', '0000-00-00'),
(6, 'bonjour 2', '', '', '', '0000-00-00'),
(7, 'bonjour 2', '', '', '', '0000-00-00'),
(8, 'bonjour 3', 'kalilou 3', 'tres bon livre 3', '', '0000-00-00'),
(9, 'bonjour 3', 'kalilou 3', 'tres bon livre 3', '', '0000-00-00'),
(10, 'bonjour 4', '', '', '', '0000-00-00'),
(11, 'bonjour 4', '', '', '', '0000-00-00'),
(12, 'bonjour 5', 'tieman', 'tres bon livre 3   aaazdfrrfvgtggyjuuu', '', '0000-00-00'),
(13, 'bonjour 2', '', '', '', '0000-00-00'),
(14, 'bonjour 2', '', '', '', '0000-00-00'),
(15, 'bonjour 2', '', '', '', '0000-00-00'),
(16, 'a', '', '', '', '0000-00-00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
