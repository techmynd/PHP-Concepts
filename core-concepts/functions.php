<?php 

function displayName() {
	return "Javed Khalil";
}
echo displayName();

// or

function displayName($name) {
	return $name;
}
echo displayName("Javed Khalil");

// or

function displayName($name1, $name2) {
	return $name1.' '.$name2;
}
echo displayName("Javed", "Khalil");

// or

function displaySum($num1, $num2) {
	return $num1 + $num2;
}
echo displaySum("2", "6");

//////////////////
/// IMPORTANT
/// DONT use echo inside function
/// use return
/// return wont print result
/// you will have to echo the function


?>


<?php 

include('file.php'); // if file not found script will go on
require('file.php'); // if file not found script will stop
require_once('file.php'); 
// these are functions too

?>

<?php 
// string and array functions

$someVariable = "random text";

// string functions
str_replace()
ucwords()
strtolower()

str_replace('target_word_to_replace','new_word',$someVariable);
str_replace('random','actual',$someVariable);

// capitalize each word
echo ucwords("hello world");
// convert to lower case
echo strtolower("HeLLo wORLD");





// array functions
print_r()
implode()
explode()
count()
sort()

$name_array = array('Bob','John','Ali');
print_r($name_array);
// print_r prints whole array in browser // key with value

// You can not echo array

echo count($name_array); // number of items in array
echo sort($name_array); // array in alphabetical order

// display array values in browser
// array to string
$name_string = implode(', ',$name_array);
//$name_string = implode('<br>',$name_array);
echo $name_string;


// string to array
$name_string = 'John, Ali, Usman';
// take values between comma and add them into array
$convertToArray = explode(', ',$name_string);
// test it
print_r($convertToArray);



?>





