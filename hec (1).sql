-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 août 2021 à 21:18
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hec`
--

-- --------------------------------------------------------

--
-- Structure de la table `online_inscription`
--

CREATE TABLE `online_inscription` (
  `id` int(11) NOT NULL,
  `bac_num` varchar(50) NOT NULL,
  `bac_serie` varchar(5) NOT NULL,
  `bac_year` varchar(10) NOT NULL,
  `diplome` text NOT NULL,
  `specialite` text NOT NULL,
  `diplome_year` varchar(7) NOT NULL,
  `bac_level` varchar(10) NOT NULL,
  `cycle` text NOT NULL,
  `filiere` text NOT NULL,
  `CNI` varchar(100) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `prenoms` varchar(100) NOT NULL,
  `pays` text NOT NULL,
  `nationalite` text NOT NULL,
  `c_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `online_inscription`
--

INSERT INTO `online_inscription` (`id`, `bac_num`, `bac_serie`, `bac_year`, `diplome`, `specialite`, `diplome_year`, `bac_level`, `cycle`, `filiere`, `CNI`, `Nom`, `prenoms`, `pays`, `nationalite`, `c_message`) VALUES
(2, 'bac', 'bac', 'test', 'test', 'test', 'test', 'bac', 'test', 'test', 'test', 'samuel', 'bac', 'bac', 'bac', 'tkghjlk:'),
(3, 'bac', 'bac', 'test', 'test', 'test', 'test', 'bac', 'test', 'test', 'test', 'samuel', 'bac', 'bac', 'bac', 'tkghjlk:'),
(4, 'bac', 'bac', 'test', 'test', 'test', 'test', 'bac', 'test', 'test', 'test', 'samuel', 'bac', 'bac', 'bac', 'tkghjlk:'),
(5, 'bac', 'bac', 'test', 'test', 'test', 'test', 'bac', 'test', 'test', 'test', 'samuel', 'bac', 'bac', 'bac', 'tkghjlk:'),
(6, 'bac', 'bac', 'test', 'test', 'test', 'test', 'bac', 'test', 'test', 'test', 'samuel', 'bac', 'bac', 'bac', 'tkghjlk:'),
(7, 'test', 'test', 'test', 'test', 'test', 'test', 'bac', 'test', 'droit des affaires', 'bac', 'samuel', 'test', 'test', 'bac', 'yuirhdv');

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

CREATE TABLE `profs` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$Eb70GZldIB5xmXZniVs.de67YorLfPfHJPo7XaV7ilRohU5Mq.wfK', '2021-07-26 01:32:25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `online_inscription`
--
ALTER TABLE `online_inscription`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `online_inscription`
--
ALTER TABLE `online_inscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `profs`
--
ALTER TABLE `profs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
