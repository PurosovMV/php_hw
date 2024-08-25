<?php
$a = 1;
$b = 2;

// Вариант №1.
//$a = $a + $b;
//$b = $a - $b;
//$a = $a - $b;

// Вариант №2.
$a = $a ^ $b ^ $b = $a;

echo "a = {$a} b = {$b}";


// docker run --rm -v $(pwd)/php-cli/:/cli php:8.2-cli php /cli/start.php