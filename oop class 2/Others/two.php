<?php
class Autour{
    public function getname(STRING $surname ){
        echo "$surname Danial";
    }

}
class Book extends Autour{

    public function getname(STRING $surname){

    echo "this book is published by $surname danial";
    }
}
$accounting= new Book();
$accounting->getname("MR.");
