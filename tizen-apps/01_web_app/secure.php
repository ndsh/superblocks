<?php
    /* Your password */
    $password = '123tech';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: interface.php');
        exit;
    }
?>