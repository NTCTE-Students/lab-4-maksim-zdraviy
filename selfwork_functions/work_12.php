<?php
function usual($nume) {
    for ($i = 2; $i < $nume; $i++) {
        if ($nume % $i == 0) {
            return "Не простое"; 
        }
    }

    return "Простое";
}

print(usual(17));
print("</br>");
print(usual(9));