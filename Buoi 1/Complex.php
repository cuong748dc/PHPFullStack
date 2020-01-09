<?php
$a =$argv[1];
$b =$argv[2];
$c =$argv[3];
$d =$argv[4];

$tongNguyen =$a+$c;
$tongPhuc =$b+$d;
$tichNguyen =$a*$c-$b*$d;
$tichPhuc =$a*$d+$c*$b;
$thuongNguyen =($a*$c+$b*$d)/($c*$c+$d*$d);
$thuongPhuc =($c*$b-$a*$d)/($c*$c+$d*$d);

echo "("."$a"."+"."$b"."i".")"."+"."(". "$c"."+". "$d"."i".")"." = ". " $tongNguyen"."+"."$tongPhuc"."i";
echo "\n";
echo "("."$a"."+"."$b"."i".")"."*"."(". "$c"."+". "$d"."i".")"." = ". "$tichNguyen"."+"."$tichPhuc"."i";
echo "\n";
echo "("."$a"."+"."$b"."i".")"."/"."(". "$c"."+". "$d"."i".")"." = ". "$thuongNguyen"."+"."$thuongPhuc"."i";
?>