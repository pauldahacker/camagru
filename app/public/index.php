<?php
require __DIR__ . '/../src/greet.php';

$query = require __DIR__ . '/../src/core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = Router::load('routes.php');

require $router->direct($uri);

// var_dump($query->selectAllUsers());

?>
