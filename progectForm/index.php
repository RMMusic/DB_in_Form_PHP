<!--/**
 * Created by PhpStorm.
 * User: admin
 * Date: 01.10.2015
 * Time: 11:03
 */

/**
 * 1 файл index.php в якому буде форма (гарними стилями зробити для практики) з П.І.Б., Тел., Сімейний статус, Стать, рік та дата народження ...
в ній відправити дані ПОСТОМ на createDoc.php.
В createDoc.php,  тут зформуєш якийсь документ використовуючи дані з форми
Додаткові умови:
ПІБ - як би користувач не вніс (Обробку помилок наприклад тіки одне слово то вивести повідомлення) то вихідне значення повинно бути Чеканов С. Б.
Сімейний Статус, Стать - обов'язково РадіоБокс!
Рік та дата поле в якому можна вибрати дату (пошукай в інеті як підключити JS модуль цього або бутстрап використай)
 */ -->
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
</head>
<body>
    <form action="createDoc.php" method="post">
        <div class="row">
            <div class="col-lg-1 col-lg-offset-2">
                <b>Enter your full name</b>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control input-lg" name="name" required="required" placeholder="Full name">
            </div>
            <div class="col-lg-1">
                <b>Enter your job</b>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control input-lg" name="job" required="required" placeholder="Job">
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <input type="email" class="form-control input-lg" name="email" required="required" placeholder="email">
            </div>
            <div class="col-lg-4">
                <input type="tel" class="form-control input-lg" name="tel" placeholder="Phone number">
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                About me: <br>
                <textarea class="form-control input-lg" name="about" placeholder="140-character limit" maxlength="140" rows="2"></textarea>
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                Sex <br>
                <input type="radio" name="sex" checked="checked" value="male">Male
                <input type="radio" name="sex" value="female">Female
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <input type="reset" class="btn btn-danger btn-lg" value="Reset">
                <input type="submit" class="btn btn-success btn-lg" value="Submit">
            </div>
        </div>
    </form>

    <form action="vievDoc.php" method="post">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                Перегляд
                <?php
                    $link = mysqli_connect("localhost", "root", "", "resumedb");
                    $result = mysqli_query($link, "SELECT * FROM names");
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    echo '<select name="sel" class="form-control input-lg">';
                    echo '<option>Select</option>';
                    foreach($row as $value){
                        echo '<option value=' . $value['id'] . '>' . $value['name'] . '</option>';
                    }
                    echo '</select>';
                    mysqli_close($link);
                ?>
            </div>
            <div class="col-lg-8 col-lg-offset-2">
                <br>
                <button class="btn btn-info btn-lg"> viev -> </button>
<!--                <input type="submit" class="btn btn-info btn-lg" value="viev ->">-->
            </div>
        </div>
    </form>
</body>
</html>
