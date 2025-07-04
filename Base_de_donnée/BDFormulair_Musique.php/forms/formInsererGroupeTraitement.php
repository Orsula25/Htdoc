<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement formulaire</title>
</head>
<body>

<?php 

// recuperer les données du formulaire 

var_dump($_POST);
var_dump($_FILES);

// creer un nom du ficher 
$dossier = "../db/images";
$nomFichierDisque = $dossier ."/" . uniqid().date("y,m,d").$_FILES['photoGroupe']['name'];


if($_FILES['photoGroupe']['size']/1000000>5)
    throw new Exception(("Accès interdit"));

(move_uploaded_file($_FILES['photoGroupe']['tmp_name'], $nomFichierDisque));

var_dump($nomFichierDisque);




//connecter à la bd
include "../db/config.php";

//creer la connexions
$cnx = new PDO(DSN,USER,PASSWORD);

//creer une requete 
// trier par ordre alphabétique (nom ASC)

$sql = "INSERT INTO groupes (id, nom, annee_formation, lienImage, style_id) VAlUES (null, :nom, :annee_formation, :lienImage, :style_id)";



// preparer la requete 

$stmt = $cnx ->prepare($sql);

//executer la requete 
$stmt->bindValue(":nom", $_POST['nom']);
$stmt->bindValue(":annee_formation", $_POST['annee_formation']);
$stmt->bindValue(":lienImage", ""); // rajouter le lien image apres
$stmt->bindValue(":style_id", $_POST['style_id']);

$stmt ->execute();
// stocker les valeur dans un array

var_dump(($stmt->errorInfo()));


?>

    
</body>
</html>