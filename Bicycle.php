<?php


class Bicycle 
{

    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;


    public function __construct($color){
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function forward(): string 
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Break !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // public function dump()
    // {
    //     var_dump($this);
    // }
    

}