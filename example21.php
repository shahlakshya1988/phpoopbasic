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
/**
 * using try and catch, try is the place where exception is generated
 * catch is used for catching the exception,
 * finally is executed in every situation
 */
try{
    echo "I am Try".PHP_EOL;
    Division(1,0);
}catch(Exception $e){
    echo "I am Catch".PHP_EOL;
    echo $e->getMessage();
    echo PHP_EOL;
}finally{
    echo "I am Finally".PHP_EOL;
}
try{
    echo "I am Try".PHP_EOL;
    Division(1,2);
}catch(Exception $e){
    echo "I am Catch".PHP_EOL;
    echo $e->getMessage();
    echo PHP_EOL;
}finally{
    echo "I am Finally".PHP_EOL;
}

try{
    echo "I am TRY, without Catch".PHP_EOL;
}finally{
    echo "I am Finally, without Catch".PHP_EOL;
}

Division(100,20);