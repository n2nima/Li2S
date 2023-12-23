<?php
require 'helper.php';
session_destroy();
redirect('login.php');
