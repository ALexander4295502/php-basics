<?php

class RecipeCollection {
    private $title;
    private $recipes;

    /**
     * RecipeCollection constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function addRecipe($recipe) {
        $this->recipes[] = $recipe;
    }

    public function getRecipes() {
        return $this->recipes;
    }
}