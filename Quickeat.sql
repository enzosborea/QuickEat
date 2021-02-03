-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 26 jan. 2021 à 22:25
-- Version du serveur :  5.7.30
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Quickeat`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `done` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`id`, `number`, `address`, `postal_code`, `city`, `country`) VALUES
(39, 2, 'rue de vichy', 69004, 'lyon', 'France'),
(40, 2, 'rue de vichy', 69004, 'lyon', 'France'),
(41, 2, 'rue de vichy', 69004, 'lyon', 'France'),
(42, 2, 'rue de vichy', 69004, 'lyon', 'France'),
(43, 2, 'rue de vichy', 69004, 'lyon', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `id` int(11) NOT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`id`, `restaurant_id`, `name`, `type`, `price`, `image_filename`) VALUES
(9, 15, 'burger', 'Plat', 12, NULL),
(10, 15, 'salade', 'Entrée', 6, NULL),
(11, 15, 'coca', 'Boisson', 2, NULL),
(12, 15, 'Sunday', 'Dessert', 4, NULL),
(13, 16, 'pizza saumon', 'Plat', 12, NULL),
(14, 16, 'salade', 'Entrée', 6, NULL),
(15, 16, 'oasis', 'Boisson', 2, NULL),
(16, 16, 'Sunday', 'Dessert', 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `localisation_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `restaurant`
--

INSERT INTO `restaurant` (`id`, `localisation_id`, `user_id`, `name`, `categories`, `image_filename`) VALUES
(15, 42, 32, 'Burger King', 'Fast food', 'bk.jpg'),
(16, 43, 32, 'Pizzeria', 'Pizzeria', 'Pizzeria.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `localisation_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `activation_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reset_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sold` int(11) DEFAULT '250'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `localisation_id`, `email`, `roles`, `password`, `name`, `firstname`, `phone_number`, `activation_token`, `reset_token`, `image_filename`, `sold`) VALUES
(31, 39, 'admin@admin.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$II/CDbHEutv4Xq1V95hllQ$9pnnmY7aNru8XNxy8ZG6OAFZ+UcelOAU9UYqCOZsjYk', 'admin', 'admin', 123456789, NULL, NULL, NULL, NULL),
(32, 40, 'resto@resto.com', '[\"ROLE_RESTAURATEUR\"]', '$argon2id$v=19$m=65536,t=4,p=1$K/4FCAXEaEUDwMLv7VEdFg$+O8zzGb46CzsEc02yAZ36oN+vTTubkGzl1Bgd7VKfBY', 'resto', 'resto', 123456789, NULL, NULL, NULL, NULL),
(33, 41, 'user@user.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$NVKfCzs9Qc/VxWvoP2Wqmw$OH9OubQqSHSpp5vpK6HUnkpUUNOc18mcLOxs0TbnDdE', 'user', 'user', 123456789, NULL, NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2038A207B1E7706E` (`restaurant_id`);

--
-- Index pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_EB95123FC68BE09C` (`localisation_id`),
  ADD KEY `IDX_EB95123FA76ED395` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD UNIQUE KEY `UNIQ_8D93D649C68BE09C` (`localisation_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plat`
--
ALTER TABLE `plat`
  ADD CONSTRAINT `FK_2038A207B1E7706E` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`id`);

--
-- Contraintes pour la table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `FK_EB95123FA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_EB95123FC68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `localisation` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649C68BE09C` FOREIGN KEY (`localisation_id`) REFERENCES `localisation` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
