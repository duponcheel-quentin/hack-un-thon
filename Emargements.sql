-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 20 nov. 2018 à 16:19
-- Version du serveur :  5.7.24-0ubuntu0.18.04.1
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Emargements`
--

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
  `ID` int(11) NOT NULL,
  `Categories_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Cours`
--

CREATE TABLE `Cours` (
  `Cours_ID` int(11) NOT NULL,
  `Semaine` int(52) NOT NULL,
  `Date` datetime NOT NULL,
  `Matin` tinyint(4) NOT NULL,
  `Aprem` tinyint(4) NOT NULL,
  `Soir` tinyint(4) NOT NULL,
  `Feuille_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Feuille`
--

CREATE TABLE `Feuille` (
  `Feuille_ID` int(11) NOT NULL,
  `Organisme` varchar(255) NOT NULL,
  `Intitule` varchar(255) NOT NULL,
  `Debut` date NOT NULL,
  `Fin` date NOT NULL,
  `Lundi_matin` time DEFAULT NULL,
  `Lundi_aprem` time DEFAULT NULL,
  `Mardi_matin` time DEFAULT NULL,
  `Mardi_aprem` time DEFAULT NULL,
  `Mercredi_matin` time DEFAULT NULL,
  `Mercredi_aprem` time DEFAULT NULL,
  `Jeudi_matin` time DEFAULT NULL,
  `Jeudi_aprem` time DEFAULT NULL,
  `Vendredi_matin` time DEFAULT NULL,
  `Vendredi_aprem` time DEFAULT NULL,
  `Categories_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Signatures`
--

CREATE TABLE `Signatures` (
  `Signatures_ID` int(11) NOT NULL,
  `Signature` varchar(255) NOT NULL,
  `Users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE `Users` (
  `Users_ID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Adresse_mail` varchar(255) NOT NULL,
  `Rue` varchar(255) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Code_postal` varchar(255) NOT NULL,
  `Identifiant_emploi` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Users_feuille`
--

CREATE TABLE `Users_feuille` (
  `Users_ID` int(11) NOT NULL,
  `Feuille_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Cours`
--
ALTER TABLE `Cours`
  ADD PRIMARY KEY (`Cours_ID`);

--
-- Index pour la table `Signatures`
--
ALTER TABLE `Signatures`
  ADD PRIMARY KEY (`Signatures_ID`);

--
-- Index pour la table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`Users_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Cours`
--
ALTER TABLE `Cours`
  MODIFY `Cours_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Signatures`
--
ALTER TABLE `Signatures`
  MODIFY `Signatures_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Users`
--
ALTER TABLE `Users`
  MODIFY `Users_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
