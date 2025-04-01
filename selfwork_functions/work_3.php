<?php
function countWords($string) {
    $words = explode(' ', trim($string));
    return count($words);
}

print(countWords("fgfgfgfk jhfjkfjh jhfkjfkfjkh hjfjkhfhjkf"));
print("</br>");
print(countWords("khglgh jkgkjgjklgl kjlgjkgkj kjgkjl jhj; kjlgkl kgkhl lgj"));