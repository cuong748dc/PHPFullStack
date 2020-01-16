<?php

$arr = $argv;

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

function sumArray($arr)
{
    $sum = 0;
    for ($i = 1; $i <= count($arr) - 1; $i++) {
        $sum += $arr[$i];
    }
    echo $sum;

}

function sortArray($arr)
{
    for ($i = 1; $i <= count($arr) - 2; $i++) {
        for ($j = $i + 1; $j <= count($arr) - 1; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $x = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $x;
            }
        }
    }
    print_r($arr);

}

function isPerfectNumber($k)
{
    $sum = 0;
    for ($i = 1; $i <= $k / 2; $i++) {
        if ($k % $i == 0) {
            $sum += $i;
        }
    }
    if ($sum == $k) {
        return true;
    } else {
        return false;
    }
}

function check($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        if (isPerfectNumber($arr[$i])) {
            echo $arr[$i] . " la so hoan hao";
        }
    }
}

function isAlternative($arr)
{
    for ($i = 1; $i < count($arr) - 1; $i++) {
        $j = $i + 1;
        if ($arr[$i] * $arr[$j] >= 0) {
            return false;
        }
    }
    return true;
}

function deleteRepeatedValues($arr)
{
    for ($i = 1; $i < count($arr); $i++) {
        for ($j = 2; $j < count($arr) - 1; $j++) {
            if ($arr[$i] = $arr[$j]) {
                unset($arr[$j]);
            }
        }
    }
    print_r($arr);
}

printStarts();
echo "\n";
sumArray($arr);
echo "\n";
check($arr);
echo "\n";
isAlternative($arr);
echo "\n";
deleteRepeatedValues($arr);
echo "\n";
sortArray($arr);
echo "\n";
printStarts();

?>
