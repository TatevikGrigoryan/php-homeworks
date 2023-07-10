<?php
//2.1 Given a sentence as a string, find the amount of words which start with “a” or “A”.
function amountWord(string $sentence, string $character = 'a'): int
{
    $wordArray = explode(' ', $sentence);
    $count = 0;

    foreach ($wordArray as $word) {
        if (stripos($word, $character) === 0) {
            $count++;
        }
    }

    return $count;
}

echo amountWord('The countries with many native speakers of English share an international standard of written English and jointly influence speech norms for English around the world. ', 'a');

//2.2 Remove the last character from a string using PHP.
function removeLastFromStr(string $value): string
{
    return substr($value, 0, strlen($value) - 1);
}

echo removeLastFromStr('smdkjd jidisud ndjsjhd');

//2.3 2 points are given with coordinates (x1, y1) and (x2, y2). Find their distance
function findDistance($cordX1, $cordY1, $cordX2, $cordY2): float
{
    $result = ($cordX2 - $cordX1) ** 2 + ($cordY2 - $cordY1) ** 2;

    return sqrt($result);
}

echo findDistance(1, 2, 5, 5);

//2.4 Print the pre-last element of a given array
function arrPreLastElem(array $arr)
{
    return $arr[count($arr) - 2];
}
echo arrPreLastElem(array(10,20,50,180));

/*2.5 Given an array of numbers, find the difference of its biggest and
smallest elements without using min and max functions*/
function diffOfMaxMin(array $arr):float
{
    $min = $arr[0];
    $max = $arr[0];

    for ($x = 1; $x < count($arr); $x++) {
        if ($arr[$x] < $min) {
            $min = $arr[$x];
        }

        if ($arr[$x] > $max) {
            $max = $arr[$x];
        }
    }

    return $max - $min;
}

function diffOfMaxMin_2(array $arr):float
{
    sort($arr);

    return array_pop($arr) - $arr[0];
}
echo diffOfMaxMin(array(20, 5, 10, 80, 30, 70));

/*
 2.6 Given an array of numbers, output a new array based on its elements
frequency. The one which has more frequency should come first. For
example:
Input - [1, 3, 3, 1, 1, 8, 3, 6, 8, 3]
Output –[3, 1, 8, 6]
*/

function sortArrWithValuesCount(array $arr): array
{
    $newArr = array_count_values($arr);
    arsort($newArr);
    $result = [];

    foreach ($newArr as $key => $value) {
        $result[] = $key;
    }

    return $result;
}

print_r(sortArrWithValuesCount(array(1, 3, 3, 1, 1, 8, 3, 6, 8, 3)));
