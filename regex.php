<?php

$telefones = ['(21) 98888 - 98888', '(11) 99999 - 8888'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/', 
        $telefone,
        $correspondencias
        );

        var_dump($correspondencias);
    if($telefoneValido){
        echo 'Telefone Válido'.PHP_EOL;
    }else{
        echo 'Telefone Inválido'.PHP_EOL;
    }

    echo preg_replace(
        '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/',
        '(xx) \2',
        $telefone
    ).PHP_EOL;
}