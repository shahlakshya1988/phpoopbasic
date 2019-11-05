<?php 
/**
 * In real live we have to seperate Interfaces and Classes in files
 * this will alow better management of files and application
 */

require_once "Class.Jar.php";
require_once "Class.Door.php";

function openSomething(Openable $obj){
    $obj->open();
}
function closeSomething(Openable $obj){
    $obj->close();
}
$door = new Door();
$jar = new Jar();
openSomething($door);
closeSomething($door);

openSomething($jar);
closeSomething($jar);