<?php
function unique($array) {
    return array_unique($array);
}

$numes = [20, 30, 3, 4, 6, 7, 9, 8, 6, 1, 10, 10, 10];
$sortedNum = unique($numes);

foreach ($sortedNum as $nume) {
    print("{$nume} ");
}