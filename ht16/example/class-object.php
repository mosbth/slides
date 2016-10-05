<?php

class Dice {
    public $faces = 6;
    
    public function roll() {
        return rand(1, $this->faces);
    }
}

$dice = new Dice();

echo $dice->roll() . "\n";
$dice->faces = 32;
echo $dice->roll() . "\n";


class DiceAlphabetic {
    public $faces = 6;
    public static $images = ["A", "B", "C", "D", "E", "F"];
    
    public function roll() {
        return self::$images[rand(0, $this->faces - 1)];
    }
}

$dice = new DiceAlphabetic();

echo "\n";
echo $dice->roll() . "\n";
echo $dice->roll() . "\n";
echo print_r(DiceAlphabetic::$images, 1) . "\n";
