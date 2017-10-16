<?php
	//para enviar ao travis, tire o comentario da linha abaixo
	//require_once 'PHPUnit/Autoload.php';
	
	require_once 'Calc.php';

	class Test extends PHPUnit_Framework_TestCase{

		public $obj = null;

		public function setUp(){
			$this->obj = new Calc();
		}

		public function tearDown(){
			$this->obj = null;
		}
	        

		public function tests(){

			$this->setUp();
			$this->assertEquals(70, $this->obj->soma(20,20));
			$this->assertEquals(30, $this->obj->sub(50,20));
			$this->assertEquals(10, $this->obj->mult(2,5));
			$this->assertEquals(10, $this->obj->div(100,10));

		}
	}

?>