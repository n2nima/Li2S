<?php

global $conn;

$host = "localhost";
$user = "root";
$pass = "";
$db = "li2s";

try {
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
  $conn = new PDO("mysql:host=$host;dbname=$db;", $user, $pass, $options);
  return $conn;
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}
