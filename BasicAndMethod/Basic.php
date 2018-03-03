<?php

class A{
	public $value =0;

	function __toString(){
		return "". $this->value;
	}
}

// Test whether array is passed by value. Answer is yes;

function referenceOrNot($array){
	$len = count($array);
	$array[$len] = 'fixed';
	echo "<br/>Function:";
	var_dump($array);

}

//Test whether object is passed by value. Answer is no;
function objectRefOrNot($object){
	$object->value=15;
}

//PHP 5.0, we can set the parameter passed by a particular type
function passedByRequiredType(int $int){
	return $int;
}

//reference passing
function refP(&$pased){
	$pased="reference changed";
}

//test array
$testArray = array(1,2,3,4);
var_dump($testArray);
referenceOrNot($testArray);
echo "<br/>";
var_dump($testArray);

//test object
$ob = new A();
$ob->value =20;
echo "<br/> value is:".$ob;
objectRefOrNot($ob);
echo "<br/> value is:".$ob;

//test to pass require type parameter to function
//echo  passedByRequiredType("sadsa");
echo  passedByRequiredType(123);

//reference text;
$reft = "Reference test";
echo "<br/>".$reft."<br/>";
refP($reft);
echo "<br/>".$reft."<br/>";
$reft=456;
echo "<br/>".$reft."<br/>";
var_dump($reft);
refP($reft);
echo "<br/>".$reft."<br/>";
var_dump($reft);


?>
