<?php
class Carro
{
    public string $nome;
    public string $modelo;
    public string $cor;
    public float $velocidadeAtual;

    public function __construct() {
        $this->velocidadeAtual = 0;
    }

    public function acelerar(): void
    {
        $this->velocidadeAtual += 10;
    }

    public function frear(): void
    { 
        $this->velocidadeAtual = 
            $this->velocidadeAtual < 10 
                ? 0 
                : $this->velocidadeAtual - 10;
    }
}