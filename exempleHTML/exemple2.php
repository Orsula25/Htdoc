<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple 2</title>
</head>
<body>
    <h1>exemple 2</h1>
    <?php
    $produits = [
        'ananas' => 4,
        'pommes' => 5,
        'oranges' => 2.5,
        
    ];

    foreach($produits as $nom => $prix){
        print("<br>les " . $nom . " coûtent " . $prix ." euros ");
    }

    var_dump($produits);
    ?>
    
</body>
</html>