<?php
function dynamicNew($name){
return new $name;
}
function reflectionNew($name){
$r=new ReflectionClass($name);
return $r->newInstanceArgs();
} 
?>
