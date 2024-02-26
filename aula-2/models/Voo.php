<?php

require_once 'Aeroporto.php';
require_once 'Aeroporto.php';
require_once 'Tripulante.php';
require_once 'Passagem.php';

class Voo {
    public Aeroporto $origem;
    public Aeroporto $destino;
    public $escalas = array(); // duvida com jucelino
    public DateTime $horarioSaida; // duvida com jucelino
    public DateTime $horarioChegada;
    public Aeronave $aeronave;
    public $tripulacao = array();
    public $passageiros = array();
    public string $status;


    public function __construct() {
        
    }

    public function calculaTempoVoo ($horarioSaida, $horarioChegada) {

    }

    public function adicionarEscala (Aeroporto $aeropoto) {

    }

    public function removerEscala (Aeroporto $aeroporto) {

    }

    public function adicionarTripulante (Tripulante $tripulante) {

    }

    public function removerTripulante (Tripulante $tripulante) {
        
    }

    public function adicionarPassageiro (Passagem $passageiro) {

    }

    public function removerPassageiro (Passagem $passageiro) {
        
    }
}