<?php

class Connection {

    public static function make() {
        try {
            return new PDO('pgsql:host=db;dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASS'));
        }
        catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            exit;
        }
    }
}