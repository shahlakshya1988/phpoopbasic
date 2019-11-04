<?php 
/**
 *  parent:: -> we can call the functions of the parent class through
 *  derived class
 *  parent class constructer is not called by default
 */
 class ParentClass{
	 public function __construct(){
		 echo PHP_EOL."I am From ParentClass Class".PHP_EOL;
	 }
 }
 class ChildClass extends ParentClass{
	 public function __construct(){
		 parent::__construct();
		 echo PHP_EOL."I am From ChildClass Class".PHP_EOL; 
	 }
 }
 $c1 = new ChildClass();