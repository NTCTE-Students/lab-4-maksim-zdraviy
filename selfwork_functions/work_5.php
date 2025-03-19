<?php
function bigLetter($string) {
    return mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
}

print(bigLetter("salam aleykum"));