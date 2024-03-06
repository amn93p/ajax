<?php

if (!empty($_POST["login"]) && !empty($_POST["password"])){
    echo "L'identifiant tapé est ". $_POST["login"]. "<br>";
    echo "Le mot de passe tapé est ". $_POST["password"]. "<br>";
}
else{
    echo "Veuillez entrer les informations requises. ";

}
?>
