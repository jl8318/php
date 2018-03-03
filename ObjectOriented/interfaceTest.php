<?php

interface aa
{
	public function methodTest($id,$b=null);
}

class bb implements aa
{
	public function methodTest($id,$b){
		echo "Work";
	}
	/*public function methodTest($id,$b.$c){
	}
	don't work
	*/
}
echo "heeh";