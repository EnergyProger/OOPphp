<?php

class Square implements IFigure
{
    private $name;
    private $color;
    private $side;
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        $this->side = rand(5,10);
    }
    
    public function Side()
    {
        return $this->side;
    }
    
    public function Area()
    {
        return pow($this->side,2);
    }
    
    public function Color()
    {
        return $this->color;
    }
    
    public function Print()
    {
        return "Фігура: $this->name, площа: ".$this->Area()." кв.од., довжина сторони: $this->side од., колір: ".$this->Color();
    }
}
