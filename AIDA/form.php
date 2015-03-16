<?php 
$name = $_GET["name"]; 

$age =  $_GET["age"]; 

//Now we can print these back to prove we got them OK 

print "<br> Hi $name, I notice you are $age years old<br> ";

//$_GET is an associative array of variables passed to the current script via the URL parameters.

//We can display the whole array

print "<pre>";

print_r($_GET);

print "</pre>"
?>
     	