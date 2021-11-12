<?php

require ('interface/IFigure.php');

require ('figures/Square.php');
require ('figures/Triangle.php');
require ('figures/Circle.php');
require ('figures/Trapeze.php');


$num = rand(100,1000);


$figures = [];
for($i = 0; $i<$num; $i++)
{
   $exampleFigures = [new Square("квадрат", "синій"),new Triangle("трикутник", "жовтий"), new Circle("коло", "зелений"), new Trapeze("трапеція", "червоний")];
   array_push($figures, $exampleFigures[rand(0, count($exampleFigures)-1)]);
    
}




   