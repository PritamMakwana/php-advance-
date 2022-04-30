<?php
echo "php in scope,global& golbal  variables<br>";

$a=10;   //global var
$b=20;   //global var

function printData(){

    // $a=1;  //local var
    // $b=2;  //local var

    global $a;  //global var
    global $b;  //global  var
   
    echo "a value local is = $a and b value local is =$b <br>";
    
}

printData();
echo "a value global is = $a and b value global is =$b <br>"; 
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);
echo "<br>";
echo var_dump($GLOBALS);
echo "<br>";
?>