<?php 
/**
 * FINAL KEYWORD -> 
 * When the class is defined with final keyword can't be inherited
 * When the method is defined with final keyword can't be overridden
 */
final class BaseClass{
    final public function show(){
        echo PHP_EOL."This is from Base Class and Show Method Both Are Final".PHP_EOL;
    }
}

class FinalMethodDemo {
    final public function show(){
        echo PHP_EOL."This is from FinalMethodDemo Class and Show Method is Final".PHP_EOL;
    }
}

// below code will generate error
/**class Derived extends BaseClass{

}**/

class Derived extends FinalMethodDemo{
    final public function show(){
        echo PHP_EOL."This is from Derived Class and Show Method is Final".PHP_EOL;
    }
}