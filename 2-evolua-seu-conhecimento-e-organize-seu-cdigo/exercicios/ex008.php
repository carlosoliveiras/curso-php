<?php
// Escreva um programa em PHP que abra o arquivo teste.txt,
// acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.

$caminhoArquivo = fopen(__DIR__ . '/teste.txt', 'a');
fwrite($caminhoArquivo, PHP_EOL . 'PHP é incrível!');
fclose($caminhoArquivo);