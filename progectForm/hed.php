<?php
class First{
    function sqlConnect(){
        return mysqli_connect("localhost", "root", "", "progectFormdb");
    }

    function sqlQueryInsert($sqlQuery){
        $connect = sqlConnect();
        $result = mysqli_query($connect, $sqlQuery);
        mysqli_close($connect);
        return $result;
    }
    function sqlQuerySelect(){
        $connect = sqlConnect();
        $result = mysqli_query($connect, 'SELECT * FROM names');
        $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_close($connect);
        return $data;
    }
}
$a = new First;
$a->sqlQuerySelect();
var_dump($a);