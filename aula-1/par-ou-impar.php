<?php
/** 
 * Bloco de comentário
*/

//Comentário de uma linha
$numero = readline('Informe um número inteiro: ');
$par = $numero % 2 == 0; 
$parOuImpar = $par ? 'par' : 'ímpar';
echo "O número $numero é\n$parOuImpar";