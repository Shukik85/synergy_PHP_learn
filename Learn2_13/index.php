<?php
require_once 'libs/Smarty.class.php';
$smarty = new Smarty();
$date = date("d.m.Y");
$smarty->assign('date', $date);
$header = array("№", "ФИО", "E-mail", "Пол", "Год рождения");
$smarty->assign('header', $header);
$data = array(array("1", "Антонов Игорь Владимирович", "helloworld@mail.ru", "муж", "1986"), array("2", "Иванова Кристина Викторовна", "helloworld@mail.ru", "жен", "1972"), array("3", "Борисов Максим Анатольевич", "helloworld@mail.ru", "муж", "1989"));
$smarty->assign('data', $data);
$len = count($data);
$smarty->assign('len', $len);
$smarty->display('main.html');

// При помощи многомерного php массива  вам необходимо заполнить таблицу следующими данными:Для заголовков таблицы используйте следующие данные: No,  ФИО, E -mail, Пол, Год рождения
