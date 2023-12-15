<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "Li2S";

try {
  $conn = new PDO("mysql:host=$host;", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE $db";
  $conn->exec($sql);
  echo "Database $db created successfully.<br>";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage() . "<br>";
}
?> 