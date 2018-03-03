<?php
 
 class First{
 	public $id = 23;
 	public $name = "Jason";
 	public $construct;

 	public function __construct($construct){
 		$this->construct = $construct;

 	}

 	public function sayConstruct(){
 		echo "Construct:".$this->construct;
 	}

 	public function saySomething($word){
 		echo "somthing...".$word."<br/>";
 	}
 }

class Second extends First{
	public function getName(){
		echo $this->name."<br/>";
	}

	public function saySomething($w){
		echo "Second:".$w."<br/>";
	}
}
die("stop header_remove()");
$second = new Second("Second");
echo $second->name."<br/>";
$second->getName();
$second->saySomething("test");
$second->sayConstruct();

?>