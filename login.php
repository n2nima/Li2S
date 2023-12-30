<?php
require 'func/_connect.php';
require 'func/helper.php';
$err = '';
global $conn;

if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
  unset($_SESSION['user']);
}

if (
  isset($_POST['email']) && $_POST['email'] !== ''
  && isset($_POST['password']) && $_POST['password'] !== ''
) {
  $query = 'SELECT * FROM li2s.users WHERE email = ?';
  $statement = $conn->prepare($query);
  $statement->execute([$_POST['email']]);
  $user = $statement->fetch();
  if ($user !== false) {
    if (password_verify($_POST['password'], $user->password)) {
      $_SESSION['user'] = "nima";
      redirect('panel.php');
    } else {
      $err = "Email or Password incorrect.";
    }
  } else {
    $err = "Email or Password incorrect.";
  }
} else {
  if (!empty($_POST)) {
    $err = "Please fill all inputs.";
  }
}

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
    <main class="form-register w-50">
      <form action="<?= url('panel.php') ?>" method="POST">
        <h1 class="h3 mb-3 fw-normal">Login</h1>
        <?php
        if ($err !== "") {
          echo '<div class="alert alert-danger" role="alert">' . $err . '</div>';
        };
        ?>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" require placeholder="username" autocomplete="off">
          <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" name="password" require placeholder="password" autocomplete="off">
          <label for="password" class="px-4">Password</label>
        </div>
        <input class="w-100 btn btn-lg btn-primary" type="submit" value="Login"></input>
      </form>
    </main>
  </section>
</body>

</html>