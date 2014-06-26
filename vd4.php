<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Parent and final</title>
</head>
<body>
	<?php
		class Person {
			final public $name = "Sang Nguyen Thanh";
			public function Show() {
				echo $this->name . "<br />";
			}
		}

		class subPerson extends Person {
			public $subname = "Sub name";
			public function Show() {
				parent::Show();
				echo $this->subname . "<br />";
			}
		}
		$object = new subPerson;
		echo $object->Show();

	?>
</body>
</html>