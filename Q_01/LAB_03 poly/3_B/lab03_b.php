<!DOCTYPE html>
<html>
<body>
<?php 
interface shape 
{
	public function getArea();
}
class squre implements shape
{
	private $width;
	public function __construct($width){
	$this-> width = $width;
}
public function getArea()
{
	return $this-> width * $this-> width;
}
}
class circle implements shape
{
	private $radius;

	public function __construct($radius){
	$this-> radius = $radius;
}
public function getArea(){
	return $this-> radius * $this-> radius * pi();
}
}
function calculateArea (shape $shape)
{
	return $shape-> getArea();
}
echo "The area of a squre is:",calculateArea((new squre(5)));
echo "<br>";
echo "The area of a squre is",calculateArea((new circle(7)));
?>
</body>
</html>