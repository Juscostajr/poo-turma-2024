<?php
require_once 'models/Aeronave.php';
require_once 'models/Tripulante.php';

$aeronave = new Aeronave();
$aeronave->setModelo('Boing 777-800');
$aeronave->setCapacidade(600);
$aeronave->editarStatus('LIVRE');

$tripulante = new Tripulante('João da silva', 'Fraldinha', 'Piloto Treinee');

?>

<html>
    <head>
        <title>Minha página HTML</title>
    </head>
    <body>
        <h2>Aeronave</h2>
        <strong>Modelo: </strong> <?= $aeronave->getModelo() ?> 
        <strong>Capacidade: </strong> <?= $aeronave->getCapacidade() ?>
        <strong>Status: </strong> <?= $aeronave->getStatus() ?>
        <h2>Tripulação</h2>
        <strong>Nome: </strong> <?= $tripulante->getNome() ?> 
        <strong>Cargo: </strong> <?= $tripulante->getCargo() ?>
        <strong>Licença: </strong> <?= $tripulante->getLicenca() ?>
    </body>
</html>