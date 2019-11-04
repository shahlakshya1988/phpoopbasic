<?php 
/**
 *  class Parent{
 *  	// this class has some methods and properties 
 *      
 *  }
 *  class Child extends Parent{
 *  	// this class having extends Parent, 
 *      // so child have access to parent class Protected, and Public members 
 *      // we don't need to rewrite the code for parent.
 *  }
 */
 class Person{
	 public $age=0;
	 public $name = "";
	 public function __construct($age = 0,$name = ""){
		$this->age = $age;
		$this->name=$name;
	 }
	 public function display(){
		echo "Name ::: ".$this->name.PHP_EOL;
		echo "Age ::: ".$this->age.PHP_EOL;
	 }
 } // class Person
 
 class Employee extends Person{
	public $salary;
	public function __construct($age=0,$name='',$salary=0){
		parent::__construct($age,$name);
		$this->salary = $salary;
	}
	public function display(){
		parent::display();
		echo "Salary ::: ".$this->salary.PHP_EOL;
	}
	 
 } //class Employee extends Person
 
 $e1 = new Employee(25,"Some Name",25000);
 $e1->display();