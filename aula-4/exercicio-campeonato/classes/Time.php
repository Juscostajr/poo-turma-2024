<?php

class Time
{
    private string $nome;
    private int $anoFundacao;
    private int $tamanhoTorcida;


    public function __construct(
        string $nome, 
        int $anoFundacao, 
        int $tamanhoTorcida
    )
    {
        $this->nome = $nome;
        $this->anoFundacao = $anoFundacao;
        $this->tamanhoTorcida = $tamanhoTorcida;   
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function getTamanhoTorcida(): int
    {
        return $this->tamanhoTorcida;
    }
}