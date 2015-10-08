<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.10.2015
 * Time: 15:49
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
    <title>111</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
//function sqlConnect($location, $user, $pasword, $dbName)
//{
//    $link = mysqli_connect($location, $user, $pasword, $dbName);
//    if (!$link) {
//        die('Ошибка соединения: ' . mysqli_error());
//    }
//    echo 'Успешно соединились';
//}

//function viev($dbConnect){
//    $result = mysqli_query($dbConnect, "SELECT * FROM names");
//    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
//    echo '<table border="25">';
//    foreach($row as $value){
//        echo '<tr><td>' . $value['name'] . '</td><td>' . $value['about'] . '</td><td>' . $value['email'] . '</td></tr>';
//    }
//    echo '</table>';
//}

function vievSQLtable($dbConnect, $where=">0"){
    $result = mysqli_query($dbConnect, "SELECT * FROM names WHERE id$where");
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo '<div class="table-responsive"><table class="table">';
    foreach($row as $value){
        echo '<tr class="success"><td>' . $value['name'] . '</td><td>' . $value['about'] . '</td><td>' . $value['email'] . '</td></tr>';
    }
    echo '</table></div>';
}

function vievSQLtableAll($dbConnect, $where=">0"){
    $result = mysqli_query($dbConnect, "SELECT * FROM names WHERE id$where");
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo '<div class="table-responsive"><table class="table">';
    foreach($row as $value){
        echo '<tr class="success"><td>' . $value['name'] . '</td><td>' . $value['job'] . '</td><td>' . $value['email'] . '</td><td>' . $value['phone'] . '</td><td>' . $value['sex'] . '</td><td>' . $value['date'] . '</td><td>' . $value['about'] . '</td></tr>';
    }
    echo '</table></div>';
}