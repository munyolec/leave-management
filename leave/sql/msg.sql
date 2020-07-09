USE easyleave;

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` int(50) NOT NULL auto_increment,
  `message_subject` varchar(200) NOT NULL default 'Unknown',
  `message` text NOT NULL,
  `send_date` datetime default '0000-00-00 00:00:00',
  `reading_status` varchar(50) NOT NULL default 'Unread',
  `emp_no` int(12) NOT NULL default '0',
  PRIMARY KEY  (`messageId`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;