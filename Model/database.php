<?php

$dsn = 'mysql:host=localhost;dbname=phpmvc;charset=utf8';
$username = 'root';
$password = 'mot de passe';


try {
    $db = new PDO($dsn, $username);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur de connexion :' . $e->getMessage();
}