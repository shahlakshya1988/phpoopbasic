<?php 
/**
 * Exception handling it the process in which
 * we control the flow of the code, when some errors or exceptions [unwanted conditions]
 * occur
 */
function Division($x,$y){
    if($y == 0){
        throw new Exception("Division By Zero Not Possible");
    }
    echo $x/$y;
    echo PHP_EOL;
}
Division(100,10);
Division(1,0);
Division(100,20);