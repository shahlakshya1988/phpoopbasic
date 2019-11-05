<?php
require_once "Interface.Openable.php";
class Door implements Openable{
    public function open(){
        echo PHP_EOL."The Door is Open".PHP_EOL;
    }
    public function close(){
        echo PHP_EOL."The Door is Close".PHP_EOL;
    }
}