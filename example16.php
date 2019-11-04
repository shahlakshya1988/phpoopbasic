<?php 
/**
*Abstract Classes Can't be instantiated
*Abstract Classes model of minimum required methods defined by subclasses by child classess
* IF the method is decelared abstract and don't define it we can get error
*abstract class nameofclass{
*    abstract public function fun();
*}
*/
abstract class Shape{
    abstract public function getArea();
}

class Rectangle extends Shape{
    private $height = 0;
    private $width = 0;
    public function __construct($height,$width){
        $this->height = $height;
        $this->width = $width;
    }
    public function getArea(){
        $area = $this->height * $this->width;
        echo PHP_EOL."Area Of The Rectangle is ".$area.PHP_EOL;
    }
}
class Circle extends Shape{
    private $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        $area = pi()*$this->radius*$this->radius;
        echo PHP_EOL."Area Of The Circle is ".$area.PHP_EOL;
    }
}
function CallingMethod(Shape $object){
    $object->getArea();
}
$rec = new Rectangle(10,5);
CallingMethod($rec);

$circle = new Circle(10,5);
CallingMethod($circle);

//$shape = new Shape(); // Fatal Error