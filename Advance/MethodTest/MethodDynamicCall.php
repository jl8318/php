<?php

//
//Method 用于不定数量的参数。
function twoParameter($a,$b)
{
	echo "Here is twoParameter method: " . $a.' and '.$b.'<br/>';
}

function threeParameter($a,$b,$c)
{
	echo "Here is threeParameter method: " . $a.' and '.$b.' and '.$c.'<br/>';
}

function exceptionMethod()
{
	echo "Exception parameters<br/>";
}

function dynamicMethod()
{
	$parameters = func_get_args();
	$methodName = 'exceptionMethod';
	if(count($parameters)==2)
		$methodName = 'twoParameter';
	else if(count($parameters)==3)
		$methodName = 'threeParameter';
	else
	{}
	
	call_user_func_array($methodName, $parameters);
}


dynamicMethod(1,2);
dynamicMethod(1,2,3);


//一个类可以动态的来调用，其他类的的方法
class UsedClass
{
	public function special()
	{
		echo "UsedClass uses special method!<br/>";
	}
}

class CalledClass
{
	private $usedClass;
	public function __construct()
	{
		$this->usedClass = new UsedClass();
	}

	public function __call($name,$parameters)
	{
		if(in_array($name ,get_class_methods($this->usedClass)))
		{
			return call_user_func_array(array($this->usedClass,$name), $parameters);
		}
		return false;
	}

}


$call = new CalledClass();

$call->special();