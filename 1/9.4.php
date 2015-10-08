<?php

/**
 * && - AND
 * || - OR
 * ! - NOT
 */

$chusla = array(4534,423423,2364,76654345345,324,284,244,154,23425,2523,4543534,56654345345 );

var_dump($chusla);

$min = $max = null;
$keyMax = $keyMin = null;

foreach ($chusla as $key => $value) {
    if ($max < $value) {
        $max = $value;
        $keyMax = $key;
    }

    if ($min > $value || $min === null) {
        $min = $value;
        $keyMin = $key;
    }
}

if ($keyMax !== null && $keyMin !== null && $keyMax != $keyMin) {
    $temp = $chusla[$keyMax];
    $chusla[$keyMax] = $chusla[$keyMin];
    $chusla[$keyMin] = $temp;
}

var_dump($chusla);

echo $keyMin . ' - ' . $keyMax;
