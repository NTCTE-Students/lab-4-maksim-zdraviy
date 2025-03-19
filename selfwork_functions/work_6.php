<?php
function sum($nume) {
    $sum = 0;

    foreach (str_split($nume) as $num) {
        $sum += (int)$num;
    }

    return $sum;
}

print(sum(9023));