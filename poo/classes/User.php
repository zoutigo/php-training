<?php
class User
{
  public int $id;
  public string $name = 'John';
  public string $username = 'Doe';

  public function __construct(string $name, string $username)
  {
    $this->name = $name;
    $this->username = $username;
  }

  public function sayHello(): string
  {
    return 'Bonjour' . $this->name . ' ' . $this->username . '<br>';
  }
}
