--
-- Table structure for table `prize`
--

CREATE TABLE IF NOT EXISTS `prize` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) NOT NULL,
  `winner` int(2) NOT NULL DEFAULT '0',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `prize_settings`
--

CREATE TABLE IF NOT EXISTS `prize_settings` (
  `prize1` varchar(160) NOT NULL DEFAULT '',
  `prize2` varchar(160) DEFAULT NULL,
  `prize3` varchar(160) DEFAULT NULL,
  `noprize` varchar(160) DEFAULT NULL,
  `gameover` varchar(160) DEFAULT NULL,
  `first` int(5) DEFAULT NULL,
  `second` int(5) DEFAULT NULL,
  `third` int(5) DEFAULT NULL,
  PRIMARY KEY (`prize1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prize_settings`
--

INSERT INTO `prize_settings` (`prize1`, `prize2`, `prize3`, `noprize`, `gameover`, `first`, `second`, `third`) VALUES
('YOU HAVE WON 1st Prize', 'YOU HAVE WON 2nd Prize', 'YOU HAVE WON 3rd Prize', 'Sorry you did not win', 'Competition Closed', 4, 3, 2);

-- --------------------------------------------------------

