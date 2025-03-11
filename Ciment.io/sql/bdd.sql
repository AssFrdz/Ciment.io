-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           8.0.27 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour ciment_io
CREATE DATABASE IF NOT EXISTS `ciment_io` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ciment_io`;

-- Export de la structure de la table ciment_io. budget
CREATE TABLE IF NOT EXISTS `budget` (
  `id_user` int NOT NULL,
  `budget` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.budget : ~0 rows (environ)
/*!40000 ALTER TABLE `budget` DISABLE KEYS */;
/*!40000 ALTER TABLE `budget` ENABLE KEYS */;

-- Export de la structure de la table ciment_io. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(200) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `categorie_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.categorie : ~0 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Export de la structure de la table ciment_io. fournisseur
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `tel` int DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `fournisseur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.fournisseur : ~0 rows (environ)
/*!40000 ALTER TABLE `fournisseur` DISABLE KEYS */;
/*!40000 ALTER TABLE `fournisseur` ENABLE KEYS */;

-- Export de la structure de la table ciment_io. journallog
CREATE TABLE IF NOT EXISTS `journallog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `niveau` varchar(50) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `descr` text,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `journallog_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.journallog : ~0 rows (environ)
/*!40000 ALTER TABLE `journallog` DISABLE KEYS */;
/*!40000 ALTER TABLE `journallog` ENABLE KEYS */;

-- Export de la structure de la table ciment_io. stock
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `cout` decimal(8,2) DEFAULT NULL,
  `qte` int DEFAULT NULL,
  `categorie` int DEFAULT NULL,
  `fournisseur` int DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fournisseur` (`fournisseur`),
  KEY `categorie` (`categorie`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`fournisseur`) REFERENCES `fournisseur` (`id`),
  CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`categorie`) REFERENCES `categorie` (`id`),
  CONSTRAINT `stock_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.stock : ~0 rows (environ)
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;

-- Export de la structure de la table ciment_io. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(250) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  `formule` int DEFAULT NULL,
  `entreprise_nom` varchar(100) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Export de données de la table ciment_io.utilisateur : ~0 rows (environ)
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
