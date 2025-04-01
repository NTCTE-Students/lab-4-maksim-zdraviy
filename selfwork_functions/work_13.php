<?php

function average($numes) {
    $sum = array_sum($numes);
    $count = count($numes);
    return $sum / $count;
}

$numes = [1, 2, 3, 4, 5];
$result = average($numes);

print("Среднее значение: {$result}");