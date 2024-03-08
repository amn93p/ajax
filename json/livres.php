<?php 

$pdo =  new PDO('mysql:host=localhost;dbname=poles;charset=utf8', 'root');

$pdostatement= $pdo->query("SELECT * FROM livre");

$livres = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

$livres = json_encode($livres);


echo $livres;