<?php

namespace Juscejr\Aula6;

class Peca
{
    private string $nome;
    private TipoAeronave $tipoAeronave;

    public function __construct(string $nome, TipoAeronave $tipoAeronave)
    {
        $this->nome = $nome;
        $this->tipoAeronave = $tipoAeronave;
    }
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTipoAeronave(): TipoAeronave
    {
        return $this->tipoAeronave;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setTipoAeronave(TipoAeronave $tipoAeronave): void
    {
        $this->tipoAeronave = $tipoAeronave;
    }

    public function quebrar(): string
    {
        return 'Quebrou';
    }
}
