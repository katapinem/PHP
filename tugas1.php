<?php
$saldoAwal = 1000000;
$bulan = 11;
$bunga = 0.03 * ($bulan * $saldoAwal);

$saldoAkhir =   ($saldoAwal * $bulan) - $bunga  ;

echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir. ",-";
?>  