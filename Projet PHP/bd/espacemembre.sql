-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 26 juil. 2021 à 02:23
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espacemembre`
--

-- --------------------------------------------------------

--
-- Structure de la table `cotisation`
--

CREATE TABLE `cotisation` (
  `id` int(50) NOT NULL,
  `numcotis` int(50) NOT NULL,
  `datecotis` date DEFAULT NULL,
  `mois` varchar(50) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `montant` int(255) DEFAULT NULL,
  `matricule` int(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cotisation`
--

INSERT INTO `cotisation` (`id`, `numcotis`, `datecotis`, `mois`, `motif`, `montant`, `matricule`) VALUES
(12, 505, '0000-00-00', 'fevrier', 'inscription', 0, 100),
(13, 485, '0000-00-00', 'mars', 'mensualité', 0, 200),
(14, 915, '0000-00-00', 'mars', 'mensualité', 0, 200),
(15, 896, '0000-00-00', 'avril', 'mensualité', 0, 800),
(16, 245, '0000-00-00', 'mars', 'mensualité', 0, 900),
(17, 305, '0000-00-00', 'janvier', 'inscription', 0, 800),
(18, 563, '0000-00-00', 'janvier', 'inscription', 0, 800),
(19, 384, '0000-00-00', 'janvier', 'inscription', 0, 800);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Adresse` text NOT NULL,
  `Telephone` int(50) NOT NULL,
  `Matricule` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `Nom`, `Prenom`, `Adresse`, `Telephone`, `Matricule`) VALUES
(1, 'babacar', 'ndiaye', 'rufisque', 781346678, '000'),
(2, '.machin.', '.mot.', '.rufisque.', 781404450, '100'),
(3, 'Ndeye', 'mot', 'Mbao', 773453467, '200'),
(4, 'papa', 'sall', 'mboa', 776426342, '800'),
(5, 'Ndiaye', 'Babacar', 'rufisque', 781404450, '600'),
(6, 'ada', 'gaye', 'thies', 777990607, '900');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cotisation`
--
ALTER TABLE `cotisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cotisation`
--
ALTER TABLE `cotisation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
