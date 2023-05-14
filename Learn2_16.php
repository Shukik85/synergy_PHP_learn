<<<<<<< HEAD
<?php
define('PARAGRAF', str_repeat("<br>", 2));

print_r("<b>Домашняя работа по итогам 16 урока.</b>");
echo PARAGRAF;

$link = mysqli_connect("localhost", "root", "", "Learn2_15");

if ($link == false) {
	echo "<br>Подключиться не удалось." . mysqli_connect_error($link);
}

$sql = "SELECT orderDate FROM orders LIMIT 1";

$result = mysqli_query($link, $sql);

$arr = mysqli_fetch_array($result, MYSQLI_ASSOC);

print_r("<br>Список заказов совершенных: " . "<b>" . $arr['orderDate'] . ".</b>");

echo PARAGRAF;

$sql = "SELECT \n

	orders.ID, clients.surname, clients.firstname, clients.secondname,\n

	clients.phone, products.productName, materials.materialName\n

    FROM clients\n

    JOIN orders ON orders.clientID = clients.ID\n

    JOIN materials ON orders.materialID = materials.ID\n

    JOIN products ON orders.productID = products.ID\n

    WHERE orders.orderDate = \"" . $arr['orderDate'] . "\"";

if ($result = mysqli_query($link, $sql)){
	while($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		print_r("ID = ");
		foreach($arr as $key => $value){
			print_r($value . "<br>");
		}
		print_r(PARAGRAF);
	}
}
=======
<?php
define('PARAGRAF', str_repeat("<br>", 2));

print_r("<b>Домашняя работа по итогам 16 урока.</b>");
echo PARAGRAF;

$link = mysqli_connect("localhost", "root", "", "Learn2_15");

if ($link == false) {
	echo "<br>Подключиться не удалось." . mysqli_connect_error($link);
}

$sql = "SELECT orderDate FROM orders LIMIT 1";

$result = mysqli_query($link, $sql);

$arr = mysqli_fetch_array($result, MYSQLI_ASSOC);

print_r("<br>Список заказов совершенных: " . "<b>" . $arr['orderDate'] . ".</b>");

echo PARAGRAF;

$sql = "SELECT \n

	orders.ID, clients.surname, clients.firstname, clients.secondname,\n

	clients.phone, products.productName, materials.materialName\n

    FROM clients\n

    JOIN orders ON orders.clientID = clients.ID\n

    JOIN materials ON orders.materialID = materials.ID\n

    JOIN products ON orders.productID = products.ID\n

    WHERE orders.orderDate = \"" . $arr['orderDate'] . "\"";

if ($result = mysqli_query($link, $sql)){
	while($arr = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		print_r("ID = ");
		foreach($arr as $key => $value){
			print_r($value . "<br>");
		}
		print_r(PARAGRAF);
	}
}
<<<<<<< HEAD
>>>>>>> de26b65 (Signed-off-by: Plotnikov Aleksandr <shukik85@ya.ru>)
mysqli_close($link);
=======
mysqli_close($link);

>>>>>>> a61c6c7 (Signed-off-by: Plotnikov Aleksandr <shukik85@ya.ru>)
