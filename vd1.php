<!DOCTYPE html>
<html>
<head>
	<title>Vi du 01</title>
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
	$object = new Person;
	$object->setName("Thanh");
	echo $object->getName();
	echo "<br />" . $object->name;
?>
</body>
</html>