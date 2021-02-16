-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 11:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservationTennis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `login_admin` varchar(50) NOT NULL,
  `mdp_admin` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `login_admin`, `mdp_admin`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997 ');

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int(11) NOT NULL,
  `nomCours_8_10` varchar(25) DEFAULT ' ',
  `nomCours_10_12` varchar(25) DEFAULT '  ',
  `nomCours_12_14` varchar(25) DEFAULT '  ',
  `nomCours_14_16` varchar(25) DEFAULT '  ',
  `nomCours_16_18` varchar(25) DEFAULT '  ',
  `nomCours_18_20` varchar(25) DEFAULT ' ',
  `date_cours` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id_cours`, `nomCours_8_10`, `nomCours_10_12`, `nomCours_12_14`, `nomCours_14_16`, `nomCours_16_18`, `nomCours_18_20`, `date_cours`) VALUES
(1, 'cours pour debutant', 'tennis linux', 'tennis appliquer', ' ', 'java tennis', 'tennis theorie', '2020-12-14'),
(2, 'Philosophie tennis', ' ', 'math tennis', ' tennis php', ' ', 'Informatique Tennis', '2020-12-15'),
(3, 'cours tennis', ' ', ' ', ' ', ' ', ' skljfkdsf', '2020-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id_court` int(11) NOT NULL,
  `nom_court` varchar(25) NOT NULL,
  `surface_court` varchar(25) NOT NULL,
  `etat_court` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id_court`, `nom_court`, `surface_court`, `etat_court`) VALUES
(1, 'Central', 'Gazon', 'sale'),
(2, 'Indoor', 'Moquette', 'propre'),
(3, 'Plage', 'Sable', 'propre');

-- --------------------------------------------------------

--
-- Table structure for table `date_heure`
--

CREATE TABLE `date_heure` (
  `id_dateHeure` int(11) NOT NULL,
  `plage_horaire` varchar(50) NOT NULL,
  `nbr_reservation` int(11) NOT NULL,
  `truc_reserver` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_heure`
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
-- Table structure for table `entraineurs`
--

CREATE TABLE `entraineurs` (
  `id_entraineur` int(11) NOT NULL,
  `nom_entraineur` varchar(30) NOT NULL,
  `prenom_entraineur` varchar(30) NOT NULL,
  `login_entraineur` varchar(30) NOT NULL,
  `mdp_entraineur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entraineurs`
--

INSERT INTO `entraineurs` (`id_entraineur`, `nom_entraineur`, `prenom_entraineur`, `login_entraineur`, `mdp_entraineur`) VALUES
(1, 'Nasan', 'Avo', 'entraineur', 'e377a95a64a59b751511c444be9757e36a1e8ee0'),
(2, 'rakoto', 'soa soa', 'rakoto', '454875b48e096aa6a73b678802af3e6379e781dc'),
(4, 'jean', 'kely', 'jean', '51f8b1fa9b424745378826727452997ee2a7c3d7'),
(5, 'test', 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3');

-- --------------------------------------------------------

--
-- Table structure for table `manifestation`
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
-- Dumping data for table `manifestation`
--

INSERT INTO `manifestation` (`id_manifestation`, `titre_manifestation`, `type_manifestation`, `horaire_manifestation`, `organisateur_manifestation`, `tranche_age_manifestation`, `niveau_req_manifestation`, `effectif_manifestation`, `animateur_manifestation`, `nbre_inscrit`, `court_manifestation`, `materiel_manifestation`, `inscrit_id`) VALUES
(2, 'stage pour les mini débutants', 'stage', '12h - 16h le 17 Janvier 2020', 'mr le test', '10-20', 'noob', '6-40', 'mr le animateur', 1, 'outdoor', 'raquette 10 - balle 100', 0),
(3, 'un petit tournoi pour tous le monde', 'tournoi', '12h - 18h le 20 janvier', 'Mr me', '10-25', 'all ', '40', 'Mr le animateur', 2, 'central', 'raquette 6 - balle 50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `materiel`
--

CREATE TABLE `materiel` (
  `id_materiel` int(11) NOT NULL,
  `type_materiel` varchar(25) NOT NULL,
  `quantite_materiel` int(11) NOT NULL,
  `quantiteReserver` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materiel`
--

INSERT INTO `materiel` (`id_materiel`, `type_materiel`, `quantite_materiel`, `quantiteReserver`) VALUES
(1, 'Filet', 10, 3),
(2, 'Balle', 500, 100),
(4, 'Raquette', 70, 0),
(5, 'ballon test', 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materielReservation`
--

CREATE TABLE `materielReservation` (
  `id_matReservation` int(11) NOT NULL,
  `quiLeReserve` int(11) NOT NULL DEFAULT 0,
  `quiLeReserveE` int(11) NOT NULL DEFAULT 0,
  `materielReserver` varchar(55) NOT NULL,
  `quantiteReserver` int(11) NOT NULL,
  `enReservation` tinyint(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materielReservation`
--

INSERT INTO `materielReservation` (`id_matReservation`, `quiLeReserve`, `quiLeReserveE`, `materielReserver`, `quantiteReserver`, `enReservation`) VALUES
(2, 6, 0, 'Balle', 100, 0),
(3, 6, 0, 'Filet', 2, 0),
(4, 1, 0, 'Filet', 1, 0),
(5, 1, 0, 'Balle', 10, 0),
(6, 1, 0, 'Filet', 4, 0),
(7, 0, 1, 'Filet', 2, 0),
(8, 0, 1, 'Balle', 4, 0),
(9, 6, 0, 'Raquette', 45, 0),
(10, 6, 0, 'Filet', 3, 0),
(11, 0, 1, 'Raquette', 23, 0),
(12, 6, 0, 'Filet', 3, 0),
(13, 6, 0, 'Balle', 100, 0),
(14, 6, 0, 'ballon test', 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `nom_membre` varchar(25) NOT NULL,
  `prenom_membre` varchar(30) NOT NULL,
  `rue_membre` varchar(25) NOT NULL,
  `codePostal_membre` varchar(255) NOT NULL,
  `ville_membre` varchar(20) NOT NULL,
  `dateNaiss_membre` date NOT NULL,
  `tel_membre` int(11) NOT NULL,
  `numFFT_membre` int(11) NOT NULL,
  `login_membre` varchar(25) NOT NULL,
  `mdp_membre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membres`
--

INSERT INTO `membres` (`id_membre`, `nom_membre`, `prenom_membre`, `rue_membre`, `codePostal_membre`, `ville_membre`, `dateNaiss_membre`, `tel_membre`, `numFFT_membre`, `login_membre`, `mdp_membre`) VALUES
(1, 'Avo', 'Ram', '24 malaza', '234postalcode', 'Antananarivo', '2003-01-20', 340133099, 1, 'avo', 'c6252b4121d43ed6403081c08832c46f28074789'),
(5, 'Tsiory', 'Soa', 'Tana', '34te', 'Betongole', '2020-12-01', 87345435, 34355, 'tsiory', '1e3e84f0a3bfea349a18ff6e2dccfb3866b9d11f'),
(6, 'Tsy putin', 'de merde', 'pute', 'tsy masosotay eee', 'fuck', '2001-01-01', 1234124, 123, 'putin', '89749fe500cbbaba80324cab455e597c0ccbdf0a'),
(7, 'encore', 'putin', 'de', '34', 'merde', '2020-12-22', 3263656, 324, 'encore', 'af580f7aa20f8bffc32174fd64e3db5031e5aeb6'),
(8, 'test', 'test', 'test', 'test', 'test', '2020-12-22', 235345, 235366, 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(9, 'must', 'must', 'must', 'must', 'must', '2021-02-01', 87546345, 235267, 'must', '5723d165ed59595207e8c0c85bb720c83f4ce809');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `outils_Areserver` varchar(100) NOT NULL,
  `nom_reservation` varchar(100) NOT NULL,
  `date_reservation` date NOT NULL,
  `heure_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `outils_Areserver`, `nom_reservation`, `date_reservation`, `heure_reservation`) VALUES
(1, 'materiel', 'raquette', '2020-12-14', 2),
(2, 'materiel', 'mini raquette', '2020-12-15', 3);

-- --------------------------------------------------------

--
-- Table structure for table `test`
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
-- Dumping data for table `test`
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
(15, '2020-12-28', 1, 0, 2, 3, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id_court`);

--
-- Indexes for table `date_heure`
--
ALTER TABLE `date_heure`
  ADD PRIMARY KEY (`id_dateHeure`);

--
-- Indexes for table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD PRIMARY KEY (`id_entraineur`);

--
-- Indexes for table `manifestation`
--
ALTER TABLE `manifestation`
  ADD PRIMARY KEY (`id_manifestation`);

--
-- Indexes for table `materiel`
--
ALTER TABLE `materiel`
  ADD PRIMARY KEY (`id_materiel`);

--
-- Indexes for table `materielReservation`
--
ALTER TABLE `materielReservation`
  ADD PRIMARY KEY (`id_matReservation`);

--
-- Indexes for table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD UNIQUE KEY `heure_reservation` (`heure_reservation`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id_court` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `entraineurs`
--
ALTER TABLE `entraineurs`
  MODIFY `id_entraineur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manifestation`
--
ALTER TABLE `manifestation`
  MODIFY `id_manifestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `materiel`
--
ALTER TABLE `materiel`
  MODIFY `id_materiel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materielReservation`
--
ALTER TABLE `materielReservation`
  MODIFY `id_matReservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
