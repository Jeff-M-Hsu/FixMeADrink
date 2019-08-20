<?php include("./resources/templates/config.php");?>
<!DOCTYPE html>
<html>
<head>
  <?php include("./resources/templates/head.php");?>
  <link rel="stylesheet" type="text/css" href="./css/recipe.css">
</head>
<body>
  <div id="cover">
    <div id="header">
      <?php include("./resources/templates/random-header.php");?>  
    </div>
  </div>
  <?php include("./resources/templates/nav.php");?>
  <div id="container">
    <?php
      $ch = curl_init('https://www.thecocktaildb.com/api/json/v1/1/random.php');                                                                      
      include("./resources/templates/getDrink.php");
      include("./resources/templates/recipe.php");
    ?>
  </div>
</body>
</html>