<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$a = $argv[1];
$b = $argv[2];
$c = $argv[3];

function solve($a, $b, $c)
{
    if ($a == 0) {
        echo "Khong phai phuong trinh bac hai mot an";
    } else {
        $delta = ($b * $b) - (4 * $a * $c);
        if ($delta > 0) {
            $x1 = ((-$b) - sqrt($delta)) / (2 * $a);
            $x2 = ((-$b) + sqrt($delta)) / (2 * $a);
            echo "Phuong trinh co hai nghiem phan biet x1=$x1 x2=$x2";
        } elseif ($delta == 0) {
            $x = (-$b) / (2 * $a);
            echo " Phuong trinh co nghiem kep : x=$x";
        } else {
            echo " Phuong trinh vo nghiem";
        }
    }
}

printStarts();
echo "\n";
solve($a, $b, $c);
echo "\n";
printStarts();
?>