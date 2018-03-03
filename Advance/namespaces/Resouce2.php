<?php
	

	//use phplearning\php\Advance\namespaces\Table;
	//use \xampp\htdocs\phplearning\php\Advance\namespaces\ResourceLu\Table;
	//use Resource\Resource as re;
	//require_once 'phplearning/php/Advance/namespaces/Table.php';
/*	class Table{

	}*/

/*	namespace Another;
	use Test\Test as B;
	require_once "test.php";
	*/

	

	/*$test = new B();
	$test->get();
*/
	namespace Resource2;
	require_once "test.php";
	use Test\Test;
	/*$test = new Test\Test();
	$test->get();*/

	$a = new Test();
	$a->get();

