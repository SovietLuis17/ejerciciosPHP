<?php
$isLoggedIn = false;

$showLoginButton = !$isLoggedIn;
var_dump($showLoginButton); // bool(true)

$isLoggedIn = true;
$showLoginButton = !$isLoggedIn;
var_dump($showLoginButton); // bool(false)
?>