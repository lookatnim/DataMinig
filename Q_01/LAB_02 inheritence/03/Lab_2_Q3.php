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

		function __Construct($family , $food){
		$this-> family = $family;
		$this-> food = $food;
	}
	public function dec(){
			$dec = "The animal is {$this-> family} and the food is {$this-> food}";
			echo $dec;

	}
	}
	class Dog extends Animal{
		public function message(){
			echo '';
		}
	}
	$Dog =new Animal("Dog","Meat");
	echo $Dog -> dec();


?>
</body>
</html>