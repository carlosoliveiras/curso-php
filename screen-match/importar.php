<?php

$camimhoArquivo = __DIR__ . '/filme.json';

$conteudoArquivoFilme = file_get_contents($camimhoArquivo);

$filme = json_decode($conteudoArquivoFilme, true);

var_dump($filme);