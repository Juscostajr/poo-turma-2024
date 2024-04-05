<?php
namespace Juscejr\Aula6;

require_once 'vendor/autoload.php';

$pessoa = new Pessoa('Juscelino','juscelino.costajr@grupointegrado.br');

$passageiro = new Passageiro('gol-1245', new Bagagem());
$passageiro->setNome('Camila');
$passageiro->setEmail('camila@grupointegrado.br');

echo "PESSOA:\n";
echo $pessoa->getNome() . "\n";
echo $pessoa->getEmail(). "\n";

echo "PASSAGEIRO:\n";
echo $passageiro->getNome() . "\n";
echo $passageiro->getEmail() . "\n";
echo $passageiro->getIdentificador() . "\n";


$tripulante = new Tripulante(
    'Hamilton',
    'hamilton@gol.com',
    13000,
    'Comte Hamilton'
);

echo "TRIPULANTE:\n";
echo $tripulante->getNome() . "\n";
echo $tripulante->getEmail() . "\n";
echo $tripulante->getSalario() . "\n";
echo $tripulante->getAlcunha() . "\n";


$passagem = new Passagem($passageiro);

echo "PASSAGEM:\n";
echo $passagem
    ->getPassageiro()
    ->getNome();

    