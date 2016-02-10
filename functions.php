<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.10.2015
 * Time: 15:49
 */

function sqlConnect(){
    return mysqli_connect("localhost", "root", "", "progectFormdb");
}

function sqlQueryInsert($sqlQuery){
    $connect = sqlConnect();
    $result = mysqli_query($connect, $sqlQuery);
    mysqli_close($connect);
    return $result;
}

function sqlQuerySelect($sqlQuery){
    $connect = sqlConnect();
    $result = mysqli_query($connect, $sqlQuery);
    $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connect);
    return $data;
}

/**
 * Low Validation
 *
 * @param string $value
 * @return string
 */
function clean($value = "") {
    $value = trim($value); //Remove characters from both sides of a string - пробіли по краях
    $value = stripslashes($value); //Remove the backslash - екрани
    $value = strip_tags($value); //Strip the string from HTML, PHP tags - теги
    $value = htmlspecialchars($value); //Convert the predefined characters - не зрозумів
    return $value;
}
