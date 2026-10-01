<?php
// Crie uma função em PHP que converta graus celsius para Fahrenheit.

// F = (c x 1.8) + 32

function converterParaFahrenheit(float $c): float{
    $f = ($c * 1.8) + 32;
    return $f;
}

$grauCelsius = 27;

echo converterParaFahrenheit($grauCelsius) . PHP_EOL;