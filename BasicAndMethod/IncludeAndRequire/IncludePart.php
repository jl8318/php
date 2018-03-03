<?php
	function countTime(){
		static $times =0;
		$times++;
		return $times;
	}
	echo "this is include part!". countTime();


?>

<h5>HTML tag should be in the echo string or outside of <php> tag </h5>