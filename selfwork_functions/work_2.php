<?php
function isPalindrome($string) {
    $array = mb_str_split($string);
    $reversed = array_reverse($array);
    $reversedString = implode('', $reversed);

    if ($string === $reversedString) {
        return 'Палиндром';
    } else {
        return 'Не палиндром';
    }
}

print(isPalindrome("машам"));
print("</br>");
print(isPalindrome("сиуу"));