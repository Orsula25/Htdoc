<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

Bonjour



<?php

var_dump($_GET);

$prenom = trim(mb_strtolower($_GET['prenom']));
$nom = trim(mb_strtolower($_GET['nom']));

print("Bonjour, " .$nom);
if (($prenom == 'orsula') && ($nom == 'karmous')){
    print("Que la force soi avec toi, " .$nom);
    print ('<a href="https://www.starwars.com/">starwars</a>');

}

else {
    print("tu ne passera pas ");
}





   


?>
</body>
</html>