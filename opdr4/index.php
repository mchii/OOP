<?php
class Vogel
{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro()
    {
        echo "<br>" . "De vogel is {$this->name} en de color is {$this->color}.";
    }
}
// Strawberry is inherited from Fruit
class Parkiet extends Vogel
{
    public function message()
    {
        echo "Welke Vogel is het?";
    }
}
$strawberry = new Parkiet("een parkiet", "groen met blauw");
$strawberry->message();
$strawberry->intro();
