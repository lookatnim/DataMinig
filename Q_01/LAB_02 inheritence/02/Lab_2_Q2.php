<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

		class Animal{
			public $family;
			public $food;

			function set_family($family){
			$this-> family = $family;

		}
			function get_family(){
			return $this-> family;
		}
	}
	$cat = new Animal();
	$dog = new Animal();
	$cat ->set_family("cat");
	$dog ->set_family("dog");
		echo $cat->get_family();
		echo "<br>";
		echo $dog->get_family();
	?>

</body>
</html>