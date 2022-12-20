<?php
class Citizens{

public static $votingage = 18;
public static $name ="Reme ";
public function getcitizenname(){
    return "i am". self::$name. "my voting age is". self:: $votingage;
}
}

class Student extends Citizens{
public function studentvotingage(){

  echo parent ::getcitizenname();
}
}
$reme = new Student();
$reme->studentvotingage();