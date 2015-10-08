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
    <title>Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php include_once('functions.php'); ?>
</head>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.10.2015
 * Time: 14:06
 */

$selectdb = sqlQuerySelect('SELECT * FROM names JOIN jobs ON names.job_id = jobs.id');
echo '<div class="table-responsive"><table class="table">';
foreach($selectdb as $value){
        echo '<tr class="success"><td>' . $value['name'] . '</td><td>' . $value['email'] . '</td><td>' . $value['sex'] . '</td><td>' . $value['date'] . '</td><td>' . $value['about'] . '</td><td>'  . $value['workplace'] . '</td></tr>';
    }
echo '</table></div>';

$analituka = sqlQuerySelect('SELECT name FROM names JOIN jobs ON names.job_id = jobs.id WHERE names.sex="male" AND jobs.workplace="Аналітика"');
var_dump($analituka);

//SELECT column_name(s)
//FROM table1
//RIGHT JOIN table2
//ON table1.column_name=table2.column_name;
//
//$selectdb = sqlQuerySelect('SELECT workplace FROM names RIGHT JOIN jobs ON names.job_id = jobs.id WHERE job_id IS NULL');
//
//var_dump($selectdb);