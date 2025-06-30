<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enregister</title>
</head>
<body>

<?php

var_dump($_POST);

//0stocker le post dans des variable
$nom = $_POST['nom'];
$email = $_POST['Email'];
$password = $_POST['password'];
$confirmationpassword = $_POST['confirmationpassword'];



//1. filtrer les variable




//2vérification(taille, concordance de pass ...)

$erreurs = "";



if ($password != $confirmationpassword){
    $erreurs = $erreurs ."<h5>Les passwords ne correspondent pas </h5>";
   
}
if(mb_strlen($password) < 8){
       $erreurs = $erreurs ."<h5>Les passwords doit avoir 8 caractères </h5>";

}


// si tout va enregister dans la bd

// print("<br> ici on enregistre");

//a. si il ya des erreurs afficher toutes les erreurs 

if (mb_strlen($erreurs) > 0){
    header("location:./register.php?listeErreurs=". $erreurs);

}

// print("<br> Ici on montre les erreurs");



?>


    
</body>
</html>