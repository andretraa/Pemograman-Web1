<?php

$total = intval(readline("Total belanja: "));

if ($total > 100000) {
    $discount = $total * 0.1;
} elseif ($total > 50000) {
    $discount = $total * 0.05;
} else {
    $discount = 0;
}

echo "Diskon yang diterima: Rp" . number_format($discount, 0, ",", ".") . "\n";

?>
