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

print("<br>Le meeting sera  " . $_GET ['horaire']);

if (isset($_GET['confirmation'])){
    print("<br>RDV confirmer");
}




?>




</body>
</html>