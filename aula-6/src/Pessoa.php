<?php

namespace Juscejr\Aula6;

class Pessoa
{
    protected string $nome;
    private string $email;

    public function __construct(string $nome, string $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function trabalhar(): string
    {
        return 'A Pessoa trabalha';
    }
}
