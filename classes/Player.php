<?php

class Player 
{
    public $name = "";
    public $age = 0;
    public $speed = 0;
    public $accuracy = 0;
    public $score = 0;

    public function __construct ($name, $age, $speed, $accuracy) {
        $this->name = $name;
        $this->age = $age;
        $this->speed = $speed;
        $this->accuracy = $accuracy;
    }

    public function __toString() {
        return "{$this->name} scored {$this->score} points.";
    }

    public function thowFreeShot() {
        if(rand(1, 11) < $this->accuracy) $this->score += 3;
    }
}
