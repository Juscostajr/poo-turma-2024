<?php

namespace Juscejr\Aula6;

class Comissario extends Tripulante
{
    private array $idiomas;
    private bool $treinamentoEmergencia;
    private int $anosExperiencia;

    public function __construct(
        bool $treinamentoEmergencia, 
        int $anosExperiencia, 
        float $salario, 
        string $alcunha, 
        string $nome, 
        string $email)
    {
        $this->idiomas = [];
        $this->treinamentoEmergencia = $treinamentoEmergencia;
        $this->anosExperiencia = $anosExperiencia;
        parent::__construct($nome,$email,$salario,$alcunha);

    }

    public function getIdiomas(): array
    {
        return $this->idiomas;
    }

    public function getTreinamentoEmergencia(): bool
    {
        return $this->treinamentoEmergencia;
    }

    public function getAnosExperiencia(): int
    {
        return $this->anosExperiencia;
    }

    public function addIdioma(string $idioma): void
    {
        array_push($this->idiomas, $idioma);
    }

    public function setTreinamentoEmergencia(bool $treinamentoEmergencia): void
    {
        $this->treinamentoEmergencia = $treinamentoEmergencia;
    }

    public function setAnosExperiencia(int $anosExperiencia): void
    {
        $this->anosExperiencia = $anosExperiencia;
    }

    public function trabalhar(): string
    {
        return 'O comissário serve';
    }
}
