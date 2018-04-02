# ktu-activity-points
A webpage for students to enter activity points and certificates.

## Setup

1. Download the repo to your DocumentRoot(usually /var/www/html/ for LAMP setup).

2. Set database details in config.php

3. Create these Tables in the database by running following commands:

CREATE TABLE `PointsTable` (
  `No` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Activity` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Level` int(11) DEFAULT NULL,
  `Prize` int(11) NOT NULL,
  `Involvement` int(11) NOT NULL,
  `Notes` text NOT NULL,
  `Points` int(10) UNSIGNED NOT NULL,
  `Document` text,
  `Approved` tinyint(1) DEFAULT NULL,
  `AddDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `PointsTable`
  ADD PRIMARY KEY (`No`);


CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

INSERT INTO `users` (`Id`, `username`, `password`) VALUES
(1, 'User1', 'pass'),
(2, 'admin', 'admin');