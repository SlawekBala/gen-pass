<?php

$length = readline("Jakiej długości hasło wygenerować ");
$pass = "";
for ($i = 0; $i < $length; $i++){
    $pass .= chr(rand(34,126));
}

echo $pass;