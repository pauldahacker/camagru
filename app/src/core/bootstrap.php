<?php

require __DIR__ . '/../core/database/Connection.php';
require __DIR__ . '/../core/database/QueryBuilder.php';
require __DIR__ . '/../core/Router.php';

$query = new QueryBuilder(Connection::make());
$query->createUsersTable();

return $query;

