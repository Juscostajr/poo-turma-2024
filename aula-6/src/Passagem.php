<?php

namespace Juscejr\Aula6;

class Passagem
{
    private Pessoa $passageiro;

    public function __construct(Pessoa $passageiro)
    {
        $this->passageiro = $passageiro;
    }

    public function getPassageiro(): Pessoa
    {
        return $this->passageiro;
    }
}
