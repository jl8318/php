<?php
//test methods met in some programs

$array = array('lastname', 'email', 'phone');
$comma_separated = implode("SEPERETE", $array);

echo $comma_separated."<br/>"; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""

?>