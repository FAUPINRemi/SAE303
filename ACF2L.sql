-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 jan. 2024 à 15:35
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `acf2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `vol_initiation` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cours_pilotage` text COLLATE utf8mb4_general_ci NOT NULL,
  `balade_aerienne` text COLLATE utf8mb4_general_ci NOT NULL,
  `formation_pilote` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_reservation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `numRue` varchar(10) DEFAULT NULL,
  `rue` varchar(255) DEFAULT NULL,
  `codePostal` varchar(10) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `situationFamiliale` varchar(20) NOT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `mineur` int(11) NOT NULL,
  `majeur` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `handicap` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp(),
  `admin` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `civilite`, `nom`, `prenom`, `date_naissance`, `numRue`, `rue`, `codePostal`, `ville`, `situationFamiliale`, `dateDebut`, `dateFin`, `mineur`, `majeur`, `parent`, `handicap`, `email`, `telephone`, `date_inscription`, `admin`, `password`) VALUES
(10, 'Madame', 'Admin3', 'test', '2024-01-13', '755', 'petite af', '02130', 'dvsvs', 'celibataire ', '0000-00-00', '0000-00-00', 0, 0, 0, 'non', 'remi.faupin04@gmail.com', '', '2024-01-05 14:33:25', 0, '$2y$10$h8h/22Pza7zhrNSceuK6NeevLPcdd2kooOuymaoXv/0p1IwiyDlDe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

INSERT INTO `utilisateurs` (`id`, `civilite`, `nom`, `prenom`, `date_naissance`, `numRue`, `rue`, `codePostal`, `ville`, `situationFamiliale`, `dateDebut`, `dateFin`, `mineur`, `majeur`, `parent`, `handicap`, `email`, `telephone`, `date_inscription`, `admin`, `password`) VALUES
(10, 'Madame', 'Admin3', 'test', '2024-01-13', '755', 'petite af', '02130', 'dvsvs', 'celibataire ', '0000-00-00', '0000-00-00', 0, 0, 0, 'non', 'remi.faupin04@gmail.com', '', '2024-01-05 14:33:25', 0, '$2y$10$h8h/22Pza7zhrNSceuK6NeevLPcdd2kooOuymaoXv/0p1IwiyDlDe'),
(13, 'Monsieur', 'porto', 'rico', '2024-01-01', '12', 'portorico', '77100', 'meaux', 'celibataire ', '0000-00-00', '0000-00-00', 0, 0, 0, '', 'portorico@gmail.com', '', '2024-01-05 16:00:58', 0, '$2y$10$HPu0S62k1CB/dvuXtpnkoe9sevFN0oUcYnZzmZa21BKO6tIEjOsGy'),
(14, 'Monsieur', 'Adif', 'acf2l', '1982-12-25', '12', 'rue de la cathédrale', '77100', 'Meaux', 'celibataire ', '0000-00-00', '0000-00-00', 0, 0, 0, '', 'acf2l.admin@gmail.com', '', '2024-01-05 18:09:10', 0, '$2y$10$EEI9NyJwDNOl.G/UdrO.cuG4zkbDS3B5HqfPHAVxnGSKCm.hTIwFO');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
