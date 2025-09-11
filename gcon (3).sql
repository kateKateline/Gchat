-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Sep 2025 pada 06.44
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `channels`
--

CREATE TABLE `channels` (
  `id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` enum('text','voice') DEFAULT 'text',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `servers`
--

CREATE TABLE `servers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `uptime_30d` float NOT NULL,
  `owner_id` int(11) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `servers`
--

INSERT INTO `servers` (`id`, `name`, `title`, `description`, `status`, `uptime_30d`, `owner_id`, `icon`, `created_at`) VALUES
(1, 'test', 'test1', 'test', 'offline', 90, 1, 'idk.png\r\n', '2025-08-28 05:33:19'),
(2, 'ambasador', 'tedst', 'twsfehgrhb', 'online', 24, 2, 'idk.png', '2025-09-11 03:46:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `server_members`
--

CREATE TABLE `server_members` (
  `id` int(11) NOT NULL,
  `server_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role` enum('owner','admin','member') DEFAULT 'member',
  `joined_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT 'default.png',
  `banner` varchar(255) DEFAULT '',
  `about_me` text DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('online','offline','dnd','invisible') DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_image`, `banner`, `about_me`, `role`, `created_at`, `status`) VALUES
(1, 'MIce', 'mice@gmail.com', '$2y$10$y3Qv8bCE2tvesqp5cBkLSevtqm0ZAUdJgza3NFItQz19JfVgXMVje', '68c24b786aa94_images.jpg', '68c2468bd9221-download (3).jpg', 'Hello! My name is Michele, a student majoring in Software Engineering (RPL). I am passionate about technology, especially in software development, web programming, and database management.\r\n\r\nI enjoy learning how to design and build applications that can solve real-world problems. Currently, I am studying programming languages such as Java, PHP, and JavaScript, while also exploring UI/UX design to improve user experiences.\r\n\r\nMy goal is to become a professional software developer who can contribute to innovative projects and continue to grow in the IT industry.', 'admin', '2025-08-25 03:41:00', 'invisible'),
(2, 'Mikhail', 'mikel@gmail.com', '$2y$10$Fh6CAiWwgtgDW23QD47ZWOczojHLNhxNIdeieIKH3pniJn6Ea5PNW', 'default.png', '', '', 'user', '2025-08-25 04:00:03', 'offline'),
(3, 'Egor', 'gor@gmail.com', '123', 'default.png', '', '', 'user', '2025-08-28 06:24:14', 'offline'),
(4, 'mike', 'mimi@gmail.com', '123', 'default.png', '', '', 'user', '2025-08-28 06:25:12', 'offline'),
(5, 'fitriwemingsigma', 'fitir@gmail.com', '$2y$10$NTaoRpc/WM/5uJ3OrOu/Z.NNq9f.sJvlPV2lacW9Jsccve7dukVhS', 'default.png', '', '', 'user', '2025-08-27 04:13:15', 'offline'),
(6, 'Kangkung', 'raju@gmail.com', '$2y$10$7OeSDUIsIcHniQhNbMyMmuF2tsef41us3oIK7ZxUTRaKh2g7j4BAO', 'default.png', '', '', 'user', '2025-08-28 00:28:59', 'offline'),
(7, 'badakberenang', 'arthur@gmail.com', '$2y$10$4ikWmt59iOcU041/COIfkui5licjn6mHRFg0.i2gN2bs36Vlr..Bu', 'default.png', '', '', 'user', '2025-08-28 06:40:29', 'offline'),
(8, 'riri', 'riri@gmail.com', '$2y$10$MKpXZ8I3zhLDjlFZUtBcIeEmTIsnHKjh8I3r82TOed83vbriYTwCW', 'default.png', '', '', 'user', '2025-09-11 04:10:31', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `server_id` (`server_id`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `channel_id` (`channel_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- Indeks untuk tabel `server_members`
--
ALTER TABLE `server_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_member` (`server_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `servers`
--
ALTER TABLE `servers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `server_members`
--
ALTER TABLE `server_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `channels`
--
ALTER TABLE `channels`
  ADD CONSTRAINT `channels_ibfk_1` FOREIGN KEY (`server_id`) REFERENCES `servers` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `servers`
--
ALTER TABLE `servers`
  ADD CONSTRAINT `servers_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `server_members`
--
ALTER TABLE `server_members`
  ADD CONSTRAINT `server_members_ibfk_1` FOREIGN KEY (`server_id`) REFERENCES `servers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `server_members_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
