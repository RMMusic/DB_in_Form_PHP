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
//    var_dump($result);
    $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connect);
    return $data;
}

//function vievSQLtableAll($dbConnect, $where=">0"){
//    $result = mysqli_query($dbConnect, "SELECT * FROM names WHERE id$where");
//    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
//    echo '<div class="table-responsive"><table class="table">';
//    foreach($row as $value){
//        echo '<tr class="success"><td>' . $value['name'] . '</td><td>' . $value['email'] . '</td><td>' . $value['sex'] . '</td><td>' . $value['date'] . '</td><td>' . $value['about'] . '</td></tr>';
//    }
//    echo '</table></div>';
//}