<?php
session_start();
require 'func/_connect.php';
require 'func/helper.php';
// require 'func/check_login.php';
$err = '';
global $conn;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= assets('assets/styles/main.css') ?>" />
  <link rel="shortcut icon" href="<?= assets('assets/logo.png') ?>" type="image/x-icon" />
  <title>Link 2 Short</title>
</head>

<body>
  <?php require_once 'layouts/header.php'; ?>
  <section id="main" class="d-flex flex-column justify-content-center align-items-center">
    <h1>Li2S - PANEL</h1>
    <br>
    <p>a small, smart, simple link shortener.</p>
  </section>
</body>

</html>