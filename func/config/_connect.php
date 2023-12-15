<?php
$host = "localhost";
$user = "root";
$pass = "";

try {
  $conn = new PDO("mysql:host=$host;", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully.";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 