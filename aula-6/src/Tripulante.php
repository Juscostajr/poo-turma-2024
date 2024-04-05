<?php

namespace Juscejr\Aula6;

class Tripulante extends Pessoa
{
    private float $salario;
    private string $alcunha;

    public function __construct(string $nome, string $email, float $salario, string $alcunha)
    {
        $this->salario = $salario;
        $this->alcunha = $alcunha;
        
        //Pode ser assim:
        //parent::__construct($nome,$email);
        
        //Ou assim:
        parent::setEmail($email);
        parent::setNome($nome);
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getAlcunha(): string
    {
        return $this->alcunha;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function setAlcunha(string $alcunha): void
    {
        $this->alcunha = $alcunha;
    }
}
