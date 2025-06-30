<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD- Delete</title>
</head>
<body>

<?php

// inclure le fichier configuration
include"./db/config.php";


//creer la connexion

$cnx = new PDO (DSN, USER, PASSWORD);

// creer la requete 
$sql = "DELETE FROM stagiaire WHERE nom=:nom";

// preparer la requete 

$stmt = $cnx ->prepare($sql);

//fixer la valeur pour le placeholders(parametre)

$stmt->bindValue("nom", "Chloé");

// executer la  requete

$stmt->execute();

// afficher ls erreurs possible

var_dump(($stmt->errorInfo()));





?>
    
</body>
</html>