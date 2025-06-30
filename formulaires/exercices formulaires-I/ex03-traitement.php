<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

var_dump($_GET);

$userNumber = $_GET['nbr'];

$number = mt_rand(1,3);


if($userNumber == $number){
   // a terminer ;
}

else{
    print("Erreur!!!" . $number);
    print("recommencez <a href='./ex03.php'>Cliquez-ici</a>");
}





?>
    
</body>
</html>