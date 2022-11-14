-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 déc. 2020 à 20:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `books`
--

-- --------------------------------------------------------

--
-- Structure de la table `user_data`
--

DROP TABLE IF EXISTS `user_data`;
CREATE TABLE IF NOT EXISTS `user_data` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(150) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `pwd`, `first_name`, `last_name`, `email`) VALUES
(1, 'test', '$2y$10$ZzWbi7TJZYSlp0UwcgmjhOzaYlzRHyXtI4VLFRasCZLF8wPAU/Fpa', 'test', 'test', 'test@test.com'),
(2, 'admin', '$2y$10$vxqOvFygv1B8HAlO5SHVRO3m1/POVkf7UQvW/cbtK8lfnMdOpn/9i', 'ad', 'min', 'admin@admin.com'),
(3, 'MaryHC', '$2y$10$g7jw6nL9PF.SUpJP7SI7f.BATZDajbWQj2gXd0yynA0muax6btd0i', 'Mary', 'HigginsClark', 'mhc@gmail.com'),
(4, 'AlafairB', '$2y$10$3JDY0oOwvNxZWJKUkJ0OyO/ZNJ/unuaLS/MVaMkAm9R8R9uunJukG', 'Alafair', 'Burke', 'alafairb@gmail.com'),
(5, 'DanielleS', '$2y$10$PhA2t.EmcB8V.pJS8fVkbeY0tdP/40/ZXxJ9UHVJY515Sb8cTz4ja', 'Danielle', 'Steel', 'danielles@gmail.com'),
(6, 'AgathaC', '$2y$10$E89fQuQJkMm5nBdBdZaOwerOyYCEO8BAfQkztPnC2eFgbuhTYeuDS', 'Agatha', 'Christie', 'agathac@gmail.com'),
(7, 'NoraR', '$2y$10$9y59J9tsbJ1jJBSLurfzM.cRTTlI0qCBx1F.NCfXCjhb2TNyFT8rS', 'Nora', 'Roberts', 'norar@gmail.com'),
(8, 'DaryndaJ', '$2y$10$c/5c5K77hoIiMW8fyCKkFu7tCuImlFg2x.ZQv99aSI2TGa6uWWd26', 'Darynda', 'Jones', 'daryndaj@gmail.com'),
(9, 'ChloeN', '$2y$10$dI.kUGGCDnvfg06yuaX68ubsQ2Bavhi3zxg534APmgTJLgv/o7PqC', 'Chloe', 'Neill', 'chloen@gmail.com'),
(10, 'DianaR', '$2y$10$xogrCaQ/Gchv3p1kuliYoe8HxPCgYo0MSjwhZn2BgzA7EHFAjt0la', 'Diana', 'Rowland', 'dianar@gmail.com'),
(11, 'AliceS', '$2y$10$u7gb0FQXLw9AESmrFImdCOFgYGEMXTv7wkd6PppiQNn1OffKFaKoC', 'Alice', 'Scarling', 'alices@gmail.com'),
(12, 'AnnaC', '$2y$10$i7aUxQdDHFGRQrdltqAy4O0ZqfdX0yChybUfW2oFK.7tsBhx6CRya', 'Anna', 'Carey', 'annac@gmail.com'),
(13, 'AnneC', '$2y$10$eF.DENQmMlhGFYS9sW4jAuMA5GbPy5pjgZnz/FmZlS2Xgsg1Yczdq', 'Anne', 'Cassidy', 'annec@gmail.com'),
(14, 'KristenA', '$2y$10$hDLmEA8IhlLkxauaLbljl.6JOyMPGHlor5.KYyyLTblDchhKM2qtC', 'Kristen', 'Ashley', 'kristena@gmail.com'),
(15, 'MelissaDLC', '$2y$10$O76rl6xqr9Em94qpRcX12urG/y2w66i9hUJOb4sb6jDA.niJR5Gtq', 'Melissa', 'DeLaCruz', 'melissadlc@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
