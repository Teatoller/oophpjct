<?php
class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = "Treehouse";
    private $measurements = array(
        "tsp",
        "tasp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon",
    );

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given");
        };
        if ($measure != null && !in_array(strtolower($measure), $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        };

        $this->ingredients[] = array(
            "$item" => ucwords($item),
            "$amount" => $amount,
            "$measure" => strtolower($measure),
        );
    }

    public function displayRecipe()
    {
        return $this->title . " by " . $this->source;
    }

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$recipe1 = new Recipe();
$recipe1->source = " HAgama" . "\n";
$recipe1->setTitle(" my first recipe");
$recipe1->addIngredient("egg", 2, "oz");

$recipe2 = new Recipe();
$recipe2->source = " Luwi" . "\n";
$recipe2->setTitle(" my second recipe");

echo $recipe1->getTitle();
echo $recipe1->displayRecipe();

echo $recipe2->getTitle();
echo $recipe2->displayRecipe();
