<?php

function validateUser($email, $username, $password, $query) {
    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    if (strlen($username) < 3 || strlen($username) > 20) {
        $errors['username'] = 'Username must be 3-20 characters';
    }
    if (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters';
    }
    if ($query->emailExists($email)) {
        $errors['email'] = 'Email already registered';
    }
    if ($query->usernameExists($username)) {
        $errors['username'] = 'Username already taken';
    }
    return $errors;
}