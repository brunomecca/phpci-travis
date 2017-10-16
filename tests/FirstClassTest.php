<?php
	require_once 'PHPUnit/Autoload.php';
	require_once 'FirstClass.php';

	class FirstClassTest extends PHPUnit_Framework_TestCase{

		public $obj = null;

		public function setUp(){
			$this->obj = new FirstClass();
		}

		public function tearDown(){
			$this->obj = null;
		}
	        

		public function tests(){
			$this->setUp();
			$this->assertEquals(40, $this->obj->soma(20,20));
			$this->assertEquals('<img src="images/img1.jpg">', $this->obj->imgNow('images/img1.jpg'));

		}
	}

?>