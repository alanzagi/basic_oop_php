<?php

use Product as GlobalProduct;

class Product
{
  public $title,
    $author,
    $publisher,
    $price,
    $numOfPages,
    $playTime;

  public function __construct(
    $title = "title",
    $author = "author",
    $publisher = "publisher",
    $price = 0,
    $numOfPages = 0,
    $playTime = 0
  ) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->numOfPages = $numOfPages;
    $this->playTime = $playTime;
  }

  public function getLabel()
  {
    return "$this->author, $this->publisher";
  }

  public function getProductInfo()
  {
    $str = "{$this->title} | {$this->getLabel()} (Rp {$this->price})";
    return $str;
  }
}

class Comic extends GlobalProduct
{
  public function getProductInfo()
  {
    $str = "Comic : {$this->title} | {$this->getLabel()} (Rp {$this->price}) - {$this->numOfPages} Pages.";
    return $str;
  }
}

class Game extends GlobalProduct
{
  public function getProductInfo()
  { {
      $str = "Game : {$this->title} | {$this->getLabel()} (Rp {$this->price}) - {$this->playTime} Hours Play Time.";
      return $str;
    }
  }
}

class PrintProductInfo
{
  public function print(Product $product)
  {
    $str = "{$product->author} | 
            {$product->getLabel()} 
            (Rp{$product->price})";
    return $str;
  }
}

$product1 = new Comic("Naruto", "Masashi Kishimito", "Shonen Jump", 30000, 100, null);
$product2 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 30000, null, 10);

echo $product1->getProductInfo();
echo "<br>";
echo $product2->getProductInfo();
