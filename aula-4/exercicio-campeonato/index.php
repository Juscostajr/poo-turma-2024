<?php

require_once 'classes/Campeonato.php';
require_once 'classes/Time.php';

$time1 = new Time('Corinthians',1910,300000);
$time2 = new Time('Palmeiras', 1914, 240000);
$time3 = new Time('XV Piracicaba', 1940, 20000);

$campeonato = new Campeonato('Paulista', 2025);
$campeonato->addTime($time1);
$campeonato->addTime($time2);
$campeonato->addTime($time3);


echo $campeonato->getNome() . ' ano ' . $campeonato->getAno();

foreach ($campeonato->getTimes() as $time) {
    echo 'Nome: ' . $time->getNome() . "\n";
    echo 'Ano Fundação: ' . $time->getAnoFundacao() . "\n";
    echo 'Tamanho Torcida' . $time->getTamanhoTorcida() . "\n";
}
