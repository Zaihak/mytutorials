<?php 

class DB {
	public $dbname = '';

	public function __construct($dbname) {
		$this->dbname = $dbname;
	}

	public static function iTest() {
		return "Noooo!";
	}
}

 ?>