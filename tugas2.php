<?php
$bilangan = 100;
$pembagi = 3;
$hasilBagi = $bilangan / $pembagi;
$sisaBagi = $bilangan - (floor($hasilBagi) * $pembagi);

echo $bilangan." dibagi dengan ".$pembagi. " adalah ".floor ($hasilBagi)." sisa ". floor ($sisaBagi);
?> 
