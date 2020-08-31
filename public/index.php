<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Mateo Belini', 'email' => 'mateo@belini.com']);
print_r($user);
$user->email = "mateobelini@email.com";
print_r($user->email);