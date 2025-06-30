<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    
Je suis la page de traitement du formulaire

    <?php

        $chanson = ['titre' => 'ou es-tu papa',
        'durée' => 240,
        'compositeur' => 'Stromae'];

        var_dump($chanson);

        if($chanson ['durée']>240){
        print("<br>wow c'est trop long");
        }
        else{
        print("<br> la durée est ok");
        }



        // <!-- // toutes les données du form sont accéssible dans un array, par défaut $get  (au lieu de chanson, par exemple) -->

        var_dump($_GET);

        if($_GET['age']> 18){
            print("<br>Bienvenue!");
        }

        else{
            print("<br>Accès interdit!");
        }

    ?>
</body>
</html>