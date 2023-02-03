-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 02:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_genre`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'House'),
(2, 'Hip-Hop'),
(3, 'Dubstep'),
(4, 'Trap'),
(5, 'Rock'),
(6, 'Metal'),
(7, 'Drum and Bass'),
(8, 'Disco'),
(9, 'Jazz'),
(10, 'Funky'),
(11, 'Classical'),
(12, 'Reggae');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `song_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `comment`, `date`, `song_id`, `user_id`) VALUES
(2, 'This song is so soulful, the lyrics are powerful and the singer has an amazing voice.', '2023-02-02', 2, 1),
(3, 'I love the energy in this song, it always puts me in a good mood.', '2023-02-02', 3, 2),
(4, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 4, 3),
(5, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 5, 4),
(6, 'The guitar solo in this song is epic, it gives me chills every time.', '2023-02-02', 6, 5),
(7, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 7, 6),
(8, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 8, 7),
(9, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 9, 8),
(10, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 10, 1),
(11, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 11, 2),
(12, 'The guitar solo in this song is epic, it gives me chills every time.', '2023-02-02', 12, 3),
(13, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 13, 4),
(14, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 14, 5),
(15, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 15, 6),
(16, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 16, 7),
(17, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 17, 8),
(18, 'The guitar solo in this song is epic, it gives me chills every time.', '2023-02-02', 18, 1),
(19, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 19, 2),
(20, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 20, 3),
(21, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 21, 4),
(22, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 22, 5),
(23, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 23, 6),
(24, 'The guitar solo in this song is epic, it givesme chills every time.', '2023-02-02', 24, 7),
(25, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 25, 8),
(26, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 26, 1),
(27, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 27, 2),
(28, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 28, 3),
(29, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 29, 4),
(30, 'The guitar solo in this song is epic, it gives me chills every time.', '2023-02-02', 30, 5),
(31, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 31, 6),
(32, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 32, 7),
(33, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 33, 8),
(34, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 34, 1),
(35, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 35, 2),
(36, 'The guitar solo in this song is epic, it gives me chills every time.', '2023-02-02', 36, 3),
(37, 'This song has such a unique sound, I cant get enough of it.', '2023-02-02', 37, 4),
(38, 'The lyrics in this song are so meaningful, they really resonate with me.', '2023-02-02', 38, 5),
(39, 'This song is just so fun, I cant help but dance whenever I hear it.', '2023-02-02', 39, 6),
(40, 'This song has a great beat and the chorus is super catchy.', '2023-02-02', 40, 7),
(41, 'I love the relaxing vibe of this song, its perfect for winding down after a long day.', '2023-02-02', 41, 8),
(42, 'This song is so soulful, the lyrics are powerful and the singer has an amazing voice. Me too.', '2023-02-02', 2, 1),
(43, 'I love the energy in this song, it always puts me in a good mood. Super AWESOME', '2023-02-02', 3, 2),
(44, 'This song has a great beat and the chorus is super catchy. Really cool.', '2023-02-02', 4, 3),
(45, 'I love the relaxing vibe of this song, its perfect for winding down after a long day. Check it out', '2023-02-02', 5, 4),
(46, 'The guitar solo in this song is epic, it gives me chills every time. Really awesome.', '2023-02-02', 6, 5),
(47, 'This song has such a unique sound, I cant get enough of it. Super cool.', '2023-02-02', 7, 6),
(48, 'The lyrics in this song are so meaningful, they really resonate with me. OMG.', '2023-02-02', 8, 7),
(51, 'Such a beautiful song, love it!', '2023-02-02', 13, 1),
(52, 'This is so old-school legend, love it!', '2023-02-02', 8, 1),
(53, 'I played this song night and day, day and night... All day long!', '2023-02-02', 18, 1),
(54, 'It&#39;s absolutely Magnifique!', '2023-02-03', 10, 1),
(55, 'Rage against the Machine is banging in the background as I listen to this, but Eminem is kool too.', '2023-02-03', 10, 1),
(56, 'Those who die are justified, for wearing the badge, they are the chosen white...', '2023-02-03', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`id`, `name`, `artist`, `detail`, `img`, `genre_id`) VALUES
(2, 'Strobe', 'Deadmau5', 'Electronic dance music classic', '1%20(1).jpg', 1),
(3, 'Levels', 'Avicii', 'Uplifting house track', '1%20(2).jpg', 1),
(4, 'Satisfaction', 'Benny Benassi', 'Energetic house track', '1%20(3).jpg', 1),
(5, 'Summertime Sadness', 'Lana Del Rey', 'Melancholy house track', '1%20(4).jpg', 1),
(6, 'Adrenaline', 'Gorgon City', 'Upbeat house track', '1%20(5).jpg', 1),
(7, 'Need to Feel Loved', 'Reflekt', 'Emotional house track', '1%20(6).jpg', 1),
(8, 'Jump', 'Kriss Kross', 'Classic hip-hop track', '1%20(7).jpg', 2),
(9, 'Can\'t Hold Us', 'Macklemore & Ryan Lewis', 'Upbeat hip-hop track', '1%20(8).jpg', 2),
(10, 'Lose Yourself', 'Eminem', 'Inspiring hip-hop track', '1%20(9).jpg', 2),
(11, 'Bassnectar', 'Timestretch', 'Dubstep banger', '1%20(10).jpg', 3),
(12, 'Cinema', 'Skrillex', 'Energetic dubstep track', '1%20(11).jpg', 3),
(13, 'Holdin\' On', 'Monsta', 'Dark and brooding dubstep track', '1%20(12).jpg', 3),
(14, 'XO TOUR Llif3', 'Lil Uzi Vert', 'Trappy rap track', '1%20(13).jpg', 4),
(15, 'Goosebumps', 'Travis Scott', 'Energetic trap track', '1%20(14).jpg', 4),
(16, 'Jumpman', 'Drake & Future', 'Hard-hitting trap track', '1%20(15).jpg', 4),
(17, 'Smells Like Teen Spirit', 'Nirvana', 'Grunge rock classic', '1%20(16).jpg', 5),
(18, 'Paradise City', 'Guns N\' Roses', 'Rock classic', '1%20(17).jpg', 5),
(19, 'Bohemian Rhapsody', 'Queen', 'Rock masterpiece', '1%20(18).jpg', 5),
(20, 'Enter Sandman', 'Metallica', 'Metal classic', '1%20(19).jpg', 6),
(21, 'Blackened', 'Metallica', 'Dark and brooding metal track', '1%20(20).jpg', 6),
(22, 'One', 'Metallica', 'Powerful metal track', '1%20(21).jpg', 6),
(23, 'Through the Hills', 'Chase & Status', 'Drum and bass banger', '1%20(22).jpg', 7),
(24, 'In the Moment', 'High Contrast', 'Upbeat drum and bass track', '1%20(23).jpg', 7),
(25, 'Elevator', 'Dilemn', 'Atmospheric drum and bass track', '1%20(24).jpg', 7),
(26, 'Stayin\' Alive', 'Bee Gees', 'Disco classic', '1%20(25).jpg', 8),
(27, 'Don\'t Stop \'Til You Get Enough', 'Michael Jackson', 'Upbeat disco track', '1%20(26).jpg', 8),
(28, 'Le Freak', 'Chic', 'Funky disco classic', '1%20(27).jpg', 8),
(29, 'Take the \'A\' Train', 'Duke Ellington', 'Swinging jazz classic', '1%20(28).jpg', 9),
(30, 'Kind of Blue', 'Miles Davis', 'Jazz masterpiece', '1%20(29).jpg', 9),
(31, 'In a Sentimental Mood', 'Duke Ellington', 'Smooth jazz classic', '1%20(30).jpg', 9),
(32, 'Funky Town', 'Lipps Inc.', 'Funky classic', '1%20(31).jpg', 10),
(33, 'Good Times', 'Chic', 'Funky classic', '1%20(40).jpg', 10),
(34, 'Super Freak', 'Rick James', 'Funky classic', '1%20(41).jpg', 10),
(35, 'Moon River', 'Audrey Hepburn', 'Classical ballad', '1%20(42).jpg', 11),
(36, 'Ride of the Valkyries', 'Wagner', 'Epic classical piece', '1%20(43).jpg', 11),
(37, 'Canon in D', 'Pachelbel', 'Upbeat classical piece', '1%20(44).jpg', 11),
(38, 'The Four Seasons', 'Vivaldi', 'Classical masterpiece', '1%20(45).jpg', 11),
(39, 'No Woman, No Cry', 'Bob Marley', 'Reggae classic', '1%20(46).jpg', 12),
(40, 'Three Little Birds', 'Bob Marley', 'Upbeat reggae track', '1%20(47).jpg', 12),
(41, 'Redemption Song', 'Bob Marley', 'Inspiring reggae track', '1%20(39).jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`) VALUES
(1, 'admin@admin.com', 'a', 'SuDO', 'AddMinUs'),
(2, 'member@member.com', 'm', 'member', 'member'),
(3, 'admin1@admin.com', 'a', 'admin', 'admin'),
(4, 'member1@member.com', 'm', 'member', 'member'),
(5, 'admin2@admin.com', 'a', 'admin', 'admin'),
(6, 'member2@member.com', 'm', 'member', 'member'),
(7, 'admin3@admin.com', 'a', 'admin', 'admin'),
(8, 'member3@member.com', 'm', 'member', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `song_id` (`song_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `song`
--
ALTER TABLE `song`
  ADD CONSTRAINT `song_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
