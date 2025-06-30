<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex Formulaires : 08</title>
</head>
<body>

<?php
var_dump($_POST);


$prixTtc = 0;


$prixTtc =($_POST['prix'] * (1 + $_POST['TVA']  / 100));

print($prixTtc);






?>  
</body>
</html>