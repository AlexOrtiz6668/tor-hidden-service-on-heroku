<?php
    /* Your password */
    $password = 'oNfW6iGdZe0xoEgqak';

    if (empty($_COOKIE['password']) || $_COOKIE['password'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: index.php');
        exit;
    }