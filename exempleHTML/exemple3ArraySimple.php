<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Simple</title>
</head>
<body>
    <?php
//    <!-- array Simple  -->
    
    // creaction
    $noms = ["SA", "OR", "Ay"];

    // modification 
    $noms[1] = "LI";

    // effacer un element 
    unset($nom[0]);
    //rajouter un élément

    $nom[]= "EM";

    //parcourir avec une boucle 

    foreach($noms as $key => $value){
        print("<br>" . $value);
    }

    // array associatif => dictionnaire python

    $client = [
        "nom" => "Dupont",
        "prenom" => "Emelie",
        "Gsm" => "0032458265125",
        "actif" => true,
    ];
    foreach($client as $key => $value){
        print("<br>" . $key ": " . $value);
    }
    ?>

    
</body>
</html>