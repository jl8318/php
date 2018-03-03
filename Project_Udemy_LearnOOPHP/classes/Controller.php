<?php

abstract class Controller{
	protected $request;
	protected $action;

	public function __construct($action,$request){
		$this->action = $action;
		$this->request = $request;
	}

	public function executeAction(){
		return $this->{$this->action}();//execute method
	}

//assign view to it in the specific method, such as register
//if it is a fullview, we will load our main layout file, because what we want to do is we want to have a main layout that wraps around our view.
	//the main layout we can have out HTML tags or head tag things that you want to on every single page we want
	protected function returnView($viewmodel,$fullview){

		$view = 'views/'.get_class($this). '/'.$this->action.'.php';  //default that view's name = class name
		if($fullview){

			require('views/main.php');
		}
		else{

			require($view);
		}
	}

}


?>