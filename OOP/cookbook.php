<?php

require "render.php";
require "recipes.php";

$recipe1 = new Recipe();
$recipe1->setTitle('Hello world');
Render::displayRecipe($recipe1);