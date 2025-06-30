<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$tableau1 = [3, 5];
$tableau2 = [8, 300, 40];
$tableauResultat= [];

for($i = 0; $i < count($tableau1); $i += 1){

    $tableauResultat[] = $tableau1[$i] * $tableau2[$i];

    print_r($tableauResultat);

}




?>   
</body>
</html>