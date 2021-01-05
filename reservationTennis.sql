-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 05 jan. 2021 à 15:04
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservationTennis`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login_admin` varchar(50) NOT NULL,
  `mdp_admin` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `login_admin`, `mdp_admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997 ');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nomCours_8_10` varchar(25) DEFAULT NULL,
  `nomCours_10_12` varchar(25) DEFAULT NULL,
  `nomCours_12_14` varchar(25) DEFAULT NULL,
  `nomCours_14_16` varchar(25) DEFAULT NULL,
  `nomCours_16_18` varchar(25) DEFAULT NULL,
  `nomCours_18_20` varchar(25) DEFAULT NULL,
  `date_cours` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id_cours`, `nomCours_8_10`, `nomCours_10_12`, `nomCours_12_14`, `nomCours_14_16`, `nomCours_16_18`, `nomCours_18_20`, `date_cours`) VALUES
(1, 'cours pour debutant', NULL, 'tennis appliquer', NULL, NULL, 'tennis theorie', '2020-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `court`
--

CREATE TABLE `court` (
  `id_court` int(11) NOT NULL,
  `nom_court` varchar(25) NOT NULL,
  `surface_court` varchar(25) NOT NULL,
  `etat_court` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `court`
--

INSERT INTO `court` (`id_court`, `nom_court`, `surface_court`, `etat_court`) VALUES
(1, 'Central', 'Gazon', 'propre'),
(2, 'Indoor', 'Moquette', 'propre'),
(3, 'Plage', 'Sable', 'propre');

-- --------------------------------------------------------

--
-- Structure de la table `date_heure`
--

CREATE TABLE `date_heure` (
  `id_dateHeure` int(11) NOT NULL,
  `plage_horaire` varchar(50) NOT NULL,
  `nbr_reservation` int(11) NOT NULL,
  `truc_reserver` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `date_heure`
--

INSERT INTO `date_heure` (`id_dateHeure`, `plage_horaire`, `nbr_reservation`, `truc_reserver`) VALUES
(1, '8h-10h', 0, 1),
(2, '10h-12h', 0, 1),
(3, '12h-14h', 0, 1),
(4, '14h-16h', 0, 1),
(5, '16h-18h', 0, 1),
(6, '18h-20h', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `entraineurs`
--

CREATE TABLE `entraineurs` (
  `id_entraineur` int(11) NOT NULL,
  `nom_entraineur` varchar(30) NOT NULL,
  `prenom_entraineur` varchar(30) NOT NULL,
  `login_entraineur` varchar(30) NOT NULL,
  `mdp_entraineur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entraineurs`
--

INSERT INTO `entraineurs` (`id_entraineur`, `nom_entraineur`, `prenom_entraineur`, `login_entraineur`, `mdp_entraineur`) VALUES
(1, 'Nasan', 'Avo', 'entraineur', 'e377a95a64a59b751511c444be9757e36a1e8ee0'),
(2, 'rakoto', 'soa soa', 'rakoto', '454875b48e096aa6a73b678802af3e6379e781dc'),
(4, 'jean', 'kely', 'jean', '51f8b1fa9b424745378826727452997ee2a7c3d7');

-- --------------------------------------------------------

--
-- Structure de la table `manifestation`
--

CREATE TABLE `manifestation` (
  `id_manifestation` int(11) NOT NULL,
  `titre_manifestation` varchar(75) NOT NULL,
  `type_manifestation` varchar(50) NOT NULL,
  `horaire_manifestation` varchar(100) NOT NULL,
  `organisateur_manifestation` varchar(25) NOT NULL,
  `tranche_age_manifestation` varchar(10) NOT NULL,
  `niveau_req_manifestation` varchar(15) NOT NULL,
  `effectif_manifestation` varchar(15) NOT NULL,
  `animateur_manifestation` varchar(20) DEFAULT NULL,
  `nbre_inscrit` int(11) NOT NULL DEFAULT 0,
  `court_manifestation` varchar(20) NOT NULL,
  `materiel_manifestation` varchar(75) NOT NULL,
  `inscrit_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manifestation`
--

INSERT INTO `manifestation` (`id_manifestation`, `titre_manifestation`, `type_manifestation`, `horaire_manifestation`, `organisateur_manifestation`, `tranche_age_manifestation`, `niveau_req_manifestation`, `effectif_manifestation`, `animateur_manifestation`, `nbre_inscrit`, `court_manifestation`, `materiel_manifestation`, `inscrit_id`) VALUES
(1, 'stage pour debutant', 'stage', '10/06 8:00 à 10/06 16:00', 'Rakoto soa', '6-14', 'debutant', '6-40', 'Mon cul', 7, 'indoor', 'raquette 4 et balle 45', 1),
(2, 'stage pour les mini débutants', 'stage', '12h - 16h le 17 Janvier 2020', 'mr le test', '10-20', 'noob', '6-40', 'mr le animateur', 0, 'outdoor', 'raquette 10 - balle 100', 0);

-- --------------------------------------------------------

--
-- Structure de la table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(11) NOT NULL,
  `type_materiel` varchar(25) NOT NULL,
  `quantite_materiel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `type_materiel`, `quantite_materiel`) VALUES
(1, 'Filet', 10),
(2, 'Balle', 500),
(4, 'Filet', 70);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `nom_membre` varchar(25) NOT NULL,
  `prenom_membre` varchar(30) NOT NULL,
  `rue_membre` varchar(25) NOT NULL,
  `codePostal_membre` varchar(15) NOT NULL,
  `ville_membre` varchar(20) NOT NULL,
  `dateNaiss_membre` date NOT NULL,
  `tel_membre` int(11) NOT NULL,
  `numFFT_membre` int(11) NOT NULL,
  `login_membre` varchar(25) NOT NULL,
  `mdp_membre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `nom_membre`, `prenom_membre`, `rue_membre`, `codePostal_membre`, `ville_membre`, `dateNaiss_membre`, `tel_membre`, `numFFT_membre`, `login_membre`, `mdp_membre`) VALUES
(1, 'Avo', 'Ram', '24 malaza', '234postalcode', 'Antananarivo', '2003-01-20', 340133099, 1, 'avo', 'c6252b4121d43ed6403081c08832c46f28074789'),
(5, 'Tsiory', 'Soa', 'Tana', '34te', 'Betongole', '2020-12-01', 87345435, 34355, 'tsiory', '1e3e84f0a3bfea349a18ff6e2dccfb3866b9d11f'),
(6, 'Tsy putin', 'de merde', 'pute', 'masosotay', 'fuck', '2001-01-01', 1234124, 123, 'putin', '89749fe500cbbaba80324cab455e597c0ccbdf0a'),
(7, 'encore', 'putin', 'de', '34', 'merde', '2020-12-22', 3263656, 324, 'encore', 'af580f7aa20f8bffc32174fd64e3db5031e5aeb6'),
(8, 'test', 'test', 'test', 'test', 'test', '2020-12-22', 235345, 235366, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `outils_Areserver` varchar(100) NOT NULL,
  `nom_reservation` varchar(100) NOT NULL,
  `date_reservation` date NOT NULL,
  `heure_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `outils_Areserver`, `nom_reservation`, `date_reservation`, `heure_reservation`) VALUES
(1, 'materiel', 'raquette', '2020-12-14', 2),
(2, 'materiel', 'mini raquette', '2020-12-15', 3);

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `date` date NOT NULL,
  `nbr_8_10` int(11) NOT NULL,
  `nbr_10_12` int(11) NOT NULL,
  `nbr_12_14` int(11) NOT NULL,
  `nbr_14_16` int(11) NOT NULL,
  `nbr_16_18` int(11) NOT NULL,
  `nbr_18_20` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id_test`, `date`, `nbr_8_10`, `nbr_10_12`, `nbr_12_14`, `nbr_14_16`, `nbr_16_18`, `nbr_18_20`) VALUES
(1, '2020-12-14', 0, 1, 2, 3, 2, 1),
(2, '2020-12-15', 2, 1, 2, 3, 0, 1),
(3, '2020-12-16', 4, 0, 3, 2, 1, 3),
(4, '2020-12-17', 0, 1, 2, 1, 3, 0),
(5, '2020-12-18', 1, 2, 1, 2, 3, 1),
(6, '2020-12-19', 2, 1, 0, 1, 3, 1),
(7, '2020-12-20', 1, 2, 2, 1, 3, 1),
(8, '2020-12-21', 3, 3, 2, 3, 1, 0),
(9, '2020-12-22', 2, 1, 3, 2, 0, 1),
(10, '2020-12-23', 1, 3, 1, 3, 1, 3),
(11, '2020-12-24', 3, 1, 3, 0, 0, 1),
(12, '2020-12-25', 0, 0, 0, 0, 0, 0),
(13, '2020-12-26', 3, 1, 1, 1, 2, 0),
(14, '2020-12-27', 3, 0, 0, 1, 3, 2),
(15, '2020-12-28', 1, 2, 2, 3, 1, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`);

--
-- Index pour la table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id_court`);

--
-- Index pour la table `date_heure`
--
ALTER TABLE `date_heure`
  ADD PRIMARY KEY (`id_dateHeure`);

--
-- Index pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD PRIMARY KEY (`id_entraineur`);

--
-- Index pour la table `manifestation`
--
ALTER TABLE `manifestation`
  ADD PRIMARY KEY (`id_manifestation`);

--
-- Index pour la table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD UNIQUE KEY `heure_reservation` (`heure_reservation`);

--
-- Index pour la table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `court`
--
ALTER TABLE `court`
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  MODIFY `id_entraineur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `manifestation`
--
ALTER TABLE `manifestation`
  MODIFY `id_manifestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id_materiel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
