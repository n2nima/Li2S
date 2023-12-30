<?php
session_start();

function checkLogin()
{
    if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
        // return true;
        echo "true";
    } else {
        // return false;
        echo "false";
    }
}


checkLogin();
