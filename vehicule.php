<?php

class Car {

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


    public function __construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function getNbWheels()
    {
        return $this->nbWheels = 4;
        echo 'Numbers of wheels' . $nbWheels;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed = 110;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel = 60;
    }

    public function forward()
    {
        $this->currentSpeed = 450;
        return 'Go !';
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !";
        }
        $sentence .=  "<br>I'm stopped !";
        return $sentence;
    }

}