<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$email= $argv[1];

printStarts();
echo "\n";
echo chop($email,"@apextech.edu.vn");
echo "\n";
printStarts();

?><?php
