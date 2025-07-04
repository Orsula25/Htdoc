<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercice:12 </title>
</head>

<body>
    <form action="./ex12_traitement.php" method="POST" name="Paiement">

        <div>
            <label for="prix">Saisir le montant</label>
            <input type="number" id="prix" name="prix" placeholder="Saissez le montant..." require>
        </div>

        <div>
            <label for="mode_paiement">Choisir le mode de paiment</label>
            <select name="mode_paiement" id="mode_paiement" require>
                <option value="mastercard">mastercard</option>
                <option value="Visa">Visa</option>
                <option value="bancontact">bancontact</option>
                <option value="paypal">Paypal</option>
            </select
                </div>

            <div>
                <button type="submit">Payer</button>
            </div>









    </form>


</body>

</html>