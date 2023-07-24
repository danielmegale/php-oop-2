<?php

class Acquari extends Shop
{
    public $materiale;
    public $dimensioni;


    public function __construct($nome, $tipo, $prezzo, $img, $materiale, $dimensioni)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->img = $img;
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }
}
