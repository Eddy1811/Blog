-- Adminer 4.8.1 MySQL 10.6.16-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `blog`;
CREATE DATABASE `blog` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `blog`;

DROP TABLE IF EXISTS `Autors`;
CREATE TABLE `Autors` (
                          `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                          `FirstName` varchar(45) DEFAULT NULL,
                          `LastName` varchar(45) DEFAULT NULL,
                          `Pseudo` varchar(45) DEFAULT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Categories`;
CREATE TABLE `Categories` (
                              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                              `Name` varchar(70) DEFAULT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Commentaries`;
CREATE TABLE `Commentaries` (
                                `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                                `Content` mediumtext DEFAULT NULL,
                                `Date` date DEFAULT NULL,
                                `Posts_id` int(10) unsigned NOT NULL,
                                `Autors_id` int(10) unsigned NOT NULL,
                                PRIMARY KEY (`id`),
                                KEY `fk_Commentaries_Posts1_idx` (`Posts_id`),
                                KEY `fk_Commentaries_Autors1_idx` (`Autors_id`),
                                CONSTRAINT `Commentaries_ibfk_1` FOREIGN KEY (`Posts_id`) REFERENCES `Posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                                CONSTRAINT `fk_Commentaries_Autors1` FOREIGN KEY (`Autors_id`) REFERENCES `Autors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Posts`;
CREATE TABLE `Posts` (
                         `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
                         `Title` varchar(45) DEFAULT NULL,
                         `Content` varchar(150) DEFAULT NULL,
                         `DateEntry` date DEFAULT NULL,
                         `DateExit` date DEFAULT NULL,
                         `degree` int(11) DEFAULT NULL,
                         `Autors_id` int(10) unsigned NOT NULL,
                         PRIMARY KEY (`id`,`Autors_id`),
                         KEY `fk_Posts_Autors1_idx` (`Autors_id`),
                         CONSTRAINT `fk_Posts_Autors1` FOREIGN KEY (`Autors_id`) REFERENCES `Autors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Posts_Categories`;
CREATE TABLE `Posts_Categories` (
                                    `Posts_idPosts` int(10) unsigned NOT NULL,
                                    `Categories_id` int(10) unsigned NOT NULL,
                                    PRIMARY KEY (`Posts_idPosts`,`Categories_id`),
                                    KEY `fk_Posts_has_Categories_Categories1_idx` (`Categories_id`),
                                    KEY `fk_Posts_has_Categories_Posts_idx` (`Posts_idPosts`),
                                    CONSTRAINT `Posts_Categories_ibfk_1` FOREIGN KEY (`Posts_idPosts`) REFERENCES `Posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
                                    CONSTRAINT `fk_Posts_has_Categories_Categories1` FOREIGN KEY (`Categories_id`) REFERENCES `Categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2024-01-31 15:07:45