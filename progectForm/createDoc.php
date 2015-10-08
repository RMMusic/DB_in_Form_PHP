<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01.10.2015
 * Time: 15:05
 */
?>
<!DOCTYPE html>
<html>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<head>
    <meta charset = "UTF-8">
    <title>Viev all</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
include "functions.php";
$name = $_POST['name'];
$job = $_POST['job'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$sex = $_POST['sex'];
$dateIn = date('Y-m-d h:i:s');
$about = $_POST['about'];

$link = mysqli_connect("localhost", "root", "", "resumedb");

mysqli_query($link, "INSERT INTO names (name, job, email, phone, sex, date, about) VALUES('$name', '$job', '$email', $phone, '$sex', '$dateIn','$about')");

vievSQLtable($link);

mysqli_close($link);



























//$data = [];
//$moduleNum = 0;
//$student_num = 0;
//foreach($datas as $d){
//
//    foreach ($d['data']->getContent() as $module) {
//
//        foreach ($module->students->student as $student) {
//
//            if ($moduleNum==0) {
//                $data[$student_num] = [(string)$student->id, (string)$student->fio, (string)$student->credits_cur];
//            }else{
//                foreach($module->students->student as $findRepeate){
//                    if($findRepeate->id == $student->id){
//                        $data[$student_num][] = (string)$findRepeate->credits_cur;
//                    }
//                }
//            }
//            $student_num++;
//        }
//    }
//    $student_num = 0;
//    $moduleNum++;
//}
//
//return $data;