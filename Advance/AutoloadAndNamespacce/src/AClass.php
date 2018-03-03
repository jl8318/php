<?php
namespace jixiang\phplearning;

use jixiang\phplearning\com\BClass;
class AClass
{
	public function get()
	{
		return "AClass";
	}
	public function use()
	{
		$B = new BClass();
		echo "AClass uses ".$B->get();
	}
}