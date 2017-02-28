-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 28 Février 2017 à 15:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tp_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `validation`
--

CREATE TABLE `validation` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `validation`
--

INSERT INTO `validation` (`id`, `nom`, `prenom`, `email`) VALUES
(1, 'Jean', 'Dupont', 'jean.dupont@gmail.com'),
(2, 'Jean', 'Dupont', 'jean.dupont@gmail.com'),
(3, 'Jean', 'Dupont', 'jean.dupont@gmail.com'),
(4, 'Jean', 'Dupont', 'jean.dupont@gmail.com'),
(5, 'Jean', 'Dupont', 'jean.dupont@gmail.com'),
(6, 'Martin', 'Luther', 'martin.luther@gmail.com'),
(7, '', '', ''),
(8, '', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, 'Hollande', 'FranÃ§ois', 'franÃ§ous.lhollandais@gmail.com'),
(20, 'Hollande', 'FranÃ§ois', 'franÃ§ous.lhollandais@gmail.com'),
(21, 'Pays', 'Even', 'even.pays@gmail.com');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `validation`
--
ALTER TABLE `validation`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `validation`
--
ALTER TABLE `validation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
