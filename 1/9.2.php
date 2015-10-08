<?php
    $in = 777559;
    $ch = (string) $in;
    $sum=0;
    $php=0;

    for($php = 0;$php < strlen($ch); $php++)
        {
            $sum = $sum+$ch[$php];
    }

    echo $ch[3];
//    while($php < strlen($ch)){
////        if(is_integer((int)$ch[$php])===true) {
//            $sum = $sum + 1;
////        }
//        $php++;
//        }


?>

<!--
//    for($php = 0;$php < strlen($ch); $php++)
//        {
//            $sum = $sum+$ch[$php];
// }