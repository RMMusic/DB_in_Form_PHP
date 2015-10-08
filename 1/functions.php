<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php


/**
 * Create random array.
 *
 * @param $number
 * @param int $from
 * @param int $to
 * @return array
 */
function createRandomArray($number, $from= 0, $to = 100){
    $array = [];
    for ($x = 0; $x < $number; $x++){
       $array[$x]=rand($from, $to);
    }
    return $array;
}

/**
 * Create random big array.
 *
 * @param $number
 * @param $row
 * @param int $from
 * @param int $to
 * @return array
 */
function createRandomBigArray($number, $row, $from=0, $to=100){
    $array = [];
    for ($x = 0; $x <  $row; $x++) {
        $array[$x]=createRandomArray($number, $from, $to);
    }
    return $array;
}

/**
 * Echo your array.
 *
 * @param $array
 */
function vievRandomArray($array){
    echo '<table border="1"><tr>';
    for ($x=0; $x < count($array); $x++){
        echo '<td>'.$array[$x]."</td>";
    }
    echo '</tr></table>';
}

/**
 * Echo your big array.
 *
 * @param $array
 */
function vievRandomBigArray($array){
    echo '<table border="1">';
    for ($y=0; $y < count($array); $y++){
        echo '<tr>';
        for ($x=0; $x < count($array[$y]); $x++){
            echo "<td>".$array[$y][$x].'</td>';
        }
        echo "</tr>";
    }
    echo '</table>';
}

/**
 * Find minimum value and key in your array.
 *
 * @param $array
 * @return mixed
 */
function findMimInArray($array){
    $min = $array[0];
    $key = 0;
    for ($x = 0; $x < count($array); $x++){
        if ($min > $array[$x]){
            $min = $array[$x];
            $key = $x;
        };
    }
    return ['min'=>$min, 'key'=>$key];
}

/**
 * Find minimum value and key in your big array.
 *
 * @param $array
 * @return array
 */
function findMimInBigArray($array){
    $minBig = $array[0];
    $minInAll = [];
    $i = 0;
    $key = 0;
    for ($x = 0; $x < count($array); $x++){
        $minBig = findMimInArray($array[$x])['min'];
        $minInAll[$i] = $minBig;
        $i++;
    }
    $minBig = findMimInArray($minInAll)['min'];
    return ['min'=>$minBig];
}

/**
 * Find maximum value and key in your array.
 *
 * @param $array
 * @return mixed
 */
function findMaxInArray($array){
    $max = $array[0];
    $key =0;
    for ($x = 0; $x < count($array); $x++){
        if ($max < $array[$x]){
            $max = $array[$x];
            $key = $x;
        };
    }
    return ['max'=>$max, 'key'=>$key];
}

/**
 * Rotation value in your array.
 *
 * @param $array
 * @return mixed
 */
function rotationInArray($array, $a, $b){
    $c = 0;
    $c = $array[$a];
    $array[$a] = $array[$b];
    $array[$b] = $c;
    return $array;
}

/**
 * Find all negative value and count them.
 *
 * @param $array
 * @return array
 */
function findeAllNegativeValue($array){
    $negativeValue = [];
    $i=0;
    for ($x = 0; $x < count($array); $x++){
        if ($array[$x] < 0){
            $negativeValue[$i] = $array[$x];
            $i++;
        };
    }
    return ['count'=>$i, 'negativArray'=>$negativeValue];
}

/**
 * Find all positive value and count them.
 *
 * @param $array
 * @return array
 */
function findeAllPositiveValue($array){
    $positiveValue = [];
    $i=0;
    for ($x = 0; $x < count($array); $x++){
        if ($array[$x] > 0){
            $positiveValue[$i] = $array[$x];
            $i++;
        };
    }
    return ['count'=>$i, 'positiveArray'=>$positiveValue];
}

/**
 * Mirroring output elements in array.
 *
 * @param $array
 * @return array|mixed
 */
function kramsannyaArray($array){
    if (count($array) % 2 != 0){
        echo $text = "<br> F..U <br>";
        $array[] = count($array);
    };
    vievRandomArray($array);
    for ($x = 0; $x < count($array) / 2; $x++){
        $array = rotationInArray($array, count($array) / 2 - $x -1, count($array) / 2 + $x);
    }
    return $array;
}

//function findAllRepeatInArray($array){
//
////    $repeat = $array[0];
////    $newArray = [];
////    $i = 0;
////    for ($x = 0; $x < count($array); $x++){
////        for ($z = $x; $z < count($array); $z++) {
////            for ($y = $x + $z; $y < count($array); $y++) {
////                if ($array[$y] == $array[$x]) {
////                    $newArray[$i] = $array[$y];
////                    $i++;
////                }
////            }
////        }
////    }
////    var_dump($newArray);
////    return $newArray;
//}

/**
 * Echo keys for array.
 *
 * @param $array
 */
function echoKey($array){
    echo '<table border="1"><tr>';
    for ($x = 0; $x < count($array); $x++){
        echo "<td> " . $x . " => " . $array[$x] . " ";
        if (($x+1) % 15 == 0){
            echo "<br></td></tr>";
        }
    }
    echo '</table>';
}

function echoTempArray($array){
    echo '<table border="1"><tr>';
    for ($x = 0; $x < count($array); $x++){
        echo "<td> " . $array[$x] . " ";
        if (($x+1) % 1 == 0){
            echo "<br></td></tr>";
        }
    }
    echo '</table>';
}

/**
 * Echo arry in reverse
 *
 * @param $array
 */
function vievReverseArray($array){
    echo '<table border="1"><tr>';
    for ($x = (count($array) - 1); $x >= 0; $x--){
        echo '<td>'.$array[$x]."</td>";
    }
    echo '</tr></table>';
}