<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php


var_dump($_GET);

if (isset($_GET['age'])) {
    $age = $_GET['age'];

    if(isset($_GET['prenom'])){
        $prenom = $_GET['prenom'];

   
    }
}

print("<br> Bienvenue! $prenom vous avez $age ans");



?>
</body>
</html>