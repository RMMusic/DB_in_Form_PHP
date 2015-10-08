<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
include('functions.php');

//    echo "Create random array.<br><br>";
//$array = createRandomArray(10, 2, 4);
//vievRandomArray($array);
//
//    echo "<br><br>Find minimum and maximum value whis key in your array.";
//$min = findMimInArray($array);
//$max = findMaxInArray($array);
//echo "<br>"."Minimal - ".$min['min'];
//echo "<br>"."Maximal - ".$max['max'];
//
//    echo "<br><br>Rotation value in your array.";
//vievRandomArray(rotationInArray($array, $min['key'], $max['key']));
//
//    echo "<br><br>Find all negative and positive value whis count.";
//$arr = findeAllNegativeValue($array);
//echo "<br>"."count negative ".$arr['count'];
//vievRandomArray ($arr['negativArray']);
//
//$arr = findeAllPositiveValue($array);
//echo "<br>"."count positive ".$arr['count'];
//vievRandomArray ($arr['positiveArray']);
//
//    echo "<br><br>Mirroring output elements in array.";
//vievRandomArray(kramsannyaArray($array));
//
//    echo "<br><br>Двохвимірні масиви";
//$megaArray = createRandomBigArray(10, 5);
//vievRandomBigArray($megaArray);
//$minBig = findMimInBigArray($megaArray);
//echo "<br>"."Minimal - ".$minBig['min'];
//
//
//$xxx = 0;
//for ($x =0; $x <  count($array); $x++){
//    $xxx = $xxx+$array[$x];
//}
//    echo '<br>Sum of array '.$xxx;
//


//findAllRepeatInArray(createRandomArray(100));


// Find a randomDate between $start_date and $end_date
function randomDate($start_date, $end_date)
{
    // Convert to timetamps
    $min = strtotime($start_date);
    $max = strtotime($end_date);

    // Generate random number using above bounds
    $val = rand($min, $max);

    // Convert back to desired date format
    return date('Y-m-d', $val);
}

function randDateViev(){
    $dateArray = array();
    for ($x = 0; $x < 40; $x++){
        $date = randomDate("2015-01-01", "2015-12-15");
        $dateArray[$x] = $date . " " . tempAdd($date)."<br>";
    }
    return $dateArray;
}

function tempAdd($date){
    $mount = explode("-", (string)($date));
    if($mount[1] <= 2 || $mount[1] == 12){
        $temp = rand(-30, 5);
    }
    else if($mount[1] >= 3 && $mount[1]<= 5){
        $temp = rand(10, 20);
    }
    else if($mount[1] >= 6 && $mount[1]<= 8){
        $temp = rand(15, 30);
    }
    else {
        $temp = rand(10, 25);
    }
    return $temp;
}
//echoTempArray(randDateViev());

$dateMidArray = array();
$datadata = randDateViev();
foreach ($datadata as $key => $value){
    $a = explode(" ", $value);
    $b = explode("-", $a[0]);
    foreach ($datadata as $key1 => $valueIn){
        $c = explode(" ", $valueIn);
        $d = explode("-", $c[0]);
        $x = 0;
        if ($b[1] == $d[1]){
            $dateMidArray[$x] = $d[3];
            echo $dateMidArray[$x];
        }
        $x++;
    }
}