<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];

function loopFibo($n)
{
    $f1 = 0;
    $f2 = 1;
    $fn = 1;

    if ($n <= 0) {
        return 0;
    } else if ($n < 2) {
        return 1;
    } else {
        for ($i = 2; $i < $n; $i++) {
            $f1 = $f2;
            $f2 = $fn;
            $fn = $f1 + $f2;
        }
    }
    return $fn;

}

function recursiveFibo($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n <= 2) {
        return 1;
    } else {
        return recursiveFibo($n - 1) + recursiveFibo($n - 2);
    }
}

printStarts();
echo "\n";
echo " So Fibonacci thu $n la " . recursiveFibo($n);
echo "\n";
echo " So Fibonacci thu $n la " . loopFibo($n);
echo "\n";
printStarts();

?>