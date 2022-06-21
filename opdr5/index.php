<?php

class vogel
{
    public $name;
    public $color;
    protected $aantalEieren;
    private $paaseieren;
    public function __construct($name, $color, $aantalEieren, $paaseieren)
    {
        $this->name = $name;
        $this->color = $color;
        $this->aantalEieren = $aantalEieren;
        $this->paaseieren = $paaseieren;
    }
    public function getPaaseieren()
    {
        return $this->paaseieren;
    }
    // public function paas()
    // {
    //     echo "<br>" . "Er zijn {$this->getEieren()} eieren gevonden.";
    // }
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
$parkiet = new parkiet("een parkiet", "groen met blauw", 20, 20);
echo $parkiet->getPaaseieren() . " paaseieren zijn er gevonden door de kinderen vorige week.<br>";
$parkiet->message();
$parkiet->intro();
