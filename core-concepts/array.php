<?php 

$cars = array("Honda", "Toyota", "BMW");
echo $cars[2];

echo 'I drive a '.$cars[1];

?>




<?php 

$cars = array("Honda", "Toyota", "BMW");
foreach($cars as $car) {
	echo $car.'<br>';
}

///////////////////////////////////////////////
// associative array
// key and value pairs
$car = array('make' => 'Toyota', 'model' => 'Vitz', 'color' => 'Blue');

echo $car['make'];
echo $car['model'];
echo $car['color'];

// or use foreach loop
foreach($car as $key => $value) {
	echo $key.': '.$value.'<br>';
	// capitalize first word
	// echo ucwords($key).': '.$value.'<br>';
}
//make: Toyota
//model: Vitz
//color: Blue

/////////////////////////////////////////////////////

?>