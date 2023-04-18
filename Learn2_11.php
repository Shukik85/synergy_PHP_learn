<?php

define ("PARAGRAF", str_repeat("<br>", 3));
define('BR', '<br>');

$birthday = mktime(0,0,0,22,11,23);
$today = time();
const SECOND_PER_DAY = 60*60*24;
print_r ("До дня рождения осталось: " . intval(($birthday - $today)/SECOND_PER_DAY) . " дней." . BR);

echo PARAGRAF;

$str_date = "2022-02-23";
print_r (date("d-m-Y", strtotime($str_date)) . BR);

echo PARAGRAF;

$new_year = "01/01/23";
print_r ("С нового года прошло: " . intval((time() - strtotime($new_year))/SECOND_PER_DAY) . "дней!" . BR);