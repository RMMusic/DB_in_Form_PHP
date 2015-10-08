<?php

viewArray(createArray(999999));


function createArray($number)
{
    $arr = [];
    $lengthNumber = strlen((string)$number);
    for ($x = 1; $x <= $number; $x++) {
        if (strlen($x) < $lengthNumber) {
            $item = "";
            for ($y = 0; $y < $lengthNumber - strlen($x); $y++) {
                $item .= '0';
            }
            $tiket = $item . $x;
        } else {
            $tiket = $x;
        }
        if (heppyTicket($tiket)) {
            $arr[] = $tiket;
        }

    }
    return $arr;
}


function viewArray($arr)
{
    echo "Count happy ticket: ".count($arr)."<br>";
    for ($x = 0; $x <= count($arr); $x++) {
        echo $arr[$x] . '<br>';
    }
}

function heppyTicket($tiket)
{
    $convertStrToArr = str_split($tiket);
    $countArr = count($convertStrToArr);
    $leftNumber = 0;
    $rightNumber = 0;

    for ($i = 0;$i < $countArr/2;$i++){
        $leftNumber += $convertStrToArr[$i];
        $rightNumber += $convertStrToArr[$i+$countArr/2];
    }

    if ($leftNumber == $rightNumber){
        return true;
    }

    return false;
}