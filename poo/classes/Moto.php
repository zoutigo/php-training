<?php
class Moto
{
  public string $brand;
  public string $color;
  public int $maxSpeed;

  public function __construct(string $brand, string $color, int $maxSpeed)
  {
    $this->brand = $brand;
    $this->color = $color;
    $this->maxSpeed = $maxSpeed;
  }

  public function __destruct()
  {
    echo 'La moto rentre au garage';
  }

  public function getDescription(): string
  {
    return $this->brand . ' ' . $this->color . ' ayant une vitesse maximale de ' . $this->maxSpeed;
  }
}
