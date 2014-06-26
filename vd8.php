<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Khai niem truu tuong</title>
</head>
<body>
	<?php  
	abstract class Animal {
		public $name;
		public function setName($ten) {
			$this->name = $ten;
		}
		public function getName() {
			return $this->name;
		}
		abstract function sound();
		abstract function legnumber();
	}

	class Dog extends Animal {
		public function sound() {
			echo "Cho sua gau gau <br />";
		}
		public function legnumber() {
			echo "4 chan";
		}
	}

	class Chicken extends Animal {
		public function sound() {
			echo "Ga keu chip chip <br />";
		}
		public function legnumber() {
			echo "2 chan";
		}
	}
	$a = new Dog;
	$a->setName("Micky");
	echo $a->getName() ."<br />";
	echo $a->sound();
	echo $a->legnumber();
	echo "<hr />";
	$b = new Chicken;
	$b->setName("Chicken name");
	echo $b->getName() ."<br />";
	echo $b->sound();
	echo $b->legnumber();
	?>
</body>
</html>