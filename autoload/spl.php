<?php
function autoloadModel($className) {
    $filename = "models/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
 
function autoloadController($className) {
    $filename = "controllers/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
 
spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");

$catctl = new CatController;
$dogctl = new DogController;
$catModel = new CatModel;
$dogModel = new DogModel;

echo "Cat says " . $catctl->say() . ". We have " . $catModel->count() . " cats.";
echo "<br />";
echo "Dog says " . $dogctl->say() . ". We have " . $dogModel->count() . " dogs.";