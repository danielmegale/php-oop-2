<?php
require_once __DIR__ . '/index.php';

class Acquari extends Shop
{
    public $materiale;
    public $dimensioni;


    public function __construct($nome, $tipo, $prezzo, $img, $materiale, $dimensioni)
    {
        parent::__construct($nome, $tipo, $prezzo, $img);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }
}
