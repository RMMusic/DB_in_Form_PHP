<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 29.09.2015
 * Time: 18:50
 */

$array = array();
for ($x = 0; $x <= 5; $x++){
    $array[$x] = rand(2, 99);
//    echo $array[$x] . ' ';
}
echo '<br>';
$array1 = array();
$count = count($array);
for ($x = 0; $x < $count; $x++){
    $i = $array[$x];
    $array1[$i]++;
}
//var_dump($array1);
echo '<br>';

foreach ($array1 as $key => $value) {
    if ($value > 1){
        echo $key . ' repeat ' . $value . ' times' .'<br>';
    }
    else {
        echo $key . ' one time' . '<br>';
    }
}


//while (true){
//    echo "!";
//}

