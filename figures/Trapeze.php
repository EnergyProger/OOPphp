<?php

class Trapeze implements IFigure
{
    private $name;
    private $color;
    private $sideB;
    private $sideA;
    private $height;
    
   
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->sideA = rand(5,1000);
        $this->sideB = rand(5,1000);
        $this->height = rand(5,1000);
       
    }
    
    public function Height()
    {
        
        return $this->height;
    }
    
    public function Area()
    {
        return (($this->sideA + $this->sideB) / 2) * $this->height;
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Print()
    {
        return "Фігура: $this->name, площа: ".$this->Area()." кв.од., висота: ".$this->Height()." од., колір: ".$this->Color();
    }
}