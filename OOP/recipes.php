<?php

class Recipe
{
    private $_title;

    /**
     * Recipe constructor.
     * @param $_title
     */
    public function __construct($_title=null)
    {
        $this->_title = $_title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }

    /**
     * @return array
     */
    public function getInstructions()
    {
        return $this->_instructions;
    }

    /**
     * @param array $instructions
     */
    public function setInstructions($instructions)
    {
        $this->_instructions = $instructions;
    }

    /**
     * @return array
     */
    public function getIngredients()
    {
        return $this->_ingredients;
    }

    /**
     * @param array $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->_ingredients = $ingredients;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * @param string $source
     */
    public function setSource($source)
    {
        $this->_source = $source;
    }

    /**
     * @return mixed
     */
    public function getYield()
    {
        return $this->_yield;
    }

    /**
     * @param mixed $yield
     */
    public function setYield($yield)
    {
        $this->_yield = $yield;
    }

    /**
     * @return array
     */
    public function getTag()
    {
        return $this->_tag;
    }

    /**
     * @param array $tag
     */
    public function setTag($tag)
    {
        $this->_tag = $tag;
    }
    private $_instructions = [];
    private $_ingredients = [];
    private $_source = "Zheng";
    private $_yield;
    private $_tag = [];
}
