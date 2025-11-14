<?php

$_SESSION['user'] = 'bonDia';
$_SESSION['email'] = 'toni@sisi.com';

view("index.view.php", [
    'heading' => 'Home'
]);