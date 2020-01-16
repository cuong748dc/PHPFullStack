<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$x = $argv[1];

function vampire($x)
{
    if ($x % 2 == 0 && strlen($x) % 2 == 0) {
        $arr = str_split($x);
        sort($arr);
        $str = implode($arr);
        for ($i = pow(10, (strlen($x) / 2) - 1); $i <= pow(10, strlen($x) - 1); $i++) {
            $j = $x / $i;
            if (strlen($j) % (strlen($x) / 2) == 0) {
                $arr2 = str_split($i,$j);
                sort($arr2);
                $str2 = implode($arr2);
                if ($str == $str2) {
                    echo "$x la so vampire";
                }
            }
        }
    }
}

vampire($x);

?>