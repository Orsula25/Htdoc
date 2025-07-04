<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex: 06 cinema</title>
</head>

<body>




    <form action="./ex06_cinema_traitement.php" method="POST" name="cinema">
        <div>
            <label for="age">Entrez votre âge</label>
            <input type="number" id="age" name="age" placeholder="Saissez votre âge..." require>
        </div>

        <div>
            <label for="statut">Statut</label>
            <select name="statut" id="statut" require>
                <option value="etudiant">Étudiant</option>
                <option value="pas_etudiant">Pas Étudiant</option>
            </select>
        </div>

        <div>
            <button type="submit">valider</button>
        </div>


    </form>





</body>

</html>