<?php
require_once 'classes/Aeroporto.php';
require_once 'classes/Voo.php';
require_once 'classes/Porte.php';
require_once 'classes/Cidade.php';

//instanciamos o aeroporto
$aeroporto = new Aeroporto();
//atribuímos um nome
$aeroporto->setNome('Aeroporto Silvio Name Júnior');
$aeroporto->setCidade(new Cidade('Maringá','PR'));
//assim que utilizamos o enum
$aeroporto->setPorte(Porte::MEDIO);

//instanciamos dois vôos
$voo1 = new Voo();
$voo2 = new Voo();

//adicionamos vôos ao aeroporto.
$aeroporto->addVoo($voo1);
$aeroporto->addVoo($voo2);

//exibimos o nome do aeroporto na tela
echo $aeroporto->getNome() . "\n";

//utilizamos o foreach para percorrer o array
foreach ($aeroporto->getVoos() as $voo) {
    //exibimos o código de cada vôo adicionado ao aeroporto
    echo $voo->getCodigoVoo() . "\n";
}

