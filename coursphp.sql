-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 jan. 2020 à 09:33
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `coursphp`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `categorie` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `auteur` int(11) NOT NULL,
  `date_article` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `content`, `categorie`, `image`, `auteur`, `date_article`) VALUES
(2, ' L\'article de Quentin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 8, '2.jpg', 1, '2019-11-19 06:00:00'),
(7, 'Les Gamers deviennent populaire', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 11, '1.jpg', 1, '2019-11-19 16:45:05'),
(9, 'Super Test National !', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 10, '1.jpg', 1, '2019-11-19 19:50:30'),
(11, 'Nouvel Article en Ob', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 8, '2.jpg', 1, '2019-11-21 10:58:26'),
(12, 'Mon Article E-Sport', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 11, '2.jpg', 1, '2019-11-21 23:28:53'),
(13, 'Un autre article sur l\'E-Sport', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 11, '2.jpg', 1, '2019-11-22 11:50:56'),
(14, 'Roman Baron de League of Legend', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor, neque eu aliquet eleifend, ipsum felis imperdiet nunc, tempus suscipit nisi orci sed ex. Donec vehicula varius orci a aliquet. Nunc sed dolor quis dolor efficitur placerat pretium id ipsum. Curabitur ornare malesuada justo, ac placerat mi aliquam eu. Maecenas volutpat, risus laoreet porta hendrerit, dui felis iaculis nisl, eu dictum mi lectus id turpis. Maecenas scelerisque laoreet orci et laoreet. Nulla in lobortis nulla. Mauris vitae fermentum est. Maecenas eget odio ultrices, venenatis ex et, mattis arcu. Ut sagittis enim ligula. Nullam malesuada nisi id eros euismod bibendum.\r\n\r\nQuisque id nisi risus. Pellentesque leo justo, commodo eu tristique a, vestibulum sed ipsum. Vivamus arcu ex, lobortis eu malesuada eu, pretium feugiat ligula. Nullam fringilla lobortis neque ut rutrum. Proin sed leo at nisi mollis malesuada eu sed lectus. Nunc sit amet quam ante. Sed et massa eget sem convallis tincidunt eu in elit. Integer eu placerat dolor, a feugiat risus. Fusce consectetur aliquet suscipit. Nam maximus, libero ut varius sagittis, velit neque euismod nunc, eget convallis justo dui vel nibh. Morbi ipsum lorem, auctor nec mollis vel, accumsan eu mauris.\r\n\r\nSuspendisse orci magna, pretium non euismod eu, posuere non libero. Etiam ac ornare tortor. Quisque laoreet lorem eget eros facilisis, quis feugiat augue ornare. Aliquam eget auctor magna, vitae tempor velit. Curabitur lobortis enim a elit faucibus, id porta erat pharetra. Praesent tristique interdum lorem eu facilisis. Donec pretium venenatis sapien a posuere. In volutpat semper neque, condimentum interdum est vehicula nec. Integer sollicitudin, neque sed pulvinar tincidunt, lacus justo consequat ex, a pretium velit libero sit amet libero. Nulla pulvinar ipsum in consequat malesuada. In et erat tortor.\r\n\r\nVestibulum sed efficitur leo. Vestibulum tincidunt, leo non sagittis suscipit, felis ligula vulputate libero, et tempus metus diam quis velit. Duis malesuada viverra arcu quis ultricies. Maecenas aliquet ultrices tristique. Proin sit amet metus eu orci dapibus placerat. Sed sodales mi lorem, sed rhoncus urna ultricies eget. Nullam vel felis nec velit tempor ultrices. Suspendisse pharetra nisi tellus, et elementum ipsum posuere sit amet. Donec sit amet enim nec nibh dapibus lacinia et at orci. Phasellus sed purus et sem convallis sodales. Morbi mollis pretium eros, id sagittis eros consectetur vitae. Aliquam dapibus sit amet tortor vel pharetra. Praesent rutrum purus augue, tincidunt tincidunt sapien cursus ut. Nullam mattis sapien vel quam commodo, id hendrerit lorem consectetur. Pellentesque quis elit ut dui pulvinar posuere sit amet quis odio. ', 11, '2.jpg', 1, '2019-11-22 11:51:58');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date_creation`) VALUES
(8, 'Actualités', '2019-11-19 16:57:55'),
(9, 'Discussions entre amis', '2019-11-19 20:00:54'),
(10, 'Sports', '2019-11-19 20:01:03'),
(11, 'E-Sports', '2019-11-19 20:01:10'),
(12, 'Activité Ludiques', '2019-11-19 20:01:20'),
(14, 'Test', '2019-11-22 15:56:57');

-- --------------------------------------------------------

--
-- Structure de la table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `menus`
--

INSERT INTO `menus` (`id`, `name`, `target`, `icone`) VALUES
(5, 'Home', '', 'fas fa-home'),
(22, 'Actualités', 'blog.php', 'fas fa-newspaper'),
(20, 'E-sports', 'blog-esports.php', 'fas fa-gamepad'),
(21, 'Sports', 'blog-sports.php', 'fas fa-futbol');

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `name`, `target`) VALUES
(1, 'Page d\'accueil', ''),
(2, 'Articles (Actualités)', 'blog.php'),
(3, 'Articles (E-sports)', 'blog-esports.php'),
(4, 'Articles (Sports)', 'blog-sports.php');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `registration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `avatar`, `registration_date`) VALUES
(1, 'Rémi', '9fe9bbf0fe593db521e206299a1dd06f', 'remi.corso@hotmail.fr', 'avatar-footer.png', '2019-11-22 11:46:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
