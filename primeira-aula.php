<?php

$nome = 'Giusephe Oliveira Santos da Silva';

$busca = str_contains($nome,'Silva');//busca dentro de uma string

var_dump($busca);

$url = 'https://google.com.br';

$verificarUrl = str_starts_with($url,'https');//verifica se uma string inicia com determinado trecho
var_dump($verificarUrl);

$verificarUrl2 = str_ends_with($url,'com');//verifica se uma string termina com determinado trecho
var_dump($verificarUrl2);


