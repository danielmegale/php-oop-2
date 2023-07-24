<?php

require_once __DIR__ . '/index.php';

class Cibo extends Shop
{
    public $peso;
    public $ingredienti;

    public function __construct($nome, $tipo, $prezzo, $img, $peso, $ingredienti)
    {
        parent::__construct($nome, $tipo, $prezzo, $img);
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
}
