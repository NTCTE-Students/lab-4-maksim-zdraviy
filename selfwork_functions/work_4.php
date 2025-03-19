<?php
function sortArray($array) {
    $arr = $array;
    sort($arr);
    return $arr;
}

$numes = [20, 30, 3, 4, 6, 7, 9, 8, 6, 1, 10];
$sortedNum = sortArray($numes);

foreach ($sortedNum as $nume) {
    print("{$nume} ");
}