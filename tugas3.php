<?php

$jumlahUang = 1575250;
$jumlahpenarikana = 100000;
$jumlahpenarikanb = 50000;
$jumlahpenarikanc = 20000;
$jumlahpenarikand = 5000;
$jumlahpenarikane = 100;
$jumlahpenarikanf = 50;


$a = $jumlahUang / $jumlahpenarikana;
$b = $jumlahUang / $jumlahpenarikanb;
$c = $jumlahUang / $jumlahpenarikanc;
$d = $jumlahUang / $jumlahpenarikand;
$e = $jumlahUang / $jumlahpenarikane;
$f = $jumlahUang / $jumlahpenarikanf;


echo "Jumlah Rp. 100.000 : ". floor($a). "<br />";
echo "Jumlah Rp. 50.000 : ". floor($b). "<br />";
echo "Jumlah Rp. 20.000 : ". floor($c). "<br />";
echo "Jumlah Rp. 5.000 : ". floor($d ). "<br />";
echo "Jumlah Rp. 100 : ". floor($e). "<br />";
echo "Jumlah Rp. 50 : ". floor($f). "<br />";

?> 