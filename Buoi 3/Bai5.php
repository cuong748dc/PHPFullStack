<?php

function printStarts()
{
    for ($i = 0; $i < 20; $i++) {
        echo "*";
    }
}

$email= "123@apextech.edu.vn";

printStarts();
echo "\n";
echo chop($email,"@apextech.edu.vn");
echo "\n";
printStarts();

?><?php
