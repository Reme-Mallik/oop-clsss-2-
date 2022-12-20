<?php
trait helperfunction{
function printworld()
{
echo "hellow world";
}
function calc($a, $b){

    echo "sum : .$a + $b";

}
}
class A{
 use helperfunction;
}


Class B{
  use helperfunction;
}
$b= new B();
$b->calc(24,54);

$a= new A();
$a->calc(45,54);