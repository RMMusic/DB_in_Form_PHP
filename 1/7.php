<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<div>
		<!-- Типи змінних. Присвоєння значень змінним.
		Змінні. Висновок і видалення. -->
		<?php
			$name = "Руслан";
			$age = 26;
		?>
			Моє ім'я <?php echo $name?>,
		<br>
			 мені <?php echo $age?> років.
	</div>
	<p>
	<div>
		<!-- Константи. -->
		<?php
			define("C1", 'Константа');
			echo C1;
		?>
		<br>
		<?php
			if (defined("C1") == true) {
                echo "Константа C1, перевірка!";
            }
		?>
	</div>
	<p>
	<div>
		<!-- Конструкція If - Else. Elseif. -->
		<?php
            if ($age >= 0 && $age <= 17) {
                echo "До школи";
            }else if ($age >= 18 && $age <= 59) {
			    echo "На роботу";
			} else if ($age >= 60 && $age <= 140) {
			    echo "На пенсію";
			} elseif ($age < 0) {
			    echo "Не коректні дані";
			}
		?>
	</div>
	<p>
	<div>
		<!-- Конструкція Switch - Case. -->
		<?php
			$day = 3;
		?>
		<?php
			switch ($day) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 5:  echo "Робочий день";
                         break;
                case 6:
                case 7:  echo "Вихідний день";
                         break;
                default: echo "Не коректні дані";
			}
		?>
	</div>
	<p>
	<div>
		<!-- Масиви. -->
		<?php
        /*$F1["RBR"] = array(
           "model" => "RB11",
           "engine" => "Renault"
       );
       $F1["Ferrari"] = array(
           "model"=>"SF15 T",
           "engine"=>"Ferrari"
       );
       $F1["Maclaren"] = array(
           "model"=>"MP4-30",
           "engine"=>"Honda");
       */
       $F1 = array(
           "RBR" => array(
               "model" => "RB11",
               "engine" => "Renault",
           ),
           "Ferrari" => array(
               "model" => "SF15 T",
               "engine" => "Ferrari"
           ),
           "Maclaren" => array(
               "model" => "MP4-30",
               "engine" => "Honda"
           ),
       );
            echo "Red bull racing - " . $F1["RBR"]["model"] . " - ";
			echo $F1["RBR"]["engine"] . "<br>";
			echo "Ferrari - " . $F1["Ferrari"]["model"] . " - ";
			echo $F1["Ferrari"]["engine"]."<br>";
			echo "Maclaren - ".$F1["Maclaren"]["model"]." - ";
			echo $F1["Maclaren"]["engine"];
		?>
	</div>
	<p>
	<div>
		<!-- Цикл For. -->
		<?php
			$plus = 2;
            for ($start = 1; $start < 50; $start += $plus) {
                echo $start . "<br>";
			}
		?>
	</div>
	<p>
	<div>
		<!-- Завдання на використання циклів. -->
		<?php
			$cols = 8;
			$rows = 8;
			$table = '<table border="1">';
			for ($tr = 1; $tr <= $rows; $tr++){
				$table .= '<tr>';
				for ($td = 1; $td <= $cols; $td++){
                    if ($tr == 1 || $td == 1){
					    $table .= '<th style="color:white; background-color:green;">'. $tr * $td .'</th>';
				    } else {
						$table .= '<td>'. $tr * $td .'</td>';
					}
				}
				$table .= '</tr>';
			}
			$table .= '</table>';
			echo $table;
		?>
	</div>
	<p>
	<div>
		<!-- Завдання на використання Foreach. -->
		<?php
		$menu = array(
            "general" => array(
                'name' => 'General',
                'link' => '1.html'
            ),
			"about" => array(
                'name' => "About",
                'link' => '2.html'
            ),
			"contact" => array(
                'name' => "Contact",
                'link' => '3.html'
            ),
        );
		?>
        <?php foreach ($menu as $element) : ?>
            <a href="<?php echo $element['link'] ?>" style="color: orangered"><?php echo $element['name'] ?></a>
            <a href="<?php echo $element['link'] ?>" style="<?php echo $element['style'] ?>"><?php echo $element['name'] ?></a>
        <?php endforeach; ?>
	</div>
</body>
</html>