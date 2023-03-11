<?php

use Product as GlobalProduct;

class Product
{
  public $title,
    $author,
    $publisher,
    $price,
    $numOfPages,
    $playTime,
    $type;

  public function __construct(
    $title = "title",
    $author = "author",
    $publisher = "publisher",
    $price = 0,
    $numOfPages = 0,
    $playTime = 0,
    $type
  ) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->price = $price;
    $this->numOfPages = $numOfPages;
    $this->playTime = $playTime;
    $this->type = $type;
  }

  public function getLabel()
  {
    return "$this->author, $this->publisher";
  }

  public function getCompleteInfo()
  {
    // Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp30.000) - 100 Halaman.
    $str = "{$this->type} : {$this->title} | {$this->getLabel()} (Rp {$this->price})";
    if ($this->type == "Komik") {
      $str .= " - {$this->numOfPages} Halaman.";
    } else if ($this->type == "Game") {
      $str .= " ~ {$this->playTime} Jam.";
    }

    return $str;
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

$product1 = new GlobalProduct("Naruto", "Masashi Kishimito", "Shonen Jump", 30000, 100, null, "Komik");
$product2 = new GlobalProduct("Uncharted", "Neil Duckman", "Sony Computer", 30000, null, 10, "Game");

echo $product1->getCompleteInfo();
echo "<br>";
echo $product2->getCompleteInfo();

// Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp30.000) - 100 Halaman.
// Game: Subway Surfers | Subway Corporation, Play Store (Rp10.000) ~ 10 Jam.
