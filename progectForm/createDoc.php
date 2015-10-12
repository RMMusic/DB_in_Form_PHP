<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01.10.2015
 * Time: 15:05
 */

include_once "functions.php";

//var_dump($_POST);
//var_dump($_GET);

$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$about = $_POST['about'];
$jobID = (int)$_POST['job'];
$dateIn = date('Y-m-d H:i:s');
$edition = (int)$_POST['edition'];
$delete = (int)$_GET['id'];

if (isset($_POST['edition'])){
    sqlQueryInsert("UPDATE names SET name='$name', email='$email', sex='$sex', about='$about', job_id=$jobID WHERE id=$edition");
}
elseif (isset($_GET['id'])){
    sqlQueryInsert("DELETE FROM names WHERE id=$delete");
}
else {
    sqlQueryInsert("INSERT INTO names (name, email, sex, date, about, job_id) VALUES('$name', '$email', '$sex', '$dateIn', '$about', $jobID)");
}

header('Location: ' . $_SERVER['HTTP_REFERER']);