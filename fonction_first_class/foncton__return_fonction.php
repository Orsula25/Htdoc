<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

// fonction sans first class (foncyion normal)
$tab = ['Annie', 'Anais', 'Ceren', 'Orsula'];

function afficheArrayUL(array $tab):void
{
    echo "<ul>";
    foreach($tab as $key => $nom){
        echo"<li>" .$nom . "</li>";
    }
    echo "</ul>";

}

// fonction creer un select (fonction normal)
// les options sont les element du tableau 

function creerSelect(array $tab):void{
    echo"<select>";
    foreach($tab as $key => $nom){
        echo "<option>" . $nom . "</option>";

    }
    echo "</select>";
}
//utlisier les fonction
afficheArrayUL($tab);
creerSelect($tab);



$tab2 = ['Annie', 'Anais', 'Ceren', 'Orsula'];
//fonction qui génére des fonctins d'affichage 

switch ($typeFonction) {
            case "UL":
                // print("On génère une fonction pour afficher en UL");
                return (function (array $tab) {
                return (function (array $tab, string $message = "hello") {
                    echo "<h5>" . $message . "</h5>";
                    echo "<ul>";
                    foreach ($tab as $key => $nom) {
                        echo "<li>" . $nom . "</li>";

        };
            echo "</ul>";
    break;

     }
};
        case "SELECT":
            print ("on gènère une fonction pour afficher un select");
             return function (array $tab2){
            echo"<select>";
            foreach($tab2 as $key => $nom){
            echo "<option>" . $nom . "</option>";

        }
            echo "</select>";
            break;
    };
    


// on utlise le générateur pour creer unef onction qui nous convient 
// $maFonctionSelect = generateurFonctionAffichage("SELECT");
// $maFonctionSelect ($tab2);
$maFonctionUL = generateurFonctionAffichage("UL");
$maFonctionUL($tab2, 'lolo');
generateurFonctionAffichage("SELECT")($tab2);


?>
    
</body>
</html>