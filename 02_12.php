<html>

<head>
    <title>Homework 02_12</title>
</head>
<body>
<h1>Задание</h1>
<h2>Написать скрипт, который позволит стоить таблицу умножения от 1 до 10 используя два вложенных цикла.
    Можно использовать любую структуру: for, while, do-while</h2>

<?php

$a = 1;

echo "<table><tr>";

while ($a <= 10) {
    $b = 1;

    while ($b <= 10) {
        echo "<td>" . ($a * $b) . "</td>";
        $b++;
    }
    if ($a != 10) echo "</tr><tr>";
    $a++;
}
echo "</tr></table>";

?>

<?php

$z = 1;

echo "<table><tr>";

do {
    $x = 1;
    do {
        echo "<td>" . ($z * $x) . "</td>";
        $x++;
    } while ($x <= 10);

    if ($z != 10) echo "</tr><tr>";

    $z++;
} while ($z <= 10);

echo "</tr></table>";


?>
</body>
</html>
