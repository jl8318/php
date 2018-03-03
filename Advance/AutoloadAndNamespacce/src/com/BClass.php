<?php
namespace jixiang\phplearning\com;

use jixiang\phplearning\AClass;
class BClass
{
	public function get()
	{
		return "BClass";
	}
	public function use()
	{
		$a = new AClass();
		echo "BClass uses ".$a->get();
	}
}