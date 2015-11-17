-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2015 at 05:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `text`, `author_id`, `image`) VALUES
(1, 'Posljednji trening reprezentacije BiH', ' Na treningu naÅ¡eg tima se moglo vidjeti da u reprezentaciji vlada sjajna atmosfera. Reprezentativci su bili posveÄ‡eni ozbiljnom radu dok im je selektor Mehmed BaÅ¾dareviÄ‡ davao neke od posljednjih uputa uoÄi sutraÅ¡nje utakmice, koja se igra na stadi', 1, 'http://static.klix.ba/media/images/vijesti/151112127.4_xl.jpg'),
(2, 'Irski navijaÄi za Klix.ba: Remi bi bio sjajan, ali realno je da BiH pobijedi', ' Irski navijaÄi su stigli u Sarajevo i obilaze historijska mjesta u gradu, te isprobavaju tradicionalnu hranu. Vidno su raspoloÅ¾eni, ali ne polaÅ¾u veliku nadu u svoje fudbalere koji Ä‡e sutra na Bilinom Polju igrati prvi meÄ baraÅ¾a protiv reprezentac', 3, 'http://static.klix.ba/media/images/vijesti/151112105.1_xl.jpg'),
(3, 'Nova Toyota Avensis predstavljena trÅ¾iÅ¡tu BiH', 'U Toyota salonu u Sarajevu danas je prezentovan novi Toyota Avensis. Odlikuje ga atraktivan i dinamiÄan dizajn, napredni sigurnosni sistemi i veliki izbor snaÅ¾nih i efikasnih motora.', 3, 'http://static.klix.ba/media/images/vijesti/151112135.3_xl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pob` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `email`, `pob`, `dob`) VALUES
(1, 'Nermin Sehic', 'nerminsehic1993@gmail.com', 'Sarajevo', '2015-11-12'),
(3, 'John Doe', 'nerminsehic1993@gmail.com', 'Sarajevo', '1971-02-17'),
(4, 'Novi autor', 'nerminsehic1993@gmail.com', 'Sarajevo', '2015-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) unsigned NOT NULL,
  `text` text,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `article_id`) VALUES
(2, ' Neki komentar', 5, NULL),
(3, ' Novi komentar', 5, 3),
(4, ' Novi komentar', 5, 3),
(5, ' Ovo je nek novi komentar', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(4, 'Nermin Sehic', 'nermin.sehic@stu.ssst.edu.ba', '$2y$10$5DHnkL2K0eOH/2TYzmjpEe6Et75iHILY4VmBd7lZxocagqshtueLe'),
(5, 'Nermin Sehic', 'nerminsehic1993@gmail.com', '$2y$10$8dD4wHZ0swGUim5xwvgqKuDudwKgx3lSxP2K3/PeBttV60NGEV4US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
