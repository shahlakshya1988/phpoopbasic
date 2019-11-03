<?php 
/**
 *  STATIC MEMBERS ARE PART OF CLASS BUT NOT THE OBJECT
 *  STATIC MEMBERS ARE CLASS VARIABLES
 *  ACCESS THE VALUES THROUGH CLASS NAME WITHOUT INSTANTIATING
 */
class Number{
	public static $num=100;
	public function displayNum(){
		echo PHP_EOL."Number Is ".self::$num.PHP_EOL;
	}
}
echo Number::$num;
echo PHP_EOL;
$num1 = new Number();
echo $num1::$num;
echo PHP_EOL;
$num1->displayNum(); // METHOD IS NOT STATIC
echo PHP_EOL;