<?php

class Render {
    public static function displayRecipe($recipe) {
        echo $recipe->getTitle() . " including " . implode(", ", $recipe->getIngredients());
    }
}