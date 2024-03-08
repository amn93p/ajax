<?php

$id = $_GET["id"] ?? null;

if ($id) {
    $pdo = new PDO("mysql:host=localhost;dbname=poles", "root", "");

    $pdostatement = $pdo->prepare("SELECT * FROM livre WHERE id = :id");
    $pdostatement->bindValue(":id", $id);
    $result = $pdostatement->execute();
    if ($result) {
        if ($pdostatement->rowCount() == 1) {
            $livre = $pdostatement->fetch(PDO::FETCH_ASSOC);
            echo json_encode($livre);
            exit;
        } else {
            http_response_code(404);
            exit;
        }
    }
}
http_response_code(500);

