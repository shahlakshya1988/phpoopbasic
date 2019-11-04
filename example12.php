<?php 
/**
 *  METHOD OVERRIDING
 *  Process in which we define a method in Child Class but the same method 
 *  is defined in Parent class is called METHOD OVERRIDING
 *  SQUARE, RECTANGLE BUT ARE SHAPED, BUT DIFFERENT AREA CALCULATION 
 *  METHOD, getArea is differently implemented for both the classes and have
 *  differnt formulla
 *  We have to overried it for 
 */
class Rectangle{
	protected $height;
	protected $width;
	public function __construct($height,$width){
		$this->height=$height;
		$this->width = $width;
	}
	public function getArea(){
		$area  = $this->height * $this->width;
		echo PHP_EOL."Area Of The Rectangle is ".$area;
		echo PHP_EOL;
	}
}

class Square extends Rectangle{
	public function __construct($size){
		$this->height=$this->width = $size;
	}
	public function getArea(){
		$area = pow($this->height,2);
		echo PHP_EOL."Area Of The Square is ".$area;
		echo PHP_EOL;
	}
}

$rect = new Rectangle(10,5);
$rect->getArea();

$sq = new Square(10);
$sq->getArea();