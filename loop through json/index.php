<!DOCTYPE html>
<html>
<head>
	<title>PHP JSON</title>
</head>
<body>

<?php
	$jsonData = file_get_contents('movies.json');
	$json = json_decode($jsonData, true);
?>

<h3>Movies List</h3>

<ul>
	<?php 
		foreach( $json['movies'] as $key => $value) {
			echo '<h4>'.$value['title'].'</h4>';
			echo '<li>Year: '.$value['year'].'</li>';
			echo '<li>Genre: '.$value['genre'].'</li>';
			echo '<li>Director: '.$value['director'].'</li>';
		}
	?>
</ul>

</body>
</html>
