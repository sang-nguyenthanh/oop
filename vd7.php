<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lazy loading</title>
</head>
<body>
	<?php  
	function __autoload($url) {
		require "$url.php";
	}
	$a = new person;
	echo $a->show();
	?>
</body>
</html>