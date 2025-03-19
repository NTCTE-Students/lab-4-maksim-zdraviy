<?php
function factorial($nume) {
    $result = 1;
    for ($i = 2; $i <= $nume; $i++) {
        $result *= $i;
    }

    return $result;
}

print(factorial(5));