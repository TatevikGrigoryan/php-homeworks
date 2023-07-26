<?php
/*Create a Price class and $price object so that:
$price = new Price(10, “euro”);
echo $price; // should print “The price is 10 euros”
$price = new Price(1, “dollar”);
echo $price; // should print “The price is 1 dollar”*/

class Price {
    private int $price;
    private string $currency;

    public function __construct($price, $currency)
    {
        $this->price = $price;
        $this->currency = $currency;
    }

    public function __toString(): string
    {
        return "The price is $this->price $this->currency";
    }
}

$price = new Price(10, "euro");
echo $price;
echo "<br>";

$price = new Price(1, "dollar");
echo $price;
echo "<br>";


/*• Create a Rectangle class and a method which calculates its area.
• Create a Square class which extends Rectangle. Do not create the
same method again, but it should work correctly.*/

class Rectangle {
    public int $height;
    public int $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area(): int
    {
        return $this->height * $this->width;
    }
}

class Square extends Rectangle {
    public int $height;
    public int $width;

    public function __construct($height)
    {
        $this->height = $height;
        $this->width = $height;
    }
}

$rec = new Rectangle(5, 4);
echo $rec->area (); // 20
echo "<br>";
$sq = new Square(6);
echo $sq->area (); // 36
