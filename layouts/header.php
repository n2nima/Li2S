<?php
session_start();
require_once "func/helper.php";
?>
<section id="header" class="bg-primary shadow-lg d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-6 logo d-flex justify-content-start align-items-center">
                <img src="<?= assets('assets/logo.png') ?>" alt="logo" width="60px" />
                <h4 class="text-light mx-3">Li2S</h4>
                <span class="text-light">a small, smart, simple link shortener.</span>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user'] === true) {
                ?>
                    <div class="in">
                        <a href="#" class="text-light text-decoration-none">Hello <span>Nima</span><i class="uil uil-user ms-1"></i></a>
                        <span class="mx-2 text-light">/</span>
                        <a href="<?= url('func/logout.php') ?>" class="text-light text-decoration-none">Logout<i class="uil uil-arrow-from-right ms-1"></i></a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="out">
                        <a href="./register.php" class="text-light text-decoration-none">Register<i class="uil uil-folder-check ms-1"></i></a>
                        <span class="mx-2 text-light">/</span>
                        <a href="login.php" class="text-light text-decoration-none">Login<i class="uil uil-left-arrow-to-left ms-1"></i></a>
                    </div>
                <?php
                }
                ?>




            </div>
        </div>
    </div>
</section>