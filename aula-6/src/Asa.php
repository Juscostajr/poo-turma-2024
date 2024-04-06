<?php

namespace Juscejr\Aula6;

class Asa extends Peca
{
    private float $tamanhoEmMetros;
    private float $capacidadeDeCombustivel;

    public function __construct(
        float $tamanhoEmMetros,
        float $capacidadeDeCombustivel,
        string $nome,
        TipoAeronave $tipoAeronave
    ) {
        $this->tamanhoEmMetros = $tamanhoEmMetros;
        $this->capacidadeDeCombustivel = $capacidadeDeCombustivel;
        parent::setNome($nome);
        parent::setTipoAeronave($tipoAeronave);
    }

    public function getTamanhoEmMetros(): float
    {
        return $this->tamanhoEmMetros;
    }

    public function getCapacidadeDeCombustivel(): float
    {
        return $this->capacidadeDeCombustivel;
    }

    public function setTamanhoEmMetros(float $tamanhoEmMetros): void
    {
        $this->tamanhoEmMetros = $tamanhoEmMetros;
    }

    public function setCapacidadeDeCombustivel(float $capacidadeDeCombustivel): void
    {
        $this->capacidadeDeCombustivel = $capacidadeDeCombustivel;
    }

    public function quebrar(): string
    {
        return 'Quebrou, já era!!';
    }
}
