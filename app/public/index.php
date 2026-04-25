<?php
require __DIR__ . '/../src/greet.php';

try {
        $pdo = new PDO('pgsql:host=db;dbname=camagru', 'user', 'pass');
    }
    catch (PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
        exit;
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['mail'] ?? '';
    $name = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $addstatement = $pdo->prepare("INSERT INTO users (mail, username, password) VALUES (?, ?, ?)");
    $addstatement->execute([$email, $name, $password]);
    $statement = $pdo->prepare("SELECT * FROM users");
    $statement->execute();
    var_dump($statement->fetchAll());
}



$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
var_dump($statement->fetchAll());

require '../src/views/home.view.php';
?>
