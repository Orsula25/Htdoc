<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserer dans la base de donnée </title>
</head>
<body>

<?php

//inserer un element dans la base de donnée 
include"./db/config.php";

//créer un  objet de connexion 

$scx = new PDO(DSN, USER, PASSWORD);

// Creer une requete

$sql = "INSERT INTO stagiaire (id, nom, dateNaissance, hobby) VAlUES (null, :nom, :dateNaissance, :hobby)";


//preparer la requete 

$stmt = $scx ->prepare($sql);

//fixer les valeurs pour les placeholders

$stmt -> bindValue(":nom", "Chloé");
$dateNaissance =new DateTime("3-11-1991");
$dateNaissanceString = $dateNaissance->format("Y-m-d");
// print($dateNaissanceString);
$stmt -> bindValue (":dateNaissance", $dateNaissanceString);
$stmt -> bindValue(":hobby", "Lire");

//lancer la requete

$stmt ->execute();

var_dump($stmt-> errorInfo());












?>
    
</body>
</html>