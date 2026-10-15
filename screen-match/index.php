<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem vindo ao screen match!" . PHP_EOL;

$filme = new Filme();
$filme->nome = "Thor";
$filme->anoLancamento = 2021;
$filme->genero = "Ação";
$filme->avlaiar(8.5);
$filme->avlaiar(10);
$filme->avlaiar(9);


var_dump($filme);

echo $filme->media();