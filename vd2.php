<!DOCTYPE html>
<html>
<head>
	<title>Ham khoi tao, ham huy</title>
</head>
<body>
<?php  
	class Person {
		public function __construct() {
			echo "Hello, ham khoi tao<br />";
		}
		public function __destruct() {
			echo "Goodbye, ham huy";
		}
		public function index() {
			echo "Test thu xem, noi dung o day<br />";
		}
	}
	echo "Bat dau<br />";
	$object = new Person;
	$object->index();
?>

</body>
</html>