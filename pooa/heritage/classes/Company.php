<?php
require_once 'Tooltipable.php';


class Company implements Tooltipable
{
  public string $name;
  public string $adress;

  public function __construct(string $name, string $adress)
  {
    $this->name = $name;
    $this->adress = $adress;
  }

  public function getDescription(): string
  {
    return $this->adress;
  }

  public function getTitle(): string
  {
    return $this->name;
  }
}
