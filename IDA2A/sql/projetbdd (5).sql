-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 29 Novembre 2016 à 17:22
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projetbdd`
--
CREATE DATABASE IF NOT EXISTS `projetbdd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetbdd`;

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `id_agent` int(5) NOT NULL AUTO_INCREMENT,
  `nom_agent` varchar(255) NOT NULL,
  `prenom_agent` varchar(255) NOT NULL,
  `cont_agent` varchar(8) DEFAULT NULL,
  `email_agent` varchar(255) DEFAULT NULL,
  `login_agent` varchar(255) NOT NULL,
  `mdp_agent` varchar(255) NOT NULL,
  `etat_agent` int(1) NOT NULL,
  `dispo_agent` int(1) NOT NULL,
  `post_agent` varchar(255) NOT NULL,
  `id_prest` int(5) NOT NULL,
  PRIMARY KEY (`id_agent`),
  KEY `fk_prest` (`id_prest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`id_agent`, `nom_agent`, `prenom_agent`, `cont_agent`, `email_agent`, `login_agent`, `mdp_agent`, `etat_agent`, `dispo_agent`, `post_agent`, `id_prest`) VALUES
(1, 'Mady', 'Josue', '48265745', 'larkange@gmail.com', 'larkange', 'queenye', 1, 0, '1', 1),
(2, 'Camara', 'Assata', '45689887', 'asscamso@gmail.ocm', 'bacterie', 'razak', 1, 1, '0', 1),
(3, 'Magassouba', 'Fode bangali', '77869525', 'samta@gmail.com', 'sama', 'blackstar', 1, 0, '0', 1),
(4, 'Ouattara', 'Stephane', '78555698', 'gamer123@gmail.com', 'guivarsh', 'callof', 1, 0, '1', 3),
(5, 'Beugre', 'Yao Marc-Andre', '06858621', 'marcus89@gmail.com', 'Marcus', 'atofotemefier', 1, 0, '1', 2),
(6, 'Koffi', 'Kouassi-kan Nicaise', '78786693', 'nicus@gmail.com', 'tetracus', 'ciborgus', 1, 0, '1', 43),
(7, 'Beugre', 'Kevin', '05444309', 'kevban@gmail.com', 'kevko', 'banana', 1, 0, '0', 1);

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
-- Structure de la table `ecocitoyen`
--

CREATE TABLE IF NOT EXISTS `ecocitoyen` (
  `id_eco` int(5) NOT NULL AUTO_INCREMENT,
  `nom_eco` varchar(255) NOT NULL,
  `prenom_eco` varchar(255) NOT NULL,
  `cont_eco` varchar(8) DEFAULT NULL,
  `email_eco` varchar(255) DEFAULT NULL,
  `etat_eco` int(1) NOT NULL,
  `login_eco` varchar(255) NOT NULL,
  `mdp_eco` varchar(255) NOT NULL,
  PRIMARY KEY (`id_eco`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `ecocitoyen`
--

INSERT INTO `ecocitoyen` (`id_eco`, `nom_eco`, `prenom_eco`, `cont_eco`, `email_eco`, `etat_eco`, `login_eco`, `mdp_eco`) VALUES
(1, 'Beugre', 'Axel', '87573423', 'axel.beugre1@gmail.com', 1, 'freewheels', 'thereaper'),
(2, 'armel', 'kofi', '44589632', 'kmel@hyh.ihh', 1, 'koa', 'roro'),
(3, 'Dalo', 'Richmond', '08501468', 'angerichmond@gmail.com', 1, 'Block13', 'monvich');

-- --------------------------------------------------------

--
-- Structure de la table `incident`
--

CREATE TABLE IF NOT EXISTS `incident` (
  `id_inc` int(11) NOT NULL AUTO_INCREMENT,
  `num_inc` varchar(255) DEFAULT NULL,
  `lib_inc` varchar(255) DEFAULT NULL,
  `date_inc` date DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `lattitude` double DEFAULT NULL,
  `descr_incident` text,
  `sup_inc` varchar(255) DEFAULT NULL,
  `image_inc` varchar(255) DEFAULT NULL,
  `statut_inc` int(1) NOT NULL,
  `id_catincident` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL,
  `id_reg` int(5) DEFAULT NULL,
  `id_eco` int(5) NOT NULL,
  `id_agent` int(5) DEFAULT NULL,
  `id_prest` int(5) DEFAULT NULL,
  `sas` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_inc`),
  KEY `fk_catincident` (`id_catincident`),
  KEY `fk_zone` (`id_zone`),
  KEY `fk_regulateur` (`id_reg`),
  KEY `fk_eco` (`id_eco`),
  KEY `fk_pres` (`id_prest`),
  KEY `fk_agent` (`id_agent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `incident`
--

INSERT INTO `incident` (`id_inc`, `num_inc`, `lib_inc`, `date_inc`, `longitude`, `lattitude`, `descr_incident`, `sup_inc`, `image_inc`, `statut_inc`, `id_catincident`, `id_zone`, `id_reg`, `id_eco`, `id_agent`, `id_prest`, `sas`) VALUES
(1, '16/1/42/Kou', 'Cassee', '2016-11-11', -3.955459833435043, 5.29918255332364, 'les enfants on jouer ballon devant ça c''est cassé', 'au terrain', NULL, 2, 2, 42, 1, 1, 2, 1, NULL),
(2, '16/2/66/Pla', 'Bouche', '2016-11-11', -4.025162349945845, 5.323956282798275, 'yhguyhhu', 'vers ', NULL, 1, 1, 66, 1, 2, NULL, 2, NULL),
(3, '16/3/104/Yop', 'Cassee', '2016-11-11', -4.036338200000046, 5.3154094, 'qsd', 'll', NULL, 3, 2, 104, 1, 1, 3, 1, NULL),
(4, '16/4/33/Coc', 'Bouche', '2016-11-11', -3.9699874000000364, 5.3628106, 'lkjh', 'kjn', NULL, 4, 4, 33, 1, 1, 3, 1, NULL),
(5, '16/5/85/Por', 'Bouche', '2016-11-14', -3.9687122000000272, 5.2623957, 'surement du aux déchets du bétail', 'juste en face de la maternité', NULL, 1, 5, 85, 1, 3, NULL, 3, NULL),
(6, '16/6/56/Kou', 'Cassee', '2016-11-17', -3.9622557163238525, 5.2923743317989365, 'c''est mal gaté', 'alolo alolo', NULL, 2, 1, 56, 1, 1, 3, 1, 1),
(13, NULL, 'Bouche', '2016-11-25', -4.0101705, 5.3906199, 'c''est une bouche d''incendie qui a Ã©tÃ© cassÃ©e', 'vers le carrefour HETEC', NULL, 0, 5, 12, NULL, 1, NULL, NULL, NULL),
(14, NULL, 'Bouche', '2016-11-25', -3.964887, 5.3106535, 'text', 'vers l''hopital', NULL, 0, 2, 57, NULL, 1, NULL, NULL, NULL),
(15, '16/15/57/Mar', 'Bouche', '2016-11-25', -3.964887, 5.3106535, 'text', 'vers l''hopital', NULL, 3, 2, 57, 1, 1, 7, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `id_int` int(11) NOT NULL AUTO_INCREMENT,
  `desc_int` varchar(255) DEFAULT NULL,
  `date_f` datetime DEFAULT NULL,
  `id_inc` int(5) NOT NULL,
  `id_agent` int(5) NOT NULL,
  PRIMARY KEY (`id_int`),
  KEY `fk_incident` (`id_inc`),
  KEY `fk_ag` (`id_agent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `intervention`
--

INSERT INTO `intervention` (`id_int`, `desc_int`, `date_f`, `id_inc`, `id_agent`) VALUES
(10, 'sdffsdf', '2016-11-28 10:42:10', 15, 7);

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

CREATE TABLE IF NOT EXISTS `prestataire` (
  `id_prest` int(11) NOT NULL AUTO_INCREMENT,
  `rs_prest` varchar(255) NOT NULL,
  `cnps_prest` varchar(255) NOT NULL,
  `agrement_prest` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  PRIMARY KEY (`id_prest`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Contenu de la table `prestataire`
--

INSERT INTO `prestataire` (`id_prest`, `rs_prest`, `cnps_prest`, `agrement_prest`, `localisation`, `contact`) VALUES
(1, 'SODECIE', '356-1016631-2', '15457/ABJ/16/ER', 'Marcory', '24589023'),
(2, 'H-Sanitaire', '6565-565-55', '6565/sd/654/er', 'Plateau', '21058589'),
(3, 'anare', '6546-987-6546', '2852/erd/65/er', 'cocody', '24256985'),
(43, 'SODEMIE', '4165-66-0202', 'aasd/65465/qs/bf', 'treichville', '78786693');

-- --------------------------------------------------------

--
-- Structure de la table `regulateur`
--

CREATE TABLE IF NOT EXISTS `regulateur` (
  `id_reg` int(5) NOT NULL AUTO_INCREMENT,
  `nom_reg` varchar(255) NOT NULL,
  `prenom_reg` varchar(255) NOT NULL,
  `cont_reg` varchar(8) DEFAULT NULL,
  `email_reg` varchar(255) DEFAULT NULL,
  `etat_reg` int(1) NOT NULL,
  `login_reg` varchar(255) NOT NULL,
  `mdp_reg` varchar(255) NOT NULL,
  `post_reg` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `regulateur`
--

INSERT INTO `regulateur` (`id_reg`, `nom_reg`, `prenom_reg`, `cont_reg`, `email_reg`, `etat_reg`, `login_reg`, `mdp_reg`, `post_reg`) VALUES
(1, 'Dalo', 'Waly', '47427163', 'dalomarc92@gmail.com', 1, 'Mastermind', 'andy1992', '1'),
(2, 'Magassouba', 'Lancine', '47526396', 'berry@gmail.com', 1, 'Berry', 'treysongz', '1'),
(3, 'Komenan', 'Raoul', '57890302', 'novaisraoul@gmail.com', 1, 'Roulio', 'rooney', '0'),
(4, 'Komenan', 'Efrem', '57890301', 'efremie@gmail.com', 1, 'Fremi', 'pussy', '0'),
(5, 'poiuoi', 'kilklkl', '5555555', 'ljn@uyiyh.mklo', 1, 'klkcho', 'jjjjjjjj', '0');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

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
(109, 'Academie (Niangon)', 11),
(110, 'Agban Attie', 4),
(111, 'Attecoube 3', 4),
(112, 'Djene Ecare', 4),
(113, 'Sante Ecole', 4),
(114, 'Sante 3 Residentiel 1', 4),
(115, 'Sant??« 3 R??«sidentiel 2', 4),
(116, 'Sant??« 3 Extension', 4),
(117, 'Fromager', 4),
(118, 'Deinde', 4),
(119, 'Asapsu', 4),
(120, 'Awa', 4),
(121, 'Jean-Paul 2', 4),
(122, 'Sante Carrefour', 4),
(123, 'Ak??«li??«', 4),
(124, 'Lackman', 4),
(125, 'Douagoville', 4),
(126, 'Camp Douane', 4),
(127, 'Jerusalem Residentiel', 4),
(128, 'J??«rusalem 1', 4),
(129, 'J??«rusalem 2', 4),
(130, 'J??«rusalem 3', 4),
(131, 'Sebroko', 4),
(132, 'La Paix', 4),
(133, 'Lagune', 4),
(134, 'Espoir', 4),
(135, 'Mosqu??«e', 4),
(136, 'Saint-Joseph', 4),
(137, 'Ecole', 4),
(138, 'Gbebouto', 4),
(139, 'Cantonnement Forestier', 4),
(140, 'Cite Fairmont 1', 4),
(141, 'Cite Fairmont 2', 4),
(142, 'Ecole Forestiere', 4),
(143, 'Bidjante', 4),
(145, 'Dokui', 5);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_prest` FOREIGN KEY (`id_prest`) REFERENCES `prestataire` (`id_prest`);

--
-- Contraintes pour la table `incident`
--
ALTER TABLE `incident`
  ADD CONSTRAINT `fk_agent` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `fk_catincident` FOREIGN KEY (`id_catincident`) REFERENCES `catincident` (`id_catincident`),
  ADD CONSTRAINT `fk_eco` FOREIGN KEY (`id_eco`) REFERENCES `ecocitoyen` (`id_eco`),
  ADD CONSTRAINT `fk_pres` FOREIGN KEY (`id_prest`) REFERENCES `prestataire` (`id_prest`),
  ADD CONSTRAINT `fk_regulateur` FOREIGN KEY (`id_reg`) REFERENCES `regulateur` (`id_reg`),
  ADD CONSTRAINT `fk_zone` FOREIGN KEY (`id_zone`) REFERENCES `zone` (`id_zone`);

--
-- Contraintes pour la table `intervention`
--
ALTER TABLE `intervention`
  ADD CONSTRAINT `fk_ag` FOREIGN KEY (`id_agent`) REFERENCES `agent` (`id_agent`),
  ADD CONSTRAINT `fk_incident` FOREIGN KEY (`id_inc`) REFERENCES `incident` (`id_inc`);

--
-- Contraintes pour la table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `fk_id_commune` FOREIGN KEY (`id_commune`) REFERENCES `commune` (`id_commune`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
