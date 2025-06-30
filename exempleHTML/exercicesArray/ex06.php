<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  # solution avec for:
  $tableau = [];
  for($nbr=1; $nbr <= 200; $nbr += 1 ){
    $tableau [] = $nbr;
  }

  print_r($tableau);

 #solution avec foreach:

  $tableau1 = range(1,200);
  $tableau2 = [];
  foreach($tableau1 as  $value) {
    $tableau2[]=  $value;
  }

  print_r($tableau2);

  ?>
</body>
</html>
<?php
