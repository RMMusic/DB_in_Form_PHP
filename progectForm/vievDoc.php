<?php include_once('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07.10.2015
 * Time: 14:06
 */
?>

<!--<form action="#" method="get">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-1 col-lg-offset-2">-->
<!--            <input type="button" class="btn btn-warning btn-sm" value="Edit">-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="row">-->
<!--        <div class="col-lg-1 col-lg-offset-2">-->
<!--            <input type="button" class="btn btn-danger btn-sm" value="Delete">-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->

<?php
$selectdb = sqlQuerySelect('SELECT n.id, n.name, n.email, n.sex, n.date, n.about, j.workplace FROM names AS n JOIN jobs AS j ON n.job_id = j.id');
echo '<div class="table-responsive"><table class="table">';
foreach($selectdb as $value){
        echo '<tr class="success"><td>' . $value['name'] . '</td><td>' . $value['email'] . '</td><td>' . $value['sex'] . '</td><td>' . $value['date'] . '</td><td>' . $value['about'] . '</td><td>'  . $value['workplace'] . '</td><td><a href="index.php?id=' . $value['id'] . '" class="btn btn-warning btn-sm" >Edit</a></td><td><a href="#?id=' . $value['id'] . '" class="btn btn-danger btn-sm" >Delete</a></td></tr>';
    }
echo '</table></div>';


//$analituka = sqlQuerySelect('SELECT name FROM names JOIN jobs ON names.job_id = jobs.id WHERE names.sex="male" AND jobs.workplace="Аналітика"');
//var_dump($analituka);
//SELECT column_name(s)
//FROM table1
//RIGHT JOIN table2
//ON table1.column_name=table2.column_name;
//
//$selectdb = sqlQuerySelect('SELECT workplace FROM names RIGHT JOIN jobs ON names.job_id = jobs.id WHERE job_id IS NULL');
//
//var_dump($selectdb);
?>
<?php include_once('footer.php'); ?>