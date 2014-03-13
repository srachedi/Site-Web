-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mer 12 Décembre 2012 à 13:32
-- Version du serveur: 5.5.24
-- Version de PHP: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `diasinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_pseudo` varchar(45) DEFAULT NULL,
  `admin_email` varchar(45) DEFAULT NULL,
  `admin_psw` varchar(45) DEFAULT NULL,
  `admin_derniere_connexion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `user_pseudo_UNIQUE` (`admin_pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_pseudo`, `admin_email`, `admin_psw`, `admin_derniere_connexion`) VALUES
(1, 'dias', 's-rach@live.com', 'saidsaid', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_cat`
--

CREATE TABLE IF NOT EXISTS `tbl_cat` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_nom` varchar(45) DEFAULT NULL,
  `cat_desc` varchar(45) DEFAULT NULL,
  `cat_img` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `fk_cat_parent_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `tbl_cat`
--

INSERT INTO `tbl_cat` (`cat_id`, `cat_nom`, `cat_desc`, `cat_img`) VALUES
(0, 'Ordinateur de bureau', '', ''),
(1, 'Ordinateur portable', '', ''),
(2, 'Mac', '', ''),
(3, 'Tablette', '', ''),
(4, 'Smartphone', '', ''),
(5, 'Logiciel', '', ''),
(6, 'Accessoir et consomable', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_cmd`
--

CREATE TABLE IF NOT EXISTS `tbl_cmd` (
  `cmd_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmd_session` varchar(45) DEFAULT NULL,
  `cmd_etat` varchar(45) DEFAULT NULL,
  `cmd_date` timestamp NULL DEFAULT NULL,
  `cmd_adrs_liv` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cmd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `tbl_cmd`
--

INSERT INTO `tbl_cmd` (`cmd_id`, `cmd_session`, `cmd_etat`, `cmd_date`, `cmd_adrs_liv`) VALUES
(3, 'dias', 'en prÃ©paration', '2012-12-11 23:00:00', '  ');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_elts_cmd`
--

CREATE TABLE IF NOT EXISTS `tbl_elts_cmd` (
  `cmd_id` int(11) NOT NULL,
  `prd_id` int(11) DEFAULT NULL,
  `elts_cmd_qte` int(11) DEFAULT NULL,
  PRIMARY KEY (`cmd_id`),
  KEY `fk_cmd_id` (`cmd_id`),
  KEY `fk_prd_id` (`prd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_pan`
--

CREATE TABLE IF NOT EXISTS `tbl_pan` (
  `pan_id` int(11) NOT NULL AUTO_INCREMENT,
  `prd_id` int(11) DEFAULT NULL,
  `pan_ses_id` varchar(45) DEFAULT NULL,
  `pan_qte` int(11) DEFAULT NULL,
  `pan_date` date DEFAULT NULL,
  PRIMARY KEY (`pan_id`),
  KEY `fk_prd_id` (`prd_id`),
  KEY `fk_pan_prd_id` (`prd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `tbl_pan`
--

INSERT INTO `tbl_pan` (`pan_id`, `prd_id`, `pan_ses_id`, `pan_qte`, `pan_date`) VALUES
(2, 13, '', 1, '2012-12-03'),
(7, 13, '', 1, '2012-12-04'),
(6, 13, '', 1, '2012-12-04'),
(28, 16, '', 1, '2012-12-12'),
(9, 13, '', 1, '2012-12-04'),
(11, 13, '', 1, '2012-12-11'),
(29, 15, 'dias', 33, '2012-12-12'),
(14, 13, '', 1, '2012-12-11'),
(15, 13, '', 1, '2012-12-11'),
(16, 13, '', 1, '2012-12-11'),
(20, 13, '', 1, '2012-12-12'),
(18, 13, '', 1, '2012-12-11'),
(21, 13, '', 1, '2012-12-12'),
(25, 13, 'dias', 44, '2012-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_prd`
--

CREATE TABLE IF NOT EXISTS `tbl_prd` (
  `prd_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `prd_nom` varchar(45) DEFAULT NULL,
  `prd_desc` varchar(300) DEFAULT NULL,
  `prd_prix` float DEFAULT NULL,
  `prd_qte` int(11) DEFAULT NULL,
  `prd_img` varchar(45) DEFAULT NULL,
  `prd_date` date DEFAULT NULL,
  PRIMARY KEY (`prd_id`),
  KEY `fk_cat_id` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `tbl_prd`
--

INSERT INTO `tbl_prd` (`prd_id`, `cat_id`, `prd_nom`, `prd_desc`, `prd_prix`, `prd_qte`, `prd_img`, `prd_date`) VALUES
(9, 0, '', '', 555, 3, '', '2012-11-30'),
(12, 0, 'dell', '', 555, 66, 'dell', '2012-11-30'),
(13, 3, 'book', '', 1111, 66, 'book', '2012-11-30'),
(14, 0, 'sony', '', 44, 3, 'sony', '2012-12-03'),
(15, 1, 'book', '', 44, 66, 'book', '2012-12-10'),
(16, 1, 'dell', '>', 22, 10, 'd', '2012-12-10'),
(17, 0, '', '', 0, 0, '', '2012-12-10'),
(18, 3, 'MAC2', '', 22, 13, 'M', '2012-12-12'),
(19, 3, 'mac3', '333', 33, 55, 'images/', '2012-12-12'),
(20, 0, 'skdfjkl', 'kjqsdk', 123, 2, 'images/', '2012-12-12'),
(21, 3, 'mac4', '', 33, 15, 'images/', '2012-12-12'),
(22, 4, 'rr', '', 33, 44, 'images/', '2012-12-12'),
(23, 1, 'ere', '33', 33, 33, 'images/', '2012-12-12'),
(24, 1, 'dfd', '', 33, 22, 'images/', '2012-12-12');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_pseudo` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_psw` varchar(45) DEFAULT NULL,
  `user_derniere_connexion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_pseudo_UNIQUE` (`user_pseudo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_pseudo`, `user_email`, `user_psw`, `user_derniere_connexion`) VALUES
(1, 'dias', 'said@yahoo.fr', 'aaa11b861916bc425e1465bedb1dfa49', ''),
(2, 'said87', 'said2@yahoo.fr', '650f09378a89129966050755259d025b', ''),
(3, 'taki', 'takisdr@yahoo.fr', '12cfebe5005ca92f26cdb25d02a62f33', ''),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(7, 'ddd', 'said2@yahoo.fr', 'aaa11b861916bc425e1465bedb1dfa49', '');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `tbl_elts_cmd`
--
ALTER TABLE `tbl_elts_cmd`
  ADD CONSTRAINT `fk_cmd_id` FOREIGN KEY (`cmd_id`) REFERENCES `tbl_cmd` (`cmd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prd_id` FOREIGN KEY (`prd_id`) REFERENCES `tbl_prd` (`prd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tbl_prd`
--
ALTER TABLE `tbl_prd`
  ADD CONSTRAINT `fk_cat_id` FOREIGN KEY (`cat_id`) REFERENCES `tbl_cat` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
