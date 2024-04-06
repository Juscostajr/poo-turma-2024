<?php
namespace Juscejr\Aula6;
require_once 'vendor/autoload.php';

$turbina = new Turbina(
    2000.45,
    'Turbina Rois Roice',
    TipoAeronave::MONOMOTOR
);

echo 'Nome: ' . $turbina->getNome() . "\n";
echo 'Potencia: ' . $turbina->getPotencia() . "\n";
echo 'TipoAeronave' . $turbina->getTipoAeronave()->name . "\n";

$asa = new Asa(
    20,
    2000,
    'Asa genérica',
    TipoAeronave::BIMOTOR
);
echo "A turbina quebrou:\n";
echo $turbina->quebrar() . "\n";

echo "A asa quebrou:\n";
echo $asa->quebrar() . PHP_EOL;