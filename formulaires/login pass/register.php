<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'enregister</title>
</head>
<body>

<form action="./registertretment.php" method="POST">

<div><label for="nom">Nom</label>
<input type="text" name="nom"></div>


<div><label for="Email">Email</label>
<input type="email" name="Email"></div>

<div><label for="password">Password</label>
<input type="password" name="password"></div>

<div><label for="confirmationpassword">Comfirmez votre  mot de passe</label>
<input type="password" name="confirmationpassword"></div>

<div>
   <button type="submit">Enregistrer</button>
</div>


<?php
 // si erreur, on rederige 

if (isset($_get['listeErreurs'])){
    $listeErreurs = $_GET['listeErreurs'];
    print($listeErreurs);

}

// sinon on continue
//stocker dans la base de donner 


?>














</form>


    
</body>
</html>