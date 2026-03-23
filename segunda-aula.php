<?php

$email = 'giusephe@gmail.com.br';
$senha = '123';
$teste = 'AETyyat';
$teste2 = 'João';


$posicaoDoArroba = strpos($email,'@');//busca posição na string relativo ao trecho

$usuario = substr($email,0,8);//quebra de string em substring
$dominio = substr($email,$posicaoDoArroba + 1);//se nao informar a posição final, ele vai até o final da string

echo $usuario."\n";
echo $dominio."\n";
echo strlen($senha)."\n";//tamanho de uma string(bytes)

echo strtoupper($usuario)."\n";//retorna string em maiúsculo

echo strtolower($teste)."\n";//retorna string em minúsculo

echo mb_strtoupper($teste2);//variação para caracteres especiais como acentuação




 

