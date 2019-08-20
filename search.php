<?php include("./resources/templates/config.php");?>
<!DOCTYPE html>
<html>
<head>
  <?php include("./resources/templates/head.php");?>
  <link rel="stylesheet" type="text/css" href="./css/search.css">
  <link rel="stylesheet" type="text/css" href="./css/recipe.css">
</head>
<body>
  <div id="cover">
    <div id="header">
      <?php include("./resources/templates/search-header.php");?>  
    </div>
  </div>
  <?php include("./resources/templates/nav.php");?>
  </div>
  <div id="container">
    <form class="search-form" action="search.php" method="GET">
      <input class="text" type="text" placeholder="Search by cocktail..." name="drink">
    </form>
    <form class="search-form" action="search.php" method="GET">
      <input class="text" type="text" placeholder="Search by ingredient..." name="ingredient">
    </form>
    <?php
      if(!empty($_GET["drink"])){
        $name = $_GET["drink"];
        $ch = curl_init('https://www.thecocktaildb.com/api/json/v1/1/search.php?s=' . urlencode($name));
        include("./resources/templates/getDrink.php");
        if(!empty($drinks)){
          include("./resources/templates/recipe.php");
        }
        else{
          ?><h1><?php echo "Unable to find drink";?></h1>
          <p>
            This drink is either invalid or not in the database.
          </p><?php
        }
      }
      else if(!empty($_GET["ingredient"])){
        $name = $_GET["ingredient"];
        $ch = curl_init('https://www.thecocktaildb.com/api/json/v1/1/filter.php?i=' . urlencode($name));
        include("./resources/templates/getDrink.php");
        if(!empty($drinks)){?>
          <h1>List of drinks that contain <?php echo ucfirst($name);?></h1>
          <?php include("./resources/templates/drink-list.php");
        }
        else{
          ?><h1><?php echo "Ingredient not found";?></h1>
          <p>
            This ingredient is either invalid or not in the database.
          </p><?php
        }
      }
    ?>
  </div>
</body>
</html>