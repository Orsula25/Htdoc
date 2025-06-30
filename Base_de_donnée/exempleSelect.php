

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //0 Inclure la config
 
    include ("./db/config.php");
 
 
    //1 Créer un objet PDO avec la config + 
    try{
    $cnx = new PDO (DSN,USER,PASSWORD); 
    }
    catch (Exception $exceptionBD){
        echo "<h3>Impossible de connecter à la BD</h3>";
        // echo $exceptionBD->getMessage(); pour débeuger 
        die();
    }

    //2 Créer la requete
 
    $sql = "SELECT nom , hobby  FROM stagiaire";
    //3 preparer la requete
 
    $stmt = $cnx->prepare($sql);
    //4 Lancer la requete
    $stmt->execute();
   
    //5 Mettre les resultats dans un array
 
    $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
    // 6 Afficher les resultat selon les besoins
 
    var_dump ($resultat);

    // afficher les donnée en liste <ul>

    print ("<ul>");
    foreach($resultat as $key => $stagaire){
       print ("<li>" .$stagaire['nom']. "</li>");
    }


    print ("</ul>");


    // selectionner que les personne qui aime lire 
    $sql = "SELECT nom , hobby  FROM stagiaire WHERE stagiaire.hobby=hobby";
    $stmt -> bindValue(":hobby", "Lire");


    ?>

  

</body>
</html>
    
