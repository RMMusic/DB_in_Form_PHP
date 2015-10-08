<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01.10.2015
 * Time: 15:05
 */

include_once "functions.php";
$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$dateIn = date('Y-m-d H:i:s');
$about = $_POST['about'];
$job = $_POST['job'];
sqlQueryInsert("INSERT INTO names (name, email, sex, date, about, job_id) VALUES('$name', '$email', '$sex', '$dateIn', '$about', $job)");

header('Location: ' . $_SERVER['HTTP_REFERER']);



























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