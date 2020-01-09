<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];

function countAndSum($n)
{
    $sum = 0;
    $count = 0;
    for ($i = 2; $i < $n+2; $i++) {
        $sum += $n;

        if ($n % 2 == 1) {
            $count++;
        }
    }
    echo "Tong so le la " . $count . "\n" . "Tong cua day so la " . $sum;

}

printStarts();
echo "\n";
countAndSum($n);
echo "\n";
printStarts();

?>
