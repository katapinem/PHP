<?php 
$nilaiAngka = 87; 
if (($nilaiAngka < 0) || ($nilaiAngka > 100)) 
{ 
 echo "Nilai angka yang diberikan salah"; 
} 
else 
{ 
 if (($nilaiAngka >= 80) && ($nilaiAngka <= 100)) 
 { 
 $nilaiHuruf = "A"; 
 } 
 else if (($nilaiAngka >= 70) && ($nilaiAngka <= 79)) 
 { 
 $nilaiHuruf = "B"; 
 } 
 else if (($nilaiAngka >= 60) && ($nilaiAngka <= 69)) 
 { 
 $nilaiHuruf = "C"; 
 } 
 else if (($nilaiAngka >= 50) && ($nilaiAngka <= 59)) 
 { 
 $nilaiHuruf = "D"; 
 } 
 else if (($nilaiAngka >= 0) && ($nilaiAngka <= 49)) 
 { 
 $nilaiHuruf = "E"; 
 } 
 
 echo "Nilai hurufnya adalah ".$nilaiHuruf; 
} 
?> 