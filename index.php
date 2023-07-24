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
};

$cibo1 = new Cibo('Royal Canin Mini Adult', 'cane', '€ 43,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/255544/monge-adult-medium-pollo-12kg-600x600.jpg?v=1776605327', '545g', 'prosciutto,riso');

$cibo2 = new Cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'cane', '€ 44,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', '600g', 'manzo, cereali');

$cibo3 = new Cibo('Almo Nature Cat Daily Lattina', 'gatto', '€ 34,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', '400g', 'tonno, pollo, prosciutto');

$cibo4 = new Cibo('Mangime per Pesci Guppy in Fiocchi', 'pesci', '€ 2.95', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', '30g', 'pesci e sottoprodotti dei pesci,cereali,lieviti,alghe');

$voliera = new Cuccie('Voliera Wilma in Legno', 'uccelli', '€ 184,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'legno', 'L 83 x P 67 x H 153cm ');

$filtro = new Acquari('Cartucce Filtranti per Filtro EasyCrystal', 'pesci', ' €2,29', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'materiale espanso', 'ND');

$toy1 = new Giochi('Kong Classic', 'cane', '€ 13,49', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'galleggia e rimbalza', '8,5 x 10 cm');

$toy2 = new Giochi('Topini di peluche Trixie', 'gatto', '€ 4,99', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'morbido con codino in corda', '8,5 x 10 cm');
