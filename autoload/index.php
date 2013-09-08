<?php
    // Porduction Mode
    // error_reporting('E_ALL & ~E_DEPRECATED & ~E_STRICT');
    // Development Mode
    //error_reporting('E_ALL');
    function __autoload($classname) {
    	$filename = $classname . ".php";
    	if(is_readable($filename)) {
    		require $filename;
    	}
    }

    include "test.php";

    $cat = new Cat;
    $cat->say();
    $dog = new Dog;
    $dog->say();
?>