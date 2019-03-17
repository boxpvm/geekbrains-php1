<p>1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
<ul>
    <li>если $a и $b положительные, вывести их разность;</li>
    <li>если $а и $b отрицательные, вывести их произведение;</li>
    <li>если $а и $b разных знаков, вывести их сумму;</li>
</ul>
<p>ноль можно считать положительным числом.</p>

<?php

$a = rand(-10, 10);
$b = rand(-10, 10);
echo $a . ', ' . $b . '<br/><br/>';

if($a >= 0 && $b >= 0) echo $a - $b . '<br/><br/>'; 
    elseif($a < 0 && $b < 0) echo $a * $b . '<br/><br/>';
        else echo $a + $b . '<br/><br/>';

?>

<p>2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>

<?php

$a = rand(0, 15);

echo $a . '<br/><br/>';

switch ($a) {
    case '0': echo '0' . '<br/>';
    case '1': echo '1' . '<br/>';
    case '2': echo '2' . '<br/>';
    case '3': echo '3' . '<br/>';
    case '4': echo '4' . '<br/>';
    case '5': echo '5' . '<br/>';
    case '6': echo '6' . '<br/>';
    case '7': echo '7' . '<br/>';
    case '8': echo '8' . '<br/>';
    case '9': echo '9' . '<br/>';
    case '10': echo '10' . '<br/>';
    case '11': echo '11' . '<br/>';
    case '12': echo '12' . '<br/>';
    case '13': echo '13' . '<br/>';
    case '14': echo '14' . '<br/>';
    case '15': echo '15' . '<br/><br/>';
    default:
        //code...
        break;
}

?>

<p>3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>

<?php

function sum ($a, $b) {
    return $a + $b;
}

function sub ($a, $b) {
    return $a - $b;
}

function mult ($a, $b) {
    return $a * $b;
}

function div ($a, $b) {
    if($b == 0) return 'на 0 делить нельзя';
    return $a / $b;
}

$a = rand(-10, 10);
$b = rand(-10, 10);

echo $a . ', ' . $b . '<br/><br/>';

echo sum($a, $b) . '<br/>';
echo sub($a, $b) . '<br/>';
echo mult($a, $b) . '<br/>';
echo div($a, $b) . '<br/><br/>';

?>

<p>Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>

<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum':
            return sum($arg1, $arg2) . '<br/>';
            break;
        case 'sub':
            return sub($arg1, $arg2) . '<br/>';
            break;
        case 'mult':
            return mult($arg1, $arg2) . '<br/>';
            break;
        case 'div':
            return div($arg1, $arg2) . '<br/>';
            break;        
        default:
            return 'ошибка' . '<br/>';
            break;
    }
}

echo $a . ', ' . $b . '<br/><br/>';

echo mathOperation($a, $b, 'sum');
echo mathOperation($a, $b, 'sub');
echo mathOperation($a, $b, 'mult');
echo mathOperation($a, $b, 'div') . '<br/><br/>';

?>

<p>С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>

<?php

function power($val, $pow) {
    if($pow == 0) return 1;
    if($pow == 1) return $val;
    if($pow < 0) return power(1/$val, -$pow);
    return $val * power($val, $pow - 1);
}

echo power($a, $b);

?>

<p>Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями.</p>

<?php



?>