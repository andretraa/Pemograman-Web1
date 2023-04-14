<?php

echo "PROGRAM UNTUK MENGHITUNG NILAI AKHIR",PHP_EOL,PHP_EOL ;
$nilaiMatematika=intval(readline("Masukkan Nilai Matematika : "));
$nilaiFisika=intval(readline("Masukkan Nilai Fisika : "));
$nilaiBiologi=intval(readline("Masukkan Nilai Biologi : "));

$nilaiRata=($nilaiMatematika+$nilaiFisika+$nilaiBiologi)/3;

echo PHP_EOL,"Nilai Rata-rata anda = ";
echo number_format($nilaiRata,2);

if ($nilaiRata>=60) {
    echo PHP_EOL,"SELAMAT KAMU LULUS";
}
elseif ($nilaiRata<60 && $nilaiRata>0) {
    echo PHP_EOL,"MAAF ANDA BELUM LULUS";
}else {
    echo PHP_EOL,"KAMU NGERJAIN TUGAS GA ?!!!";
}
?>