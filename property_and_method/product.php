<?php

use Product as GlobalProduct;

class Product
{
  public $title,
    $author,
    $publisher,
    $price;

  public function getLabel()
  {
    return "$this->author, $this->publisher";
  }
}

// $product1 = new Product();
// $product1->title = "Naruto";
// var_dump($product1);

// $product2 = new Product();
// $product2->title = "Sasuke";
// var_dump($product2->title);

$product3 = new GlobalProduct();
$product3->title = "Transformer 1";
$product3->author = "Michael Bay";
$product3->publisher = "Paramount Pictures";
$product3->price = "$20";

echo "Komik: $product3->author $product3->publisher";
echo "<br>";
echo $product3->getLabel();

echo "<hr>";

$product4 = new GlobalProduct();
$product4->title = "Transformer 2";
$product4->author = "Michael Bays 2";
$product4->publisher = "Paramount Pictures 2";
$product4->price = "$20";

echo "Komik 2: " . $product4->getLabel();
echo "<br>";
echo "Game : " . $product4->getLabel();
