-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 16 Juillet 2016 à 17:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projetbdd`
--


CREATE DATABASE IF NOT EXISTS projetbdd;

use projetbdd;
-- --------------------------------------------------------

--
-- Structure de la table `categorieutilisateur`
--

CREATE TABLE IF NOT EXISTS `categorieutilisateur` (
  `id_catutilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_catutilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categorieutilisateur`
--

INSERT INTO `categorieutilisateur` (`id_catutilisateur`, `libelle`) VALUES
(1, 'Exploitant'),
(2, 'Administration'),
(3, 'Internaute');

-- --------------------------------------------------------

--
-- Structure de la table `catincident`
--

CREATE TABLE IF NOT EXISTS `catincident` (
  `id_catincident` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_catincident`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `catincident`
--

INSERT INTO `catincident` (`id_catincident`, `libelle`) VALUES
(1, 'Avaloir'),
(2, 'canalisation'),
(3, 'canniveau'),
(4, 'egout'),
(5, 'regard');

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `id_commune` int(11) NOT NULL AUTO_INCREMENT,
  `nom_commune` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_commune`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `commune`
--

INSERT INTO `commune` (`id_commune`, `nom_commune`) VALUES
(1, 'Abobo'),
(2, 'Adjame'),
(3, 'Anyama'),
(4, 'Attecoube'),
(5, 'Cocody'),
(6, 'Koumassi'),
(7, 'Marcory'),
(8, 'Plateau'),
(9, 'Treichville'),
(10, 'Port-Bouet'),
(11, 'Yopougon');

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `id_incident` int(11) NOT NULL AUTO_INCREMENT,
  `num_incident` varchar(255) DEFAULT NULL,
  `lib_incident` varchar(255) DEFAULT NULL,
  `date_incident` date DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `lattitude` double DEFAULT NULL,
  `descr_incident` text,
  `image` blob,
  `pre_sup` varchar(255) DEFAULT NULL,
  `id_catincident` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_incident`),
  KEY `fk_catincident` (`id_catincident`),
  KEY `fk_zone` (`id_zone`),
  KEY `fk_utilisateur` (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `incident`
--

INSERT INTO `incident` (`id_incident`, `num_incident`, `lib_incident`, `date_incident`, `longitude`, `lattitude`, `descr_incident`, `image`, `pre_sup`, `id_catincident`, `id_zone`, `id_utilisateur`) VALUES
(1, '', 'bouche', '2016-03-24', 65, 255, '?ºa deborde trop', NULL, 'vers gare de waren la', 1, 10, 1),
(2, '', 'bouche', '2016-02-03', 135, 58, 'c''est gate meme huum', NULL, 'en face de la pharmacie', 2, 50, 1),
(3, '', 'cassee', '2016-02-15', 12.5, 1, 'situation catastrophique', NULL, 'derriere le terrain', 3, 38, 1),
(4, '', 'bouche', '2016-03-25', 12.5, 1, 'non les gars pardon venez vite ?ºa sent', NULL, 'vers le maquis fesses rouge', 3, 38, 1),
(5, '', 'cassee', '2016-04-11', 65, 65, 'l''eau la est mal beaucoup', NULL, 'deuxieme carefour ?á droite', 2, 25, 3),
(6, '', 'bouche', '2016-04-20', 225, 12, '?ºa deborde trop', NULL, '', 2, 16, 3),
(7, '', 'bouche', '2016-02-01', 40, 1.25, 'c''est gate meme huum', NULL, '', 2, 1, 3),
(8, '', 'bouche', '2016-03-07', 56.52, 205, 'l''eau la est mal beaucoup', NULL, '', 2, 47, 3),
(9, '', 'cassee', '2016-03-10', 87.01, 53, 'non les gars pardon venez vite ?ºa sent', NULL, '', 5, 90, 1),
(10, '', 'cassee', '2016-03-10', 87.01, 53, 'situation catastrophique', NULL, '', 5, 90, 1),
(11, '', 'cassee', '2016-04-11', 23, 69.2, 'situation catastrophique', NULL, '', 5, 89, 1),
(12, '', 'bouche', '2016-04-11', 86.04, 21, 'c''est gate meme huum', NULL, 'derriere le titi', 5, 54, 1),
(13, '', 'bouche', '2016-04-11', 55, 45.09, 'c''est gate meme huum', NULL, 'devant le portail du quartier', 4, 65, 1),
(14, '', 'cassee', '2016-04-20', 89.2, 77, 'non les gars pardon venez vite ?ºa sent', NULL, 'a cot?® de cocotier la', 4, 77, 1),
(15, '', 'cassee', '2016-02-15', 89.2, 77, 'non les gars pardon venez vite ?ºa sent', NULL, '', 4, 77, 1),
(16, '', 'cassee', '2016-04-20', 210, 123, '?ºa deborde trop', NULL, '', 4, 23, 1),
(18, '0', 'Regard', '2016-07-16', NULL, NULL, 'Bonjour les gens ', NULL, 'cap sud', 1, 1, 1),
(19, '0', 'Regard', '2016-07-16', NULL, NULL, 'Bonjour les gens ', NULL, 'cap sud', 1, 1, 1),
(20, '0', 'Regard', '2016-07-16', NULL, NULL, 'Bonjour les gens ', NULL, 'cap sud', 1, 1, 1),
(21, '0', 'Regard', '2016-07-16', NULL, NULL, 'un jour sa va finir', NULL, 'a cote du yota ', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

CREATE TABLE IF NOT EXISTS `intervenant` (
  `id_intervenant` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` varchar(255) DEFAULT NULL,
  `RespoIntervenant` varchar(255) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `siteWeb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_intervenant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `id_intervention` int(11) NOT NULL AUTO_INCREMENT,
  `desc_intervention` text,
  `status_intervention` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_intervention`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `niveautraitement`
--

CREATE TABLE IF NOT EXISTS `niveautraitement` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `niveautraitement`
--

INSERT INTO `niveautraitement` (`id_niveau`, `libelle`, `description`) VALUES
(1, 'Primaire', 'Op?®ration visant ?á enlever les mati?¿res flottantes et la partie d?®cantable des mati?¿res en suspension'),
(2, 'Secondaire', 'Traitement visant ?á r?®duire les mati?¿res en suspension et la polution carbon?®e en faisant intervenir l''activit?® bact?®rienne'),
(3, 'Secondaire avanc?®', 'Traitement visant une reduction plus pouss?®e des mati?¿res en suspension et la polution carbon?®e en faisant intervenir l''activit?® bact?®rienne'),
(4, 'tertiaire', 'Traitement de niveau ?®quivalent au traitement secondaire avanc?® pour la reduction des mati?¿res en suspension et la polution carbon?®e, mais qui vise une reduction de la charge en phosphore ou la desinfection ou encore la dephosphatation et la d?®sinfection'),
(5, 'Performance structurale', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `suggestion`
--

CREATE TABLE IF NOT EXISTS `suggestion` (
  `id_suggestion` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) DEFAULT NULL,
  `lib_suggestion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_suggestion`),
  KEY `fk_user` (`id_utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `suggestion`
--

INSERT INTO `suggestion` (`id_suggestion`, `id_utilisateur`, `lib_suggestion`) VALUES
(1, 3, 'est ce que....'),
(2, 3, 'YO MAN'),
(3, 3, 'Bonjour les gens'),
(4, 3, 'Bonjouir tout le monde');

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE IF NOT EXISTS `technologie` (
  `id_technologie` int(11) NOT NULL AUTO_INCREMENT,
  `desc_technologie` text,
  `id_niveau` int(11) NOT NULL,
  PRIMARY KEY (`id_technologie`),
  KEY `fk_niveau` (`id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `technologie`
--

INSERT INTO `technologie` (`id_technologie`, `desc_technologie`, `id_niveau`) VALUES
(1, 'Fosse septique construite sur place', 5),
(2, 'Element epurateur classique', 5),
(3, 'Element epurateur modifi?®', 5),
(4, 'puit absorbant', 1),
(5, 'filtre ?á sable hors sol', 1),
(6, 'Filtre ?á sable classique', 2),
(7, 'Cabinet ?á fosse s?¿che', 2),
(8, 'Installation ?á vidange p?®riodique', 3),
(9, 'Installation biologique', 4),
(10, 'Champ d''?®vacuation', 4),
(11, 'Puit d''?®vacuation', 4),
(12, 'Champ de polissage', 4);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(255) DEFAULT NULL,
  `prenom_utilisateur` varchar(255) DEFAULT NULL,
  `contact_utilisateur` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL,
  `id_catutilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `fk_catuser` (`id_catutilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `contact_utilisateur`, `email`, `login`, `motdepasse`, `id_catutilisateur`) VALUES
(1, 'Assamoi', 'Jenica', '48149089', 'mjassamoi@gmail.com', 'jeni', 'bbdamour', 2),
(2, 'Kouakou', 'Ananze', '01020304', 'anazek@gmail.com', 'kananze', 'vieuxdamour', 1),
(3, 'Abraham', 'lincoln', '78562815', 'akaguembega@yahoo.fr', 'bfnoir', 'lincoln', 1),
(4,'Principal','','','','AdminPrincipal','EnvironnementIDA2A',2),
(5,'Secondaire','','','','Administrateur_Secondaire','EnvironnementIDA2A',2),
(6,'Developpeur','','','','MasterMind92','youngmoney1992',2),
(7,'Developpeur','','','','TheGrimmReaper','at%ofotemefi1er',2);

-- --------------------------------------------------------

--
-- Structure de la table `zone`
--

CREATE TABLE IF NOT EXISTS `zone` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_zone` varchar(255) DEFAULT NULL,
  `id_commune` int(11) NOT NULL,
  PRIMARY KEY (`id_zone`),
  KEY `fk_id_commune` (`id_commune`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Contenu de la table `zone`
--

INSERT INTO `zone` (`id_zone`, `libelle_zone`, `id_commune`) VALUES
(1, 'Plaque', 1),
(2, 'Anador', 1),
(3, 'Agbekoi', 1),
(4, 'Akeikoi', 1),
(5, 'Derriere rail', 1),
(6, 'samake', 1),
(7, 'Les 4 etages', 1),
(8, 'PK18', 1),
(9, 'Avocatier', 1),
(10, 'N''Dotre', 1),
(11, 'Belleville', 1),
(12, 'Dokui', 1),
(13, 'Sogefia', 1),
(14, 'Abobo Baoule', 1),
(15, 'Abobo Clotcha', 1),
(16, 'Williamsville', 2),
(17, 'Mosquee', 2),
(18, 'Bracodi', 2),
(19, 'Liberte', 2),
(20, '220 Logements', 2),
(21, 'Adjame marche', 2),
(22, 'Anyama residentiel', 3),
(23, 'Anyama Berthe', 3),
(24, 'Anyama Cisse', 3),
(25, 'Ancienne Gendarmerie', 3),
(26, 'A la morgue', 3),
(27, 'Angre', 5),
(28, 'Riviera palmerais', 5),
(29, 'Riviera 2', 5),
(30, 'Riviera 3', 5),
(31, 'Riviera 4', 5),
(32, 'Riviera Golf', 5),
(33, 'Bonoumin', 5),
(34, '2 Plateau', 5),
(35, 'Attogban', 5),
(36, 'Gobelet', 5),
(37, '147 Logements', 6),
(38, 'Campement', 6),
(39, 'Prodomo', 6),
(40, 'Agouti', 6),
(41, 'Sopim', 6),
(42, 'Inchallah', 6),
(43, '32', 6),
(44, '05', 6),
(45, 'Divo', 6),
(46, 'Sicogi', 6),
(47, 'Soweto', 6),
(48, 'Boston', 6),
(49, 'Baudelaire', 6),
(50, 'Quartier du maire (Canetons)', 6),
(51, '3 Ampoules', 6),
(52, 'Remblais (Colombe)', 6),
(53, 'Sans fils', 6),
(54, 'Akwaba', 6),
(55, 'Sogefia', 6),
(56, 'St Etienne', 6),
(57, 'Anoumambo', 7),
(58, 'Remblais', 7),
(59, 'Residentiel', 7),
(60, 'Centre Commercial', 7),
(61, 'Sicogi', 7),
(62, 'Massarana', 7),
(63, 'Konankro', 7),
(64, 'Cite Administrative', 8),
(65, 'Sorbonne', 8),
(66, 'Quartier chien mechant', 8),
(67, 'Carena', 8),
(68, 'Cite Esculable', 8),
(69, 'Avenue 14', 9),
(70, 'Rue 12', 9),
(71, 'Rue des Brasseries', 9),
(72, 'Biafra', 9),
(73, 'A la rass', 9),
(74, 'Gare de Bassam', 9),
(75, 'Nanan Yamousso', 9),
(76, 'Mobibois', 10),
(77, 'Jean Folly', 10),
(78, 'Rue 12', 10),
(79, 'Adjoufou', 10),
(80, 'Casier', 10),
(81, 'Phare', 10),
(82, 'Gonzagueville', 10),
(83, 'Anani', 10),
(84, 'Derriere Warf', 10),
(85, 'Abattoir', 10),
(86, 'Siporex', 11),
(87, 'Sideci', 11),
(88, 'Gesco', 11),
(89, 'Maroc', 11),
(90, 'Ananerais', 11),
(91, 'Niangon', 11),
(92, 'Selmer', 11),
(93, 'Andokoi', 11),
(94, 'Koweit', 11),
(95, 'Sicogi', 11),
(96, 'Songon', 11),
(97, 'Toit rouge', 11),
(98, 'Kilometre 17', 11),
(99, 'Rue Princesse', 11),
(100, 'Port-Bouet 2', 11),
(101, 'Wassakara', 11),
(102, 'Sable', 11),
(103, 'Banco', 11),
(104, 'Abobodoume', 11),
(105, 'Quartier Millionnaire', 11),
(106, 'Cite verte', 11),
(107, 'Sogefia', 11),
(108, 'Cite CIE (Niangon)', 11),
(109, 'Academie (Niangon)', 11);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_catincident` FOREIGN KEY (`id_catincident`) REFERENCES `catincident` (`id_catincident`),
  ADD CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `fk_zone` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`);

--
-- Contraintes pour la table `suggestion`
--
ALTER TABLE `suggestion`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD CONSTRAINT `fk_niveau` FOREIGN KEY (`id_niveau`) REFERENCES `niveautraitement` (`id_niveau`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_catuser` FOREIGN KEY (`id_catutilisateur`) REFERENCES `categorieutilisateur` (`id_catutilisateur`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `fk_id_commune` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id_commune`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
