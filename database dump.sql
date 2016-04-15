-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 15 Avril 2016 à 11:13
-- Version du serveur: 5.1.67
-- Version de PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `valerian`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_bin NOT NULL,
  `desc` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id_category`, `name`, `desc`) VALUES
(3, 'Park', 'Terrains de jeu parfaitement taillés avec des modules toujours plus originaux. Montez à tout le monde ce dont vous êtes capables.'),
(4, 'BackCountry', 'Sortez des parks trop parfaits pour montrer ce que vous savez faire entres sapins, rochers, et enormes tas de poudreuse.'),
(5, 'Freeride', 'Descendez des lignes toutes plus dangereuses les unes que les autres en alternants sauts de barres et courbes en poudreuse.'),
(6, 'Race', 'Bleu, rouge, bleu, rouge, bleu, rouge, bleu, rouge, ... .'),
(7, 'Polyvalent', 'Ne choisissez pas, faites le choix d''aller partout : des pistes damés aux champs de bosses les plus hardues.');

-- --------------------------------------------------------

--
-- Structure de la table `skis`
--

CREATE TABLE IF NOT EXISTS `skis` (
  `id_ski` int(255) NOT NULL AUTO_INCREMENT,
  `brand` text COLLATE utf8_bin NOT NULL,
  `model` text COLLATE utf8_bin NOT NULL,
  `category` int(10) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id_ski`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Contenu de la table `skis`
--

INSERT INTO `skis` (`id_ski`, `brand`, `model`, `category`, `price`) VALUES
(1, 'Armada', 'Al-Dente', 3, 500),
(2, 'K2', 'Domain', 3, 300),
(3, 'Faction', '1.0', 3, 400),
(4, 'Armada', 'JJ', 4, 700),
(6, 'K2', 'Shreditor', 4, 550);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
