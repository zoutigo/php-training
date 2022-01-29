<?php
require_once 'User.php';

class Seller extends User
{
  public string $company;

  public function __construct(string $name, string $surname, string $company)

  {
    parent::__construct($name, $surname);
    $this->company = $company;
  }

  public function getDisplayedName(): string
  {
    return parent::getDisplayedName() . ' ' . $this->company;
  }
}
