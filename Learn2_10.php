<?php

define ("PARAGRAF", str_repeat("<br>", 3));
define('BR', '<br>');
define('TAB', '&nbsp;&nbsp;&nbsp;&nbsp;');

$text = <<<INFO
"Аптеку позабудь ты для венков лавровых
 И не мори больных, но усыпляй здоровых."
INFO;

 print_r (nl2br($text) . BR);

print_r (PARAGRAF);

$date = "010122";
$date_arr = str_split($date, 2);
$date_f = mktime(0, 0, 0, ...$date_arr);
print_r (date("d.m.Y", $date_f) . BR);

print_r (PARAGRAF);

$str = "Я считаю до пяти";
$sub_str = "пяти";

if (strpos($str, $sub_str) !== false) {
	print_r ("Подстрока \"{$sub_str}\", в строке \"{$str}\" найдена!" . BR);
}else {
	print_r ("Подстрока не найдена!" . BR);
}

print_r (PARAGRAF);

$addr = "C:/OpenServer/domains/localhost/index.php";
print_r (substr(strrchr($addr, "/"), 1) . BR);
