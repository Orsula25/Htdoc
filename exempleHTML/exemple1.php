<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bonjour je suis une page hebergée dans le serveur Apache!
    <p id="paragraphe-1">je suis un texte....</p>

    <?php

        print("Hello!");

    ?>
    <br> encore du <html>
    <h4>Salut</h4>
    <?php

        print("tout va bien");
    ?>
    
</body>
<script>
    // prompt("tout va exploser")
    document.addEventListener("click", function(){
        alert("on a fait click");
        document.getElementById("paragraphe-1").innerHTML
         = "<h2> Je change !!!</h2>";
    });
</script>
</html>