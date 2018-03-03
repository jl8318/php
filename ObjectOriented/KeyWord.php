<?php

	//static keyword
	class User{
		public $username;
		public static $minPassLength=5;

		public static function validatePassword($password){
			if(strlen($password) >= self::$minPassLength){
				echo "<h5>$password password length is good</h5>";
			}
			else{
				echo "<h5>$password password length is too short!!</h5>";
			}
		}
	}


	

User::validatePassword("abc123");
User::validatePassword("123");
echo "<h5>Minimal length of Password:". User::$minPassLength."</h5>";

//autoloading
/*include 'foo.php';
include 'bar.php';*/
spl_autoload_register(
	function($class_name){
		include $class_name.".php";
	}
);


$foo = new Foo();
$bar = new Bar();
$foo->sayHellow();
$bar->sayHellow();

//final keyword
/*final class A{
	public function test(){
		echo "<h5>A is testing</h5>";
	}
}

class B extends A{
	public function test(){
		echo "<h5>B is testing</h5>";
	}
}

$a = new A();
$b = new B();
$a->test();
*/
?>