<html>

<head>
    <title>Homework 30_11</title>
</head>
<body>
<h1>Задание</h1>
<h2>Написать какой-то не сложный сценарий, который будет включать в себя: работу с переменными
    нескольких типов, приведение типов, например строку в целочисленный, а так же будет использовать
    ветвления if ... elseif ... else и / или switch .. case.</h2>

<?php

$a = True;
$a = 1234;
$b = 1.234;

if ($a > $b) echo "Result is OK";

if ($a) echo "Cool!";

if (!$a) echo "LOL!";

if ($a > $b)  {
    echo "true";
} else  {
    echo "OK?";
}

if ($a > $b)  {
    echo "$a";
} elseif ($a = $b)  {
    echo "$b";
} else  {
    echo "$a";
}

?>

</body>
</html>
