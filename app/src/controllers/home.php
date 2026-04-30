<?php

require __DIR__ . '/../core/validateUser.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['mail'] ?? '';
    $name = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $errors = validateUser($email, $name, $password, $query);
    if (empty($errors)) {
        $query->insert($email, $name, password_hash($password, PASSWORD_DEFAULT));
        header('Location: /db');
        exit ;
    }
}

require __DIR__ . '/../views/home.view.php';