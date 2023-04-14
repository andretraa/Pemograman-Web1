<?php
function fibonacci($n){
   if($n == 0){
      return 0;
   }else if($n == 1){
      return 1;
   }else{
      return (fibonacci($n-1) + fibonacci($n-2));
   }
}

// Contoh penggunaan function untuk mencetak deret bilangan Fibonacci
$jumlah = 10; // Jumlah bilangan dalam deret Fibonacci yang ingin dicetak
for ($i = 0; $i < $jumlah; $i++){
   echo fibonacci($i) . " ";
}
?>
