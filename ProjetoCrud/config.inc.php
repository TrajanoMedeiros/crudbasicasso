<?php
$host = "localhost";
$dbname = "crudsql";
$user = "mysql";
$pass = "123";

try{
    $pdo = new
    PDO("mysql:host=$host;dbname=$dbname;chars et=utf8", $user, $pass);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    die("Erro ao conectar ao banco: " . $e->getMessage());
}

