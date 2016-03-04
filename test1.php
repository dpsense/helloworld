<?php
class People{
	public $name;
	function setName ($x) {
		$this->name = $x;
	}
}

$person1=new People();
$person1->setName("Bucky");
echo "Hellow " . $person1->name;
?>