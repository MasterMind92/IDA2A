-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Juillet 2016 à 22:25
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_msg` int(3) NOT NULL AUTO_INCREMENT,
  `txt_msg` text,
  PRIMARY KEY (`id_msg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_msg`, `txt_msg`) VALUES
(1, 'Bonjour tout le monde'),
(2, 'Comment sa va toi '),
(3, 'prisca apres '),
(4, 'aie');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(3) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Base de données :  `coordonnees`
--

-- --------------------------------------------------------

--
-- Structure de la table `marker`
--

CREATE TABLE IF NOT EXISTS `marker` (
  `numMark` int(3) NOT NULL AUTO_INCREMENT,
  `nomMark` varchar(255) DEFAULT NULL,
  `latMark` double DEFAULT NULL,
  `lngMark` double DEFAULT NULL,
  PRIMARY KEY (`numMark`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `marker`
--

INSERT INTO `marker` (`numMark`, `nomMark`, `latMark`, `lngMark`) VALUES
(1, 'Abidjan,koumassi,residence Agoutis', 5.304726995667756, -3.9461042883910977);
--
-- Base de données :  `etudiant`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(15) DEFAULT NULL,
  `prenom` varchar(15) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `sexe` varchar(1) DEFAULT NULL,
  `photo` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Base de données :  `gcentre`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

CREATE TABLE IF NOT EXISTS `agent` (
  `mat_ag` int(3) NOT NULL AUTO_INCREMENT,
  `nom_ag` varchar(15) DEFAULT NULL,
  `prenom_ag` varchar(40) DEFAULT NULL,
  `titre_ag` varchar(3) DEFAULT NULL,
  `salaire_ag` double DEFAULT NULL,
  `prime_ag` double DEFAULT NULL,
  `centre_ag` int(1) DEFAULT NULL,
  PRIMARY KEY (`mat_ag`),
  KEY `fk_agent` (`centre_ag`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`mat_ag`, `nom_ag`, `prenom_ag`, `titre_ag`, `salaire_ag`, `prime_ag`, `centre_ag`) VALUES
(1, 'Dalo', 'Marc-Andre', 'SG', 100000, 40000, 3),
(2, 'Beugre', 'Axel', 'MGP', 120000, 30000, 1),
(3, 'Assamoi', 'Jenica', 'GCC', 200000, 10000, 2),
(4, 'Yao', 'Ange Prisca', 'PC', 150000, 75000, 4);

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

CREATE TABLE IF NOT EXISTS `centre` (
  `id_centre` int(1) NOT NULL AUTO_INCREMENT,
  `design_centre` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_centre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `centre`
--

INSERT INTO `centre` (`id_centre`, `design_centre`) VALUES
(1, 'ita'),
(2, 'Pangolin'),
(3, 'Concordia'),
(4, 'La source'),
(5, 'UTB'),
(6, 'SOA');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `fk_agent` FOREIGN KEY (`centre_ag`) REFERENCES `centre` (`id_centre`);
--
-- Base de données :  `ida2a`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `num_client` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom_client` varchar(30) DEFAULT NULL,
  `contact_client` varchar(12) DEFAULT NULL,
  `ville_client` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`num_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`num_client`, `nom`, `prenom_client`, `contact_client`, `ville_client`) VALUES
(1, 'Brahama', 'Abdul', '49002525', 'attecoube'),
(2, 'Abraham', 'Maria', '48066525', 'abidjan'),
(3, 'Lincoln', 'Abdul', '47427163', 'Lincoln City'),
(4, 'Abraham', 'Maria', '48066525', 'abidjan'),
(5, 'Lincoln', 'Abdul', '47427163', 'Lincoln City'),
(6, 'Abraham', 'Maria', '48066525', 'abidjan'),
(7, 'Lincoln', 'Abdul', '47427163', 'Lincoln City');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `num_cmd` varchar(10) NOT NULL DEFAULT '',
  `date_cmd` date DEFAULT NULL,
  `lib_cmd` varchar(30) DEFAULT NULL,
  `num_client` int(5) DEFAULT NULL,
  PRIMARY KEY (`num_cmd`),
  KEY `fk_num_client` (`num_client`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`num_cmd`, `date_cmd`, `lib_cmd`, `num_client`) VALUES
('', '2016-12-25', 'Magnum', 1),
('prod01', '2014-11-20', 'SQL', 4),
('prod1234', '2016-12-25', 'Magnum', 1),
('prod20', '2016-12-25', 'DBA', 2),
('prod23', '2016-06-05', 'html', 3),
('prod30', '2016-12-25', 'DBA', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `fk_num_client` FOREIGN KEY (`num_client`) REFERENCES `clients` (`num_client`);
--
-- Base de données :  `l2`
--

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id_media` tinyint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `titre_media` varchar(100) DEFAULT NULL,
  `desc_media` varchar(500) DEFAULT NULL,
  `location_media` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` tinyint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Categorie_news` varchar(50) DEFAULT NULL,
  `Titre_news` varchar(50) DEFAULT NULL,
  `Date_news` varchar(10) DEFAULT NULL,
  `Lieu_news` varchar(100) DEFAULT NULL,
  `Commentaire_news` text NOT NULL,
  `Media_news` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `Categorie_news`, `Titre_news`, `Date_news`, `Lieu_news`, `Commentaire_news`, `Media_news`) VALUES
(0000000004, 'Evenement solo', 'zionFm', '2015-09-20', 'ABIIDJAN', 'bonjour tout le monde', 'public/media/11953049_902191259850501_8845330511643810306_n.jpg'),
(0000000005, 'test', 'Bonjour tout le monde ', '2016-02-23', 'Cote d''Ivoire, Abidjan, Marcory ', 'En train d''attendre le professeur soye de php ', 'public/media/WIN_20160205_184752.JPG');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id_projet` tinyint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `type_projet` varchar(30) DEFAULT NULL,
  `titre_projet` varchar(50) DEFAULT NULL,
  `commentaires_projet` tinytext,
  `url_image_projet` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_projet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` tinyint(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `lien_video` tinytext,
  `titre_video` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Base de données :  `projetbdd`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `incident`
--

INSERT INTO `incident` (`id_incident`, `num_incident`, `lib_incident`, `date_incident`, `longitude`, `lattitude`, `descr_incident`, `image`, `pre_sup`, `id_catincident`, `id_zone`, `id_utilisateur`) VALUES
(1, '0', 'Regard', '2016-07-17', NULL, NULL, 'on dirai sa chauffe hein ', NULL, 'quelque part', 1, 1, 1),
(2, '0', 'Canalisation', '2016-07-17', NULL, NULL, 'Bonjour les gnakoue', NULL, 'quelque part', 1, 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `contact_utilisateur`, `email`, `login`, `motdepasse`, `id_catutilisateur`) VALUES
(1, 'Assamoi', 'Jenica', '48149089', 'mjassamoi@gmail.com', 'jeni', 'bbdamour', 2),
(2, 'Kouakou', 'Ananze', '01020304', 'anazek@gmail.com', 'kananze', 'vieuxdamour', 1),
(3, 'Abraham', 'lincoln', '78562815', 'akaguembega@yahoo.fr', 'bfnoir', 'lincoln', 1),
(4, 'Principal', '', '', '', 'AdminPrincipal', 'EnvironnementIDA2A', 2),
(5, 'Secondaire', '', '', '', 'Administrateur_Secondaire', 'EnvironnementIDA2A', 2),
(6, 'Developpeur', '', '', '', 'MasterMind92', 'youngmoney1992', 2),
(7, 'Developpeur', '', '', '', 'TheGrimmReaper', 'at%ofotemefi1er', 2);

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
--
-- Base de données :  `projetida2a`
--

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE IF NOT EXISTS `compte` (
  `num_compte` int(1) NOT NULL AUTO_INCREMENT,
  `Lib_compte` varchar(25) DEFAULT NULL,
  `Login_compte` varchar(25) DEFAULT NULL,
  `Mdp_compte` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`num_compte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `compte`
--

INSERT INTO `compte` (`num_compte`, `Lib_compte`, `Login_compte`, `Mdp_compte`) VALUES
(1, 'Principal', 'Administrateur_Principal', 'EnvironnementIDA2A'),
(2, 'Secondaire', 'Administrateur_Secondaire', 'EnvironnementIDA2A'),
(3, 'Developpeur', 'MasterMind', 'youngmoney1992'),
(4, 'Developpeur', 'TheGrimmReaper', 'at%ofotemefi1er');
--
-- Base de données :  `projetida2adb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorieintervention`
--

CREATE TABLE IF NOT EXISTS `categorieintervention` (
  `id_catinterv` int(11) NOT NULL AUTO_INCREMENT,
  `lib_catinterv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_catinterv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorieutilisateur`
--

CREATE TABLE IF NOT EXISTS `categorieutilisateur` (
  `id_catutil` int(11) NOT NULL AUTO_INCREMENT,
  `lib_catutil` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_catutil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `catincident`
--

CREATE TABLE IF NOT EXISTS `catincident` (
  `id_catincident` int(11) NOT NULL AUTO_INCREMENT,
  `lib_catincident` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_catincident`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commune`
--

CREATE TABLE IF NOT EXISTS `commune` (
  `id_commune` int(11) NOT NULL AUTO_INCREMENT,
  `nom_commune` varchar(255) DEFAULT NULL,
  `adresse_commune` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_commune`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `internaute`
--

CREATE TABLE IF NOT EXISTS `internaute` (
  `id_internaute` int(11) NOT NULL AUTO_INCREMENT,
  `nom_internaute` varchar(255) DEFAULT NULL,
  `prenom_internaute` varchar(255) DEFAULT NULL,
  `contact_internaute` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_internaute`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
--
-- Base de données :  `test`
--
--
-- Base de données :  `tp_ida`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id_client` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `prenom_client` varchar(50) DEFAULT NULL,
  `contact_client` varchar(12) DEFAULT NULL,
  `ville_client` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id_client`, `nom`, `prenom_client`, `contact_client`, `ville_client`) VALUES
(1, 'ASSAMOI', 'Jenica', '48421490', 'Marcory'),
(2, 'BEUGRE', 'Axel', '87573423', 'Koumassi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
