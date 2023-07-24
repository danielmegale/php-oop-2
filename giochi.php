<?php

class Giochi extends Shop
{
    public $caratteristiche;
    public $dimensioni;

    public function __construct($nome, $tipo, $prezzo, $img, $caratteristiche, $dimensioni)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->prezzo = $prezzo;
        $this->img = $img;
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }
}
