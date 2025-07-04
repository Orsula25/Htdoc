<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
function prixTtc($prix){
     $calcul = ($prix * (0.21));
     return($calcul);
}

$prixTotal = prixTtc(100); 

echo "le montant TVA est de " . $prixTotal ." €"







?>
    
</body>
</html>