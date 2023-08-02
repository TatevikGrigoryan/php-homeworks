<?php

/* 1.
•Create a trait StringTrait with 2 methods –measureLength, which
calculates the string length, and makeUppercase, which makes all
letters uppercase.
•Create a class, which has a property named $message and the type is
string.
•Create a new instance of that class and use the trait methods for that
object
*/

trait StringTrait
{
    public function measureLength(string $str): int
    {
        return strlen($str);
    }

    public function makeUppercase(string $str): string
    {
        return strtoupper($str);
    }
}

class Example
{
    use StringTrait;
}

$exp = new Example();
echo $exp->measureLength('Hello world') . "<br>";
echo $exp->makeUppercase('Hello world');

/* 2.
Suppose we have two classes. Simplify the code using the keyword use.
namespace Core\Admin;
class Controller
{
}

namespace Users;
class Page extends \Core\Admin\Controller
{
}
*/
echo $foo = 5 * "10 Small Pigs";