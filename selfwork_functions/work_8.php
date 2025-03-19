<?php
function generate($length) {
    $numes = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';

    $index = (int)strlen($numes)-1;
    for ($i = 0; $i < $length; $i++) {
        $password .= $numes[rand(0, $index)];
    }

    return $password;
}

print(generate(10));