<?php
$var = 56;
$var1 = 98;

function think($arg, $arg1){
$totalVar = &$arg;
return $totalVar;
//$totalVar--;
}

$call = think($var, $var1);
$var1 = 55;
//$call--;
echo "I've solved it the ans is: ".$call;
?>