<?php

echo "Hello Convert!";

$string = "'1'=>'abc','2'=>'abc','3'=>'abc'";
var_dump((array)$string);

$b = array( $string );
var_dump($b);

$a = array(1,2,3);
var_dump($a);