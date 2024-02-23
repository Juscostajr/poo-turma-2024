<?php
require_once 'classes/Carro.php';

$carro = new Carro();


do {
    $opcao = readline(
        'Informe uma opção' . "\n" .
        '1- Acelerar' . "\n" .
        '2- Frear' . "\n" .
        '3- Desligar'
    );
    if ($opcao == 1) $carro->acelerar();
    if ($opcao == 2) $carro->frear();

    $velocidade = $carro->getVelocidadeAtual();
    echo "A velocidade do carro é $velocidade \n";
} while ($opcao != 3);


//php -S localhost:80