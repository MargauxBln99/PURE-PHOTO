SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déclencheurs `categories`
--

DELIMITER $$
CREATE TRIGGER `statsCategories` AFTER INSERT ON `categories` FOR EACH ROW BEGIN
INSERT INTO stats (id, nombre_utilisateurs, nombre_categories, nombre_produits) VALUES (1,0,1,0)
ON DUPLICATE KEY
UPDATE nombre_categories = nombre_categories + 1;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déclencheurs `produits`
--

DELIMITER $$
CREATE TRIGGER `statsProduits` AFTER INSERT ON `produits` FOR EACH ROW BEGIN
INSERT INTO stats (id, nombre_utilisateurs, nombre_categories, nombre_produits) VALUES (1,0,0,1)
ON DUPLICATE KEY
UPDATE nombre_produits = nombre_produits + 1;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `nombre_utilisateurs` int(11) NOT NULL,
  `nombre_categories` int(11) NOT NULL,
  `nombre_produits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déclencheurs `utilisateurs`
--

DELIMITER $$
CREATE TRIGGER `statsUtilisateurs` AFTER INSERT ON `utilisateurs` FOR EACH ROW BEGIN
INSERT INTO stats (id, nombre_utilisateurs, nombre_categories, nombre_produits) VALUES (1,1,0,0)
ON DUPLICATE KEY
UPDATE nombre_utilisateurs = nombre_utilisateurs + 1;
END
$$
DELIMITER ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--

ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `stats`
--

ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--

ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--

ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produits`
--

ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `stats`
--

ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--

ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
