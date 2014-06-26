<title>Cac co che trong oop, ke thua</title>
<?php  
class Person {
	function __construct() {
		echo "Ham khoi tao<br />";
	}
	function __destruct() {
		echo "Ham huy";
	}
	public $pubName = "Public";
	protected $proName = "Protected";
	private $priName = "Private";
	public function show() {
		echo $this->pubName . "<br />";
		echo $this->proName . "<br />";
		echo $this->priName . "<br />";
	}
}

class subPerson extends Person {
	public $subName = "Test alo xo";
	public function showmore() {
		$this->show();
		echo $this->subName . "<br />";
	}	
}
$object = new Person;
echo $object->show();
echo $object->pubName;
?>