<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$n = $argv[1];

if ($n > 0 && $n < 8) {
    function printSchedule($n)
    {
        switch ($n) {
            case 1:
                echo "Chu Nhat, duoc nghi";
                break;
            case 2:
                echo "Thu Hai, hoc buoi sang";
                break;
            case 3:
                echo "Thu Ba, hoc buoi sang";
                break;
            case 4:
                echo "Thu Tu, hoc buoi chieu";
                break;
            case 5:
                echo "Thu Nam, hoc buoi sang";
                break;
            case 6:
                echo "Thu Sau, hoc buoi chieu";
                break;
            case 7:
                echo "Thu Bay, hoc buoi chieu";
                break;
        }
    }

    printStarts();
    echo "\n";
    printSchedule($n);
    echo "\n";
    printStarts();
} else {
    printStarts();
    echo "\n";
    echo "Hay nhap ngay trong tuan can xem bang so";
    echo "\n";
    printStarts();

}
?>