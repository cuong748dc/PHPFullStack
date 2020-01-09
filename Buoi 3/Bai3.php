<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = "hoc php full stack";
printStarts();
echo "\n";
echo "Chuoi da cho co " . str_word_count() . " tu";
echo "\n";
printStarts();
?>
