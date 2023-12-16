<?php
session_start();
require 'helper.php';
session_destroy();
redirect('login.php');
