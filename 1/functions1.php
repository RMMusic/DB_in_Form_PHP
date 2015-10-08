<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
//include('functions.php');
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 23.09.2015
 * Time: 10:35
 */

function echoKey($arrayy){
    for ($x = 0; $x < count($arrayy); $x++){
        echo " " . $x . "=>" . $arrayy[$x] . " ";
        if (($x+1) % 5 == 0){
            echo "<br>";
        }
    }
}