<?php

for ($i = 0; $i < 2; $i++) {
  for ($j = 0; $j < 6; $j++) {
    echo "perulangan ke (".$i.", ".$j.") \n";
    if ($j == 5 && $i == 1) {
      break 2;
    }
  }
  echo "";
}

?>