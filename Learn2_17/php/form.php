<?php
$userInput = array();
foreach ($_POST as $key => $value) {
    $userInput[$key] = htmlspecialchars($value);
} ;

function LYear(string $year){
    if (!date("L", strtotime("01-01-{$year}"))) {
        print_r("Год {$year} не високосный.");
    }
    else {
    print_r("{$year} високосный!");
    }
}

function Weekday(string $date){
    $wDay = date("l", strtotime($date));
    print_r("Дате {$date} cоответствует день недели {$wDay}");
}

function DayToBD(string $date){
    $birDay = intval((strtotime($date)-time())/(60*60*24));
    print_r("До следующего дня рождения {$birDay} дней.");
}

print_r($userInput["userCity"]);
echo "<br><br><br>";

LYear($userInput["userYear"]);
echo "<br><br><br>";

Weekday($userInput["userDate"]);
echo "<br><br><br>";

DayToBD($userInput["userBDay"]);
