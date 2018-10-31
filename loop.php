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

<?php 
// for loop
for($i=0; $i <= 10; $i++) {
	// echo $i;
	echo $i.'<br>';
	// echo 'Number '.$i.'<br>';
}
?>

<?php 
// while loop // create variable outside of loop
$i=0;
while($i <= 10) {
	
	// echo $i;
	// echo $i.'<br>';
	echo 'Number '.$i.'<br>';
	
	$i++;
}
?>



