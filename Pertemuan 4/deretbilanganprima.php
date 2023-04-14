<?php

function is_prime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function get_primes($max_number) {
    $primes = array();
    for ($i = 2; $i <= $max_number; $i++) {
        if (is_prime($i)) {
            array_push($primes, $i);
        }
    }
    return $primes;
}

$number = intval(readline("Masukkan angka: "));
$primes = get_primes($number);

echo "Bilangan prima kurang dari atau sama dengan $number adalah: \n";
foreach ($primes as $prime) {
    echo $prime . " ";
}

?>
