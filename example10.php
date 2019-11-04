<?php 
/** 
 *  protected members 
 *  if we want some properties to be accessible to the class and its
 *  derieved classes ONLY, then we can use protected access specifier
 */
 class Person{
	 protected $name = "Some Name";
	 protected $age = 25;
	 public function display(){
		 echo "Name is ::: {$this->name}".PHP_EOL;
		 echo "Age is ::: {$this->age}".PHP_EOL;
	 }
 }
 
 class Employee extends Person{
	 protected $salary = 12000;
	 public function display(){
		 parent::display();
		 echo "Salary is ::: {$this->salary}".PHP_EOL;
	 }
 }
 
 $e1 = new Employee();
 $e1->display();
 //$e1->name = "My Name"; // error
 //$e1->age = 20; // error
 //$e1->salary = 15000; // error