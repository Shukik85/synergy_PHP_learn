<?php

define ("PARAGRAF", str_repeat("<br>", 3));

function IsConscript ($value) {
	if ($value >= 18 && $value <= 27) {
		return "{$value} - это призывной возраст. <br>";
	}
	return "{$value} - это не призывной возраст. <br>";
}

$age = random_int(1, 100);
echo IsConscript($age);

echo PARAGRAF;

function IsEqual ($num1, $num2) {
	if ($num1 === $num2) {
		return "Числа {$num1} и {$num2} равны!";
	}
	return "Числа {$num1} и {$num2} не равны!";
}

$a = random_int(0, 10);
$b = random_int(0, 10);
echo IsEqual($a, $b);

echo PARAGRAF;

// function total_intervals($unit, DateInterval ...$intervals) {
//     $time = 0;
//     foreach ($intervals as $interval) {
//         $time += $interval->$unit;
//     }
//     return $time;
// }

// $a = new DateInterval('P1D');
// $b = new DateInterval('P2D');

// var_dump($b);
// echo "";
// echo total_intervals('d', $a, $b).' days';

// echo PARAGRAF;

function IsPositive (int ...$nums) {
	foreach ($nums as $key => $num) {
		if ($num >= 0) {
			return true;
		}
	}
	return false;
}

$arr = range(-10,10);
shuffle($arr);
print_r("Набор чисел для обработки функцией IsPositive(): " . implode(", ", $arr) . "<br>");
print_r ("Результат выполнения функции IsPositive() - ");
var_dump(IsPositive (... $arr));

echo PARAGRAF;

function Sum15 ($num1, $num2) {
	$tmp = $num1 + $num2;
	if ($tmp > 15) {
		return true;
	}
	return false;
}

print_r("Напишите функцию, которая параметрами принимает 2 числа. Если их сумма больше 15 - пусть функция вернет true, а если нет - false.<br>" . "Числа: " . $a . " и " . $b . "<br>");
var_dump(Sum15($a, $b));
