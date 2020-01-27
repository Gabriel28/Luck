<?php

namespace Gabriel\Gerador;

class Jogos
{

    public function tipoDeJogo(string $jogo)
    {
        switch ($jogo) {
            case 0:
                echo "NÚMEROS DA QUINA". PHP_EOL;
                echo Quina::geradorQuina();
                break;
            case 1:
                echo "NÚMEROS DA MEGA" . PHP_EOL;
                echo MegaSena::geradorMega();
                break;
            case 2:
                echo "NÚMEROS DA LOTOFÁCIL" . PHP_EOL;
                echo Lotofacil::geradorLotoFacil();
                break;
            case 3:
                echo "AINDA NÃO HÁ LOTOMANIA" . PHP_EOL;
        }
    }
}