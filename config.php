<?php
  switch($_SERVER["SCRIPT_NAME"]){
    case "/random.php":
      $CURRENT_PAGE = "Random";
      $PAGE_TITLE = "Your Drink";
      break;
    case "/search.php":
      $CURRENT_PAGE = "Search";
      $PAGE_TITLE = "Find a Drink";
      break;
    default:
      $CURRENT_PAGE = "Index";
      $PAGE_TITLE = "Fix Me A Drink!";
  }
?>