<?php

$primaryNum = 0;
print_r("<b>Начальное</b> значение переменной: {$primaryNum}<br>");
$primaryNum += 7;
print_r("<b>Увеличьте</b> значение переменной <b>на 7</b>: {$primaryNum}<br>");
$primaryNum *= 4;
print_r("<b>Увеличьте</b> значение переменной <b>в 4 раза</b>: {$primaryNum}<br>");
$primaryNum -= 8;
print_r("<b>Уменьшите</b> значение переменной <b>на 8</b>: {$primaryNum}<br>");
$primaryNum /= 4;
print_r("<b>Разделите</b> значение переменной <b>на 4</b>: {$primaryNum}<br>");
$primaryNum **= 3;
print_r("<b>Возведите</b> значение переменной <b>в 3 степень</b>: {$primaryNum}<br>");
$primaryNum %= 3;
print_r("<b>Найдите</b> остаток от деления переменной <b>на 3</b>: {$primaryNum}<br>");


$junior = 50;
$middle = 70;

$pupil = "junior";
$student = "middle";
print_r("Количество школьников: <b>${$pupil}</b><br>");
print_r("Количество студентов: <b>${$student}</b><br>");
