<?php
require_once ("autoload.php");

use br\com\caelum\leilao\dominio\Avaliador;
use br\com\caelum\leilao\dominio\Lance;
use br\com\caelum\leilao\dominio\Leilao;
use br\com\caelum\leilao\dominio\Usuario;

$joao = new Usuario("Joao");
$leilao = new Leilao("Playstation 3 Novo");

$leilao->propoe(new Lance($joao,300.0));

$leiloeiro = new Avaliador();
$leiloeiro->avalia($leilao);

echo $leiloeiro->getMaiorLance()."\n";
echo $leiloeiro->getMenorLance();