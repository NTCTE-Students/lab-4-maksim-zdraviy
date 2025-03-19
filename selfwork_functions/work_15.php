<?php
function smax($array) {
    $unique = array_unique($array);
    rsort($unique);
    return $unique[1];
}

$numes = [20, 30, 3, 4, 6, 7, 9, 8, 6, 1, 10];
print(smax($numes));