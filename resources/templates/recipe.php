<h1 id="drinkName"><?php echo $drinks[0]->strDrink;?></h1>
<a id="image" target="__blank" href="<?php echo $drinks[0]->strDrinkThumb;?>">
  <img id="thumbnail" src="<?php echo $drinks[0]->strDrinkThumb;?>"></img>
</a>
<div class="row">
  <table>
    <tr>
      <td class="left-col"><span>Type:</span></td>
    <td class="right-col"><?php echo $drinks[0]->strAlcoholic . "<br>";?></td>
    </tr>
    <tr>
      <td class="left-col"><span>Glass:</span></td>
    <td class="right-col"><?php echo $drinks[0]->strGlass . "<br>";?></td>
    </tr>
  </table>
</div>
<div class="row">
  <table>
    <tr>
      <h4>Ingredients</h4>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure1;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient1;?></td> 
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure2;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient2;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure3;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient3;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure4;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient4;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure5;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient5;?></td>
    </tr>
     <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure6;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient6;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure7;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient7;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure8;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient8;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure9;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient9;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure10;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient10;?></td>
    </tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure11;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient11;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure12;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient12;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure13;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient13;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure14;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient14;?></td>
    </tr>
    <tr>
      <td class="left-col"><?php echo $drinks[0]->strMeasure15;?></td>
      <td class="right-col"><?php echo $drinks[0]->strIngredient15;?></td>
    </tr>
  </table>
</div>
<div id="instructions" class="row">
<h4>Instructions</h4>
  <p>
    <?php echo $drinks[0]->strInstructions;?>
  </p>
</div>
</div>