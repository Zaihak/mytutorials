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

function autoloadConfig($className) {
	$filename = "config/" . $className . ".php";
	if(is_readable($filename)) {
		require $filename;
	}
}
 
spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");
spl_autoload_register("autoloadConfig");

$catctl = new EelController;
$dogctl = new DogController;
$catModel = new CatModel;
$dogModel = new DogModel;
$fishctl = new FishController;
$db = new Database;

echo "Cat says " . $catctl->say() . ". We have " . $catModel->count() . " cats.";
echo "<br />";
echo "Dog says " . $dogctl->say() . ". We have " . $dogModel->count() . " dogs.";
echo "<br />";
echo "Fish says " . $fishctl->say();
echo "<br />";
echo $db->connect();