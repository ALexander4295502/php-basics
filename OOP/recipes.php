<?php

class Recipe
{
    private $_title;
    private $_instructions = [];
    private $_ingredients = [];
    private $_source = "Zheng";
    private $_yield;
    private $_tag = [];

    public function setTitle($title) {
        $this->_title = ucwords($title);
    }

    public function displayRecipe()
    {
        return $this->_title . " by " . $this->_source . "\n";
    }

    public function getIngredients() {
        return $this->_ingredients;
    }
}

$recipe1 = new Recipe();
$recipe1->setTitle('Hello world');
var_dump($recipe1->getIngredients());

echo $recipe1->displayRecipe();
