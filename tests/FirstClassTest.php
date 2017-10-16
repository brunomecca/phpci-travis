<?php
	require 'PHPUnit/Autoload.php';
	require 'FirstClass.php';

	class FirstClassTest extends PHPUnit_Framework_TestCase{

		public function init() {
	        
	    }

		public function tests(){
			$obj = new FirstClass();
			echo "Teste 2: " . $this->assertEquals(40, $obj->soma(20,20));
		}
	}

?>