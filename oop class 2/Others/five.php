<?php

use Human as Human;

interface Human{
         function walkspeed();
         function emotion($type);
}
    interface species
{
  function eatinghabit();
}

interface BaseRobot{
function  logicaqlaparator();
}
class Robot implements Human, species, BaseRobot
{
    function walkspeed()
    {
        echo "i can walk at 6 kmt";
    }



   function emotion($type)
   {
          echo "i am stype";
   }



   function eatinghabit()
   {
     echo "i can eat";
   }



   function  logicaqlaparator()
   {
    echo " i can perfrom logical operator";
   }
}

$danial= new Robot();
$danial->logicaqlaparator();

















