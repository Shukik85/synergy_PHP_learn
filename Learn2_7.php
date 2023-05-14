<?php

define("PARAGRAF", str_repeat("<br>", 3));

function QuarterHour($value) {
	$value %= 60;
	if ($value === 0) {
		return 4;
	};
	return intdiv($value, 15) + 1 ;
}

$time = array(0, 8, 16, 24, 32, 40, 48, 56, 64);

foreach ($time as $key => $value){
	print_r($value . " минут - это " . QuarterHour($value) . " четверть часа.<br>");
}

print_r (PARAGRAF);

function Season($value){
	$year = array(1 => array("январь", "зима"),
					array("февраль", "зима"),
					array("март", "весна"),
					array("апрель", "весна"),
					array("май", "весна"),
					array("июнь", "лето"),
					array("июль", "лето"),
					array("август", "лето"),
					array("сентябрь", "осень"),
					array("октябрь", "осень"),
					array("ноябрь", "осень"),
					array("декабрь", "зима"));
	if ($value <= 0 || $value > 12) {
		return print_r("Месяца с номером {$value} не бывает!<br>");
	}
	return print_r($value . " месяц - это " . $year[$value][0] . " " . $year[$value][1] . "<br>");
}

$mounts = array(0, 3, 6, 9, 12, 15);
foreach ($mounts as $key => $value) {
	Season($value);
}

print_r (PARAGRAF);

function SqareCube($value) {
	if ($value % 2 === 0) {
		return print_r($value . " четное, возводим во вторую степень = " . $value ** 2 . "<br>");
	}
	return print_r($value . " нечетное, возводим в третью степень = " . $value ** 3 . "<br>");
}

SqareCube(random_int(-10, 10));

print_r (PARAGRAF);

function MaxDeg($value) {
	$a = ($value - ($value % 100))/100;
	$b = (($value % 100) - ($value % 10))/10;
	$c = ($value % 10);
	$res = 0;
	print_r ("Начальное число: {$value} <br>");
	if($a >= $b && $a >= $c) {
		$a *= 100;
		if ($b > $c) {
			$b *=10;
		}else {
			$c *=10;
		}
		return $res = $a + $b + $c;
	}elseif($a <= $b && $a <= $c) {
		if ($b > $c) {
			$b *=100;
			$c *=10;
		}else {
			$c *= 100;
			$b *= 10;
		}
		return $res = $a + $b + $c;
	}else {
		$a *= 10;
		if ($b < $c) {
			$c *=100;
		}else {
			$b *= 100;
		}
		return $res = $a + $b + $c;
	}
}

print_r ("Конечное максимальное число будет: " . MaxDeg(random_int(100, 999)));
