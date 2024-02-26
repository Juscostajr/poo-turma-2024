<?php

require_once 'Voo.php';
require_once 'Usuario.php';

class Passagem {
    public string $codBilhete;
    public float $valor;
    public Voo $voo;
    public Usuario $usuario;

    public function __construct() {
        
    }
}