<?php

class Filme {

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
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
}