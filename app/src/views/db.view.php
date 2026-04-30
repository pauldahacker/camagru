<?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['mail'] ?? '';
//     $name = $_POST['username'] ?? '';
//     $password = $_POST['password'] ?? '';
//     $query->insert($email, $name, $password);
//     echo "User added to database!<br><a href='/'>Go back to home</a><br>";
// }

// else {
//     echo "Please submit the form to add a user to the database." . "<br><a href='/'>Go back to home</a><br>";
// }

var_dump($query->selectAllUsers());