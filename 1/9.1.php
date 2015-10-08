<?php
    $in = jkhljh756767huiku9h;
    $ch = (string) $in;
    $sum=0;
    $php=0;
    while($php < strlen($ch)){
//        if(is_integer((int)$ch[$php])===true) {
            $sum = $sum + $ch[$php];
//        }
        $php++;
        }
    echo $sum;
?>

<!--
//    for($php = 0;$php < strlen($ch); $php++)
//        {
//            $sum = $sum+$ch[$php];
// }