<?php

require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem vindo ao screen match!" . PHP_EOL;

$filme = new Filme(
    "Thor",
    2021,
    Genero::SuperHeroi,
);

//$filme->nome = "Thor";
//$filme->anoLancamento = 2021;
//$filme->genero = "Ação";

$filme->avaliar(8.5);
$filme->avaliar(10);
$filme->avaliar(9);


var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento;


echo PHP_EOL;