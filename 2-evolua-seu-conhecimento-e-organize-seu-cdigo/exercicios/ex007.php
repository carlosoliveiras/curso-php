<?php
// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.

$caminhoArquivo = fopen(__DIR__ . '/teste.txt', 'r');

$primeiraLinha = fgets($caminhoArquivo);

echo $primeiraLinha;