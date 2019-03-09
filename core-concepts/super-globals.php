<?php
// super globals
// special array variables in php

$_GET['name'];
$_POST['name'];

echo $_SERVER['SERVER_NAME'] . '<br />';
// localhost
echo $_SERVER['REQUEST_METHOD'] . '<br />';
// GET or POST
echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
// c://xampp/htdocs/folder/filename.php
echo $_SERVER['PHP_SELF'] . '<br />';
// /folder/filename.php

// $_SESSION
// $_COOKIE 

echo $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
// http://localhost/folder/filename.php

?>


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"></form>

