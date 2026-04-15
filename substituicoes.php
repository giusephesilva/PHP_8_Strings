<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace(
    ['poxa','caramba'],
    ['****','*******'],
    $texto).PHP_EOL;

echo strtr($texto,'poxa','****').PHP_EOL;//ele pega o por caracter e não por strings

echo strtr($texto,['poxa' => 'p']).PHP_EOL;