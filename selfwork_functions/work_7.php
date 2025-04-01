<?php
function len($stringi) {
    $arr = mb_str_split($stringi);
    return count($arr);
}

print(len('CR7'));