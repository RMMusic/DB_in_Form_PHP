<html lang="en">
<head>
    <meta charset="utf-8">
    <title> My first form and get POST data </title>
</head>
<body>
<form method="POST" action="milka2.php">
    <label for="fio">Введіть Ф.І.О.</label>
    <input class="form-control" name="fio" type="text">
    <button type="submit">
        Відправити
    </button>
</form>
</body>

<?php

/**
 * Test task for student num(1.1)
 *
 * Module: My first form and get POST data
 */

if ($fio = $_POST['fio']) {
    //Використайте тут функцію валыдації
    echo $fio;
}


/**
 * custom function of validation
 *
 * @param $fio
 * @return string
 */
function validate($fio)
{
    if (mb_strlen($fio) <= 5) {
        $message = 'Вибачте замало символів';
    } else {
        $message = '<span style="color:green">Ви ввели: '.$fio.'</span>';
    }

    return $message;
}

