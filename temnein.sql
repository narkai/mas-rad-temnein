-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 23 Décembre 2013 à 15:17
-- Version du serveur: 5.5.9
-- Version de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `temnein`
--

-- --------------------------------------------------------

--
-- Structure de la table `tomes`
--

CREATE TABLE `tomes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=622 ;

--
-- Contenu de la table `tomes`
--

INSERT INTO `tomes` (`id`, `date`, `text`, `user_id`) VALUES(619, '2013-12-23 15:15:24', 'Welcome Karian, this is your first tome.', 3);
INSERT INTO `tomes` (`id`, `date`, `text`, `user_id`) VALUES(620, '2013-12-23 15:16:15', 'Welcome Matthieu, this is your first tome.', 4);
INSERT INTO `tomes` (`id`, `date`, `text`, `user_id`) VALUES(621, '2013-12-23 15:16:40', 'Welcome Marc, this is your first tome.', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `pass_md5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `pass_md5`) VALUES(3, 'karian', '1a1dc91c907325c69271ddf0c944bc72');
INSERT INTO `users` (`id`, `username`, `pass_md5`) VALUES(4, 'matthieu', '1a1dc91c907325c69271ddf0c944bc72');
INSERT INTO `users` (`id`, `username`, `pass_md5`) VALUES(5, 'marc', '1a1dc91c907325c69271ddf0c944bc72');
