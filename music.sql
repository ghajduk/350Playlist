

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
USE music;

-- --------------------------------------------------------


--
-- Table structure for table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_member_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(70) NOT NULL,
  `link_id` varchar(70) NOT NULL,
  PRIMARY KEY (`playlist_member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `link`
--

INSERT INTO `playlist` (`playlist_member_id`,`user_id`, `link_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 4),
(6, 1, 5),
(7, 2, 6),
(8, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `song_id` int(11) NOT NULL,
  `link` varchar(70) NOT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`link_id`,`song_id`, `link`) VALUES
(1, 1, 'WbXtDd5szGU'),
(2, 2, 'duYqlrgC17Q'),
(3, 3, 'CTAud5O7Qqk'),
(4, 4, 'TPhnOKmhbBw'),
(5, 5, 'EHOpmF3glak'),
(6, 6, 'hLQl3WQQoQ0'),
(7, 7, 'Ti3t7MAwaaM');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `song_id` int(11) NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `songname` varchar(70) NOT NULL,
  PRIMARY KEY (`song_id`),
  INDEX(songname)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`,`album_id`, `songname`) VALUES
(1, 1, 'A Different City'),
(2, 1, 'The Stars are Projectors'),
(3, 2, 'Float On'),
(4, 2, 'Ocean Breathes Salty'),
(5, 2, 'The View'),
(6, 3, 'Someone Like You'),
(7, 3, 'Rumor Has It');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(11) NOT NULL AUTO_INCREMENT,
  `artist_id` int(11) NOT NULL,
  `albumname` varchar(70) NOT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`,`artist_id`, `albumname`) VALUES
(1, 1, 'The Moon and Antarctica'),
(2, 1, 'Good News for People Who Love Bad News'),
(3, 2, 'Modest Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE IF NOT EXISTS `artist` (
  `artist_id` int(11) NOT NULL AUTO_INCREMENT,
  `artistname` varchar(70) NOT NULL,
  PRIMARY KEY (`artist_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artistname`) VALUES
(1, 'Modest Mouse'),
(2, 'Adel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'greg', SHA('hajduk')),
(2, 'kinzie', SHA('brooks')),
(3, 'daniela', SHA('cardona'));
