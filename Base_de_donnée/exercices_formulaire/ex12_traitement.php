<?php



var_dump($_POST);

$prix = $_POST['prix'];
$mode_paiement = $_POST['mode_paiement'];

if ($mode_paiement == "mastercard") {
    echo "Prix total:" .  ($prix + 5) . "€";
} else if ($mode_paiement == "Visa") {
    echo "prix toral:" . ($prix + 3) . "€";
} else {
    echo "mode de paiment non valide";
}
