<div id="list">
  <?php
    foreach($drinks as $drinkName){
      $drinkName = $drinkName->strDrink;
      echo "<a class=\"drink\" href=\"/search.php?drink=" . urlencode($drinkName) . "\"" . ">" . $drinkName . "</a><br>";
    }
  ?>
</div>