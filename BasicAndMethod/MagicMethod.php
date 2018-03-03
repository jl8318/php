<?php
//This class is used to test how to use magic method: variable magic method, method magic metho
class SetGetExample{
	
	private $proList;
	private $property1;
	private $property2;
	private $property3;

	public function __construct(){
		$this->proList = array();
	}

	public function __set($name,$value){
		$this->proList[$name] = $value;
		$this->$name = $value;

	}

	public function __get($name){
		if(array_key_exists($name, $this->proList)){
			return $this->$name;
		}
		$trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .//name
            ' in ' . $trace[0]['file'] . ///path:C:\xampp\htdocs\phpLearning\c3\SetGetExample.php
            ' on line ' . $trace[0]['line'],//line number
            E_USER_NOTICE); //C:\xampp\htdocs\phpLearning\c3\SetGetExample.php on line 29
        return null;
        /*
        *Notice: Undefined property via __get(): property3 in C:\xampp\htdocs\phpLearning\c3\SetGetExample.php on line 50 in *C:\xampp\htdocs\phpLearning\c3\SetGetExample.php on line 29
        *
        */
		
	}

	public function __isset($name){
		//return array_key_exists($name, $this->proList);
		return isset($this->proList[$name]);
	}

	public function __unset($name){
		unset($this->proList[$name]);
		unset($this->$name);
	}

	public function __call($name, $arguments){
		echo "Calling object method $name"
		.implode(",",$arguments)."<dr/>";
	}
	
	public static function __callStatic($name, $arguments) {
		echo "<br/>Calling static method $name"
		.implode(",",$arguments)."<dr/>";
	}

	public function printProperties(){
		foreach($this->proList as $key=>$value ){
			echo "<h1>The ".$key."".$value."</h1>";
		}
	}

	public function debugTest(){
		$result = debug_backtrace();
		var_dump($result);
	}

	public function __toString(){
		return "<H1>".'SetGetExample Object is used to test magic method'."</h1>";
	}


}
$example = new SetGetExample();
$example->property1 = "p1";
echo "<h1>Property1 : ".$example->property1."</h1>";
$example->printProperties();
//$example->property3;
//$example->debugTest();
//throw new Exception("xxxxxx");

echo "Is set property3: ".isset($example->property3)."<br/>";
echo "Is set property1: ".isset($example->property1)."<br/>";

unset($example->property1);

$example->noMethod(1,2);
$example::noMethod(1,2);
echo $example;

echo "<br/>Is set property1: ".isset($example->property1)."<br/>";


/*
array(1) {
	 [0]=> array(7) {
	 	 ["file"]=> string(48) "C:\xampp\htdocs\phpLearning\c3\SetGetExample.php" 
	 	 ["line"]=> int(43)
	 	 ["function"]=> string(9) "debugTest" 
	 	 ["class"]=> string(13) "SetGetExample"
	 	 ["object"]=> object(SetGetExample)#1 (4) {
	 	   		 ["proList":"SetGetExample":private]=> array(1) { 
	 	   		 										["property1"]=> string(2) "p1" } 
	 	   		 ["property1":"SetGetExample":private]=> string(2) "p1" 
	 	   		 ["property2":"SetGetExample":private]=> NULL 
	 	   		 ["property3":"SetGetExample":private]=> NULL } 
	 	 ["type"]=> string(2) "->" 
	 	 ["args"]=> array(0) { } } }
*/

?>

