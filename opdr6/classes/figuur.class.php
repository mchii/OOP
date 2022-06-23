<?php
class Figuur
{
  public $Pi = 3.1415;
  protected $x;
  protected $y;
  private $omschrijving;
  public function __contrust(float $lx, float $ly)
  {
    $this->x = $lx;
    $this->y = $ly;
  }
  public function setX($x)
  {
    $this->x = $x;
  }
  public function setY($y)
  {
    $this->y = $y;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function setOmschrijving(string $omschrijving)
  {
    $this->omschrijving = $omschrijving;
  }
  public function getOmschrijving(string $omschrijving)
  {
    return $this->omschrijving;
  }

  public function berekenOppervlakte()
  {
  }
}
