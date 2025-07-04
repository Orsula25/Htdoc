<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>
//creer une fonction simple

function somme (val1, val2){
    return val1 + val2;
};

let rep = somme(10,20); 
console.log(rep)

// frist class 
// mettre une fonfonction dans la variable 
let mutiplicatin = function (val1 , val2){
    return(val1 * val2);
};
let res2 = mutiplicatin(10,12);
console.log(`res2 = ${res2}`);

// envoyer la fonction en parametre 

let tab = ["rouge", "vert", "noir", "jaune"];

function majuscules (chaine){
    console.log (chaine.toUpperCase());
}

tab.map(majuscules);

</script>
    
</body>
</html>