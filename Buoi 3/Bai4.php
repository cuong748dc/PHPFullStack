<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$s1 = $argv[1];
$s2 = $argv[2];

printStarts();
echo "\n";
if (strpos($s1, $s2) == true) {
    echo "co";
} else {
    echo "khong";
}
echo "\n";
printStarts();
?>