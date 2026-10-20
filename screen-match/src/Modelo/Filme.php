<?php

class Filme {

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private string $genero,
    ){
        $this->notas = [];
    }

    public function avaliar(float $nota)
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $media = (array_sum($this->notas)) / count($this->notas);

        return $media;
    }

    public function anoLancamento(): int
    {
        return $this->anoLancamento;
    }
}