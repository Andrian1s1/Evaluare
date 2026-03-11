-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mart. 11, 2026 la 08:57 AM
-- Versiune server: 10.4.32-MariaDB
-- Versiune PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `events`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Eliminarea datelor din tabel `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `date`, `location`, `created_at`, `updated_at`) VALUES
(2, 'Intrecere Sportiva', 'Masinile sport sunt cele care te fac sa admiri cu dragoste viata.', '2026-04-27 13:00:00', 'Chioselia', '2026-03-10 08:48:00', '2026-03-10 08:48:00'),
(3, 'Hackathon EduTech 2026', 'Concurs de programare pentru studenți și pasionați de tehnologie, unde participanții dezvoltă aplicații educaționale în 48 de ore', '2026-04-09 09:20:00', 'Chisinau', '2026-03-10 08:50:08', '2026-03-10 08:50:08'),
(4, 'Festivalul Internațional „Nufărul Alb”', 'Un festival cultural care celebrează tradițiile folclorice și diversitatea culturală, cu ansambluri populare din mai multe țări, parade, muzică și dans', '2026-05-07 15:30:00', 'Cahul', '2026-03-10 09:01:56', '2026-03-10 09:01:56');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
