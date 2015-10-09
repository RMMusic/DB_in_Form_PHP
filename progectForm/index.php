<?php
/**
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
 */
?>
<?php include_once('header.php'); ?>
<?php
if (isset($_GET['id'])){
    $data = sqlQuerySelect('SELECT * FROM names WHERE id='.$_GET['id']);
//    var_dump($data);
    echo (isset($data['name']))?$data['name']:'';
}
?>
<div>
</div>
    <form action="createDoc.php" method="post">
        <div class="row">
            <div class="col-lg-1 col-lg-offset-2">
                <label for="nameid">Enter your full name</label>
            </div>
            <div class="col-lg-3">
                <input type="text" class="form-control input-lg" name="name" required="required" placeholder="Full name" id="nameid" value="<?php echo (isset($data))?$data[0]["name"]:''; ?>">
            </div>
            <div class="col-lg-1">
                <label for="emailid">Enter your email</label>
            </div>
            <div class="col-lg-3">
                <input type="email" class="form-control input-lg" name="email" required="required" placeholder="email" id="emailid" value="<?php echo (isset($data))?$data[0]["email"]:''; ?>">
            </div>
        </div>
<!--    <p>-->
<!--        <div class="row">-->
<!--            <div class="col-lg-4 col-lg-offset-2">-->
<!--                <input type="email" class="form-control input-lg" name="email" required="required" placeholder="email">-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <input type="tel" class="form-control input-lg" name="tel" placeholder="Phone number">-->
<!--            </div>-->
<!--        </div>-->
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <label for="aboutid">About me:</label><br>
                <textarea class="form-control input-lg" name="about" placeholder="140-character limit" maxlength="140" rows="2" id="aboutid"><?php echo (isset($data))?$data[0]["about"]:''; ?></textarea>
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <label for="selectjob">Перегляд</label>
                <?php
                    $row = sqlQuerySelect("SELECT * FROM jobs");
                ?>
                <select name="job" class="form-control input-lg" id="selectjob">
                <?php
                    foreach($row as $value){
                        echo '<option value=' . $value['id'] . '>' . $value['workplace'] . '</option>';
                    }
                ?>
                </select>
            </div>
        </div>
    <p>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <label for="sexid">Sex</label><br>
                <input type="radio" name="sex" checked="checked" value="male" id="sexid">Male
                <input type="radio" name="sex" value="female" id="sexid">Female
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
<?php include_once('footer.php'); ?>