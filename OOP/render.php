<?php

class Render {

    public static function getRecipeInfo($recipe) {
        return $recipe->getTitle() . " including " . implode(", ", $recipe->getIngredients());
    }

    public static function displayRecipe($recipe) {
        echo self::getRecipeInfo($recipe);
    }
}