<?php
    function __autoload($classname) {
    	$filename = $classname . ".php";
    	if(is_readable($filename)) {
    		require $filename;
    	}
    }

    $cat = new Cat;
    $cat->say();
    $dog = new Dog;
    $dog->say();
?>