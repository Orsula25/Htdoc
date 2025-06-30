<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

 //JSON

    //Encoder en JSON-> transformer un objet ou un array ou un array d'objet en sting Json

    // plusieur exemple, json notation des arrets 
     $song = ["Bad" , "Beat it", "Thriller"];
        print(json_encode($song));

    $personne =['nom' => 'Tran',
                'hobby'=> 'danser',
                'adresse'=> 'Bruxelles'];

            print(json_encode($personne));

        $uneDate = new DateTime();
        print(json_encode($uneDate));


        $poeple = [$personne, $personne, $personne];
        print(json_encode($poeple));
    //Decoder en JSON -> Interpreter un string JSON et creer un objet ou un array ou un array d'objet en sting Json //php

?>

<script>

   // le json en js
    let songs = ["Inner visions", "Happy Brithday", "Super"];
    console.log (JSON.stringify(songs));


    
    let personne ={'nom' : 'Tran',
                'hobby': 'danser',
                'adresse': 'Bruxelles'};

            console.log (JSON.stringify(personne));

    // decoder un string JSOn pour creer un objet 

    let film =  '{"titre" : "Alien", "duree": "125"}';
        console.log (JSON.parse(film));
    
    </script>


$response = file_get_contents("https://official-joke-api.appspot.com/jokes/random/5");

var_dump($response);


$resultaDecode = json_decode($response);

print($resultaDecode[2]-> setup);
print($resultaDecode[2]-> punchline);

var_dump(($resultaDecode));




?>

<!-- https://apipheny.io/free-api/ -->

 <!-- exemple en js  -->

<script>



</script>
    


</body>
</html>