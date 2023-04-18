<?php

$name = "Aleksandr";
$greeting = "Hello";
echo "{$greeting}, {$name}!<br><br><br>";

$text = "Аптеку позабудь ты для венков лавровых<br>И не мори больных, но усыпляй здоровых.";
echo "\"{$text}\"<br><br><br>";

$hoursCount = 7;
$secondPerHour = 60 ** 2;
echo "Количество час.: <b>" . $hoursCount . " </b>это - <b>" . $hoursCount * $secondPerHour . " </b>секунд.";
