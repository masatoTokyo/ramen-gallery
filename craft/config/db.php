<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */


$dev = array(
    'server' => 'localhost',
    'user' => 'homestead',
    'password' => 'secret',
    'database' => 'ramengallery_dev');

$staging = array(
    'server' => 'localhost',
    'user' => 'ramengallery',
    'password' => 'EsYPNCf3cJWsYj4L',
    'database' => 'ramengallery_staging');

return array(
    '*' => array(
        'tablePrefix' => 'craft',
    ),
    '.app' => $dev,
    'localhost' => $dev,
    '192.168.10.10' => $dev,
    'sekkithub.com/ramen-gallery' => $staging,
    'www.sample.com' => $production
);