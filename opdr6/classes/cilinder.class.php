<?php


class Cilinder extends Figuur
{
    public $h;
    public $r;
    public function __construct(float $lh, float $lr)
    {
        $this->h = $lh;
        $this->r = $lr;
    }
    public function getLh($lh)
    {
        return $this->h;
    }
    public function getLr($lr)
    {
        return $this->r;
    }
    public function berekenOppervlakte()
    {
        $cirkel = 2 * $this->pi * $this->r * $this->r;
        $buis = 2 * $this->pi * $this->r * $this->h;

        $uitkomst = $cirkel + $buis;
        return $uitkomst;
    }
}
