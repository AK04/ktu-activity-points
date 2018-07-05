# ktu-activity-points
A webpage for students to enter activity points and certificates.

## Setup

1. Download the repo to your DocumentRoot(usually /var/www/html/ for LAMP setup).

2. Set database details in config.php

3. Create these Tables in the database by running following commands:

CREATE TABLE `PointsTable` (
  `No` int(10) UNSIGNED NOT NULL,
  `Activity` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Level` int(11) DEFAULT NULL,
  `Prize` int(11) NOT NULL,
  `Involvement` int(11) NOT NULL,
  `Notes` text NOT NULL,
  `Points` int(10) UNSIGNED NOT NULL,
  `Document` text,
  `Approved` tinyint(1) DEFAULT NULL,
  `Comments` text NOT NULL,
  `AddDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `User` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `PointsTable`
  ADD PRIMARY KEY (`No`);

ALTER TABLE `PointsTable`
  MODIFY `No` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `TotalPoints` int(11) DEFAULT NULL,
  `RegisterNo` varchar(10) DEFAULT NULL,
  `RollNo` varchar(8) DEFAULT NULL,
  `AdmNo` varchar(7) DEFAULT NULL,
  `Class` varchar(5) DEFAULT NULL,
  `InfoUpdate` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `RegisterNo` (`RegisterNo`),
  ADD UNIQUE KEY `RollNo` (`RollNo`),
  ADD UNIQUE KEY `AdmNo` (`AdmNo`);

ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

INSERT INTO `users` (`Id`, `username`, `password`) VALUES
(1, 'user', 'pass'),
(2, 'admin', 'admin');

4. In assets folder, create a folder named 'Documents' (D must be capital). Then try 'sudo chmod 777 Documents' while in the assets folder.

5. You are up and running!

*Note: You might need to set 'file_uploads = On' in your php.ini file*