<?php 
$nilaiAngka = 87; 
if (($nilaiAngka < 0) || ($nilaiAngka > 100)) 
{ 
 echo "Nilai angka yang diberikan salah"; 
} 
else
{ 
    if ($nilaiAngka >= 80) 
    { 
    $nilaiHuruf = "A"; 
    } 
    else if ($nilaiAngka >= 70) 
    { 
    $nilaiHuruf = "B"; 
    } 
    else if ($nilaiAngka >= 60) 
    { 
    $nilaiHuruf = "C"; 
    } 
    else if ($nilaiAngka >= 50) 
    { 
    $nilaiHuruf = "D"; 
    } 
    else if ($nilaiAngka >= 0) 
    { 
    $nilaiHuruf = "E"; 
    } 
    
    echo "Nilai hurufnya adalah ".$nilaiHuruf; 
   } 
   ?>