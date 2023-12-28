<?php
$int = 99;
$string = "99";
$float = 99.0;
$bool = true;
$null =  NULL;


echo '$int == $float: ', var_dump($int == $float), PHP_EOL;
echo '$int === $float: ', var_dump($int === $float), PHP_EOL;

echo '$string == $int: ', var_dump($string == $int), PHP_EOL;
echo '$string === $int: ', var_dump($string === $int), PHP_EOL;

echo '$float == $bool: ', var_dump($float == $string), PHP_EOL;
echo '$float === $bool: ', var_dump($float === $string), PHP_EOL;

echo '$bool == $string: ', var_dump($bool == $string), PHP_EOL;
echo '$bool === $string: ', var_dump($bool === $string), PHP_EOL;

echo '$null == $bool: ', var_dump($null == 0), PHP_EOL;
echo '$null === $bool: ', var_dump($null === 0), PHP_EOL;

echo 'Приведення типів:', PHP_EOL;

echo '(float)$int == $float: ', var_dump((float)$int == $float), PHP_EOL;
echo '(float)$int === $float: ', var_dump((float)$int === $float), PHP_EOL;

echo '(int)$string == $int: ', var_dump((int)$string == $int), PHP_EOL;
echo '(int)$string === $int: ', var_dump((int)$string === $int), PHP_EOL;

echo '(bool)$float == $string: ', var_dump((bool)$float == $string), PHP_EOL;
echo '(bool)$float === $string: ', var_dump((bool)$float === $string), PHP_EOL;

echo '(string)$bool == $string: ', var_dump((string)$bool == $string), PHP_EOL;
echo '(string)$bool === $string: ', var_dump((string)$bool === $string), PHP_EOL;

