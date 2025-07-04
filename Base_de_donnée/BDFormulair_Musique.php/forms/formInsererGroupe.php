<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <form enctype="multipart/form-data" action="./formInsererGroupeTraitement.php" method="POST">
    Nom de groupe <input type="text" name="nom">

    <br>
    Année de formation <input type="number" name="annee_formation">

    <br>
    <select name="style_id">
      <?php
      // obtenir des groupes

      //inclure config
      include "../db/config.php";

      //creer la connexions
      $cnx = new PDO(DSN, USER, PASSWORD);

      //creer une requete 
      // trier par ordre alphabétique (nom ASC)

      $sql = "SELECT * FROM styles ORDER BY nom ASC";


      // preparer la requete 

      $stmt = $cnx->prepare($sql);

      //executer la requete 

      $stmt->execute();
      // stocker les valeur dans un array

      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($res as $style) {
        echo "<option value=" . $style['id'] . ">" . $style['nom'] . "</option>";
      }


      ?>

    </select>

    <br>
    <input type="file" name="photoGroupe">


    <br>
    <input type="submit" value="Enregistrer">

  </form>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>