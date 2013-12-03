TEMNEIN README

-

Temnein is a little project for heigvd-mas-rad-2 php module.
You can save your texts with date.

-

Paste the following code in your xamp phpmyadmin sql area and execute the request to create the database and the table used in the temnein project.

-

CREATE DATABASE `temnein`;

USE `temnein`;

CREATE TABLE `bandits` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `date` datetime NOT NULL,
 `text` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

INSERT INTO `bandits` (`id`, `date`, `text`) VALUES(1, '2013-11-28 13:46:19', 'Hello universe.');