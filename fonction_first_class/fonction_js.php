<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
    let tab = ['Annie', 'Anaïs', 'Ceren', 'Orsula'];

    // function qui génére une fonction 
    // et la renvoie
    function genererFonctionAffichage(typeFonction)
    {
        switch (typeFonction) {
            case "UL":
                // print("On génère une fonction pour afficher en UL");
                return (function (tab, message = "hello") {
                   document.write( "<h5>" + message + "</h5>");
                     document.write ( "<ul>");

                    tab.forEach (function(nom){ 
                        document.write("<li>" + nom + "</li>");
                    });

                    // autre fonction (fonction fleché)

                    tab.forEach ((nom) =>{
                        console.log(nom);
                    })
                    //  autre facon d'ecrire une fléché
                    tab.forEach(nom => console.log(nom))

                    //fonctin fléché avec return!
                    tab.forEach(nom => nom)


                    
                    // foreach ($tab as $key => $nom) {
                    //     console.log ( "<li>" + nom + "</li>";
                    
                    document.write ( "</ul>");
                });
                break;
            case "SELECT":
                // print("On génère une fonction pour afficher un SELECT");
                return (function (tab) {
                    document.write ( "<select>");
                    tab.forEach (function (nom) {
                        document.write("<option>" +nom + "</option>");
                    })
                  document.write ( "</select>");
                });
                break;
        }
    }
    // on utilise le générateur pour crée une fonction
    // qui nous convient
    $maFonctionSelect = genererFonctionAffichage("SELECT");
    $maFonctionSelect(tab);
    $maFonctionUL = genererFonctionAffichage("UL");
    $maFonctionUL(tab, "Un message");



    genererFonctionAffichage("SELECT")(tab);



    </script>
    
</body>
</html>