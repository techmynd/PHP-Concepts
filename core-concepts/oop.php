<?php

// class, object, properties and methods

class Car {
	public $make;
	public $model;
	public $color;
}
// new car object
$car1 = new Car();

// public, private and protected are access modifiers/identifiers
// public property is available anywhere to anybody, inside and outside of class
// prviate can only be accessed from inside of class by using method
// protected can be used from inside class that is extended from another class

$car1->make = 'Toyota';
// we have given a car object, make of toyota
echo $car1->make; // Toyota

?>





<?php 
// private properties and methods
class Plane {
	private $make;
	private $model;
	private $color;

	// constructor // constructor should always be first function of first method 
	// define constructor // __construct()
	public function __construct() {
		// echo 'Plane created';
		
		// constructor parameters
		// 
	}

	// set make // set method
	public function setMake($make) {
		$this->make = $make;
	}

	// get make // it wont take any parameters // get method
	public function getMake() {
		return $this->make;
	}

	// start method
	public function start() {
		echo 'plane starting...';
	}
}
$plane1 = new Plane();

$plane1->setMake('Honda');
$plane1->getMake(); // Honda

$plane1->start();

?>








<?php 
// private properties and methods
class Plane {
	private $make;
	private $model;
	private $color;

	// constructor // constructor should always be first function of first method 
	// define constructor // __construct()
	public function __construct($make, $model, $color) {
		
		// constructor parameters
		
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
	}

	// public methods
	// method is a functon in class

	public function getColor(){
		return $this->color;
	}

	public function getMake(){
		return $this->make;
	}

	public function getModel(){
		return $this->model;
	}

	// start method
	public function start() {
		echo 'plane starting...';
	}

}

$plane1 = new Plane('F16','Fighter Plane','Blue');

echo $plane1->getColor(); // Blue
echo $plane1->getModel(); // Fighter Plane
echo $plane1->getMake(); // F16

echo $plane1->start(); // plane starting ...

?>

