<?php
function countDateDifferent(string $date1, string $date2): string {
    $d = strtotime($date1);
    $d_1 = strtotime($date2);
    $diff = abs($d - $d_1);
    $oneYearToTm = 24 * 365 * 60 * 60;
    $oneMonthToTm = 24 * 30 * 60 * 60;
    $dayToTm = 24 * 60* 60;

    $year = floor($diff / $oneYearToTm);
    $month = floor(($diff - $year * $oneYearToTm) / $oneMonthToTm);
    $days = floor(($diff - $year * $oneYearToTm - $month * $oneMonthToTm) / $dayToTm);

    return "$year years, $month months, $days days";
}

function getFileLastLine($fileName)
{
    $myFile = fopen($fileName, "r") or die("Unable to open file!");
    $lastLine = '';
    while (!feof($myFile)) {
        $lastLine  = fgets($myFile);
    }

    return $lastLine;
}

echo getFileLastLine("myText.txt") . "<br>";

function removeP_Br_Tags($fileName)
{
    $htmlContent = file_get_contents($fileName);
    $modifiedContent = str_replace(['<b>', '</b>', '<p>', '</p>'], '', $htmlContent);

    $fh = fopen("test_changed.html", 'w') or die("Создать файл не удалось");
    fwrite($fh, $modifiedContent) or die ("Сбой записи файла");
    fclose($fh);
    echo 'Content modified and saved successfully.';
}

removeP_Br_Tags("test.html");
