<?php

$anoNascimento = '1998';

$idade = 2026 - $anoNascimento;

echo $idade.PHP_EOL;//quebra de linha assim como \n

if ($anoNascimento == 1998){ //string numérica
    echo "Sim".PHP_EOL;
}else{
    echo "Não".PHP_EOL;
}

function geraEmail($nome):void{
    
//exemplo heredoc - aceita interpolação de avriaveis
$conteudoEmail = <<<FIM
        Testes
        teste
        t
        $nome

    FIM;

//exemplo de nowdoc - não aceita interpolação
$conteudoEmail2 = <<<'FIM'
        Testes
        teste
        t
        $nome
    FIM;
    echo $conteudoEmail;
    echo $conteudoEmail2;
}

geraEmail('Giusephe Oliveira');
