<?php

/**
 * Campeonato
 * - nome
 * - ano
 * - times
 * 
 * Time
 * - nome
 * - anoFundacao
 * - tamanhoDaTorcida
 * 
 * 
 * Adicionar 3 times ao campeonato e listar o nome, ano de fundacao e tamanho da torcida.
 * Extra: valendo carta na manga: Mostrar qual time tem maior torcida.
 */

 class Campeonato
 {
    private string $nome;
    private int $ano;
    private array $times;

    public function __construct(string $nome, int $ano)
    {
        $this->nome = $nome;
        $this->ano = $ano;
        $this->times = [];
    }

    public function addTime(Time $time): void
    {
        array_push($this->times, $time);
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTimes(): array
    {
        return $this->times;
    }
 }