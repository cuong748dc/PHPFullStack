<?php
function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$x = $argv[1];

function getElement($x)
{
    $a = $x % 10;
    $b = ($x / 10) % 10;
    $c = ($x / 100) % 10;
    $d = ($x / 1000) % 10;

    $arr = [$a, $b, $c, $d];
    sort($arr);

    return implode("", $arr);
}

function vampire($x)
{
    if ($x % 2 == 0 && strlen($x) % 2 == 0) {
        for ($i = 10; $i < 100; $i++) {
            $j = $x / $i;
            if ($j >= 10 && $j < 100) {
                $m = $i * 100 + $j;
                if (getElement($m) == getElement($x)) {
                    echo "$x la so vampire";
                    break;
                }
            }
        }

    } else {
        echo "$x khong phia la so vampire";
    }
}

printStarts();
echo "\n";
vampire($x);
echo "\n";
printStarts();

?>

