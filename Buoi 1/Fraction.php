<?php
$a =$argv[1];
$b =$argv[2];
$c =$argv[3];
$d =$argv[4];

$tuTong =$a*$d+$c*$b;
$tuHieu =$a*$d-$c*$b;
$tuTich = $a*$c;
$mauTong =$b*$d;
$tuThuong =$a*$d;
$mauThuong =$b*$c;


echo "("."$a"."/"."$b".")"."+"."(". "$c"."/". "$d".")"." = ". " $tuTong"."/"."$mauTong";
echo "\n";
echo "("."$a"."/"."$b".")"."-"."(". "$c"."/". "$d".")"." = ". " $tuHieu"."/"."$mauTong";
echo "\n";
echo "("."$a"."/"."$b".")"."*"."(". "$c"."/". "$d".")"." = ". " $tuTich"."/"."$mauTong";
echo "\n";
echo "("."$a"."/"."$b".")"."/"."(". "$c"."/". "$d".")"." = ". " $tuThuong"."/"."$mauThuong";
echo "\n";
?>
