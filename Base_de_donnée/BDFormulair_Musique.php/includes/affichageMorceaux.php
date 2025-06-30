<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


Ici on aura l'affichage des morceaux du groupe selectioné!

<?php
// récuperer l'id du groupe 
$idGroupe = $_GET['idGroupe'];



// obtenir les moreaux du groupe et les afficher 


//inclure config
include "../db/config.php";

//creer la connexions
$cnx = new PDO(DSN,USER,PASSWORD);

//creer une requete 

$sql = "SELECT * FROM morceaux WHERE groupe_id=:groupe_id";
// preparer la requete 
$stmt = $cnx ->prepare($sql);

//fixer les placeholders 
$stmt ->bindValue(":groupe_id", $idGroupe);
//executer la requete 
$stmt ->execute();
// stocker les valeur dans un array

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);



foreach($res as $cle => $morceau){
    print ('<h3>' . $morceau['titre'] . '</h3>');
    print ('<h3>' . $morceau['annee_sortie'] . '</h3>');
    

};

var_dump($res);

?>
</body>
</html>