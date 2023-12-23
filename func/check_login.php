<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
    redirect('login.php');
} else {
    echo "err.";
}
