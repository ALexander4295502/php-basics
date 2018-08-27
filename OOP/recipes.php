<?php

class Recipe
{
    private $_title;
    public $instructions = [];
    public $ingredients = [];
    public $source = "Zheng";
    public $yield;
    public $tag = [];

    public function setTitle($title) {
        $this->_title = ucwords($title);
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();
$recipe1->setTitle('Hello world');
var_dump($recipe1->ingredients);

echo $recipe1->displayRecipe();
