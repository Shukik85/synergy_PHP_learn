<?php

define ("PARAGRAF", str_repeat("<br>", 3));
define('BR', '<br>');
define('TAB', '&nbsp;&nbsp;&nbsp;&nbsp;');



$weather = array(1 => 20,22,21,21,21,21,21,21,22,21,22,23,23,24,25,25,24,21,22,22,23,22,23,23,23,22,23,24,24,24,23);
function AverageTemp (int ...$temps) {
	$tmp = 0;
	$count = 0;
	$average = 0;
	print_r ("Число" . TAB . "Температура" . BR);
	foreach ($temps as $key => $value) {
		$tmp += $value;
		$count = $key + 1;
		print_r (TAB . $count . str_repeat(TAB, 3) . $value . "&deg;C" . BR);
	}
	return $average = intdiv($tmp, $count);
}

function ThreeMaxTemp ($arr) {
	asort($arr);
	return implode(", ", array_slice($arr, -3));
}

function ThreeMinTemp ($arr) {
	asort($arr);
	return implode(", ", array_slice($arr, 0, 3));
}

print_r ("Средняя температура: " . AverageTemp(...$weather) . "&deg;C" . BR);
print_r ("Три самых высоких значений: " . ThreeMaxTemp($weather) . "&deg;C" . BR);
print_r ("Три самых низких значений: " . ThreeMinTemp($weather) . "&deg;C" . BR);

echo PARAGRAF;

function Create2dArr($count1, $count2) {
	$arr = array();
	for($i = 0; $i < $count1; $i++) {
		for ($j=0; $j < $count2; $j++) {
			$arr[$i][$j] = random_int(1, 10);
		}
	}
	return $arr;
}

var_dump (Create2dArr(10, 10));

echo PARAGRAF;

$arrUser[] = array("userName" => "Aleksandr", "userLogin" => "alex@mail.ru", "userPassword" => "1234");
$arrUser[] = array("userName" => "Serg", "userLogin" => "serg@mail.ru", "userPassword" => "1111");
$arrUser[] = array("userName" => "Anna", "userLogin" => "anna@mail.ru", "userPassword" => "0000");
$arrUser[] = array("userName" => "Max", "userLogin" => "max@mail.ru", "userPassword" => "4321");
$arrUser[] = array("userName" => "Julia", "userLogin" => "jul@mail.ru", "userPassword" => "qwer");
$arrUser[] = array("userName" => "Mariya", "userLogin" => "mary@mail.ru", "userPassword" => "asdf");

foreach ($arrUser as $key => $value) {
	print_r ("Пользователь: " . BR);
	foreach ($value as $key => $value) {
		print_r ($key . TAB . $value . BR);
	}
	print_r (PARAGRAF);
}

function SumSqare ($arr) {
	$tmp = 0;
	foreach ($arr as $key => $value) {
		$tmp += $value **2;
	}
	return $tmp;
}

$arr1To25 = range(1,25);

print_r ("Для набора чисел: " . implode(", ", $arr1To25) . BR);
print_r ("Сумма чисел во второй степени будет равна: " . SumSqare($arr1To25) . BR);

print_r (PARAGRAF);

function Greeting ($lang, $name) {
	$greetings = array("ru" => "Привет", "en" => "Hello", "fr" => "Salut", "it" => "Ciao");
	return print_r ($greetings[$lang] . ", " . $name . "!" . BR);
}

Greeting ("ru", "Сергей");
Greeting ("en", "Alex");
Greeting ("fr", "Janet");
Greeting ("it", "Roberto");