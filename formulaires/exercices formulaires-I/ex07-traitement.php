<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


//faire un var_dump
var_dump($_POST);

//mettre l'animal choisi dans une variable 

$nomAnimal = $_GET['animal'];

//afficher l'mage de l'animal choisi

if(isset($_GET['animal']));{
    $animal = $_GET['animal'];

    print  ('<img src="assets/css/img/chat.jpg" alt="image">')>

}



?>    
</body>
</html>