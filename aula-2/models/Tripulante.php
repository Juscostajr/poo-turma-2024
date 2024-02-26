<?php

class Tripulante {
    
    private string $nome;
    private string $licenca;
    private string $cargo;

    public function __construct($nome, $licenca, $cargo) {
        $this->nome = $nome;
        $this->licenca = $licenca;
        $this->cargo = $cargo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getLicenca(): string
    {
        return $this->licenca;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }


}