<?php
// 1.Необходимо организовать передачу следующего содержимого  “Это первая строка” из   буфера в переменную при помощи функции ob_get_contents()и в дальнейшем осуществить вывод этой переменной, помните, что любой пользовательский буфер начинается с вызова функции ob_start()и должен заканчиваться к примеру ob_end_clean()
// 2.Вывести данный текст  “Это вторая строка” а затем вывести переменную которая содержит пользовательский буфер из пункт 1.
// 3.Нужно  написать свою callback функцию которая перевернет строчку “reverse string”
// 4.Вам необходимо внести изменения в представленный код и  изменить последовательность символов, так чтобы выводимые значения ранжировались по убыванию.
ob_end_clean();
define ("PARAGRAF", str_repeat("<br>", 3));
// пп.1-2;
echo "<b>пп. 1-2</b><br>";
ob_start();
	echo "Это первая строка";
	$primStr = ob_get_contents();
ob_end_clean();

echo "Это вторая строка"."<br>".$primStr.PARAGRAF;


// пп. 3;
echo "<b>пп. 3</b><br>";
function ReverseStr($buffer)
{
	$newStr = "";
	for ($i = 0; $i < strlen($buffer); $i++) {
		$newStr = $buffer[$i].$newStr;
	}
	return $newStr;
}

ob_start("ReverseStr");
	echo "Reverse string.";
ob_end_flush();
echo PARAGRAF;

// пп. 4;
echo "<b>пп. 4</b><br>";
echo "Это исходный код.<br>";
echo ob_get_level();
ob_start();
	echo ob_get_level();
	ob_start();
		echo ob_get_level();
		ob_start();
			echo ob_get_level();
			ob_start();
				echo ob_get_level();
			ob_end_flush();
		ob_end_flush();
	ob_end_flush();
ob_end_flush();
echo "<br>";

echo "Это конечный код.<br>";
ob_start();
	ob_start();
		ob_start();
			ob_start();
				echo ob_get_level();
			ob_end_flush();
			echo ob_get_level();
		ob_end_flush();
		echo ob_get_level();
	ob_end_flush();
	echo ob_get_level();
ob_end_flush();
echo ob_get_level();
echo "<br>";
