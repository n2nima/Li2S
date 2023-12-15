<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Li2S";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `username` varchar(50) NOT NULL,
    `email` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `create_datetime` datetime NOT NULL,
    PRIMARY KEY (`id`)
   );
   CREATE TABLE IF NOT EXISTS `urls`(
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT(6),
    `full_url` VARCHAR(255) NOT NULL,
    `short_url` VARCHAR(100) NOT NULL,
    `clicks` INT(6)
  );";
  $conn->exec($sql);
  echo "Database $db created successfully.<br>";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage() . "<br>";
}
?> 