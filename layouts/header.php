<?php
require_once "func/helper.php";
?>
<section id="header" class="bg-primary shadow-lg d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-6 logo d-flex justify-content-start align-items-center">
                <img src="<?= assets('assets/logo.png') ?>" alt="logo" width="60px" />
                <span class="text-light mx-3">Li2S <sub>a small, smart, simple link shortener.</sub></span>
            </div>
            <div class="col-6 d-flex justify-content-end align-items-center">
                <div class="out">
                    <a href="./register.php" class="text-light text-decoration-none">Register<i class="uil uil-folder-check ms-1"></i></a>
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