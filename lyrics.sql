-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 jan. 2023 à 16:13
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lyrics`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `email`, `psw`) VALUES
(1, 'Youssef Tadlaoui', 'youssef@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `annee` date NOT NULL,
  `lyrics` varchar(255) NOT NULL,
  `nom_artist` varchar(255) NOT NULL,
  `nom_album` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `song`
--

INSERT INTO `song` (`id`, `Titre`, `annee`, `lyrics`, `nom_artist`, `nom_album`) VALUES
(1, 'Quos aliqua Proiden', '1970-12-15', 'Impedit et deserunt', 'SIMO', 'WOW'),
(2, 'Sequi dolores fuga ', '1989-11-28', 'Vel deserunt et pers', 'BILAL', 'DNAY'),
(3, 'Cupiditate repudiand', '2020-06-08', 'Nesciunt recusandae', 'Laborum quis beatae ', 'Exercitationem ut do'),
(4, 'Maxime nostrum unde ', '1985-09-05', 'Quis sit voluptatib', 'Fugiat adipisicing ', 'Aliqua Voluptas par'),
(5, 'Labore dolore cillum', '1992-06-17', 'Cum laudantium atqu', 'Ea amet beatae mole', 'Et excepturi sed quo'),
(6, 'Sed non obcaecati ma', '2017-01-25', 'Omnis modi veniam n', 'Impedit velit minu', 'Corrupti sed et qui'),
(7, 'Ipsum nulla lorem cu', '1982-01-11', 'Voluptatibus natus m', 'Minus mollit ullam v', 'Vitae aspernatur off'),
(8, 'Ea et quos porro eos', '1984-08-12', 'Magnam doloremque su', 'Est quaerat qui nob', 'Consequatur culpa el'),
(9, 'Perferendis ea ab nu', '1990-10-18', 'Animi sit enim dol', 'Quis soluta culpa ve', 'Ut voluptatem nostru'),
(10, 'hhkkff', '2007-03-13', 'Nesciunt facere rep', 'Quod obcaecati cum q', 'Nemo dolor earum har'),
(11, 'kkkka', '1972-09-13', 'Ut excepturi qui exc', 'Non magna a obcaecat', 'Facilis officia odio'),
(12, 'kkkka', '1972-09-13', 'Ut excepturi qui exc', 'Non magna a obcaecat', 'Facilis officia odio'),
(13, 'rrrrttyy', '2013-09-22', 'Est modi adipisci en', 'Minus eum quod id d', 'Esse officia aliqui'),
(14, 'Aut et eos et ut su', '1979-07-01', 'Sed id suscipit veni', 'Sint exercitationem ', 'Commodo consectetur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
