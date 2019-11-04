<?php 
/**
 * Interface, group of classes not related with
 * extends, jar and door can be opened or closed
 * but they are not related, but both they can 
 * be opened or closed
 * Interface specify that object is capable of 
 * performing certain actions, but does not tell
 * how it will perform
 * WE CAN ONLY DECELARE METHODS, BUT WE CAN'T DEFINE THE METHOD
 * interface Name_of_interface{
 *		method 1
 *		...
 *		...
 *		..
 *		method 2
 * }
 */

interface Openable{
	// all the methods must be public only, no other 
	public function open();
	public function close();
}

class Door implements Openable{

	/**
	 * all the methods in Openable should be defined or else error
	 */
	public function open(){
		echo PHP_EOL."The Door Is Open".PHP_EOL;

	}
	public function close(){
		echo PHP_EOL."The Door Is Closed".PHP_EOL;
	}
}


class Jar implements Openable{

	/**
	 * all the methods in Openable should be defined or else error
	 */
	public function open(){
		echo PHP_EOL."The Jar Is Open".PHP_EOL;

	}
	public function close(){
		echo PHP_EOL."The Jar Is Closed".PHP_EOL;
	}
}

function OpenSomething(Openable $object){
	$object->open();
}

function CloseSomething(Openable $object){
	$object->close();
}
$d1 = new Door();
$d1 -> open();
$d1 -> close();

$j1= new Jar();
$j1->open();
$j1->close();

$d2=new Door();
OpenSomething($d2);
CloseSomething($d2);

$j2 = new Jar();
OpenSomething($j2);
CloseSomething($j2);