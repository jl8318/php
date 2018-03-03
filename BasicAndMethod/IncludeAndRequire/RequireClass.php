<?php

class RequireClass
{
	private $privateAttribute="Hello";

	public function __construct($privateAttribute)
	{
		$this->privateAttribute = $privateAttribute; 
	}
}
class A
{
	public function __construct()
	{

	}
	public function a()
	{
		echo 'A';
	}
}

require 'IncludeRequireClass.php';