<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// création du tableau 
$prix = array(10, 20, 50);

//affichage du contenu

print_r($prix);

$prix[] = 70;
$prix[] = 88;

print_r($prix);


?>
</body>
</html>