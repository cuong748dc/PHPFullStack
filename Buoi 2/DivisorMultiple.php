<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];
$m = $argv[2];

function gcd($n, $m)
{
    while ($n * $m != 0) {
        if ($n > $m) {
            $n %= $m;
        } else {
            $m %= $n;
        }
    }
    return $n + $m;
}


function lcm($n, $m)
{
    return $n * $m / gcd($n, $m);
}

printStarts();
echo "\n";
echo " Uoc chung lon nhat la " . gcd($n, $m);
echo "\n";
echo " Boi chung nho nhat la " . lcm($n, $m);
echo "\n";
printStarts();
?>