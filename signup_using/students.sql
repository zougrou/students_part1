-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 juil. 2020 à 13:57
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `students`
--

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `name`, `email`, `password`) VALUES
(21, 'papa', 'papa@gmail.com', '05102721'),
(22, 'papa', 'papa@gmail.com', '05102721'),
(73, 'kaka', 'kaka@gmail.com', '415263'),
(74, 'kouassi', 'kouassi@gmail.com', '654321'),
(81, 'kjnfgkgkgrk,,gf', 'jgjkgfk@gmail.com', 'hjcdjhdhjf'),
(82, 'grace', 'grace@gmail.com', 'christ'),
(83, 'zara', 'zara@gmail.com', 'zarazara'),
(84, 'bruno', 'bruno@gmail.com', 'bruno1991'),
(86, 'zougrou', 'zougrou@gmail.com', 'zougrou'),
(87, 'christ', 'christ@gmail.com', 'christ258'),
(88, 'boris', 'boris@gmail.com', 'borisboris'),
(89, 'yann', 'yann@gmail.com', 'yann1234');

-- --------------------------------------------------------

--
-- Structure de la table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `datesign` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `crud`
--

INSERT INTO `crud` (`id`, `iduser`, `datesign`, `time`) VALUES
(1, 0, '2020-07-22', '01:56:01'),
(2, 0, '2020-07-22', '01:56:01'),
(3, 2, '2020-07-22', '01:56:01'),
(4, 2, '2020-07-22', '01:56:01'),
(5, 2, '2020-07-23', '01:56:01'),
(6, 85, '2020-07-25', '10:58:55'),
(7, 87, '2020-07-25', '11:09:08'),
(8, 88, '2020-07-25', '12:33:11'),
(9, 88, '2020-07-25', '12:34:28'),
(10, 88, '2020-07-25', '12:36:42'),
(11, 88, '2020-07-25', '12:37:12'),
(12, 89, '2020-07-25', '12:52:52');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
