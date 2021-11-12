<?php

class Triangle implements IFigure
{
    private $name;
    private $color;
    private $sideB;
    private $sideA;
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->sideA = rand(5,1000);
        $this->sideB = rand(5,1000);
    }
    
    public function Hypotenuse()
    {
        $hypotenuse = pow($this->sideA,2) + pow($this->sideB,2);
        return round(sqrt($hypotenuse),1);
    }
    
    public function Area()
    {
        return (1/2) * $this->sideA * $this->sideB;
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Print()
    {
        return "Фігура: $this->name, площа: ".$this->Area()." кв.од., гіпотенуза: ".$this->Hypotenuse()." од., колір: ".$this->Color();
    }
}
