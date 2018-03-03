<?php

	$a = '132';
	$b = 5;
	$c = array('a','2');

	foreach($c as $k=>$cc){
		echo $cc. "<br/>";
		echo $k. "<br/>";
	}
				

	echo array_pop($c);
	echo count($c);

	if($a==$b){
		echo "equal";
	}

	if($a){
		echo "a=0";
	}

?>