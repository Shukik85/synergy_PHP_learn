<?php

function Rectangle_print($height, $width) {
	return print_r("Высота прямоугольника: {$height}<br>Ширина прямоугольника: {$width}<br>Площадь прямоугольника: " . $height * $width . "<br>");
}

function Rectangle($height, $width) {
	return $height * $width;
}

Rectangle_print(10, 20);

$height_rect = 15;
$width_rect = 40;
$area = Rectangle($height_rect,$width_rect);
print_r ("Высота прямоугольника: {$height_rect}<br>Ширина прямоугольника: {$width_rect}<br>Площадь прямоугольника: " . $area . "<br>");

$x = 30;
$y = 40;

print_r ("Гипотенуза прямоугольного треугольника с катетами: {$x} и {$y} равна " . hypot($x, $y) . "<br>");

print_r (random_int(67, 200) . "<br>");

print_r (random_int(67, 200) + random_int(1, 99)/100 . "<br>");

