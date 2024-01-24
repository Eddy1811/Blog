-- Adminer 4.8.1 MySQL 10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

INSERT INTO `Autors` (`id`, `FirstName`, `LastName`, `Pseudo`) VALUES
(1,	'Xavier',	'FIGARI',	'LeXav'),
(2,	'Jonathan ',	'LUSCAP',	'LeJon'),
(3,	'Charly',	'OLINGER',	'Charly la débrouille'),
(4,	'Augustin',	'PECH',	'Le prof'),
(5,	'Constance',	'GOGORIAN',	'L\'assistante'),
(6,	'Matéo',	'Vernet',	'Matéo'),
(7,	'Valentine',	'Vernet',	'Valentine');

INSERT INTO `Categories` (`id`, `Name`) VALUES
(1,	'Loisirs');

INSERT INTO `Commentaries` (`id`, `Content`, `Date`, `Posts_id`, `Autors_id`) VALUES
(1,	'BRAVO',	'2024-01-22',	1,	6),
(2,	'Sans avis',	'2024-01-22',	2,	2);

INSERT INTO `Posts` (`id`, `Title`, `Content`, `DateEntry`, `DateExit`, `degree`, `Autors_id`) VALUES
(1,	'Sport',	'Aujourd\'hui, le champion de biathlon Xavier FIGARI à remporté les jeux olympique!',	'2024-01-22',	'2024-02-22',	3,	6),
(2,	'Le sport, une discipline importante',	'La compétition de biathlon fait rage en Normandie !',	'2024-01-22',	'2024-02-22',	4,	6),
(3,	'Sport dhiver',	'La saison de ski 2024 à débutée',	'2024-01-23',	'2024-02-23',	4,	6);

INSERT INTO `Posts_Categories` (`Posts_idPosts`, `Categories_id`) VALUES
(1,	1),
(2,	1);

-- 2024-01-24 10:19:26
