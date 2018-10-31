<?php
// the password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit

$password = "Fyfjk34sdfjfsjq7";

if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) {
    echo "Your passwords is strong.";
} else {
    echo "Your password is weak.";
}

// https://webcheatsheet.com/php/regular_expressions.php

?>