<?php
class Human{
     protected $name=" danial";
protected $eyecolor = "black";
public function walk(){
    echo " i can walk";

}
}
class Robot extends Human{


public function sayname(){

echo "$this->name";

}

}

    $newton= new Robot();
    $newton->sayname();
