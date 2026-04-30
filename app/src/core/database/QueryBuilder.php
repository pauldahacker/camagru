<?php

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAllUsers() {
        $statement = $this->pdo->prepare("SELECT * FROM users");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($email, $username, $password) {
        $addstatement = $this->pdo->prepare("INSERT INTO users (mail, username, password) VALUES (?, ?, ?)");
        $addstatement->execute([$email, $username, $password]);
    }

    public function createUsersTable() {
        $statement = $this->pdo->prepare("CREATE TABLE IF NOT EXISTS users (
            id SERIAL PRIMARY KEY,
            mail VARCHAR(255) NOT NULL UNIQUE,
            username VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL)");
        $statement->execute();
    }

    public function emailExists($email) {
        $statement = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE mail = ?");
        $statement->execute([$email]);
        return $statement->fetchColumn() > 0;
    }

    public function usernameExists($username) {
        $statement = $this->pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
        $statement->execute([$username]);
        return $statement->fetchColumn() > 0;
    }
}