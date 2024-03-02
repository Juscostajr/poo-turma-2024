<?php

class Cidade
{
    private string $nome;
    private string $estado;


    public function __construct(string $nome, string $estado) {
        $this->nome = $nome;
        $this->estado = $estado;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }
}