<?php

namespace Juscejr\Aula6;

class Passageiro extends Pessoa
{
    private string $identificador;
    private Bagagem $bagagem;

    public function __construct(string $identificador, Bagagem $bagagem)
    {
        $this->identificador = $identificador;
        $this->bagagem = $bagagem;
    }

    public function getIdentificador(): string
    {
        return $this->identificador;
    }


    public function getBagagem(): Bagagem
    {
        return $this->bagagem;
    }

    public function setIdentificador(string $identificador): void
    {
        $this->identificador = $identificador;
    }


    public function setBagagem(Bagagem $bagagem): void
    {
        $this->bagagem = $bagagem;
    }
}
