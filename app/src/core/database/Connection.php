<?php

class Connection {

    public static function make() {
        try {
            return new PDO('pgsql:host=db;dbname=camagru', 'user', 'pass');
        }
        catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            exit;
        }
    }
}