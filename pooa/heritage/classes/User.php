<?php
require_once 'Tooltipable.php';

class User implements Tooltipable
{
  public string $name;
  public string $surname;

  public function __construct(string $name, string $surname)
  {
    $this->name = $name;
    $this->surname = $surname;
  }

  public function getDisplayedName(): string
  {
    return $this->name . ' ' . $this->surname;
  }

  public function getTitle(): string
  {
    return $this->name;
  }

  public function getDescription(): string
  {
    return $this->surname;
  }
}
