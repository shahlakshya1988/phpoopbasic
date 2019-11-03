<?php 
/**
 *  ACCESSOR METHODS setters getters 
 *  these are used to setting the values and getting the values
 *  it is always a good practice to use these fucntions for accessing or setting values
 */
 class Student{
	 private $name;
	 private $role;
	 public function __construct(){
		 $this->name = "";
		 $this->role = "";
	 }
	 public function setName($name){
		 $this->name = $name;
	 }
	 public function getName(){
		 return $this->name;
	 }
	 public function setRole($role){
		 $this->role = $role;
	 }
	 public function getRole(){
		 return $this->role;
	 }
 }
 $jack = new Student();
 $jack->setName("Jack Williams");
 echo $jack->getName();
 echo PHP_EOL;
 ECHO $jack->setRole("10B");
 echo $jack->getRole();
 echo PHP_EOL;