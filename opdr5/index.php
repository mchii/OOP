<?php

class vugel
{
    public $name;
    public $color;
    protected $aantalEieren;
    public function __construct($name, $color, $aantalEieren)
    {
        $this->name = $name;
        $this->color = $color;
        $this->aantalEieren = $aantalEieren;
    }
}
class Parkiet extends vugel
{

    public function getEieren()
    {
        return $this->aantalEieren;
    }
    public function message()
    {

        echo "Welke Vogel is het?";
    }
    public function intro()
    {
        echo "<br>" . "De vogel is {$this->name} en de color is {$this->color}. Hij legt {$this->getEieren()} eieren per maand.";
    }
}
$parkiet = new Parkiet("een parkiet", "groen met blauw");
$parkiet->message();
$parkiet->intro();
