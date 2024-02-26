<?php

require_once 'Voo.php';

class Aeroporto {
    
    public string $nome;
    public string $codigoIATA;
    public string $cep;
    public string $endereço;
    public int $numPistas;
    public int $pistaDisponivel;
    //public list(Voo)

    public function __construct() {
        
    }

    public function adicionarVoo(Voo $voo):void {

    }

    public function removerVoo(Voo $voo):void {

    }

    public function reservarPista():void {

    }

    public function cancelarReservaPista():void {

    }
}