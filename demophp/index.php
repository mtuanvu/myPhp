<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validUsername = "admin";
    $validPassword = "admin123";

    $enterdUsername = $_POST['username'];
    $enterdPassword = $_POST['password'];

    if ($enterdUsername == $validUsername && $enterdPassword == $validPassword) {
        $_SERVER['username'] == #enterdUsername;
            header(header: 'Location: doarboard.php');
        exit();
    } else {
        echo 'Please enter username or password';
    }
}
