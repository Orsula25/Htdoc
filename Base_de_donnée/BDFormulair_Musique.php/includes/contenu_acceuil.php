<?php

// obtenir des groupes

//inclure config
include "./db/config.php";

//creer la connexions
$cnx = new PDO(DSN,USER,PASSWORD);

//creer une requete 

$sql = "SELECT * FROM groupes ORDER BY RAND()LIMIT 10";


// preparer la requete 

$stmt = $cnx ->prepare($sql);

//executer la requete 

$stmt ->execute();
// stocker les valeur dans un array

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);



// afficher les groupes avec de cartes
foreach($res as $cle =>$arraygroupe){

print('<div class="card" style="width: 18rem;">');
print('<img class="card-img-top" src = "./images/'. $arraygroupe['lienImage']. '"alt="Card image cap">');
print('<div class="card-body">');
print('<h5 class="card-title">' . $arraygroupe ['nom'] .'</h5>');
print('<p class="card-text">Description</p>');
print('<a href="./includes/affichageMorceaux.php? idGroupe=' .$arraygroupe['id'] . '" class="btn btn-primary">Go somewhere</a>');
print('</div>');
print('</div>');

};









?>