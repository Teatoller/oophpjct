<?php
include "classes/recipe.php";

$recipe1 = new Recipe();
$recipe1->source = " HAgama";
$recipe1->setTitle(" my first recipe");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe2->source = " Luwi";
$recipe2->setTitle(" my second recipe");

echo $recipe1->getTitle();
foreach ($recipe1->getIngredients() as $ing) {
    echo ("\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"]);
}
