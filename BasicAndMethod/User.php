<?php
	class User{

		private $id;
		private $email;
		private $password;

		public function __construct($email,$password,$id){
			echo "Constructor <br/>";
		}

		public function __destruct(){
			//close the database
			echo "<br/>destructor <br/>";
		}

		public function register(){
			echo 'use registered'."<br/>";
			$this->login();
		}

		public function login(){
			echo 'login.'."<br/>";
		}

		public function __set($property,$value){
	
			$this->$property = $value;
			echo "<h1>Set:".$property." is $value</h>";
			
		}

		public function __get($property){
			
			echo "<h1>get $property:".$this->$property ." </h>";
			return $this->$property;
		}

		public function __isset($name){
			echo $name." is ". is_null($name)."<br/>";
			echo "<h1>"."a" ."</h1>";
			return isset($this->email);
		}

		public function setId($id){
			$this->id= $id;
			//$this->xxx="xxx";
			//$this->xxx;
			echo "<h1>ID has setup: ". $id ." </h>";
		}
		public function getEmail(){
			return $this->email;
		}

	}

$user = new User(1,2,3);
$user->register();
$user->id = "testing";
$user->id;
$user->setId('123');
//$user->id='22';
//echo $user->id;
//$user->xxx;
$user->email= "successful";
echo "<h1>email: ". $user->getEmail() ." </h>";
$user->password="123456";
$user->password;

?>