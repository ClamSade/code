-- VESRION 1 DE LA BASE DE DONNÉE - PROJET AUTOPLANNING --

-- CODE D'ACCÉS AU SERVEUR : http://20.111.40.161/phpmyadmin/
-- UTILISATEUR : autoplanning
-- MDP : passe_dev 

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 avr. 2022 à 19:53
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : autoplanning
--

-- --------------------------------------------------------

--
-- Structure de la table feries
--

CREATE TABLE feries (
  ferie date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table filieres
--

CREATE TABLE filieres (
  reference varchar(20) NOT NULL,
  intitule varchar(100) DEFAULT NULL,
  debut date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table formateurs
--

CREATE TABLE formateurs (
  email varchar(127) NOT NULL,
  nom varchar(50) NOT NULL,
  prenom varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table sessions
--

CREATE TABLE sessions (
  code int(4) NOT NULL,
  module varchar(100) NOT NULL,
  debut date NOT NULL,
  duree int(11) NOT NULL DEFAULT 1,
  theme varchar(20) DEFAULT NULL,
  reference varchar(20) NOT NULL,
  email varchar(127) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table themes
--

CREATE TABLE themes (
  theme varchar(20) NOT NULL,
  couleur varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table feries
--
ALTER TABLE feries
  ADD PRIMARY KEY (ferie);

--
-- Index pour la table filieres
--
ALTER TABLE filieres
  ADD PRIMARY KEY (reference);

--
-- Index pour la table formateurs
--
ALTER TABLE formateurs
  ADD PRIMARY KEY (email);

--
-- Index pour la table sessions
--
ALTER TABLE sessions
  ADD PRIMARY KEY (code),
  ADD KEY sessions_theme (theme),
  ADD KEY sessions_reference (reference),
  ADD KEY sessions_formateur (email);

--
-- Index pour la table themes
--
ALTER TABLE themes
  ADD PRIMARY KEY (theme);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table sessions
--
ALTER TABLE sessions
  ADD CONSTRAINT sessions_formateur FOREIGN KEY (email) REFERENCES formateurs (email) ON UPDATE CASCADE,
  ADD CONSTRAINT sessions_reference FOREIGN KEY (reference) REFERENCES filieres (reference) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT sessions_theme FOREIGN KEY (theme) REFERENCES themes (theme) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
