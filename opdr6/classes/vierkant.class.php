<?php
require "figuur.class.php";

class Vierkant extends Figuur
{
    public $x;
    public function __construct($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function berekenOppervlakte($oppervlakte)
    {
        $uitkomst = $oppervlakte * $oppervlakte;
        return $uitkomst;
    }
}
