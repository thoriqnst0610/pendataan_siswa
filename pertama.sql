-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jun 2024 pada 05.19
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'thoriq', '$2y$10$IPHKOnnUHrWUO/PAZin7EOdbEYSbLJieUONn5U/XPKzZ.0kIcuQMy', 'Thoriq', 'thoriqunsam@gmail.com'),
(4, 'siapa', '$2y$10$q2aHfz9vCN4HCPqDjd6khebYM4O3oviSewNN.WcgENUsWn61CmGgS', 'siapa', 'nstbotak@gmail.com'),
(5, 'admin', '$2y$10$ELB9zcFAz29b/Xs8xSz50ejjUnf350OaSXn.UI9aFkC9X1vYCPgvq', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`) VALUES
(10, 'Dybala', 'Roma'),
(11, 'Messi', 'Miami'),
(12, 'Alvarez', 'City'),
(13, 'Ronaldo', 'Nassar'),
(14, 'Mbappe', 'Psg'),
(15, 'Neymar', 'alhilal'),
(32, 'Neymar', 'Barca'),
(33, 'Halland', 'City'),
(34, 'Xabi', 'Pool'),
(35, 'Ronaldo 7', 'Madrid'),
(36, 'Dimaria', 'Benf'),
(39, 'mess', 'Messi'),
(46, 'Lautaro', 'Inter'),
(47, 'vini', 'Madrid'),
(48, 'Iniesta', 'Barca'),
(49, 'Messi', 'Barca'),
(50, 'Ronaldo', 'Juventus'),
(51, 'Neymar', 'PSG'),
(52, 'Mbappe', 'PSG'),
(53, 'Lewandowski', 'Bayern Munich'),
(54, 'Modric', 'Real Madrid'),
(55, 'Salah', 'Liverpool'),
(56, 'Kane', 'Tottenham'),
(57, 'De Bruyne', 'Manchester City'),
(58, 'Van Dijk', 'Liverpool'),
(59, 'Sergio Ramos', 'Paris'),
(60, 'Pogba', 'Manchester United'),
(61, 'Suarez', 'Atletico Madrid'),
(62, 'Hazard', 'Real Madrid'),
(63, 'Lukaku', 'Inter Milan'),
(64, 'Kante', 'Chelsea'),
(65, 'Firmino', 'Liverpool'),
(66, 'Sterling', 'Manchester City'),
(67, 'Alisson', 'Liverpool'),
(68, 'Varane', 'Real Madrid'),
(69, 'Casemiro', 'Real Madrid'),
(70, 'Neuer', 'Bayern Munich'),
(71, 'Sancho', 'Manchester United'),
(72, 'Thiago', 'Liverpool'),
(73, 'Courtois', 'Real Madrid'),
(74, 'Griezmann', 'Barcelona'),
(75, 'Hummels', 'Dortmund'),
(76, 'Alaba', 'Real Madrid'),
(77, 'Werner', 'Chelsea'),
(78, 'Muller', 'Bayern Munich'),
(79, 'Kroos', 'Real Madrid'),
(80, 'De Gea', 'Manchester United'),
(81, 'Robertson', 'Liverpool'),
(82, 'Gnabry', 'Bayern Munich'),
(83, 'Foden', 'Manchester City'),
(84, 'David Silva', 'Real Sociedad'),
(85, 'Gundogan', 'Manchester City'),
(86, 'Reus', 'Dortmund'),
(87, 'Silva', 'Manchester City'),
(88, 'Aubameyang', 'Arsenal'),
(89, 'Rodri', 'Manchester City'),
(90, 'Kimmich', 'Bayern Munich'),
(91, 'Sane', 'Bayern Munich'),
(92, 'Rashford', 'Manchester United'),
(93, 'Wijnaldum', 'Liverpool'),
(94, 'Alisson', 'Liverpool'),
(95, 'Hakimi', 'Inter Milan'),
(96, 'Di Maria', 'PSG'),
(97, 'Navas', 'PSG'),
(98, 'Bernardo Silva', 'Manchester City'),
(99, 'Benzema', 'Real Madrid'),
(100, 'Dias', 'Manchester City'),
(101, 'Immobile', 'Lazio'),
(102, 'Jota', 'Liverpool'),
(103, 'Gosens', 'Atalanta'),
(104, 'Donnarumma', 'Milan'),
(105, 'Kounde', 'Sevilla'),
(106, 'Mendy', 'Chelsea'),
(107, 'Chiesa', 'Juventus'),
(108, 'Cancelo', 'Manchester City'),
(109, 'Martinez', 'Inter Milan'),
(110, 'Locatelli', 'Sassuolo'),
(111, 'Ziyech', 'Chelsea'),
(112, 'Saul', 'Atletico Madrid'),
(113, 'Kjaer', 'Milan'),
(114, 'Malen', 'PSV'),
(115, 'Telles', 'Manchester United'),
(116, 'Barella', 'Inter Milan'),
(117, 'Torres', 'Manchester City'),
(118, 'Partey', 'Arsenal'),
(119, 'Oyarzabal', 'Real Sociedad'),
(120, 'Gosens', 'Atalanta'),
(121, 'Tagliafico', 'Ajax'),
(122, 'Grealish', 'Aston Villa'),
(123, 'Dembele', 'Barcelona'),
(124, 'Savic', 'Atletico Madrid'),
(125, 'Fekir', 'Real Betis'),
(126, 'Hernandez', 'AC Milan'),
(127, 'Guerreiro', 'Dortmund'),
(128, 'Romero', 'Atalanta'),
(129, 'Skriniar', 'Inter Milan'),
(130, 'Valverde', 'Real Madrid'),
(131, 'Martial', 'Manchester United'),
(132, 'Ginter', 'Monchengladbach'),
(133, 'Dybala', 'Juventus'),
(134, 'Musiala', 'Bayern Munich'),
(135, 'Rudiger', 'Chelsea'),
(136, 'Chilwell', 'Chelsea'),
(137, 'Llorente', 'Leeds United'),
(138, 'Zaha', 'Crystal Palace'),
(139, 'Borges', 'PSG'),
(140, 'Grealish', 'Manchester City'),
(141, 'Szczesny', 'Juventus'),
(142, 'Gomez', 'Liverpool'),
(143, 'Eriksen', 'Inter Milan'),
(144, 'Diop', 'West Ham'),
(145, 'Guerreiro', 'Dortmund'),
(146, 'Guerreiro', 'Dortmund'),
(147, 'Maguire', 'Manchester United'),
(148, 'Leno', 'Arsenal'),
(149, 'Wan-Bissaka', 'Manchester United'),
(150, 'Lucas', 'Tottenham'),
(151, 'Carvajal', 'Real Madrid'),
(152, 'Rabiot', 'Juventus'),
(153, 'Mount', 'Chelsea'),
(154, 'Barella', 'Inter Milan'),
(155, 'Torres', 'Manchester City'),
(156, 'Romagnoli', 'AC Milan'),
(157, 'Ginter', 'Monchengladbach'),
(158, 'Tielemans', 'Leicester'),
(159, 'Giroud', 'Chelsea'),
(160, 'Neves', 'Wolves'),
(161, 'Nkunku', 'RB Leipzig'),
(162, 'Laporte', 'Manchester City'),
(163, 'Dubois', 'Lyon'),
(164, 'Maddison', 'Leicester'),
(165, 'Klostermann', 'RB Leipzig'),
(166, 'Bounou', 'Sevilla'),
(167, 'Brozovic', 'Inter Milan'),
(168, 'Eder Militao', 'Real Madrid'),
(169, 'Mendy', 'Real Madrid'),
(170, 'Caputo', 'Sassuolo'),
(171, 'Acerbi', 'Lazio'),
(172, 'Tadic', 'Ajax'),
(173, 'Rashford', 'Manchester United'),
(174, 'Gnabry', 'Bayern Munich'),
(175, 'Kante', 'Chelsea'),
(176, 'Ronaldo', 'Juventus'),
(177, 'Sancho', 'Manchester United'),
(178, 'Neymar', 'PSG'),
(179, 'Immobile', 'Lazio'),
(180, 'Benzema', 'Real Madrid'),
(181, 'Donnarumma', 'Milan'),
(182, 'Werner', 'Chelsea'),
(183, 'Martinez', 'Inter Milan'),
(184, 'Kimmich', 'Bayern Munich'),
(185, 'Kroos', 'Real Madrid'),
(186, 'De Bruyne', 'Manchester City'),
(187, 'Lukaku', 'Inter Milan'),
(188, 'Grealish', 'Manchester City'),
(189, 'Foden', 'Manchester City'),
(190, 'Di Maria', 'PSG'),
(191, 'Muller', 'Bayern Munich'),
(192, 'Rodri', 'Manchester City'),
(193, 'Alaba', 'Real Madrid'),
(194, 'Gosens', 'Atalanta'),
(195, 'Silva', 'Manchester City'),
(196, 'Aubameyang', 'Arsenal'),
(197, 'Tagliafico', 'Ajax'),
(198, 'Hakimi', 'Inter Milan'),
(199, 'Reus', 'Dortmund'),
(200, 'Thiago', 'Liverpool'),
(201, 'Locatelli', 'Sassuolo'),
(202, 'Cancelo', 'Manchester City'),
(203, 'Navas', 'PSG'),
(204, 'Van Dijk', 'Liverpool'),
(205, 'Firmino', 'Liverpool'),
(206, 'Savic', 'Atletico Madrid'),
(207, 'Hummels', 'Dortmund'),
(208, 'Dembele', 'Barcelona'),
(209, 'Bernardo Silva', 'Manchester City'),
(210, 'Guerreiro', 'Dortmund'),
(211, 'Telles', 'Manchester United'),
(212, 'Neuer', 'Bayern Munich'),
(213, 'Sane', 'Bayern Munich'),
(214, 'Robertson', 'Liverpool'),
(215, 'Guerreiro', 'Dortmund'),
(216, 'Maguire', 'Manchester United'),
(217, 'Hazard', 'Real Madrid'),
(218, 'Salah', 'Liverpool'),
(219, 'Aguero', 'Barcelona'),
(220, 'Pjanic', 'Besiktas'),
(221, 'Haaland', 'Dortmund'),
(222, 'Mbappe', 'PSG'),
(223, 'Kane', 'Tottenham'),
(224, 'Kimmich', 'Bayern Munich'),
(225, 'Lewandowski', 'Bayern Munich'),
(226, 'Verratti', 'PSG'),
(227, 'Son', 'Tottenham'),
(228, 'Rashford', 'Manchester United'),
(229, 'Firmino', 'Liverpool'),
(230, 'Griezmann', 'Barcelona'),
(231, 'Aubameyang', 'Arsenal'),
(232, 'Sane', 'Bayern Munich'),
(233, 'Neuer', 'Bayern Munich'),
(234, 'Immobile', 'Lazio'),
(235, 'Foden', 'Manchester City'),
(236, 'Navas', 'PSG'),
(237, 'Sancho', 'Manchester United'),
(238, 'Pogba', 'Manchester United'),
(239, 'Grealish', 'Manchester City'),
(240, 'Hummels', 'Dortmund'),
(241, 'Reus', 'Dortmund'),
(242, 'Sterling', 'Manchester City'),
(243, 'Kroos', 'Real Madrid'),
(244, 'Martial', 'Manchester United'),
(245, 'Martinez', 'Inter Milan'),
(246, 'Dembele', 'Barcelona'),
(247, 'Rodri', 'Manchester City'),
(248, 'Werner', 'Chelsea'),
(249, 'Gundogan', 'Manchester City'),
(250, 'Benzema', 'Real Madrid'),
(251, 'Gnabry', 'Bayern Munich'),
(252, 'Di Maria', 'PSG'),
(253, 'Ramos', 'PSG'),
(254, 'Torres', 'Manchester City'),
(255, 'Alisson', 'Liverpool'),
(256, 'Alaba', 'Real Madrid'),
(257, 'Thiago', 'Liverpool'),
(258, 'Tagliafico', 'Ajax'),
(259, 'Chiesa', 'Juventus'),
(260, 'Skriniar', 'Inter Milan'),
(261, 'Kjaer', 'AC Milan'),
(262, 'Cancelo', 'Manchester City'),
(263, 'Wijnaldum', 'Liverpool'),
(264, 'Romero', 'Atalanta'),
(265, 'Eriksen', 'Inter Milan'),
(266, 'Guerreiro', 'Dortmund'),
(267, 'Caputo', 'Sassuolo'),
(268, 'Tielemans', 'Leicester'),
(269, 'Leno', 'Arsenal'),
(270, 'Robertson', 'Liverpool'),
(271, 'Gomez', 'Liverpool'),
(272, 'Dias', 'Manchester City'),
(273, 'Guerreiro', 'Dortmund'),
(274, 'Locatelli', 'Sassuolo'),
(275, 'Nkunku', 'RB Leipzig'),
(276, 'Skriniar', 'Inter Milan'),
(277, 'Leno', 'Arsenal'),
(278, 'Wan-Bissaka', 'Manchester United'),
(279, 'Lukaku', 'Inter Milan'),
(280, 'Hakimi', 'Inter Milan'),
(281, 'Maddison', 'Leicester'),
(282, 'Kounde', 'Sevilla'),
(283, 'Savic', 'Atletico Madrid'),
(284, 'Carvajal', 'Real Madrid'),
(285, 'Dubois', 'Lyon'),
(286, 'Bounou', 'Sevilla'),
(287, 'Brozovic', 'Inter Milan'),
(288, 'Mendy', 'Real Madrid'),
(289, 'Acerbi', 'Lazio'),
(290, 'Tadic', 'Ajax'),
(291, 'Eder Militao', 'Real Madrid'),
(292, 'Maguire', 'Manchester United'),
(293, 'Romagnoli', 'AC Milan'),
(294, 'Ginter', 'Monchengladbach'),
(295, 'Szczesny', 'Juventus'),
(296, 'Laporte', 'Manchester City'),
(297, 'Rabiot', 'Juventus'),
(298, 'Mount', 'Chelsea'),
(299, 'Barella', 'Inter Milan'),
(300, 'Oyarzabal', 'Real Sociedad'),
(301, 'Valverde', 'Real Madrid'),
(302, 'Muller', 'Bayern Munich'),
(303, 'Chilwell', 'Chelsea'),
(304, 'Llorente', 'Leeds United'),
(305, 'Zaha', 'Crystal Palace'),
(306, 'Borges', 'PSG'),
(307, 'Dembele', 'Barcelona'),
(308, 'Guerreiro', 'Dortmund'),
(309, 'Guerreiro', 'Dortmund'),
(310, 'Benzema', 'Real Madrid'),
(311, 'Grealish', 'Manchester City'),
(312, 'Skriniar', 'Inter Milan'),
(313, 'Alisson', 'Liverpool'),
(314, 'Kante', 'Chelsea'),
(315, 'Donnarumma', 'Milan'),
(316, 'Martinez', 'Inter Milan'),
(317, 'Kimmich', 'Bayern Munich'),
(318, 'De Bruyne', 'Manchester City'),
(319, 'Gnabry', 'Bayern Munich'),
(320, 'Foden', 'Manchester City'),
(321, 'Di Maria', 'PSG'),
(322, 'Muller', 'Bayern Munich'),
(323, 'Rodri', 'Manchester City'),
(324, 'Alaba', 'Real Madrid'),
(325, 'Gosens', 'Atalanta'),
(326, 'Silva', 'Manchester City'),
(327, 'Aubameyang', 'Arsenal'),
(328, 'Tagliafico', 'Ajax'),
(329, 'Hakimi', 'Inter Milan'),
(330, 'Reus', 'Dortmund'),
(331, 'Thiago', 'Liverpool'),
(332, 'Locatelli', 'Sassuolo'),
(333, 'Cancelo', 'Manchester City'),
(334, 'Navas', 'PSG'),
(335, 'Van Dijk', 'Liverpool'),
(336, 'Firmino', 'Liverpool'),
(337, 'Savic', 'Atletico Madrid'),
(338, 'Hummels', 'Dortmund'),
(339, 'Dembele', 'Barcelona'),
(340, 'Bernardo Silva', 'Manchester City'),
(341, 'Guerreiro', 'Dortmund'),
(342, 'Telles', 'Manchester United'),
(343, 'Neuer', 'Bayern Munich'),
(344, 'Sane', 'Bayern Munich'),
(345, 'Robertson', 'Liverpool'),
(346, 'Guerreiro', 'Dortmund'),
(347, 'Maguire', 'Manchester United'),
(349, 'Dimaria', 'Argentina'),
(351, 'Jjn', 'Hb'),
(352, 'Hai', 'Hai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
