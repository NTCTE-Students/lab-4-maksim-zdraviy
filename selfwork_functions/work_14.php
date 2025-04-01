<?php
function format($date) {
    $dateArr = explode("-", $date);
    return "{$dateArr[2]}/{$dateArr[1]}/{$dateArr[0]}";
}

print(format("2025-03-19"));