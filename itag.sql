-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 12 sep. 2023 à 18:01
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `itag`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Id_Clt` int(11) NOT NULL,
  `Nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GSM` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id_Clt`, `Nom`, `Prenom`, `Adresse`, `GSM`) VALUES
(2, 'Tamar', 'Shahd', 'Casa', '0678789878'),
(3, 'El bassiti', 'Ameer', 'Settat', '0656434545'),
(4, 'Tamar', 'Raghad', 'Casa', '0674565654'),
(60, 'Addi', 'Hajar', 'Casa', '0680689790'),
(61, 'Ad', 'Soka', 'Settat', '0566787535'),
(64, 'Ad', 'Asmaa', 'Casa', '0678765434');

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE `detail` (
  `Code_v` int(11) NOT NULL,
  `code_prdt` int(11) NOT NULL,
  `Quantité_vendu` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `detail`
--

INSERT INTO `detail` (`Code_v`, `code_prdt`, `Quantité_vendu`) VALUES
(13, 1, '6.00'),
(13, 2, '4.00'),
(13, 3, '6.00'),
(13, 4, '1.00'),
(13, 5, '6.00'),
(13, 15, '6.00'),
(14, 35, '4.00'),
(14, 36, '6.00'),
(14, 37, '6.00'),
(15, 34, '5.00'),
(15, 35, '122.00'),
(15, 36, '12.00'),
(15, 37, '4.00'),
(16, 0, '0.00'),
(16, 33, '6.00'),
(16, 35, '6.00'),
(16, 36, '6.00'),
(17, 33, '5.00'),
(17, 35, '122.00'),
(18, 33, '4.00'),
(19, 36, '4.00'),
(20, 33, '6.00'),
(20, 36, '4.00'),
(20, 39, '4.00'),
(20, 44, '0.00'),
(21, 0, '0.00');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_pdt` int(11) NOT NULL,
  `Libelle` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PU` decimal(10,2) NOT NULL,
  `Qte_stck` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_pdt`, `Libelle`, `PU`, `Qte_stck`) VALUES
(33, 'Souris', '30.00', '394.00'),
(36, 'Unité Central', '1500.00', '90.00'),
(39, 'Table ', '1000.00', '46.00'),
(43, 'Clavier', '80.00', '100.00'),
(44, 'Cable', '50.00', '300.00'),
(45, 'Casque', '250.00', '100.00');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `Code_v` int(11) NOT NULL,
  `Date_v` date NOT NULL,
  `code_clt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`Code_v`, `Date_v`, `code_clt`) VALUES
(14, '0000-00-00', 2),
(15, '2023-05-04', 4),
(16, '2023-05-25', 2),
(17, '2023-05-17', 2),
(18, '2023-05-02', 3),
(19, '2023-06-06', 3),
(20, '2023-06-06', 3),
(21, '0000-00-00', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id_Clt`);

--
-- Index pour la table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`Code_v`,`code_prdt`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_pdt`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`Code_v`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `Id_Clt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `Id_pdt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `Code_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
