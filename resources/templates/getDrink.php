  <?php
    $ch = curl_init('https://www.thecocktaildb.com/api/json/v1/1/random.php');                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_POSTREDIR, 3);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // follow http 3xx redirects
    $resp_orders = curl_exec($ch); // execute
    $jd_orders = json_decode($resp_orders);
    $drinks = $jd_orders->drinks;
  ?>