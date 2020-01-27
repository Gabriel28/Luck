<?php

use Gabriel\Gerador\Jogos;
use Gabriel\Gerador\Lotofacil;
use Gabriel\Gerador\MegaSena;
use Gabriel\Gerador\Quina;

require_once 'vendor/autoload.php';

/* Escolha o tipo de jogo 
0 - Quina
1 - Mega
2 - LOTOFACIL 

*/

echo Jogos::tipoDeJogo(0);


