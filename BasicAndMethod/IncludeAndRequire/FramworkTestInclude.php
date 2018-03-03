<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>We should include a php in there</h1>
	<?php include"IncludePart.php"  ?>
	<?php require"IncludeHTML.html" ?>

<h1>We should include a php in there by using a function</h1>

	<?php 
	class A{
		private $testInstance = "INSTANCE VARIABLE";

		function requireOnePage($test="1111"){
			$variable ="<H1>THE VARIABLE IS USED SUCCESSFULLY</h1>";
			include "variableRef.php";
		}
	}

	$aa = new A();
	$aa->requireOnePage();
	
	?>
</body>
</html>
