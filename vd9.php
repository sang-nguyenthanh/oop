<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khai niem interface</title>
</head>
<body>
<?php  
interface Animal {
	function sound();
	function legnumber();
	function ultility();
} 
interface Another {
	function ultility();
}
class Define {
	public $name;
	public function setName($ten) {
		$this->name = $ten;
	}
	public function getName() {
		return $this->name;
	}
}
class Dog extends Define implements Animal, Another {
	public function sound() {
		echo "Cho sua gau gau<br />";
	}
	public function legnumber() {
		echo "4 chan<br />";
	}
	public function ultility() {
		echo "Giu nha, bat chuot";
	}
}
class Mouse extends Define implements Animal {
	public function sound() {
		echo "Chuot keu Chit chit<br />";
	}
	public function legnumber() {
		echo "4 chan";
	}
	public function ultility() {
		echo "Test chuot";
	}
}
$a = new Dog;
$a->setName("Pit bull");
echo $a->name . "<br />";
echo $a->sound();
echo $a->legnumber();
echo $a->ultility();
echo "<hr />";

$b = new  Mouse;
$b->setName("Mickey mouse");
echo $b->getName() ."<br />";
echo $b->sound();
echo $b->legnumber();
echo $b->ultility();
?>
	
</body>
</html>