<?php
require_once "Interface.Openable.php";
class Jar implements Openable{
    public function open(){
        echo PHP_EOL."The Jar is Open".PHP_EOL;
    }
    public function close(){
        echo PHP_EOL."The Jar is Close".PHP_EOL;
    }
}