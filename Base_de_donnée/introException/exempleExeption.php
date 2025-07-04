<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// ancienne pratique 
$division = function (float $v1, float $v2) :?float {
    if($v2 !=0){
    return  $v1 / $v2;
    }
    else{
        return null;
    }
};
echo "la division: ".$division(9,8);
echo " <br>la division: ".$division(4,0);
echo "<br> la division: ".$division(10,5);

// nouvelle pratique avec exption

$division1 = function (float $v1, float $v2) :?float {
    if($v2 !=0){
    return  $v1 / $v2;
    }
    else{
        throw new Exception("Division pa zéro");
    }
};
try {
    $div = $division1(4,0);
}
catch(Exception $e){
    echo "une exeption s'est produit";
    echo $e ->getMessage();
}
echo "on continue";

// soit rediriger vers une autre page ou 
// faire afficher un msg et avec un die 


// autre exemple 
// connexion a une bd 
// le throw exception est provoqué 















?>
    
</body>
</html>