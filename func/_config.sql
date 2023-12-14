-- create DB
CREATE DATABASE Li2S;

-- create USER table
-- insert it in DB selected range
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `create_datetime` datetime NOT NULL,
    PRIMARY KEY (`id`)
   );

-- create URL table
-- insert it in DB selected range
CREATE TABLE IF NOT EXISTS `urls`(
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(6),
    `full_url` VARCHAR(255) NOT NULL,
    `short_url` VARCHAR(100) NOT NULL,
    `clicks` INT(6)
);