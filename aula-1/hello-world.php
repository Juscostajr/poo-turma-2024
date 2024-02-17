<?php

$saudacao = 'Hello ';
$nome = readline('Informe o seu nome: ');
$horaAtual = date_create();
$dataFormatada = date_format($horaAtual,'d/m/Y');

echo "$saudacao $nome, hoje é $dataFormatada";