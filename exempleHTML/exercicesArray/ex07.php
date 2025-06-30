    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    // # solution foreach 
    $Array= range(1, 200);
    $doubleArray = [];
        foreach($Array as $value){
            $doubleArray[] = $value * 2;

    }


    var_dump($doubleArray);

    // #solution for 

    // $doubleArray = [];

    // for($value = 0; $value < 200; $value += 1){
    //     $doubleArray []= $value * 2;
    // }

    // print_r($doubleArray);

?>
    
</body>
</html>
    





