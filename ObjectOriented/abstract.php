<?php
	abstract class Animal{
		public $name;
		public $color;

		public function __construct($name, $color){
			$this->name = $name;
			$this->color = $color;
		}
		public function describe(){
			echo "The name of the animal is". $this->name. "The color of the animal is". $this->color. "<br/>";
		}

		public abstract function makeSound();
	}

	class Duck extends Animal{
		public function makeSound(){
			echo "<h5>Quack</h5>";
		}
	}

	class Dog extends Animal{
		public function makeSound(){
			echo "<h5>Bark</h5>";
		}
	}

	$dog = new Dog("Dog1","Yellow");
	$dog->describe();
	$dog->makeSound();
	$duck = new Duck("Duck1","Green");
	$duck->describe();
	$duck->makeSound();

?>