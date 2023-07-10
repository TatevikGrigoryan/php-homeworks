<?php
//1.Given a number $x, print its square.
function square($x)
{
    echo $x ** 2;
}

square(200);

//2.Given a year $y, check whether it is leap or not.
function checkLeap($year)
{
    echo "$year is " . ($year % 4 === 0 ? "leap" : "not leap");
}

checkLeap(2000);

//3.Check if $a, $b and $c all are equal to each other.
function checkEqual($a, $b, $c)
{
    if ($a === $b && $a === $c && $b === $c) {
        echo "$a, $b, $c are equal";
    } else {
        echo "$a, $b, $c are not equal";
    }
}

checkEqual(20, 25, 20);

//4.Given a number $x, print its half if it is an even number, and “Not an even number” if it is not.
function checkEven($x)
{
    if ($x % 2 === 0) {
        echo($x / 2);
    } else {
        echo "Not an even number";
    }
}

checkEven(20);

//5.Do the same with ternary operator.
function checkEven_2($x)
{
    echo $x % 2 === 0 ? $x / 2 : "Not an even number";
}

checkEven_2(23);

//6.un coffee
function getCoffeePrice($ask)
{
    switch ($ask) {
        case "A cup of coffee":
            $price = 7;
            break;
        case "A cup of coffee, please":
            $price = 4.25;
            break;
        case "Hi,a cup of coffee, please":
            $price = 1.4;
            break;
        default:
            $price = "no coffee";
            break;
    }

    echo $price === "no coffee" ? "$price" : "$price $";
}

getCoffeePrice("A cup of coffee, please");

//7.un coffee
function getCoffeePrice_1($ask)
{
    $price = match ($ask) {
        "A cup of coffee" => 7,
        "A cup of coffee, please" => 4.25,
        "Hi,a cup of coffee, please" => 1.4,
        default => "no coffee",
    };
    echo $price === "no coffee" ? "$price" : "$price $";
}

getCoffeePrice_1("A cup of coffee, please");


//8.Print all even numbers between 1 to 100. Each number should be on a separate line
function printEven()
{
    $x = 1;

    while ($x <= 100) {
        if ($x % 2 === 0) {
            echo "The number is: $x <br>";
        }

        $x += 1;
    }
}

printEven();

//9.Find sum of all odd numbers between 1 to 100.
function printSum()
{
    $sum = 0;

    for ($x = 1; $x <= 100; $x += 1) {
        if ($x % 2 !== 0) {
            $sum += $x;
        }
    }

    echo "The sum is: $sum";
}

printSum();


function getDigitsCount($x)
{
    $digitsCount = 1;
    $number = $x;

    while ($x > 9) {
        $x = $x / 10;
        ++$digitsCount;
    }

    echo "The digits count of $number is: $digitsCount";
}

getDigitsCount(13);
