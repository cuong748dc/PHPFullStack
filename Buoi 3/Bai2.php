<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];

printStarts();
echo "\n";
echo "Chuoi da cho co " . str_word_count($n) . " tu";
echo "\n";
printStarts();
?>