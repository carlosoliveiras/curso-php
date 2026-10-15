<?php

class Filme {
    public string $nome;
    public int $anoLancamento;
    public string $genero;
    public float $media;
    public array $notas = [];

    function avlaiar(float $nota)
    {
        $this->notas[] = $nota;
    }

    function media(): float
    {
        $media = (array_sum($this->notas)) / count($this->notas);

        return $media;
    }
}