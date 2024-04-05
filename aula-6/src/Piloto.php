<?php

namespace Juscejr\Aula6;

class Piloto extends Tripulante
{
    private int $horasDeVoo;
    private TipoAeronave $tipoAeronave;
    private Cidade $baseOperacoes;

    public function __construct(int $horasDeVoo, TipoAeronave $tipoAeronave, Cidade $baseOperacoes)
    {
        $this->horasDeVoo = $horasDeVoo;
        $this->tipoAeronave = $tipoAeronave;
        $this->baseOperacoes = $baseOperacoes;
    }

    public function getHorasDeVoo(): int
    {
        return $this->horasDeVoo;
    }

    public function getTipoAeronave(): TipoAeronave
    {
        return $this->tipoAeronave;
    }

    public function getBaseOperacoes(): Cidade
    {
        return $this->baseOperacoes;
    }

    public function setHorasDeVoo(int $horasDeVoo): void
    {
        $this->horasDeVoo = $horasDeVoo;
    }

    public function setTipoAeronave(TipoAeronave $tipoAeronave): void
    {
        $this->tipoAeronave = $tipoAeronave;
    }

    public function setBaseOperacoes(Cidade $baseOperacoes): void
    {
        $this->baseOperacoes = $baseOperacoes;
    }
}
