<?php

$nome = 'Giusephe Oliveira';
$email = 'giusephe@gmail.com.br';
$senha = '123';
$teste = 'AETyyat';
$teste2 = 'João';
$telefones = ['   (21) 98888 - 98888', '(11) 99999 - 8888   '];


$posicaoDoArroba = strpos($email,'@');//busca posição na string relativo ao trecho

$usuario = substr($email,0,8);//quebra de string em substring
$dominio = substr($email,$posicaoDoArroba + 1);//se nao informar a posição final, ele vai até o final da string

echo $usuario."\n";
echo $dominio."\n";
echo strlen($senha)."\n";//tamanho de uma string(bytes)

echo strtoupper($usuario)."\n";//retorna string em maiúsculo

echo strtolower($teste)."\n";//retorna string em minúsculo

echo mb_strtoupper($teste2)."\n";//variação para caracteres especiais como acentuação

var_dump(explode(' ',$nome));//realiza uma quebra de string por um separador e transforma em um array

list($nome,$sobrenome) = explode(' ',$nome);// o list pega os valores do array na ordem e transforma cada posição em uma varável informada


echo 'Nome: '.$nome."\n";
echo 'Sobrenome: '.$sobrenome."\n";

echo implode(',',$telefones)."\n";

echo trim(implode(',',$telefones))."\n";//remove  espaços e outros caracteres do inicio e fim de uma string

echo ltrim(implode(',',$telefones))."\n";
echo rtrim(implode(',',$telefones))."\n";

