<?php

use Product as GlobalProduct;

class Product
{
  public $title,
    $author,
    $publisher,
    $price;

  public function __construct(
    $title = "title",
    $author = "author",
    $publisher = "publisher",
    $price = 0
  ) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
  }

  public function getLabel()
  {
    return "$this->author, $this->publisher";
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

$product1 = new GlobalProduct("Naruto", "Masashi Kishimito", "Shonen Jump", 30000);
$product2 = new GlobalProduct("Uncharted", "Neil Duckman", "Sony Computer", 30000);

echo "Komik 2: " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();

$ProductInfo1 = new PrintProductInfo();
echo $ProductInfo1->print($product1);
