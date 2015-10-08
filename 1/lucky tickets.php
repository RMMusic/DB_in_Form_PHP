<?php

    /**
     * Created by PhpStorm.
     * User: admin
     * Date: 28.09.2015
     * Time: 10:57
     */

$operator = $_POST['number'];
$inputValue = $operator;
$true = $_POST['trigger'];
$result = '';
    for ($x = 111; $x <= 999; $x++){
        for ($y = 111; $y <= 999; $y++){
            if (array_sum(str_split($x)) == array_sum(str_split($y))){
                $result .= "<br>" . $x . $y;
            }
        }
    }

$form = '<form method="POST" action="lucky tickets.php">
    <label for="number">Кількість цифр в білеті</label>
    <input class="form-control" name="number" type="text">
    <button type="submit">
        Відправити
    </button>
    </form>';

$formWhisRequest = '<form method="POST" action="lucky tickets.php">
    <label for="number">111</label>
    <input class="form-control" name="number" type="text" value=' . $inputValue . ' >
    <input class="form-control" name="trigger" type="hidden" value="true" >
    <button type="submit">
        Так
    </button>
    </form>';

$formWhisResult = '<form method="POST" action="lucky tickets.php">
    <label for="number">Кількість цифр в білеті</label>
    <input class="form-control" name="number" type="text" value=' . $inputValue . ' >
    <button type="submit">
    Відправити
    </button>
    </form>';

$visibleForm = $form;

    if ($operator % 2 == 0 && $operator >= 2 && $operator <= 6) {
        $visibleForm = $formWhisResult . '<br>' . $result;
    }
    else if($operator % 2 == 0 && $operator >= 8 && empty($true)){
        $visibleForm = $formWhisRequest;
    }
    else if($operator % 2 == 0 && $operator >= 8 && !empty($true)){
        $visibleForm = $formWhisResult . '<br>' . $result;
    }
//    else if(isset($operator)){
//        echo "Ви ввели невірні дані";
//    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Echo all lucky tickets! </title>
</head>
<body>
<?php echo $visibleForm;

?>
</body>
</html>



