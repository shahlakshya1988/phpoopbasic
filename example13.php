<?php 
/**
 *  POLYMORPHISM 
 *  Inheritance and Method Overriding
 *  At the run time PHP will determine if the method is of the base class or of the 
 *  derieved class 
 *  Many forms
 */
class BaseClass{
	public function show(){
		echo PHP_EOL."I am in BASE Class".PHP_EOL;
	}
}
class DerivedClass extends BaseClass{
	public function show(){
		echo PHP_EOL."I am in DERIVED Class".PHP_EOL;
	}
}
function CallingMethod(BaseClass $object){
	$object->show();
}
$d = new DerivedClass();
CallingMethod($d);
$b = new BaseClass();
CallingMethod($b);