<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Db update</title>
</head>
<body>

<?php

// inclure le fichier configuration
include"./db/config.php";

// creer la connexion

$cnx = new PDO (DSN, USER,  PASSWORD);

// CREER LA REQUETE 

$sql = "UPDATE stagiaire SET nom=:nom WHERE id=:id";

//preparer la requete 
$stmt = $cnx->prepare($sql);

// fixer la valeur pour le placeholders (nom)

$stmt->bindValue("nom", "Yulia");
$stmt->bindValue("id", 1);
// executer la  requete

$stmt->execute();


?>
    
</body>
</html>