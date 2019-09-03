<?php

$tablica = [];
for ($j = 0; $j<4; $j++) {
    $pass = "";
    for ($i = 0; $i < 8; $i++) {
        $pass .= chr(rand(34, 126));
    }
    $tablica[$j]=$pass;
}
print_r($tablica);