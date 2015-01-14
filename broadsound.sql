-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Janvier 2015 à 19:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `broadsound`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE IF NOT EXISTS `artistes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `style` varchar(255) CHARACTER SET latin1 NOT NULL,
  `oldies` tinytext COLLATE utf8_general_mysql500_ci NOT NULL,
  `membres` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `discographie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date_ajout` datetime NOT NULL,
  `image` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `soundcloud` text COLLATE utf8_general_mysql500_ci NOT NULL,
  `image_fiche` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci AUTO_INCREMENT=23 ;

--
-- Contenu de la table `artistes`
--

INSERT INTO `artistes` (`id`, `nom`, `style`, `oldies`, `membres`, `description`, `discographie`, `date_ajout`, `image`, `soundcloud`, `image_fiche`, `color`) VALUES
(3, 'The Do', 'Rock', '', 'b', 'b', 'b', '2015-01-09 00:00:00', 'http://www.tijuana.fr/files/2011/03/the-do.jpg', '', 'http://imageshack.com/a/img909/7213/YpzSZz.png', '#870000'),
(4, 'Hozier', 'Pop', '', 'c', 'c', 'c', '0000-00-00 00:00:00', '', '', 'http://imageshack.com/a/img540/8841/OBd8Zv.png', '#1FADA8'),
(6, 'Parov Stelar', 'electro', '', 'e', 'e', 'e', '0000-00-00 00:00:00', '', '', 'http://imageshack.com/a/img537/3717/GOcS9Z.png', '#80E82A'),
(7, 'The Vaccines', 'Rock', '', '', 'Groupe britannique indie rock originaire de Londres et  formé en 2010.\r\nLe groupe se compose du chanteur Justin Young , d''Árni Hjörvar à la basse, du guitariste Freddie Cowan et de Pete Robertson à la batterie. A l''origine il n''y avait que Young et Cowan.\r\nLeur premier single sort en novembre 2010, il est élu chanson du jour par Q magazine. Il s signent avec Columbia Records  et sortent leur second single, Post Break-Up Sex, en janvier 2011, qui fera parti de l''album "What Did You Except From The Vaccines ?".\r\nLe groupe enchaine les tournée et fait même la première partie des Red Hot Chili Peppers au Stade de France en juin 2012 !!\r\nIls viennent de libérer un EP, Melody Calling ( 2013 )', '', '2014-12-22 00:00:00', 'http://media.virbcdn.com/cdn_images/resize_1024x1365/98/90206444f43824ee-TheVaccines_StAugustine_GentlemenOfTheRoadandFullEnglishTour_RachaelWright_Sept2013-1.jpg', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/10941881&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false', 'http://imageshack.com/a/img538/331/au5raI.png', '#870000'),
(8, 'Cage The Elephant', 'Rock', '', '', 'Groupe de rock américian originaire du Kentucky et créé en 2006.\r\nCinq membres constituent le groupe: Matt Shultz (Chanteur), Brad Shultz (Guitariste Rythmique), Lincoln Parish (Guitariste Soliste), Jared Champion (Batteur) et Daniel Tichenor (Bassiste, Chœurs).\r\nIls se sont ensuite installé à Londres et ont sorti leur premier album "Cage The Elephant" en 2008. Le second, "Thank you, happy birthday" est libéré en 2011. Prochainement leur nouvel album "Melophobia" devrait être disponible ( 2013). Il comprendra notamment le sinlge "Come A Little Closer".', '', '2014-12-22 00:00:00', 'http://sites.psu.edu/ewgross/wp-content/uploads/sites/8711/2014/03/Cage-The-Elephant.jpg', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/104543979&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false', 'http://imageshack.com/a/img538/463/BShDZL.png', '#870000'),
(9, 'The Sweet Serenades', 'Rock', '', '', '', '', '2015-01-09 00:00:00', '', '', 'http://imageshack.com/a/img537/4322/Ep0c8z.png', '#870000'),
(10, 'Fenech-Soler', 'Pop', '', '', '', '', '2015-01-09 00:00:00', '', '', 'http://imageshack.com/a/img661/15/jLfgTc.png', '#1FADA8');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `badge` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `auth`, `date`, `text`, `badge`) VALUES
(1, 'Essai blog', 'Damien', '2015-01-11', 'Ceci est un essai', 'essai');

-- --------------------------------------------------------

--
-- Structure de la table `colors`
--

CREATE TABLE IF NOT EXISTS `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `style_color` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `colors`
--

INSERT INTO `colors` (`id`, `category`, `style_color`) VALUES
(1, 'pop', '#1FADA8'),
(2, 'rock', '#870000'),
(3, 'electro', '#80E82A');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `auth` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `badge` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `auth`, `date`, `text`, `badge`) VALUES
(1, 'Ouverture du site', 'Damien', '2015-01-10', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'site'),
(2, 'Proposition d''artistes', 'Damien', '2015-01-10', 'La création d''une page où les visiteurs pourront proposer un artiste ou un groupe est en train d''être créée.\r\nSur cette page seront, dans un premier temps, demandés au visiteur son pseudo et son adresse e-mail pour pouvoir le contacter. Puis il pourra renseigner les informations concernant l''artiste qu''il souhaite faire découvrir.\r\nUn minimum d''infos devront être renseignés pour que la proposition puisse être prise en compte (nom d''artiste, une courte biographie et le style).', 'site'),
(3, 'Essai1', 'Jean', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'tournée'),
(4, 'Essai2', 'Alain', '2015-01-11', 'HHHHHHHHHHHHHHHHHHHHHLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'concert'),
(5, 'Essai3', 'Michel', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sortie album'),
(6, 'Essai4', 'Maurice', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'MAO'),
(7, 'Essai5', 'Hervé', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'site'),
(8, 'Essai6', 'Bruno', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'festival');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf16 NOT NULL,
  `password` varchar(255) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
