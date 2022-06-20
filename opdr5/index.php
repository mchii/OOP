<?php

class vogel
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
class parkiet extends vogel
{

    public function getEieren()
    {
        return $this->aantalEieren;
    }
    public function message()
    {

        echo "Vertel eens wat over de vogel?";
    }
    public function intro()
    {
        echo "<br>" . "De vogel is {$this->name} en de color is {$this->color}. Hij legt {$this->getEieren()} eieren per maand.";
    }
}
$parkiet = new parkiet("een parkiet", "groen met blauw", 20);
$parkiet->message();
$parkiet->intro();
