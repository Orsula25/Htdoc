<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire : ex amazone</title>
</head>
<body>
<?php
$categories =['Jardin',' Livre', 'Cuisine', 'Ordinateur', 'Sports'];

?>

<form action="./form_amazone_traitment.php" method="Post">

<select name="categorie" id="">
    <?php

    foreach ($categories as $key => $categorie) {
            print("<option value='" . $categorie ."'>" . $categorie . "</option> ");
    };



    ?>
    <input type="text" name="termeRecherche" placeholder="Rechercher">
    <input type="submit" value="Envoyer">


    </select>






</form>
</body>
</html>