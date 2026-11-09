-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 04 nov. 2026 à 23:54
-- Version du serveur : 10.5.29-MariaDB-0+deb11u1-log
-- Version de PHP : 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_daih_07_09_2021`
--

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `nameAlbum` varchar(255) NOT NULL,
  `contentAlbum` text NOT NULL,
  `slugAlbum` varchar(255) NOT NULL,
  `onlineAlbum` int(11) NOT NULL,
  `createdAlbum` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `nameAlbum`, `contentAlbum`, `slugAlbum`, `onlineAlbum`, `createdAlbum`) VALUES
(1, 'Festivité', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Une manifestation pour pr&eacute;senter les nouveaux membres</p>\r\n</body>\r\n</html>', 'festivite', 0, '2024-01-30 16:37:21'),
(2, 'TERRAINS', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 'terrains', 1, '2023-11-30 18:40:47'),
(3, 'BATIMENTS ET HABITAS', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>B&acirc;timents et Habitat pour tous</p>\r\n</body>\r\n</html>', 'batiments-et-habitas', 1, '2024-01-30 16:38:53'),
(4, '', '', '', -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `fontIcon` varchar(255) DEFAULT NULL,
  `nameArticles` varchar(255) NOT NULL,
  `slugArticles` varchar(255) NOT NULL,
  `contentArticles` longtext NOT NULL,
  `menu_ID` int(11) NOT NULL,
  `ordreArticles` int(11) NOT NULL,
  `onlineArticles` int(11) NOT NULL,
  `createdArticles` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `fontIcon`, `nameArticles`, `slugArticles`, `contentArticles`, `menu_ID`, `ordreArticles`, `onlineArticles`, `createdArticles`) VALUES
(1, NULL, 'Présentation de DEV AFRIK INVESTMENT HOLDING', 'presentation-de-dev-afrik-investment-holding', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING est une Soci&eacute;t&eacute; &agrave; Responsabilit&eacute; Limit&eacute;e dont le si&egrave;ge est &agrave; Abidjan &agrave; Cocody II Plateaux (C&ocirc;te d&rsquo;Ivoire), cr&eacute;&eacute;e en juillet 2013, dans l&rsquo;objet de servir une client&egrave;le nombreuse dans la promotion immobili&egrave;re, la r&eacute;alisation de travaux de construction et la r&eacute;habilitation ou construction de r&eacute;seaux routiers. La direction des travaux est assur&eacute;e par des ing&eacute;nieurs et des techniciens sup&eacute;rieurs, (nationaux et expatri&eacute;s) et les activit&eacute;s de construction sont men&eacute;es &agrave; bien par des &eacute;quipes d&rsquo;ouvriers qualifi&eacute;s regroup&eacute;s par corps de m&eacute;tiers pour agiliser le travail sur les chantiers (ma&ccedil;ons, terrassiers, ferrailleurs, coffreurs, plombiers, &eacute;lectriciens, menuisiers). Ils disposent de tous les &eacute;quipements n&eacute;cessaires pour la construction, de v&eacute;hicules et d&rsquo;outils de planification des travaux.</p>\r\n</body>\r\n</html>', 2, 1, 1, '2021-09-01 10:26:35'),
(2, NULL, 'Historique', 'historique', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country.</p>\r\n</body>\r\n</html>', 2, 2, 1, '2021-08-30 20:00:35'),
(3, NULL, 'Nos atouts', 'nos_atouts', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<ul style=\"list-style-type: disc;\">\r\n<li><span style=\"font-size: 12pt;\">Une &eacute;coute attentive de vos besoins.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Un service adapt&eacute; et &eacute;labor&eacute; avec vous</span></li>\r\n<li><span style=\"font-size: 12pt;\">Une garantie de qualit&eacute; de service avec une &eacute;quipe tr&egrave;s qualifi&eacute;, pour satisfaire vos besoins;</span></li>\r\n<li><span style=\"font-size: 12pt;\">Longue dur&eacute;e de vie des plantations</span></li>\r\n<li><span style=\"font-size: 12pt;\">Meilleure production des plantations.</span></li>\r\n<li><span style=\"font-size: 12pt;\">Augmentation du gain mensuel du planteur;</span></li>\r\n<li><span style=\"font-size: 12pt;\">Stabilit&eacute; et fid&eacute;lisation des saigneurs aux planteurs;</span></li>\r\n</ul>\r\n</body>\r\n</html>', 2, 3, 1, '2021-08-21 13:43:03'),
(4, 'flaticon-worker', 'LOTISSEMENT', 'lotissement', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING&nbsp; HOLDING dispose d\'une expertise av&eacute;r&eacute;e dans le domaine du lotissement</p>\r\n</body>\r\n</html>', 3, 1, 1, '2023-12-21 15:24:10'),
(5, 'flaticon-engineering', 'IMMOBILIER', 'immobilier', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING vous offre une gamme vari&eacute;e de logements pour votre confort naturel</p>\r\n</body>\r\n</html>', 3, 2, 1, '2023-12-21 15:24:23'),
(8, '0', 'BÂTIMENT TRAVAUX PUBLICS', 'batiment-travaux-publics', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING</p>\r\n</body>\r\n</html>', 3, 5, 1, '2023-12-21 15:25:07'),
(6, 'flaticon-worker', 'AMENAGEMENT FONCIER', 'amenagement-foncier', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING</p>\r\n</body>\r\n</html>', 3, 3, 1, '2024-01-30 16:47:09'),
(7, 'flaticon-sketch', 'GESTION IMMOBILIERE', 'gestion-immobiliere', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>DEV AFRIK INVESTMENT HOLDING</p>\r\n</body>\r\n</html>', 3, 4, 1, '2023-12-21 15:24:33'),
(9, NULL, 'TRANSPORT', 'transport', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n</body>\r\n</html>', 3, 6, 1, '2021-09-06 11:59:35'),
(10, NULL, 'IMPORT-EXPORT', 'import-export', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n</body>\r\n</html>', 3, 7, 1, '2021-09-06 11:59:58'),
(11, NULL, 'PRESTATIONS DIVERSES', 'prestations-diverses', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n</body>\r\n</html>', 3, 8, 1, '2021-09-06 12:00:54'),
(12, NULL, 'PRESTATIONS DE SERVICE', 'prestations-de-service', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n</body>\r\n</html>', 3, 9, 1, '2021-09-06 12:01:38'),
(13, NULL, 'HYDROCABURE', 'hydrocabure', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>\r\n</body>\r\n</html>', 3, 10, 1, '2021-09-06 12:02:42'),
(14, '0', 'Galerie', 'galerie', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n\r\n</body>\r\n</html>', 4, 4, 1, '2023-11-30 18:56:26'),
(15, NULL, '', '', '', 0, 0, -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nameCategory` varchar(255) NOT NULL,
  `slugCategory` varchar(255) NOT NULL,
  `contentCategory` longtext NOT NULL,
  `onlineCategory` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `onlineComment` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `fullname`, `email`, `content`, `onlineComment`, `post_id`, `created`) VALUES
(1, 'ADJE JEAN FRANCOIS', 'adje20032002@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:07:10'),
(2, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:11:29'),
(3, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:17:54'),
(4, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:19:11'),
(5, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:32:28'),
(6, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 0, '2021-08-29 12:33:45'),
(7, 'EBI EMMERSON', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 3, '2021-08-29 13:03:15'),
(8, 'ADJE JEAN FRANCOIS', 'a2gcsoubre@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 3, '2021-08-29 14:50:18'),
(9, 'ADJE JEAN FRANCOIS', 'adje20032002@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 3, '2021-08-29 14:51:11'),
(10, 'ADJE JEAN FRANCOIS', 'adje20032002@gmail.com', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 0, 2, '2021-08-29 14:51:58');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `sigle` varchar(255) NOT NULL,
  `denomination` varchar(255) NOT NULL,
  `file_thumbs` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `ico_file` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `fixe` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse_geo` text NOT NULL,
  `googlemap` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `sigle`, `denomination`, `file_thumbs`, `file`, `ico_file`, `adresse`, `fixe`, `mobile`, `email`, `adresse_geo`, `googlemap`, `facebook`, `twitter`, `googleplus`, `linkedIn`, `instagram`, `online`, `created`) VALUES
(1, 'D.A.I.H', 'Dev Afrik Investment Holding', 'thumb_logo_DAIH.png', 'logo_DAIH.png', 'ico_logo_DAIH.ico', '31 BP 796 ABIDJAN 31', '(+225) 27 21 51 39 03', '(+225)', 'info@devafrik-invest.com', 'Marcory, Zone 4, Rue du canal', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2651.575600335934!2d-3.980670435125074!3d5.282280077748441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sci!4v1631005180768!5m2!1sfr!2sci', '', '', '', '', '', 1, '2021-09-07 11:00:49'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `equipes`
--

CREATE TABLE `equipes` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_thumbs` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `equipes`
--

INSERT INTO `equipes` (`id`, `firstname`, `lastname`, `phone`, `content`, `file`, `file_thumbs`, `slug`, `online`, `created`) VALUES
(1, 'GBOGOU', 'CYRIAC', '00', 'GERANT', '', '', 'gerant', 0, '2023-12-21 15:15:26'),
(2, '', '', '', '', '', '', '', -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `fonticons`
--

CREATE TABLE `fonticons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `onlineFont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `fonticons`
--

INSERT INTO `fonticons` (`id`, `name`, `code`, `onlineFont`) VALUES
(1, 'Worker', 'flaticon-worker', 1),
(2, 'Sketch', 'flaticon-sketch', 1),
(3, 'Engineering', 'flaticon-engineering', 1),
(4, 'Crane', 'flaticon-crane', 1);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_thumbs` varchar(255) NOT NULL,
  `articles_ID` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `name`, `content`, `file`, `file_thumbs`, `articles_ID`, `online`, `created`) VALUES
(1, 'Présentation de l\'A2GC', 'Présentation', 'construction-batiment-600x300.jpg', 'thumb_construction-batiment-600x300.jpg', 1, 1, '2021-09-07 13:25:49'),
(2, 'Les Atouts', 'Image d\'illustration', 'WhatsApp Image 2023-11-30 à 15.33.23_a3b3c06f.jpg', 'thumb_WhatsApp Image 2023-11-30 à 15.33.23_a3b3c06f.jpg', 3, 0, '2024-01-30 16:42:51'),
(3, 'Les objectifs', 'Image d\'illustration', 'gérer-les-objectifs-dune-équipe-640x432.jpg', 'thumb_gérer-les-objectifs-dune-équipe-640x432.jpg', 2, 1, '2021-08-23 10:25:45'),
(4, 'CONSTRUCTION ET RENOVATION DE BATIMENT', 'IMAGE D\'ILLUSTRATION', 'construction-batiment-600x300.jpg', 'thumb_construction-batiment-600x300.jpg', 5, 1, '2021-09-07 11:43:54'),
(5, 'LOTISSEMENT', 'IMAGE D\'ILLUSTRATION', 'plan-600x300.jpg', 'thumb_plan-600x300.jpg', 4, 1, '2021-09-07 11:43:08'),
(6, 'CONSTRUCTION DE SITES GSM', 'IMAGE D\'ILLUSTRATION', 'gsm1-600x300.jpg', 'thumb_gsm1-600x300.jpg', 6, 1, '2021-09-01 10:39:33'),
(7, 'TRAVAUX PUBLICS (TP)', 'IMAGE D\'ILLUSTRATION', 'travaux-public-600x300.jpg', 'thumb_travaux-public-600x300.jpg', 7, 1, '2021-09-01 10:40:20'),
(10, 'BATIMENTS', 'BATIMENTS', 'WhatsApp Image 2023-11-30 à 16.08.05_4ceb369f.jpg', 'thumb_WhatsApp Image 2023-11-30 à 16.08.05_4ceb369f.jpg', 8, 1, '2023-11-30 19:01:16'),
(11, '', '', '', '', 0, -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `ordre` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `firstnameMembers` varchar(255) NOT NULL,
  `lastnameMembers` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `emailMembers` varchar(255) NOT NULL,
  `account` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `active` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `createdActivator` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `code`, `firstnameMembers`, `lastnameMembers`, `contact`, `emailMembers`, `account`, `password`, `token`, `active`, `role`, `created`, `createdActivator`) VALUES
(1, '', '', '', '', '', '', '', '', -1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `nameMenu` varchar(255) NOT NULL,
  `slugMenu` varchar(255) NOT NULL,
  `onlineMenu` int(11) NOT NULL,
  `ordreMenu` int(11) NOT NULL,
  `createdMenu` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `nameMenu`, `slugMenu`, `onlineMenu`, `ordreMenu`, `createdMenu`) VALUES
(1, 'Accueils', 'accueils', 1, 1, '2021-08-23 18:50:30'),
(2, 'Qui sommes-nous ?', 'qui-sommes-nous', 1, 2, '2021-08-15 12:03:21'),
(3, 'Nos services', 'nos-services', 1, 3, '2021-08-15 12:05:04'),
(4, 'Galerie', 'galeries', 1, 4, '2021-08-30 19:44:43'),
(5, 'Témoignages', 'temoignages', 0, 5, '2021-08-26 12:17:49'),
(6, 'Recrutements', 'recrutements', 1, 7, '2021-09-06 12:10:05'),
(7, 'Contactez-nous', 'contactez-nous', 1, 8, '2021-09-06 12:09:56'),
(8, 'Blogs', 'blogs', 0, 4, '2021-08-30 19:44:35'),
(9, 'Promotion', 'promotion', 0, 5, '2023-12-21 14:49:16'),
(10, 'Action social', 'action-social', 0, 6, '2023-12-21 14:50:06');

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

CREATE TABLE `partenaires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_thumbs` varchar(255) NOT NULL,
  `siteweb` varchar(255) NOT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `name`, `file`, `file_thumbs`, `siteweb`, `online`, `created`) VALUES
(1, 'PROCANSO', 'logo_pro.png', 'thumb_logo_pro.png', 'www.procanso.com/', 0, '2023-12-21 15:15:45'),
(2, '', '', '', '', -1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `album_ID` int(11) NOT NULL,
  `namePhotos` varchar(255) NOT NULL,
  `slugPhotos` varchar(255) NOT NULL,
  `filePhotos` varchar(255) NOT NULL,
  `file_thumbsPhotos` varchar(255) NOT NULL,
  `contentPhotos` longtext NOT NULL,
  `datePhotos` date NOT NULL,
  `createdPhotos` datetime NOT NULL,
  `onlinePhotos` int(11) NOT NULL,
  `member_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `album_ID`, `namePhotos`, `slugPhotos`, `filePhotos`, `file_thumbsPhotos`, `contentPhotos`, `datePhotos`, `createdPhotos`, `onlinePhotos`, `member_ID`) VALUES
(1, 1, 'Présentation des membres', 'presentation-des-membres', 'unnamed.jpg', 'thumb_unnamed.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Pr&eacute;sentation des diff&eacute;rents membres de l\'A2GC</p>\r\n</body>\r\n</html>', '2021-08-10', '2021-08-25 15:34:51', 1, 0),
(2, 1, 'Manisfestion de fin de recolte', 'manisfestion_de_fin_de_recolte', 'Taxi-Nimes.jpg', 'thumb_Taxi-Nimes.jpg', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>C&eacute;r&eacute;monie pour r&eacute;compenser les membres ayant obtenue les meilleurs r&eacute;colte</p>\r\n</body>\r\n</html>', '2021-08-05', '2021-08-25 14:45:30', 1, 0),
(3, 0, '', '', '', '', '', '0000-00-00', '0000-00-00 00:00:00', -1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `postcategories`
--

CREATE TABLE `postcategories` (
  `id` int(11) NOT NULL,
  `titlecategory` varchar(255) NOT NULL,
  `slugCategory` varchar(255) DEFAULT NULL,
  `createdcategory` datetime NOT NULL,
  `onlinecategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `postcategories`
--

INSERT INTO `postcategories` (`id`, `titlecategory`, `slugCategory`, `createdcategory`, `onlinecategory`) VALUES
(1, 'JavaScript', 'javascript', '2021-08-27 15:07:16', 1),
(2, 'Css', 'css', '2021-08-27 15:07:07', 1),
(3, 'HTML', 'html', '2021-08-27 15:06:58', 1),
(4, '', NULL, '0000-00-00 00:00:00', -1);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `topic` longtext DEFAULT NULL,
  `online` int(11) DEFAULT NULL,
  `slugtopic` varchar(255) DEFAULT NULL,
  `createdpost` datetime DEFAULT NULL,
  `datepublication` date DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `topic`, `online`, `slugtopic`, `createdpost`, `datepublication`, `category_id`, `user_id`) VALUES
(1, NULL, NULL, -1, NULL, NULL, NULL, NULL, NULL),
(2, 'How to run successful business meeting', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Someone famous in Source Title Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>\n</body>\n</html>', 1, 'how-to-run-successful-business-meeting', '2021-08-27 11:57:20', '2021-08-26', 1, 1),
(3, 'How to run successful', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<blockquote>\r\n<p><span style=\"font-size: 12pt;\"><em>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni </em></span></p>\r\n</blockquote>\r\n<p><code>dolores eos qui ratione voluptatem sequi nesciunt. </code></p>\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Someone famous in Source Title Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>\r\n</body>\r\n</html>', 1, 'essaie2', '2021-08-27 16:11:34', '2021-08-26', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recrutements`
--

CREATE TABLE `recrutements` (
  `id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `slugRecru` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `typecontrat` varchar(255) NOT NULL,
  `datepublication` date NOT NULL,
  `datepriseposte` date NOT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `recrutements`
--

INSERT INTO `recrutements` (`id`, `reference`, `titre`, `slugRecru`, `detail`, `typecontrat`, `datepublication`, `datepriseposte`, `online`, `created`) VALUES
(1, 'RF000001', 'TECHNICIEN MAINTENANCE EFC', 'technicien-maintenance-efc', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Directement rattach&eacute; (e) au Responsable Maintenance, vous avez pour mission de : - Elaborer le planning de maintenance pr&eacute;ventive des &eacute;quipements de froid sur les EFC - Effectuer les contr&ocirc;les et les entretiens p&eacute;riodiques des &eacute;quipements EFC (&eacute;lectricit&eacute; et Froid) suivant le planning de la maintenance pr&eacute;ventive - R&eacute;aliser un diagnostic sur l&rsquo;&eacute;tat de marche des &eacute;quipements et relever les dysfonctionnements - R&eacute;aliser un plan d&rsquo;action apr&egrave;s diagnostic et suivre son ex&eacute;cution - R&eacute;aliser un plan d&rsquo;action apr&egrave;s diagnostic et suivre son ex&eacute;cution suivant les consignes et/ou instructions de travail - Effectuer le d&eacute;pannage de tous les &eacute;quipements des EFC, et participer occasionnellement &agrave; l&rsquo;ex&eacute;cution des travaux de maintenance de l&rsquo;abattoir - Effectuer l&rsquo;installation, le r&eacute;glage et la mise &agrave; niveau du mat&eacute;riel EFC - Suivre les approvisionnements en consommables et pi&egrave;ces de rechanges pour la maintenance et rationaliser leur usage et emploi conform&eacute;ment aux consignes - Suivre et contr&ocirc;ler les travaux des prestataires externes - R&eacute;diger un rapport d&rsquo;activit&eacute;s hebdomadaires - Renseigner les documents de gestion de l&rsquo;activit&eacute; de la maintenance sur les EFC. Profil recherch&eacute; : Titulaire d&rsquo;un BT ou BTS Option Froid industriel, vous justifiez d&rsquo;une exp&eacute;rience professionnelle d&rsquo;au moins deux (02 ans) dans le domaine. Vous &ecirc;tes reconnu pour votre courage et votre sens de l&rsquo;organisation. Disponible, rigoureux, curieux, r&eacute;actif et autonome, vous placez la satisfaction clients et l&rsquo;atteinte des objectifs fix&eacute;s au c&oelig;ur de vos priorit&eacute;s. - Nombre de postes : 01</p>\r\n</body>\r\n</html>', 'CDD', '2021-08-01', '0000-00-00', 0, '2023-12-21 15:00:09'),
(2, 'RF000002', 'CHAUFFEUR VENDEUR LIVREUR EFC RESEAU MOBILE', 'chauffeur-vendeur-livreur-efc-reseau-mobile', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>Directement rattach&eacute; (e) au Responsable R&eacute;seau EFC, votre principale mission est de maximiser les ventes des produits au niveau des EFC (effil&eacute;s, &oelig;ufs et charcuterie). A ce titre, vos activit&eacute;s principales sont: - La prospection/ la recherche de nouveaux clients - La vente des produits Coqivoire - Le suivi et l&rsquo;entretien des clients - L&rsquo;entretien du mat&eacute;riel de travail - La veille concurrentielle Profil recherch&eacute; : Fort d&rsquo;une exp&eacute;rience r&eacute;ussie dans la vente d&rsquo;au moins 2 ans, de niveau BAC, vous avez un v&eacute;ritable talent pour le commerce. Vous &ecirc;tes reconnu pour votre dynamisme et votre excellent sens relationnel. Disponible, organis&eacute;, rigoureux, capable de travailler sous pression, vous placez la satisfaction clients et l&rsquo;atteinte des objectifs fix&eacute;s au c&oelig;ur de vos priorit&eacute;s. Vous &ecirc;tes titulaire d&rsquo;un permis toutes cat&eacute;gories avec une exp&eacute;rience d&rsquo;au moins 1 an dans la conduite. - Nombre de poste disponible : 03</p>\r\n</body>\r\n</html>', 'CDI', '2021-08-04', '2021-09-15', 1, '2021-08-23 17:22:56');

-- --------------------------------------------------------

--
-- Structure de la table `slideshows`
--

CREATE TABLE `slideshows` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `file_thumbs` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `slideshows`
--

INSERT INTO `slideshows` (`id`, `name`, `content`, `file`, `file_thumbs`, `menu_id`, `online`, `created`) VALUES
(1, 'Toujours plus loin...', 'DEV AFRIK est un groupement des acteurs essentiels du BTP en Côte d\'Ivoire.', 'IMAGE05.jpg', 'thumb_IMAGE05.jpg', 1, 1, '2021-09-06 11:53:33'),
(2, 'DEV AFRIK CONSTRUCTION, BIENVENUE ', 'Réalisez votre rêve, devenez PROPRIETAIRE de bien immobilier !', 'IMAGE16.jpg', 'thumb_IMAGE16.jpg', 1, 1, '2021-09-07 13:24:29'),
(3, 'CONSTRUCTION DE BATIMENTS', 'Promotion Immobilière ', 'WhatsApp Image 2023-11-30 à 16.08.05_4ceb369f.jpg', 'thumb_WhatsApp Image 2023-11-30 à 16.08.05_4ceb369f.jpg', 4, 1, '2023-12-21 15:09:37'),
(4, 'BATIMENTS', 'Des maisons à votre convenance ', 'MAISONS.jpg', 'thumb_MAISONS.jpg', 1, 1, '2023-12-21 15:30:32'),
(5, 'RESIDENCE', 'Des maisons avec plus d\'espace pour une vie familiale agréable', 'COURS.jpg', 'thumb_COURS.jpg', 1, 1, '2023-12-21 15:38:22');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `repeatpassword` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `active` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `login`, `password`, `repeatpassword`, `role`, `active`, `created`) VALUES
(1, 'EBI', 'EMMERSON', 'ebi', 'b75492472f903a1b0d989e21ea4f6f23b25e79f9', 'b75492472f903a1b0d989e21ea4f6f23b25e79f9', 'admin', 1, '2021-08-14 19:44:16'),
(2, 'ADJE', 'JEAN FRANCOIS', 'adje', '7c4a8d09ca3762af61e59520943dc26494f8941b', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin', 1, '2021-08-18 16:50:42'),
(3, '', '', '', '', '', '', -1, '0000-00-00 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipes`
--
ALTER TABLE `equipes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonticons`
--
ALTER TABLE `fonticons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partenaires`
--
ALTER TABLE `partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `postcategories`
--
ALTER TABLE `postcategories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recrutements`
--
ALTER TABLE `recrutements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slideshows`
--
ALTER TABLE `slideshows`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `equipes`
--
ALTER TABLE `equipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fonticons`
--
ALTER TABLE `fonticons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `partenaires`
--
ALTER TABLE `partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `postcategories`
--
ALTER TABLE `postcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `recrutements`
--
ALTER TABLE `recrutements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `slideshows`
--
ALTER TABLE `slideshows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
