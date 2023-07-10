<?php
/*3.1•You have a list of emails. Check which of them are valid
using a callback function*/
function checkValidEmails (string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email - Invalid email format"."<br>";
        return;
    }

    echo "$email - Valid email"."<br>";

}
$emails = ["test@gmail.com", "user.com", "user1@mail.su"];
array_map ("checkValidEmails", $emails);

//3.2 Count number of digits in a number using recursion.
function countDigitsWithRecursion($num)
{
    if ($num < 10) {
        return 1;
    }

    return 1 + countDigitsWithRecursion(($num - $num % 10) / 10);
}
echo countDigitsWithRecursion(5237);


//3.3.Find reverse of any number using recursion
function reverseDigitsWithRecursion($num)
{
    if ($num < 10) {
        return $num;
    }

    $res = ($num - $num % 10) / 10;

    return $num % 10 * 10**strlen((string)($res)) + reverseDigitsWithRecursion(($num - $num % 10) / 10);
}
echo reverseDigitsWithRecursion(5237);

/* 3.4
Given an array of angles:
$arr = [0, 30, 45, 60, 90, 120, 135, 150, 180];
Sort the array by their
1.Sinuses
2.Cosines
*/
$arr = [0, 30, 45, 60, 90, 120, 135, 150, 180];
//3.4.1
function sortBySin ($deg1, $deg2) : int
{
    return sin(deg2rad($deg1)) <=> sin(deg2rad($deg2));
}
usort($arr,"sortBySin");
print_r($arr);
echo "<br>";
//3.4.2
function sortByCos ($deg1, $deg2) : int
{
    return cos(deg2rad($deg1)) <=> cos(deg2rad($deg2));
}
usort($arr,"sortByCos");
print_r($arr);



