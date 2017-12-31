-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 31 déc. 2017 à 12:02
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, 1, 'Bruno', 'bof ce blog :/', '2017-12-25 00:00:00'),
(2, 1, 'antoine', '+1', '2017-12-25 23:06:45'),
(3, 2, 'jean', 'je vais vendre de l\'air!', '2017-12-25 23:23:19'),
(4, 2, 'Pierre', 'test de l\'ajout de com\'', '2017-12-30 12:50:41'),
(5, 1, 'jean', 'test n2 de l\'ajout de commentaire', '2017-12-30 12:51:01'),
(6, 2, 'Bruno', 'très bonne idée!!!', '2017-12-30 16:36:06'),
(7, 1, 'Pierre', 'test de l\'héritage de la classe mère Manager', '2017-12-30 17:04:55'),
(8, 1, 'Jeremy', 'test des namespaces !!!', '2017-12-30 17:39:32'),
(9, 1, 'Bruno', 'test de l\'index.php...', '2017-12-30 20:18:21');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Bienvenue sur mon blog!', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera... de PHP biensûr!', '2017-12-25 22:45:31'),
(2, 'le PHP à la conquête du monde!', 'C\'est officiel, l\'éléPHPant a annoncé hier à la radio hier soir \"j\'ai l\'intention de conquérir le monde !\".\r\n\r\nBon peu importe, recréer la base de donnée n\'est pas le plus important :D', '2017-12-25 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
