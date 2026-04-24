<?php
require __DIR__ . '/../src/greet.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["username"];
    echo greet($name);
}

try {
    $pdo = new PDO('pgsql:host=db;dbname=camagru', 'user', 'pass');
}
catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}

$statement = $pdo->prepare("SELECT * FROM users");
$statement->execute();
var_dump($statement->fetchAll());

require '../src/views/index.view.php';
?>
