<?php 

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// $log = new Logger('name');
// $log->pushHandler(new StreamHandler(__DIR__ .'/log/project.log', Logger::WARNING));

// $log->addWarning('You site has been under attacked!');
// $log->addError('Stupid Error!');

	require "vendor/autoload.php";

	use \Car; 

	$toyota_car = new Car\Toyota('Belta');
	$nissan_car = new Car\Nissan('AD Van');
	echo $toyota_car->name . "<br />"; 
	echo $nissan_car->name  . "<br />";

	echo DB::iTest(); 
	$db = new DB('test');
	$test = new Test('Thiha');
	echo $test->test;
	echo $db->dbname . "<br />";
	$kyats = Currency_Converter(13000);
	echo $kyats;
	echo AnotherFun('Thatoe');
	foo();
 ?>