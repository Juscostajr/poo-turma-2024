<?php

class Aeronave 
{
    private string $modelo;
    private int $capacidade;
    private string $status;

    public function __construct() {
    }

    public function setModelo(string $modelo): void 
    {
        $this->modelo = $modelo;
    }

    public function setCapacidade(int $capacidade) : void
    {
        $this->capacidade = $capacidade;   
    }

    public function editarStatus (String $status): void
    {   
        if (
            $status == 'MANUTENÇÃO'
            || $status == 'LIVRE'
            || $status == 'INATIVO' 
            ) {
                $this->status = $status;
            }
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidade() : int 
    {
        return $this->capacidade;   
    }

    public function getStatus() : string 
    {   
        return $this->status ?? 'Inválido';   
    }
}