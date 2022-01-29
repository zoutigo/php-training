<?php
require_once 'Car.php';

class ElectricCar extends Car
{
  public float $autonomy;

  public function __construct(float $price, string $brand, float $autonomy)
  {
    parent::__construct($price, $brand);
    $this->autonomy = $autonomy;
  }
}
