<?php
require 'func/_connect.php';
require 'func/helper.php';
$err = '';
global $conn;
if (
  isset($_POST['first_name']) && $_POST['first_name'] !== ''
  && isset($_POST['last_name']) && $_POST['last_name'] !== ''
  && isset($_POST['username']) && $_POST['username'] !== ''
  && isset($_POST['email']) && $_POST['email'] !== ''
  && isset($_POST['password']) && $_POST['password'] !== ''
  && isset($_POST['confirm']) && $_POST['confirm'] !== ''
) {
  if ($_POST['password'] === $_POST['confirm']) {
    if (strlen($_POST['password']) >= 8) {
      $query = 'SELECT * FROM li2s.users WHERE email = ?';
      $statement = $conn->prepare($query);
      $statement->execute([$_POST['email']]);
      $user = $statement->fetch();
      if ($user === false) {
        $query = 'INSERT INTO li2s.users SET first_name = ? , last_name = ? , username = ? , email = ? , password = ? , created_at = NOW();';
        $statement = $conn->prepare($query);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $statement->execute([$_POST['first_name'], $_POST['last_name'], $_POST['username'], $_POST['email'], $password]);
        redirect('login.php');
      } else {
        $err = "a user registerd by this email. try login.";
      }
    } else {
      $err = "Password must contain 8 characters.";
    }
  } else {
    $err = "Password does not match.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= assets('assets/styles/main.css') ?>" />
  <link rel="shortcut icon" href="<?= assets('assets/logo.png') ?>" type="image/x-icon" />
  <title>Link 2 Short</title>
</head>

<body>
  <?php require_once 'layouts/header.php'; ?>
  <section id="main" class="d-flex flex-column justify-content-center align-items-center">
    <main class="form-register w-50">
      <form action="<?= url('register.php') ?>" method="POST">
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
        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Register"></input>
      </form>
    </main>
  </section>
</body>

</html>