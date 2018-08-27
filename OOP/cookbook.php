<?php

require "recipes.php";

$recipe1 = new Recipe();
$recipe1->setTitle('Hello world');
//Render::displayRecipe($recipe1);
echo $recipe1;

require "recipecollection.php";

$cookbook = new RecipeCollection("Zheng Recipes");
$cookbook->addRecipe($recipe1);
//var_dump($cookbook->getRecipes());

//$reps = &$cookbook->getRecipes();
//$reps[] = $recipe1;
//debug_zval_dump($reps);
//debug_zval_dump($cookbook->getRecipes());

//$test = 'a';
//$test .= 'bc';
//echo substr($test, 0, -1);

var_dump(is_a($cookbook, RecipeCollection::class));