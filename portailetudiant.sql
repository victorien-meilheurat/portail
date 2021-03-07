-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : Dim 07 mars 2021 à 11:57
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portailetudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id`, `nom`) VALUES
(1, 'cda2020A'),
(2, '*****'),
(4, 'BTS SIO 2018'),
(6, 'CDA 2019A');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_matiere` (`id_matiere`),
  KEY `id_prof` (`id_prof`),
  KEY `id_classe` (`id_classe`),
  KEY `id_salle` (`id_salle`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `nom`, `id_matiere`, `dateDebut`, `dateFin`, `id_prof`, `id_classe`, `id_salle`) VALUES
(1, 'PHP introduction', 1, '2021-03-04 09:00:00', '2021-03-04 12:30:00', 3, 1, 2),
(2, 'HTML/CSS Examen', 2, '2021-03-04 13:30:00', '2021-03-04 17:00:00', 3, 1, 1),
(4, 'Probabilités', 1, '2021-03-04 09:00:00', '2021-03-04 12:00:00', 3, 1, 2),
(5, 'Probabilité', 3, '2021-06-23 10:00:00', '2021-06-23 15:30:00', 8, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `id_cours` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cours` (`id_cours`),
  KEY `id_type` (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `examen`
--

INSERT INTO `examen` (`id`, `nom`, `id_cours`, `id_type`) VALUES
(1, 'Krusty', 2, 2),
(3, 'Exam final', 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `nom`) VALUES
(1, 'PHP'),
(2, 'HTML/CSS'),
(3, 'Math');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_eleve` int(11) NOT NULL,
  `id_examen` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  KEY `id_eleve` (`id_eleve`),
  KEY `id_examen` (`id_examen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_eleve`, `id_examen`, `note`) VALUES
(2, 1, 16),
(1, 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `nom`) VALUES
(1, 'Administrateur'),
(2, 'Administratif'),
(3, 'Etudiant'),
(4, 'Professeur');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(25) NOT NULL,
  `batiment` varchar(25) NOT NULL,
  `conflit` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id`, `numero`, `batiment`, `conflit`) VALUES
(1, '255', 'bat66', NULL),
(2, '123', 'bat4', NULL),
(6, '654', 'Grand halle', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_examen`
--

DROP TABLE IF EXISTS `type_examen`;
CREATE TABLE IF NOT EXISTS `type_examen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_examen`
--

INSERT INTO `type_examen` (`id`, `nom`) VALUES
(1, 'TD'),
(2, 'TP'),
(3, 'Projet'),
(4, 'Examen');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_role` int(11) NOT NULL,
  `id_classe` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  KEY `id_classe` (`id_classe`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `password`, `id_role`, `id_classe`) VALUES
(1, 'MEILHEURAT', 'Victorien', 'mv', 'mv123', 3, 1),
(2, 'REYNAUD', 'Pierre', 'rp', 'rp123', 3, 1),
(3, 'CHOUARBI', 'Mehdi', 'cm', 'cm123', 4, 2),
(4, 'REYNAUD', 'Pierre', 'admin2', 'admin', 1, 2),
(5, 'MEILHEURAT', 'Victorien', 'admin1', 'admin', 1, 2),
(6, 'BRUNET', 'Laurent', 'bl', 'bl123', 2, 2),
(8, 'LAGRELETTE', 'Mickael', 'lm', 'lm123', 4, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id`),
  ADD CONSTRAINT `cours_ibfk_2` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id`),
  ADD CONSTRAINT `cours_ibfk_3` FOREIGN KEY (`id_prof`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `cours_ibfk_4` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id`);

--
-- Contraintes pour la table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id`),
  ADD CONSTRAINT `examen_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_examen` (`id`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_eleve`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`id_examen`) REFERENCES `examen` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `utilisateur_ibfk_2` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
