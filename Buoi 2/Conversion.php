<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$x = $argv[1];

function classifyFluid($x)
{
    if ($x > 40) {
        echo "Extra strong liquor";
    } elseif (40 >= $x && 20 < $x) {
        echo "Strong liquor";
    } elseif (20 >= $x && 15 < $x) {
        echo "Liquor";
    } elseif (15 >= $x && 12 < $x) {
        echo "Strong vine";
    } elseif (12 >= $x && 10.5 < $x) {
        echo "Normal vine";
    } else {
        echo "Light vine";
    }
}

printStarts();
echo "\n";
classifyFluid($x);
echo "\n";
printStarts();
?>
