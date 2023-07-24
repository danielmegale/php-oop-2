<?php

include_once __DIR__ . '/acquari.php';
include_once __DIR__ . '/cibo.php';
include_once __DIR__ . '/cuccie.php';
include_once __DIR__ . '/giochi.php';
class Shop
{
    public $nome;
    public $tipo;
    public $prezzo;
    public $img;

    public function __construct($nome, $tipo, $prezzo, $img)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->img = $img;
    }
}
