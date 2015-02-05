-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Février 2015 à 18:32
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
  `oldies` tinytext CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `membres` varchar(255) CHARACTER SET latin1 NOT NULL,
  `description` longtext NOT NULL,
  `discographie` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date_ajout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `soundcloud` text CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  `image_fiche` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_mysql500_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Contenu de la table `artistes`
--

INSERT INTO `artistes` (`id`, `nom`, `style`, `oldies`, `membres`, `description`, `discographie`, `date_ajout`, `image`, `soundcloud`, `image_fiche`) VALUES
(3, 'The Do', 'Rock', '', 'b', 'b', 'b', '2015-01-09 00:00:00', 'http://www.tijuana.fr/files/2011/03/the-do.jpg', '', 'http://imageshack.com/a/img909/7213/YpzSZz.png'),
(4, 'Hozier', 'Pop', '', 'essai', 'c', 'c', '0000-00-00 00:00:00', '', '', 'http://imageshack.com/a/img540/8841/OBd8Zv.png'),
(6, 'Parov Stelar', 'Electro', '', 'e', 'e', 'e', '0000-00-00 00:00:00', '', '', 'http://imageshack.com/a/img537/3717/GOcS9Z.png'),
(7, 'The Vaccines', 'Rock', '', '', 'Groupe britannique indie rock originaire de Londres et  formé en 2010.\r\nLe groupe se compose du chanteur Justin Young , d''Árni Hjörvar à la basse, du guitariste Freddie Cowan et de Pete Robertson à la batterie. A l''origine il n''y avait que Young et Cowan.\r\nLeur premier single sort en novembre 2010, il est élu chanson du jour par Q magazine. Il s signent avec Columbia Records  et sortent leur second single, Post Break-Up Sex, en janvier 2011, qui fera parti de l''album "What Did You Except From The Vaccines ?".\r\nLe groupe enchaine les tournée et fait même la première partie des Red Hot Chili Peppers au Stade de France en juin 2012 !!\r\nIls viennent de libérer un EP, Melody Calling ( 2013 )', '', '2014-12-22 00:00:00', 'http://media.virbcdn.com/cdn_images/resize_1024x1365/98/90206444f43824ee-TheVaccines_StAugustine_GentlemenOfTheRoadandFullEnglishTour_RachaelWright_Sept2013-1.jpg', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/10941881&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false', 'http://imageshack.com/a/img538/331/au5raI.png'),
(8, 'Cage The Elephant', 'Rock', '', '<p>Groupe de rock am&eacute;rician originaire du Kentucky et cr&eacute;&eacute; en 2006. Cinq membres constituent le groupe: Matt Shultz (Chanteur), Brad Shultz (Guitariste Rythmique), Lincoln Parish (Guitariste Soliste), Jared Champion (Batteur) et Danie', '<p>Groupe de rock am&eacute;rician originaire du Kentucky et cr&eacute;&eacute; en 2006. Cinq membres constituent le groupe: Matt Shultz (Chanteur), Brad Shultz (Guitariste Rythmique), Lincoln Parish (Guitariste Soliste), Jared Champion (Batteur) et Daniel Tichenor (Bassiste, Ch&oelig;urs). Ils se sont ensuite install&eacute; &agrave; Londres et ont sorti leur premier album "Cage The Elephant" en 2008. Le second, "Thank you, happy birthday" est lib&eacute;r&eacute; en 2011. Prochainement leur nouvel album "Melophobia" devrait &ecirc;tre disponible ( 2013). Il comprendra notamment le sinlge "Come A Little Closer".</p>', '', '2014-12-22 00:00:00', 'http://sites.psu.edu/ewgross/wp-content/uploads/sites/8711/2014/03/Cage-The-Elephant.jpg', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/104543979&color=ff9900&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false', 'http://imageshack.com/a/img538/463/BShDZL.png'),
(9, 'The Sweet Serenades', 'Rock', '', '', '', '', '2015-01-09 00:00:00', '', '', 'http://imageshack.com/a/img537/4322/Ep0c8z.png'),
(10, 'Fenech-Soler', 'Pop', '', '', '', '', '2015-01-09 00:00:00', '', '', 'http://imageshack.com/a/img661/15/jLfgTc.png'),
(36, 'Bengal', 'Pop', '', ' ', ' ', '', '2015-01-16 00:00:00', '', '', 'http://imageshack.com/a/img538/2590/f83ITp.png'),
(37, 'Hard-Fi', 'Rock', '', ' ', ' ', '', '2015-01-16 00:00:00', '', '', 'http://imageshack.com/a/img673/6842/w6AmGc.png'),
(38, 'Odesza', 'Electro', '', ' ', ' ', '', '2015-01-16 00:00:00', '', '', 'http://imageshack.com/a/img538/6103/Zoqyz4.png'),
(39, 'Portugal The Man', 'Rock', '', ' ', ' ', '', '0000-00-00 00:00:00', '', '', 'http://imageshack.com/a/img673/8868/OGIpF8.png'),
(40, 'Nazca', 'Pop', '', ' ', ' Nazca est un quatuor pop-folk originaire de la région lyonnaise. Initialement il s''agissait d''un duo constitué de Juliette et Marc. Puis Zoé est venue compléter les voix et on retrouve Navid en tant que percussioniste. Le ukulélé associé à  des mélodies calmes vous donnera envie de voyager au pays des indiens et des cowboys. Depuis sa création en Janvier 2011 le groupe a participé à  de nombreux tremplins et festivals ( 76 concerts donnés entre 2011 et mi 2013 ). Nazca n''a pas fini de faire parler de lui et ce ne sont pas nos oreilles qui s''en plaindront.', '', '0000-00-00 00:00:00', '', 'https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/112424812&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false', 'http://imageshack.com/a/img537/1134/2Bcy21.png'),
(54, 'Spector', 'Rock', '', '', '', '', '2015-01-23 17:41:28', '', '', 'http://imageshack.com/a/img631/8811/pyH1cN.png'),
(57, 'Benjamin Clementine', 'Pop', '', '', '', '', '2015-01-27 17:23:58', '', '', 'http://imageshack.com/a/img537/4590/HbPSds.png');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `title`, `auth`, `date`, `content`) VALUES
(1, 'Essai blog', 'Damien', '2015-01-11', 'Ceci est un essai'),
(2, 'Essai', 'Damien', '0000-00-00', 'Ceci est un autre eessai ');

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
(1, 'Pop', '#1FADA8'),
(2, 'Rock', '#870000'),
(3, 'Electro', '#80E82A');

-- --------------------------------------------------------

--
-- Structure de la table `forum_categorie`
--

CREATE TABLE IF NOT EXISTS `forum_categorie` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(30) NOT NULL,
  `cat_ordre` int(11) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_ordre` (`cat_ordre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_forum`
--

CREATE TABLE IF NOT EXISTS `forum_forum` (
  `forum_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL,
  PRIMARY KEY (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_membres`
--

CREATE TABLE IF NOT EXISTS `forum_membres` (
  `membre_id` int(11) NOT NULL AUTO_INCREMENT,
  `membre_pseudo` varchar(30) NOT NULL,
  `membre_mdp` varchar(32) NOT NULL,
  `membre_email` varchar(250) NOT NULL,
  `membre_siteweb` varchar(100) NOT NULL,
  `membre_avatar` varchar(100) NOT NULL,
  `membre_signature` varchar(200) NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL,
  PRIMARY KEY (`membre_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_post`
--

CREATE TABLE IF NOT EXISTS `forum_post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_createur` int(11) NOT NULL,
  `post_texte` text NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE IF NOT EXISTS `forum_topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(60) NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL,
  PRIMARY KEY (`topic_id`),
  UNIQUE KEY `topic_last_post` (`topic_last_post`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `auth` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `auth`, `date`, `content`) VALUES
(2, 'Proposition d''artiste', 'Damien', '2015-01-10', '<p>La cr&eacute;ation d''une page o&ugrave; les visiteurs pourront proposer un artiste ou un groupe est en train d''&ecirc;tre cr&eacute;&eacute;e. Sur cette page seront, dans un premier temps, demand&eacute;s au visiteur son pseudo et son adresse e-mail pour pouvoir le contacter. Puis il pourra renseigner les informations concernant l''artiste qu''il souhaite faire d&eacute;couvrir. Un minimum d''infos devront &ecirc;tre renseign&eacute;s pour que la proposition puisse &ecirc;tre prise en compte (nom d''artiste, une courte biographie et le style).</p>'),
(4, 'Essai2', 'Alain', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Essai4', 'Maurice', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'Essai5', 'Hervé', '2015-01-11', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 'Essai', 'essai', '2015-01-18', 'essai');

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
(1, 'rmiyc_admin', 'd8eeae8925436beadf3f9558c7168d7094f4e7b7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
