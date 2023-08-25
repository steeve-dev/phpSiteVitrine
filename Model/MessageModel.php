<?php

require_once '../Model/database.php';

function getMessage(){
    global $db;

    $query = "SELECT id, titre, content FROM messages";
    $stmt = $db->query($query);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}