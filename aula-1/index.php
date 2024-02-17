<?php
require_once 'classes/Carro.php';
echo "Hello World\n";

$carro = new Carro();
$carro->nome = 'Opala';
$carro->cor = 'Preto';
$carro->modelo = 'Diplomata';

echo "$carro->nome\n";
echo "$carro->cor\n";
echo "$carro->modelo\n";
echo "Velocidade: $carro->velocidadeAtual\n";
$carro->acelerar();
$carro->acelerar();
$carro->frear();
$carro->frear();
$carro->frear();
echo "Velocidade: $carro->velocidadeAtual\n";


//php -S localhost:80