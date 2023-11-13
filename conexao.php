<?php
$host ="localhost";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS jogos_db");
    $pdo->exec("USE jogos_db");

    $pdo->exec("CREATE TABLE IF NOT EXISTS jogos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        plataforma VARCHAR(255) NOT NULL,
        genero VARCHAR(255) NOT NULL
        )");
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: ".$e->getMessage());
};