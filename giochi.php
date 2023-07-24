<?php
require_once __DIR__ . '/index.php';
class Giochi extends Shop
{
    public $caratteristiche;
    public $dimensioni;

    public function __construct($nome, $tipo, $prezzo, $img, $caratteristiche, $dimensioni)
    {
        parent::__construct($nome, $tipo, $prezzo, $img);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }
}
