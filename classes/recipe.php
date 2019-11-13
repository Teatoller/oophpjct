<?php
class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Treehouse";

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {}
}

$recipe1 = new Recipe();
$recipe1->source = "HAgama" . "\n";
$recipe1->setTitle("my first recipe");

$recipe2 = new Recipe();
$recipe2->source = "Luwi" . "\n";
$recipe2->title = "my second recipe";

echo $recipe1->displayRecipe();
echo $recipe2->displayRecipe();
