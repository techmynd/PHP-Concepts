<?php
$email = firstname.lastname@aaa.bbb.com;
$regexp = "/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/";

if (preg_match($regexp, $email)) {
    echo "Email address is valid.";
} else {
    echo "Email address is <u>not</u> valid.";
}

//https://webcheatsheet.com/php/regular_expressions.php

?>