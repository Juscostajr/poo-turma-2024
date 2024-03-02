<?php

class Voo {
    private string $prefixo;
    //ps: Adicionei este método estático após a aula, vou explicar na próxima.
    private static int $contador = 0;
    private int $numero;

    public function __construct() {
        $this->prefixo = 'IA';
        self::$contador += 1;
        $this->numero = self::$contador;
    }

    public function getCodigoVoo(): string
    {
        return $this->prefixo . $this->numero;
    }
}
