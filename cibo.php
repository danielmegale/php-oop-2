<?php

require_once __DIR__ . '/index.php';

class Cibo extends Shop
{
    public $peso;
    public $ingredienti;

    public function __construct($nome, $tipo, $prezzo, $img, $peso, $ingredienti)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->img = $img;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
    }
}
