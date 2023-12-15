<?php
include "func/config/_connect.php";
$err = "";

if (
  isset($_POST['first_name']) && $_POST['first_name'] !== ''
  && isset($_POST['last_name']) && $_POST['last_name'] !== ''
  && isset($_POST['username']) && $_POST['username'] !== ''
  && isset($_POST['email']) && $_POST['email'] !== ''
  && isset($_POST['password']) && $_POST['password'] !== ''
  && isset($_POST['confirm']) && $_POST['confirm'] !== ''
) {
  echo "1111";
  // if ($_POST['password'] === $_POST['confirm']) {
  //   echo "Match.";
  // } else {
  //   $err = "Password does not match.";
  // }
} else {
  echo "222222";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/styles/main.css">
  <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
  <title>Link 2 Short</title>
</head>

<body>
  <section id="header" class="bg-primary shadow-lg d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-6 logo d-flex justify-content-start align-items-center">
          <img src="assets/logo.png" alt="logo" width="60px" />
          <span class="text-light mx-3">Li2S <sub>a small, smart, simple link shortener.</sub></span>
        </div>
        <div class="col-6 d-flex justify-content-end align-items-center">
          <div class="out">
            <a href="#" class="text-light text-decoration-none">Register<i class="uil uil-folder-check ms-1"></i></a>
            <span class="mx-2 text-light">/</span>
            <a href="#" class="text-light text-decoration-none">Login<i class="uil uil-left-arrow-to-left ms-1"></i></a>
          </div>
          <div class="in">
            <a href="#" class="text-light text-decoration-none">Hello <span>Nima</span><i class="uil uil-user ms-1"></i></a>
            <span class="mx-2 text-light">/</span>
            <a href="#" class="text-light text-decoration-none">Logout<i class="uil uil-arrow-from-right ms-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="main" class="d-flex flex-column justify-content-center align-items-center">
    <main class="form-register w-50">
      <form action="./register.php" method="POST">
        <h1 class="h3 mb-3 fw-normal">Register</h1>
        <?php
        if ($err !== "") {
          echo '<div class="alert alert-danger" role="alert">' . $err . '</div>';
        };
        ?>
        <div class="row mb-3">
          <div class="form-floating col">
            <input type="text" class="form-control" id="first_name" name="first_name" require placeholder="first_name" autocomplete="off">
            <label for="first_name" class="px-4">First Name</label>
          </div>
          <div class="form-floating col ps-1">
            <input type="text" class="form-control" id="last_name" name="last_name" require placeholder="last_name" autocomplete="off">
            <label for="last_name" class="px-4">Last Name</label>
          </div>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="username" name="username" require placeholder="username" autocomplete="off">
          <label for="username">Username</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" require placeholder="name@example.com" autocomplete="off">
          <label for="email">Email</label>
        </div>
        <div class="row mb-3">
          <div class="form-floating col">
            <input type="password" class="form-control" id="password" name="password" require placeholder="password" autocomplete="off">
            <label for="password" class="px-4">Password</label>
          </div>
          <div class="form-floating col ps-1">
            <input type="password" class="form-control" id="confirm" name="confirm" require placeholder="confirm" autocomplete="off">
            <label for="confirm" class="px-4">Confirm</label>
          </div>
        </div>
        <buttom class="w-100 btn btn-lg btn-primary" type="submit">Register</buttom>
      </form>
    </main>
  </section>
</body>

</html>