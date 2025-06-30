<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice formulaire: 08</title>
</head>
<body>
<form action="./ex08-traitement.php" method="POST">

    <label for="prix">Prix HTVA</label>
    <input type="number" name="prix">
    <br>
    <br>
    <label for="TVA">Section</label>
    <select name="TVA" id="TVA">
        <option value="0">0%</option>
        <option value="6">6%</option>
        <option value="12">12%</option>
        <option value="21">21%</option>
    </select>
    <br>
    <br>
    <button type="submit">Calculer</button>
</form>
    
</body>
</html>