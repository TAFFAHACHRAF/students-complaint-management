-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 19 Juin 2022 à 19:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `getech`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(40) DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `numero_cite` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`matricule`, `cin`, `nom`, `prenom`, `email`, `telephone`, `numero_cite`, `password`) VALUES
(2, 'day', 'uyay', 'uygay', 'admin@gmail.com', '065979878', '21', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `contacts_users`
--

CREATE TABLE IF NOT EXISTS `contacts_users` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `contacts_users`
--

INSERT INTO `contacts_users` (`id_contact`, `nom`, `email`, `message`) VALUES
(6, 'hanan', 'hanan@gmaill.com', 'dzoiefziejf'),
(7, 'TAFFAH', 'taffahachraf184@gmail.com', 'hello administration');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(40) DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `cin`, `nom`, `prenom`, `email`, `telephone`, `password`) VALUES
(2, 'udzhiuh', 'achraf', 'taffah', 'achraf@gmail.com', '068745', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `id_intervention` int(11) NOT NULL AUTO_INCREMENT,
  `id_reclamation` int(11) NOT NULL,
  `matricule_technicien` int(11) NOT NULL,
  `date_intervention` date DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_intervention`),
  KEY `reclamation` (`id_reclamation`),
  KEY `technicien` (`matricule_technicien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`id_intervention`, `id_reclamation`, `matricule_technicien`, `date_intervention`, `message`) VALUES
(1, 2, 2, '2022-06-19', 'dizdiozjdijzd'),
(2, 2, 2, '2022-06-19', 'pozdk\r\n'),
(3, 2, 2, '2022-06-19', 'efef');

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_reclamation` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `numero_chambre` int(11) NOT NULL,
  `type` varchar(40) DEFAULT NULL,
  `etat_reclamation` varchar(40) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  PRIMARY KEY (`id_reclamation`),
  KEY `etudiant` (`matricule`),
  KEY `chambre` (`numero_chambre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `matricule`, `numero_chambre`, `type`, `etat_reclamation`, `subject`) VALUES
(11, 2, 88, 'CablÃ¢ge', 'Bien traiter', 'zoiiozdjiozjdoi'),
(12, 2, 8, 'Plomberie', 'false', 'kozkdokz');

-- --------------------------------------------------------

--
-- Structure de la table `responsable_ressources`
--

CREATE TABLE IF NOT EXISTS `responsable_ressources` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(40) DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `numero_cite` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `responsable_ressources`
--

INSERT INTO `responsable_ressources` (`matricule`, `cin`, `nom`, `prenom`, `email`, `telephone`, `numero_cite`, `password`) VALUES
(2, 'doij', 'iudhzu', 'uhud', 'duhz@gmail.com', '7894512', '78', '1111');

-- --------------------------------------------------------

--
-- Structure de la table `technicien`
--

CREATE TABLE IF NOT EXISTS `technicien` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(40) DEFAULT NULL,
  `nom` varchar(40) DEFAULT NULL,
  `prenom` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone` varchar(40) DEFAULT NULL,
  `numero_cite` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `technicien`
--

INSERT INTO `technicien` (`matricule`, `cin`, `nom`, `prenom`, `email`, `telephone`, `numero_cite`, `password`) VALUES
(2, 'kjhiuhiu', 'oziudh', 'izudhizudh', 'zoid@gmail.com', '9874561', '58', '0000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
