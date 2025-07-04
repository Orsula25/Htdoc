
<?php



function prixTtc(array $tab){

    $resultats = [];
    foreach($tab as $value){
     $calcul = ($value * 1.21);

    $resultats[] = $calcul ;
    };

    return($resultats);
  
}




$tab = [20, 100, 30, 50]; 

$resultat = prixTtc($tab);

var_dump($resultat);














?>