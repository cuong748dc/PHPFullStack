<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];

function loopFactorial($n)
{
    $kq = 1;
    if ($n == 0 || $n == 1) {
        echo "n! = " . $kq;
    } else {
        for ($i = 2; $i <= $n; $i++) {
            $kq *= $i;
        }
        echo "n! =" . $kq;
    }
}

printStarts();
echo "\n";
loopFactorial($n);
echo "\n";
printStarts();


?>
