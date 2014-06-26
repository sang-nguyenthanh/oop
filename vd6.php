<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khai niem Clone</title>
</head>
<body>
<?php  
class Person {
	public $name;
	public function setName($ten) {
		$this->name = $ten;
	}
	public function getName() {
		return $this->name;
	}
}
$a = new Person;
$b = clone $a;
$a->setName("Sang Nguyen");
$b->setName("New name");
echo $a->getName() . "<br />";
echo $b->getName();
?>
	
</body>
</html>