<?php
include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe("my first recipe");
$recipe1->setSource = "HAgama";
// $recipe1->setTitle("my first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe("my second recipe");
$recipe2->setSource = "Luwi";
// $recipe2->setTitle("my second recipe");

$recipe1->addInstructions("This is my first instruction");
$recipe1->addInstructions("This is my second instruction");

$recipe1->addTag("Breakfast");
$recipe1->addTag("Main Course");

$recipe1->setYield("6 servings");
echo $recipe1;

// echo Render::displayRecipe($recipe1);
echo new Render();
