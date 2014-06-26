<title>Static va Const</title>
<?php
class Person {
	static $name = "Sang Nguyen Thanh";
	public function Show() {
		return sefl::name;
	}
}
class Hang {
	const RED = "Mau do";
	const BLUE = "Mau Xanh";
	public function Showconst() {
		return sefl::BLUE;
	}
}
// $object = new Person;
echo Person::$name;
echo Hang::BLUE;