-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 17 mars 2023 à 14:43
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_fil_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

CREATE TABLE `discussion` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `createur_id` int NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `id` int NOT NULL,
  `id_users` int NOT NULL,
  `favorite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE `game` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `annee_de_sortie` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `groupedata`
--

CREATE TABLE `groupedata` (
  `id` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `createur_id` int NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `have`
--

CREATE TABLE `have` (
  `id` int NOT NULL,
  `id_game` int NOT NULL,
  `favorite` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `included`
--

CREATE TABLE `included` (
  `id` int NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id_message` int NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `id` int NOT NULL,
  `id_discussion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `messagesgroupe`
--

CREATE TABLE `messagesgroupe` (
  `id_message` int NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL,
  `id_users` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `parle`
--

CREATE TABLE `parle` (
  `id` int NOT NULL,
  `id_discussion` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int NOT NULL,
  `id_game` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `type_jeu`
--

CREATE TABLE `type_jeu` (
  `id` int NOT NULL,
  `tag` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `prénom` varchar(255) NOT NULL,
  `pseudo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prénom`, `pseudo`, `mail`, `password`, `date`, `bio`) VALUES
(2, '', '', 'testpseudo', 'test.2@test.fr', 'testpassword', '2023-03-01', 'fzeFZEF'),
(3, '', '', NULL, 'test2@test.fr', '123', NULL, NULL),
(102, '', '', NULL, 'ceciestuntest@test.fr', '12345678901', NULL, NULL),
(110, '', '', NULL, 'test@test.fr', '456', NULL, NULL),
(111, '', '', NULL, 'test16@test.fr', '15', NULL, NULL),
(116, '', '', NULL, 'test56@test.fr', '56', NULL, NULL),
(117, '', '', NULL, 'test72@test.fr', '72', NULL, NULL),
(118, '', '', NULL, 'test1975@test', '1', NULL, NULL),
(119, '', '', NULL, 'testt@test.com', '12345', NULL, NULL),
(121, '', '', 'vincewolde', 'test129@test.fr', '123', '1910-10-10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `writegroupe`
--

CREATE TABLE `writegroupe` (
  `id_message` int NOT NULL,
  `id` int NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`,`id_users`),
  ADD KEY `friends_users0_FK` (`id_users`);

--
-- Index pour la table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupedata`
--
ALTER TABLE `groupedata`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`id`,`id_game`),
  ADD KEY `have_game0_FK` (`id_game`);

--
-- Index pour la table `included`
--
ALTER TABLE `included`
  ADD PRIMARY KEY (`id`,`id_users`),
  ADD KEY `included_users0_FK` (`id_users`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `messages_users_FK` (`id`),
  ADD KEY `messages_discussion0_FK` (`id_discussion`);

--
-- Index pour la table `messagesgroupe`
--
ALTER TABLE `messagesgroupe`
  ADD PRIMARY KEY (`id_message`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_users_FK` (`id_users`);

--
-- Index pour la table `parle`
--
ALTER TABLE `parle`
  ADD PRIMARY KEY (`id`,`id_discussion`),
  ADD KEY `parle_discussion0_FK` (`id_discussion`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`,`id_game`),
  ADD KEY `tag_game0_FK` (`id_game`);

--
-- Index pour la table `type_jeu`
--
ALTER TABLE `type_jeu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `writegroupe`
--
ALTER TABLE `writegroupe`
  ADD PRIMARY KEY (`id_message`,`id`),
  ADD KEY `writegroupe_groupe0_FK` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_jeu`
--
ALTER TABLE `type_jeu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `friends_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_game0_FK` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `have_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `included`
--
ALTER TABLE `included`
  ADD CONSTRAINT `included_groupe_FK` FOREIGN KEY (`id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `included_users0_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_discussion0_FK` FOREIGN KEY (`id_discussion`) REFERENCES `discussion` (`id`),
  ADD CONSTRAINT `messages_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_users_FK` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `parle`
--
ALTER TABLE `parle`
  ADD CONSTRAINT `parle_discussion0_FK` FOREIGN KEY (`id_discussion`) REFERENCES `discussion` (`id`),
  ADD CONSTRAINT `parle_users_FK` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `tag`
--
ALTER TABLE `tag`
  ADD CONSTRAINT `tag_game0_FK` FOREIGN KEY (`id_game`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `tag_type_jeu_FK` FOREIGN KEY (`id`) REFERENCES `type_jeu` (`id`);

--
-- Contraintes pour la table `writegroupe`
--
ALTER TABLE `writegroupe`
  ADD CONSTRAINT `writegroupe_groupe0_FK` FOREIGN KEY (`id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `writegroupe_messagesgroupe_FK` FOREIGN KEY (`id_message`) REFERENCES `messagesgroupe` (`id_message`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
