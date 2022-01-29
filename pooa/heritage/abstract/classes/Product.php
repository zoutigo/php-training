<?php

abstract class Product
{
  public string $name;
  public float $price;

  public function __construct(string $name, float $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public  abstract function  getFullPrice(): float;
}
