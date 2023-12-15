<?php

// config
define('BASE_URL', 'http://localhost/li2s/');

function redirect($url)
{
    header('location: ' . trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}

function assets($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}

function url($url)
{
    return trim(BASE_URL, '/ ') . '/' . trim($url, '/ ');
}
