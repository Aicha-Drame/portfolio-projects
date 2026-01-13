-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 02 Mai 2024 à 14:57
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `assurance`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int(3) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `ddn_client` date NOT NULL,
  `adresse_client` varchar(200) NOT NULL,
  `cp_client` varchar(5) NOT NULL,
  `ville_client` varchar(100) NOT NULL,
  `tel_client` varchar(10) NOT NULL,
  `email_client` varchar(50) NOT NULL,
  `password_client` varchar(50) NOT NULL,
  `cgu_client` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `ddn_client`, `adresse_client`, `cp_client`, `ville_client`, `tel_client`, `email_client`, `password_client`, `cgu_client`) VALUES
(1, 'MM', 'Sara', '2023-10-03', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'saraa@gmail.com', 'cbsz', 0),
(27, 'MM', 'Sara', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'sabrina@gmail.com', 'poh', 0),
(28, 'aa', 'tata', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0632981500', 'sabrina@gmail.com', 'poh', 0),
(29, 'aa', 'tata', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0632981500', 'sabrina@gmail.com', 'poh', 0),
(30, 'aa', 'tata', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0632981500', 'sabrina@gmail.com', 'poh', 0),
(31, 'pp', 'loup', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0632981500', 'sabrina@gmail.com', 'poh', 0),
(34, 'mo', 'momo', '2022-06-03', '36 rue de la cÃ©risaie', '93300', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(35, 'DRAMÃ‰', 'Fatoumata', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', 'mop', 0),
(37, 'Drame', 'Aicha', '2023-11-17', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', '123', 0),
(38, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dol@gmail.com', 'jv', 0),
(39, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', 'fdwsv', 0),
(40, 'po', 'mimi', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(41, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', '', 0),
(42, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', '', 0),
(43, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', '', 0),
(44, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', '', 0),
(45, 'Drame', 'Aicha', '0000-00-00', '12 rue mapser', '34220', 'Plaisir', '0796651533', 'dopal@gmail.com', 'dsg', 0),
(46, 'DRAMÃ‰', 'Fatoumata', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', 'mop', 0),
(47, 'MM', 'Sara', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(48, 'DRAMÃ‰', 'Fatoumata', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', 'mop', 0),
(49, 'po', 'mi', '0000-00-00', '01 rue de la cÃ©risaie', '22000', 'Bourg ', '0732981500', 'momo@gmail.com', 'mop', 0),
(50, 'po', 'mi', '0000-00-00', '01 rue de la cÃ©risaie', '22000', 'Bourg ', '0732981500', 'momo@gmail.com', 'mop', 0),
(51, 'oo', 'mp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(52, 'oo', 'mp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 1),
(53, 'mpp', 'mpp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 1),
(54, 'mpp', 'mpp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(55, 'mpp', 'mpp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(56, 'mpp', 'mpp', '0000-00-00', '01 rue de la cérisaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(57, 'mpp', 'mpp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(58, 'mpp', 'mpp', '2023-11-07', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(59, 'mpp', 'mpp', '2023-11-07', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(60, 'mpp', 'mpp', '0000-00-00', '01 rue de la cÃ©risaie', '92200', 'Bourg la Reine', '0732981500', 'momo@gmail.com', 'mop', 0),
(61, 'hh', 'gg', '0000-00-00', 'dff', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 0),
(62, 'hh', 'gg', '0000-00-00', 'dff', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 0),
(63, 'hh', 'gg', '0000-00-00', 'dff', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 0),
(64, 'aa', 'gg', '0000-00-00', 'dff', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 0),
(66, 'admin', 'QQQQQ', '0000-00-00', 'QQQ', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', '123', 0),
(67, 'admin', 'admin', '0000-00-00', 'QQQ', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', '123', 0),
(68, 'admin', 'admin', '0000-00-00', 'QQQ', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 1),
(69, '123', '123', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', '123', 1),
(70, '123', '123', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', 'mop', 0),
(71, 'MADAME', 'MADAME', '2024-03-13', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', '123', 1),
(72, 'MADAME', 'MADAME', '0000-00-00', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', 'mop', 1),
(73, 'MADAME', 'MADAME', '2024-03-06', '16 RUE', '94260', 'Bagneux', '0768981566', 'momo@gmail.com', '123', 1),
(74, 'admin', 'admin', '0000-00-00', 'QQQ', '75010', 'Plaisir', '0698451501', 'momo@gmail.com', 'mop', 0),
(75, 'gg', 'gg', '2024-04-24', '14 bis', '75010', 'Plaisir', '0698451501', 'o@gmail.com', 'mop', 1);

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

CREATE TABLE IF NOT EXISTS `collaborateur` (
  `id_collaborateur` int(4) NOT NULL AUTO_INCREMENT,
  `nom_collaborateur` varchar(30) DEFAULT NULL,
  `prenom_collaborateur` varchar(30) DEFAULT NULL,
  `login_collaborateur` varchar(20) DEFAULT NULL,
  `mdp_collaborateur` varchar(20) DEFAULT NULL,
  `adresse_collaborateur` varchar(30) DEFAULT NULL,
  `cp_collaborateur` char(5) DEFAULT NULL,
  `ville_collaborateur` varchar(30) DEFAULT NULL,
  `dateEmbauche_collaborateur` date DEFAULT NULL,
  `domaine_collaborateur` int(1) DEFAULT '1',
  PRIMARY KEY (`id_collaborateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `collaborateur`
--

INSERT INTO `collaborateur` (`id_collaborateur`, `nom_collaborateur`, `prenom_collaborateur`, `login_collaborateur`, `mdp_collaborateur`, `adresse_collaborateur`, `cp_collaborateur`, `ville_collaborateur`, `dateEmbauche_collaborateur`, `domaine_collaborateur`) VALUES
(1, 'Villechalane', 'Louis', 'lvillachane', 'jux7g', '8 rue des Charmes', '46000', 'Cahors', '2005-12-21', 1),
(2, 'Andre', 'David', 'dandre', 'oppg5', '1 rue Petit', '46200', 'Lalbenque', '2019-11-23', 1),
(3, 'Bedos', 'Christian', 'cbedos', 'gmhxd', '1 rue Peranud', '46250', 'Montcuq', '1995-01-12', 2),
(4, 'Tusseau', 'Louis', 'ltusseau', 'ktp3s', '22 rue des Ternes', '46123', 'Gramat', '2000-05-01', 2),
(5, 'Bentot', 'Pascal', 'pbentot', 'doyw1', '11 allée des Cerises', '46512', 'Bessines', '1992-07-09', 3),
(6, 'Bioret', 'Luc', 'lbioret', 'hrjfs', '1 Avenue gambetta', '46000', 'Cahors', '2008-05-11', 3),
(7, 'Bunisset', 'Francis', 'fbunisset', '4vbnd', '10 rue des Perles', '93100', 'Montreuil', '2001-10-21', 4),
(8, 'Bunisset', 'Denise', 'dbunisset', 's1y1r', '23 rue Manin', '75019', 'paris', '2010-12-05', 4),
(9, 'Cacheux', 'Bernard', 'bcacheux', 'uf7r3', '114 rue Blanche', '75017', 'Paris', '2009-11-12', 5),
(10, 'Frémont', 'Julien', 'jfremont', 'ju8uy', '12 avenue de la libération', '59270', 'Bailleul', '2018-10-01', 5),
(11, 'Benamour', 'Aicha', 'abenamour', 'wx76i', '12 avenue du général Leclerc', '13000', 'Marseille', '2019-10-01', 6),
(12, 'Nguyen', 'Than', 'tnguyen', 'trm78', '10 rue du guet', '45170', 'Montigny', '2020-10-01', 6),
(13, 'Benmoussa', 'Yacine', 'ybenmoussa', 'ms4la', '4 route de la mer', '13012', 'Allauh', '2028-10-01', 7),
(14, 'Cadic', 'Eric', 'ecadic', '6u8dc', '123 avenue de la République', '75011', 'Paris', '2008-09-23', 7),
(15, 'Charoze', 'Catherine', 'ccharoze', 'u817o', '100 rue Petit', '75018', 'Paris', '2005-11-12', 1),
(16, 'Clepkens', 'Christophe', 'cclepkens', 'bw1us', '12 allée des Anges', '93230', 'Romainville', '2003-08-11', 2),
(17, 'Cottin', 'Vincenne', 'vcottin', '2hoh9', '36 rue Des Roches', '93100', 'Monteuil', '2001-11-18', 3),
(18, 'Daburon', 'François', 'fdaburon', '7oqpv', '13 rue de Chanzy', '94000', 'Créteil', '2002-02-11', 4),
(19, 'De', 'Philippe', 'pde', 'gk9kx', '13 rue Barthes', '94000', 'Créteil', '2010-12-14', 5),
(20, 'Debelle', 'Michel', 'mdebelle', 'od5rt', '181 avenue Barbusse', '93210', 'Rosny', '2006-11-23', 6),
(21, 'Debelle', 'Jeanne', 'jdebelle', 'nvwqq', '134 allée des Joncs', '44000', 'Nantes', '2000-05-11', 7),
(22, 'Debroise', 'Michel', 'mdebroise', 'sghkb', '2 Bld Jourdain', '44000', 'Nantes', '2001-04-17', 1),
(23, 'Desmarquest', 'Nathalie', 'ndesmarquest', 'f1fob', '14 Place d Arc', '45000', 'Orléans', '2005-11-12', 2),
(24, 'Desnost', 'Pierre', 'pdesnost', '4k2o5', '16 avenue des Cèdres', '23200', 'Guéret', '2001-02-05', 3),
(25, 'Dudouit', 'Frédéric', 'fdudouit', '44im8', '18 rue de l église', '23120', 'GrandBourg', '2000-08-01', 4),
(26, 'Duncombe', 'Claude', 'cduncombe', 'qf77j', '19 rue de la tour', '23100', 'La souteraine', '2017-10-10', 5),
(27, 'Enault-Pascreau', 'Céline', 'cenault', 'y2qdu', '25 place de la gare', '23200', 'Gueret', '2015-09-01', 6),
(28, 'Eynde', 'Valérie', 'veynde', 'i7sn3', '3 Grand Place', '13015', 'Marseille', '2019-11-01', 7),
(29, 'Finck', 'Jacques', 'jfinck', 'mpb3t', '10 avenue du Prado', '13002', 'Marseille', '2001-11-10', 1),
(30, 'Fernandez', 'Maria', 'mfernandez', 'xs5tq', '4 route de la mer', '13012', 'Allauh', '2018-10-01', 2),
(31, 'Gest', 'Alain', 'agest', 'dywvt', '30 avenue de la mer', '13025', 'Berre', '2020-11-01', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
