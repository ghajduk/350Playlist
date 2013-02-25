

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `music`
--
CREATE DATABASE IF NOT EXISTS music;
GRANT ALL PRIVILEGES ON music.* to 'assist'@'localhost' identified by 'assist';
USE session;
-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(70) NOT NULL,
  `album` varchar(50) NOT NULL,
  `songName` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `music`
--

INSERT INTO `playlist` (`id`, `artist`, `album`, `songName`) VALUES
(1, 'Modest Mouse', 'The Moon and Antarctica', 'A Different City'),
(2, 'Modest Mouse', 'The Moon and Antarctica', 'The Stars are Projectors'),
(3, 'Modest Mouse', 'Good News for People Who Love Bad News', 'Float On'),
(4, 'Modest Mouse', 'Good News for People Who Love Bad News', 'Ocean Breathes Salty'),
(5, 'Modest Mouse', 'Good News for People Who Love Bad News', 'The View'),
(6, 'Adel', 'Twentyone', 'Someone Like You'),
(7, 'Adel', 'Twentyone', 'Rumor Has It');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `zipcode` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `zipcode`) VALUES
(1, 'raz', 'p00d13', 88005),
(2, 'ann', 'changeme', 22401),
(3, 'lazy', 'qwerty', 22401);
