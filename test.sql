-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 05:12 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idComment` int(50) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idComment`, `title`, `email`, `text`, `status`) VALUES
(1, 'I love oranges', 'mvelisic@gmail.com', 'Oranges are a round, segmented citrus fruit with a pitted peel. The taste can vary from juicy and sweet to bitter, depending on the variety – more common ones include Valencia, Seville and Hamlin. Most oranges are available year-round, except for varieties such as blood oranges, which have a shorter season.', 1),
(2, 'I love Limes', 'pera@gmail.com', 'Similar to other citrus fruits, lime offers a plethora of vitamins and minerals, including potassium. Potassium is important for maintaining nerve function and healthy blood pressure levels. The fruit is also linked to antioxidants and bioflavonoids that researchers believe could lower the likelihood of cancer.', 1),
(13, 'hire me', 'mvelisic@gmail.com', 'give me a job', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProduct` int(50) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProduct`, `name`, `description`, `img`) VALUES
(1, 'Orange', 'The orange is a hybrid between pomelo (Citrus maxima) and mandarin (Citrus reticulata). The chloroplast genome, and therefore the maternal line, is that of pomelo. The sweet orange has had its full genome sequenced.', 'orange-1.jpg'),
(2, 'Pink Grapefruit', 'The grapefruit (Citrus × paradisi) is a subtropical citrus tree known for its relatively large sour to semisweet, somewhat bitter fruit. The interior flesh is segmented and varies in color from pale yellow to dark pink.\r\n\r\nGrapefruit is a citrus hybrid or', 'pink-grapefruit-1.jpg'),
(3, 'White Grapefruit', 'The evergreen grapefruit trees usually grow to around 5–6 m (16–20 ft) tall, although they may reach 13–15 m (43–49 ft).[1] The leaves are glossy, dark green, long (up to 15 cm (5.9 in)), and thin. It produces 5 cm (2 in) white four-petaled flowers. The f', 'white-grapefruit-1.jpg'),
(4, 'Tangerine', 'Tangerines are smaller and less rounded than common oranges. The taste is considered less sour, as well as sweeter and stronger, than that of an orange. A ripe tangerine is firm to slightly soft, and pebbly-skinned with no deep grooves, as well as orange ', 'tangerine-1.jpg'),
(5, 'Lime', 'A lime (from French lime, from Arabic līma, from Persian līmū, \"lemon\"), is a citrus fruit, which is typically round, green in color, 3–6 centimetres (1.2–2.4 in) in diameter, and contains acidic juice vesicles.\r\n\r\nThere are several species of citrus tree', 'lime-1.jpg'),
(6, 'Pomelo', 'The pomelo (/ˈpɒməloʊ/), pummelo (/ˈpʌməloʊ/)) or in scientific terms Citrus maxima or Citrus grandis, is the largest citrus fruit from the family Rutaceae and the principal ancestor of the grapefruit.[2] It is a natural, i.e., non-hybrid, citrus fruit, n', 'pomelo-1.jpg'),
(7, 'Kumquat', 'Kumquats (or cumquats in Australian English, /ˈkʌmkwɒt/; Citrus japonica) are a group of small fruit-bearing trees in the flowering plant family Rutaceae. They were previously classified as forming the now-historical genus Fortunella, or placed within Cit', 'kumquat-1.jpg'),
(8, 'Lemon', 'The lemon, Citrus limon, is a species of small evergreen tree in the flowering plant family Rutaceae, native to South Asia, primarily North eastern India.\r\n\r\nThe tree\'s ellipsoidal yellow fruit is used for culinary and non-culinary purposes throughout the', 'lemon-1.jpg'),
(9, 'Mandarine', 'The mandarin orange (Citrus reticulata), also known as the mandarin or mandarine, is a small citrus tree fruit. Treated as a member of a distinct species of orange, it is usually eaten plain or in fruit salads. The tangerine is a group of orange-coloured ', 'mandarine-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwordHash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idRole` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `passwordHash`, `idRole`) VALUES
(1, 'pera', 'pera@gmail.com', 'pera123', 'bf676ed1364b5857fba69b5623c81b64', 1),
(2, 'mika', 'mika@gmail.com', 'mika123', 'e471a891c22fb1b5b722f57bed71de32', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idComment`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRole` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idComment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
