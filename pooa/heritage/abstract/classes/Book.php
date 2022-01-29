<?php
require_once 'Book.php';

class Book extends Product
{
  private const TAX_ON_BOOKS = 5 / 10;
  public string $author;
  public int $pagesNumber;

  public function __construct(float $price, string $title, string $author, int $pagesNumber)

  {
    parent::__construct($title, $price);
    $this->author = $author;
    $this->pagesNumber = $pagesNumber;
  }

  public function getTotalPrice(): float
  {
    return $this->price * (1 + TAX_ON_BOOKS);
  }
}
