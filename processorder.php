<!DOCTYPE html>
<html lang="en">
<?php
$karpatqty = $_POST ['karpatqty'];
$alpenqty = $_POST ['alpenqty'];
$freedomqty = $_POST ['freedomqty'];
$kakaqty = $_POST ['kakaqty'];
$sonyaqty = $_POST ['sonyaqty'];
?>
<head>
    <meta charset="UTF-8">
    <title>Заказ обработан</title>
</head>
<body>
<h1>Торгуем свежим и несвежим воздухом</h1>
<h2>Ваш заказ уже пакуется!</h2>
<?php

echo "$karpatqty Карпатского озону<br />";
echo "$alpenqty. Альпийских ветров<br />";
echo "$freedomqty. Свободного ветра<br />";
echo "$kakaqty. Запах села<br />";
echo "$sonyaqty. Киевские газы<br />";
    echo '<p>Заказ отработан в';
    echo date('H:i, jS F Y');
    echo '</p>';

define('KARPATPRICE', 20);
define('ALPENPRICE', 10);
define('FREEDOMPRICE', 15);
define('KAKAPRICE', 30);
define('SONYAPRICE', 5);

    $totaqty = 0;
    $totalamount = (float)$totaqty;
?>

<?php

?>
</body>
</html>
