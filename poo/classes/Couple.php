<?php

class Couple
{
  public User $user1;
  public User $user2;

  function __construct(User $user1, User $user2)
  {
    $this->user1 = $user1;
    $this->user2 = $user2;
  }

  function compare(User $user1, User $user2): bool
  {
    return $this->user1->name === $this->user2->name;
  }
}
