-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 jan. 2023 à 14:29
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdmusique`
--

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

DROP TABLE IF EXISTS `eleve`;
CREATE TABLE IF NOT EXISTS `eleve` (
  `IDELEVE` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `TEL` char(32) DEFAULT NULL,
  `ADRESSERUE` char(32) DEFAULT NULL,
  `ADRESSENUM` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDELEVE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `eleve_seance`
--

DROP TABLE IF EXISTS `eleve_seance`;
CREATE TABLE IF NOT EXISTS `eleve_seance` (
  `IDPROFESSEUR` char(32) NOT NULL,
  `IDSEANCE` char(32) NOT NULL,
  `IDELEVE` char(32) NOT NULL,
  PRIMARY KEY (`IDPROFESSEUR`,`IDSEANCE`,`IDELEVE`),
  KEY `FK_ELEVE_SEANCE_ELEVE` (`IDELEVE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `instrument`
--

DROP TABLE IF EXISTS `instrument`;
CREATE TABLE IF NOT EXISTS `instrument` (
  `IDINSTRUMENT` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `REFERENCE` char(32) DEFAULT NULL,
  `DATEACHAT` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDINSTRUMENT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

DROP TABLE IF EXISTS `jour`;
CREATE TABLE IF NOT EXISTS `jour` (
  `IDJOUR` char(32) NOT NULL,
  PRIMARY KEY (`IDJOUR`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `IDPROFESSEUR` char(32) NOT NULL,
  `IDINSTRUMENT` char(32) NOT NULL,
  `NOM` char(32) DEFAULT NULL,
  `PRENOM` char(32) DEFAULT NULL,
  `ADRESSERUE` char(32) DEFAULT NULL,
  `ADRESSENUM` char(32) DEFAULT NULL,
  `CP` char(32) DEFAULT NULL,
  PRIMARY KEY (`IDPROFESSEUR`),
  KEY `FK_PROFESSEUR_INSTRUMENT` (`IDINSTRUMENT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `IDPROFESSEUR` char(32) NOT NULL,
  `IDSEANCE` char(32) NOT NULL,
  `IDJOUR` char(32) NOT NULL,
  `IDTRANCHE` char(32) NOT NULL,
  PRIMARY KEY (`IDPROFESSEUR`,`IDSEANCE`),
  KEY `FK_SEANCE_JOUR` (`IDJOUR`),
  KEY `FK_SEANCE_TRANCHE` (`IDTRANCHE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tranche`
--

DROP TABLE IF EXISTS `tranche`;
CREATE TABLE IF NOT EXISTS `tranche` (
  `IDTRANCHE` char(32) NOT NULL,
  PRIMARY KEY (`IDTRANCHE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
