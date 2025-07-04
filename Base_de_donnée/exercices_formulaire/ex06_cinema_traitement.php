

<?php


var_dump($_POST);


$age = $_POST['age'];

$statut = $_POST['statut'];

$prix = 8;

$reduc = $prix * (20 / 100);

if ($age < 12) {
    echo "le prix est de 4 euro";
} else if ($statut == 'etudiant') {
    echo $prix - $reduc;
} else {
    echo "Le prix est de 8 euro";
}










?>