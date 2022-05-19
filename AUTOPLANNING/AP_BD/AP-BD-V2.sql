-- CODE D'ACCÉS AU SERVEUR : http://20.111.40.161/phpmyadmin/
-- UTILISATEUR : autoplanning
-- MDP : passe_dev 

-- RAJOUT DES DATES FÉRIÉES JUSQU'A 2029 -- 

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 avr. 2022 à 10:05
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
-- Base de données : `autoplanning_addes`
--

-- --------------------------------------------------------

--
-- Structure de la table `feries`
--

CREATE TABLE `feries` (
  `ferie` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `feries`
--

INSERT INTO `feries` (`ferie`) VALUES
('2022-01-01'),
('2022-04-18'),
('2022-05-01'),
('2022-05-08'),
('2022-05-26'),
('2022-06-06'),
('2022-07-14'),
('2022-08-15'),
('2022-11-01'),
('2022-11-11'),
('2022-12-25'),
('2023-01-01'),
('2023-04-10'),
('2023-05-01'),
('2023-05-08'),
('2023-05-18'),
('2023-05-29'),
('2023-07-14'),
('2023-08-15'),
('2023-11-01'),
('2023-11-11'),
('2023-12-25'),
('2024-01-01'),
('2024-04-01'),
('2024-05-01'),
('2024-05-08'),
('2024-05-09'),
('2024-05-20'),
('2024-07-14'),
('2024-08-15'),
('2024-11-01'),
('2024-11-11'),
('2024-12-25'),
('2025-01-01'),
('2025-04-21'),
('2025-05-01'),
('2025-05-08'),
('2025-05-29'),
('2025-06-09'),
('2025-07-14'),
('2025-08-15'),
('2025-11-01'),
('2025-11-11'),
('2025-12-25'),
('2026-01-01'),
('2026-04-06'),
('2026-05-01'),
('2026-05-08'),
('2026-05-14'),
('2026-05-25'),
('2026-07-14'),
('2026-08-15'),
('2026-11-01'),
('2026-11-11'),
('2026-12-25'),
('2027-01-01'),
('2027-03-29'),
('2027-05-01'),
('2027-05-06'),
('2027-05-08'),
('2027-05-17'),
('2027-07-14'),
('2027-08-15'),
('2027-11-01'),
('2027-11-11'),
('2027-12-25'),
('2028-01-01'),
('2028-04-17'),
('2028-05-01'),
('2028-05-08'),
('2028-05-25'),
('2028-06-05'),
('2028-07-14'),
('2028-08-15'),
('2028-11-01'),
('2028-11-11'),
('2028-12-25'),
('2029-01-01'),
('2029-04-02'),
('2029-05-01'),
('2029-05-08'),
('2029-05-10'),
('2029-05-21'),
('2029-07-14'),
('2029-08-15'),
('2029-11-01'),
('2029-11-11'),
('2029-12-25');

-- --------------------------------------------------------

--
-- Structure de la table `filieres`
--

CREATE TABLE `filieres` (
  `reference` varchar(20) NOT NULL,
  `intitule` varchar(100) DEFAULT NULL,
  `debut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `email` varchar(127) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `code` int(4) NOT NULL,
  `module` varchar(100) NOT NULL,
  `debut` date NOT NULL,
  `duree` int(11) NOT NULL DEFAULT 1,
  `theme` varchar(20) DEFAULT NULL,
  `reference` varchar(20) NOT NULL,
  `email` varchar(127) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `themes`
--

CREATE TABLE `themes` (
  `theme` varchar(20) NOT NULL,
  `couleur` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `feries`
--
ALTER TABLE `feries`
  ADD PRIMARY KEY (`ferie`);

--
-- Index pour la table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`code`),
  ADD KEY `sessions_theme` (`theme`),
  ADD KEY `sessions_reference` (`reference`),
  ADD KEY `sessions_formateur` (`email`);

--
-- Index pour la table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`theme`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_formateur` FOREIGN KEY (`email`) REFERENCES `formateurs` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_reference` FOREIGN KEY (`reference`) REFERENCES `filieres` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sessions_theme` FOREIGN KEY (`theme`) REFERENCES `themes` (`theme`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
