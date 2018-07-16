
$data1 = "the color is";
$data2 = "red";
$result = $data1 . ' ' . $data2;
echo "$result";

>>> the color is red

or
$result = $data1 . $data2;
or
$result = $data1 . " " . $data2;
or
$result = "{$data1} {$data2}";

or
Use sprintf() or printf()

$result = sprintf("%s %s", $data1, $data2);
$result = sprintf("%s %s", $data1, $data2);

or

echo $data1, ' ', $data2;
or
$result = "$data1 $data2";

or

$string = "the color is ";
$string .= "red";
echo $string;


$txt = "1234";
echo $txt ." some more text";

>>> 1234 some more text

