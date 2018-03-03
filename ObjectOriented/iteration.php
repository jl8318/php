<?php
class People{
	public $person1 = 'Mike';
	public $person2 = 'Shelly';
	public $person3 = 'Jeff';

	protected $person4 = 'Protected';
	private $person5 = 'Private';

	function iterateProperties(){
		foreach($this as $key => $value){
			print "$key => $value    \n";
		}
	}

	function testThis(){
		var_dump($this);
	}


}

$people = new People();
//var_dump($people);

$people->iterateProperties();

//$people->testThis();
/*
object(People)#1 (5)
 { 
 ["person1"]=> string(4) "Mike" 
 ["person2"]=> string(6) "Shelly" 
 ["person3"]=> string(4) "Jeff" 
 ["person4":protected]=> string(9) "Protected" 
 ["person5":"People":private]=> string(7) "Private" }

*/

 //outside iteration
 echo "<br/>";
foreach($people as $key => $value){
			print "$key => $value    \n";
}


?>