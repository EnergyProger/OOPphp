<?php

class Circle implements IFigure
{
    private $name;
    private $color;
    private $radius;
   
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->radius = rand(5,1000);
       
    }
    
    public function Radius()
    {
        
        return $this->radius;
    }
    
    public function Area()
    {
        return round(M_PI * pow($this->radius, 2),2);
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Print()
    {
        return "Фігура: $this->name, площа: ".$this->Area()." кв.од., радіус: ".$this->Radius()." од., колір: ".$this->Color();
    }
}
