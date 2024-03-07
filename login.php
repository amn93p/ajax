<?php

if (!empty($_POST["login"]) && !empty($_POST["password"])) {
    echo "L'identifiant tapé est " . $_POST["login"];
    echo "Le mot de passe tapé est " . $_POST["password"];
$login = $_POST["login"];
$password = $_POST["password"];

    if ($login == "aladin") {
        if ($password == "sesame") {
            echo "<div class='alert alert-success'>Bonjour Aladin, vous êtes connecté</div>";
        } else {
            echo "<div class='alert alert-danger'>Le mot de passe ne correspond pas</div>";
            http_response_code(403);
        }
    } else {
        echo "<div class='alert alert-danger'>Le login n'existe pas dans la base de données</div>";
    }
}
